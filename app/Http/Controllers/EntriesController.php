<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lib\Commands\GetRandomUser;
use App\Lib\Observers\EntryLogObserver;
use App\Lib\Repos\EntryRepo;
use Illuminate\Http\Request;
use R\Hive\Concrete\Commands\Bus;
use R\Hive\Concrete\Observers\Observatory;
use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnDestroyInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;

class EntriesController extends Controller implements OnCreateInterface, OnUpdateInterface, OnDestroyInterface
{
    protected $repo;
    protected $bus;

    public function __construct(
        EntryRepo $repo,
        Observatory $observatory,
        EntryLogObserver $observer,
        Bus $bus
    ) {
        $this->repo = $repo;
        $this->bus  = $bus;

        if ($this->repo->supportsObservatory()) {
            $observatory->registerObserver($observer);
            $this->repo->registerObservatory($observatory);
        }
    }

    public function createFailed(MessageInterface $message)
    {
        return $this->formattedMessage($message);
    }

    public function createSucceeded(InstanceInterface $instance)
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

    public function destroyFailed(MessageInterface $message)
    {
        return $this->formattedMessage($message);
    }

    public function destroySucceeded(InstanceInterface $instance)
    {
        return ['message' => 'Successfully deleted entry!'];
    }

    public function index()
    {
        return $this->repo->all();
    }

    public function random(Request $request)
    {
        $command = new GetRandomUser($this->repo->all());
        $result  = $this->bus->execute($command);

        return $result;
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
        return $this->repo->create($this, $request->all());
    }

    public function update(Request $request, $id)
    {
        $instance = $this->repo->find($id);
        if ($instance !== null) {
            return $this->repo->update($this, $instance, $request->all());
        }

        abort(404);
    }

    public function updateFailed(MessageInterface $message)
    {
        return $this->formattedMessage($message);
    }

    public function updateSucceeded(InstanceInterface $instance)
    {
        return $instance;
    }

    protected function formattedMessage(MessageInterface $message)
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
