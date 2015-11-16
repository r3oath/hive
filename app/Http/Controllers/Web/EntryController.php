<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Lib\Repos\EntryRepo;
use App\Lib\Data\EntryRequestMutator;
use Illuminate\Http\Request;
use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnDestroyInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;

class EntryController extends Controller implements OnCreateInterface, OnUpdateInterface, OnDestroyInterface
{
    /**
     * The associated Entry repo.
     *
     * @var EntryRepo
     */
    protected $repo;

    /**
     * Constructs a new controller with reference to a EntryRepo.
     *
     * @param EntryRepo $repo The associated repo.
     */
    public function __construct(EntryRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Called when the repo create request fails.
     *
     * @param MessageInterface $message The associated failure message.
     *
     * @return mixed
     */
    public function createFailed(MessageInterface $message)
    {
        return redirect()->back()->withInput()->withErrors($message->getValidator()->getErrors())->with('status', $message->getMessage());
    }

    /**
     * Called when the repo create method succeeds.
     *
     * @param InstanceInterface $instance The associated instance.
     *
     * @return mixed
     */
    public function createSucceeded(InstanceInterface $instance)
    {
        return redirect('entries/'.$instance->id);
    }

    /**
     * Called when the repo update request fails.
     *
     * @param MessageInterface $message The associated failure message.
     *
     * @return mixed
     */
    public function updateFailed(MessageInterface $message)
    {
        return redirect()->back()
        ->withInput()
        ->withErrors($message->getValidator()->getErrors())
        ->with('status', $message->getMessage());
    }

    /**
     * Called when the repo update method succeeds.
     *
     * @param InstanceInterface $instance The associated instance.
     *
     * @return mixed
     */
    public function updateSucceeded(InstanceInterface $instance)
    {
        return redirect('entries/'.$instance->id);
    }

    /**
     * Called when the repo destroy request fails.
     *
     * @param MessageInterface $message The associated failure message.
     *
     * @return mixed
     */
    public function destroyFailed(MessageInterface $message)
    {
        return redirect()->back()->with('status', $message->getMessage());
    }

    /**
     * Called when the repo destroy method succeeds.
     *
     * @param InstanceInterface $instance The associated instance.
     *
     * @return mixed
     */
    public function destroySucceeded(InstanceInterface $instance)
    {
        return redirect('entries');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = $this->repo->all();
        return view('entries.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entries.create');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return view('entries.show', compact('instance'));
        }

        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->repo->create(
            $this,
            new EntryRequestMutator($request)
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return view('entries.edit', compact('instance'));
        }

        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return $this->repo->update(
                $this,
                $instance,
                new EntryRequestMutator($request)
            );
        }

        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return $this->repo->destroy($this, $instance);
        }

        abort(404);
    }
}
