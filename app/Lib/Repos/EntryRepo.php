<?php

namespace App\Lib\Repos;

use App\Entry;
use App\Lib\Factories\EntryFactory;
use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\GenericObservatory as GenericObservatoryContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;
use R\Hive\Contracts\Repos\GenericRepo as GenericRepoContract;

class EntryRepo implements GenericRepoContract
{
    protected $factory;

    public function __construct(EntryFactory $factory)
    {
        $this->factory = $factory;
    }

    public function all()
    {
        return Entry::all();
    }

    public function create(
        CreateHandlerContract $handler,
        $attributes = []
    ) {
        return $this->factory->make($handler, $attributes);
    }

    public function destroy(
        DestroyHandlerContract $handler,
        GenericInstanceContract $instance
    ) {
        $instance->delete();

        return $handler->destroySucceeded($instance);
    }

    public function find($id)
    {
        return Entry::find($id);
    }

    public function registerObservatory(GenericObservatoryContract $observatory)
    {
        // not implemented in this case.
    }

    public function unregisterObservatory(GenericObservatoryContract $observatory)
    {
        // not implemented in this case.
    }

    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    ) {
        return $this->factory->update($handler, $instance, $attributes);
    }
}
