<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lib\Observers\EntryLogObserver;
use App\Lib\Repos\EntryRepo;
use Illuminate\Http\Request;
use R\Hive\Concrete\Observers\BaseObservatory;
use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

class EntriesController extends Controller implements CreateHandlerContract, UpdateHandlerContract, DestroyHandlerContract
{
    protected $repo;

    public function __construct(EntryRepo $repo, BaseObservatory $observatory, EntryLogObserver $observer)
    {
        $this->repo = $repo;

        if ($this->repo->supportsObservatory()) {
            $observatory->registerObserver($observer);
            $this->repo->registerObservatory($observatory);
        }
    }

    public function createFailed(GenericMessageContract $message)
    {
        return $this->formattedMessage($message);
    }

    public function createSucceeded(GenericInstanceContract $instance)
    {
        return $instance;
    }

    public function destroy($id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return $this->repo->destroy($this, $instance);
        }

        abort(404);
    }

    public function destroyFailed(GenericMessageContract $message)
    {
        return $this->formattedMessage($message);
    }

    public function destroySucceeded(GenericInstanceContract $instance)
    {
        return ['message' => 'Successfully deleted entry!'];
    }

    public function index()
    {
        return $this->repo->all();
    }

    public function show($id)
    {
        $entry = $this->repo->find($id);
        if ($entry !== null) {
            return $entry;
        }

        abort(404);
    }

    public function store(Request $request)
    {
        return $this->repo->create($this, $request->only('name', 'content'));
    }

    public function update(Request $request, $id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return $this->repo->update($this, $instance, $request->only('name', 'content'));
        }

        abort(404);
    }

    public function updateFailed(GenericMessageContract $message)
    {
        return $this->formattedMessage($message);
    }

    public function updateSucceeded(GenericInstanceContract $instance)
    {
        return $instance;
    }

    protected function formattedMessage(GenericMessageContract $message)
    {
        if ($message->hasValidator()) {
            $data = [
                'message' => $message->getMessage(),
                'errors'  => $message->getValidator()->getErrors(),
            ];

            return $data;
        }

        return ['message' => $message->getMessage()];
    }
}
