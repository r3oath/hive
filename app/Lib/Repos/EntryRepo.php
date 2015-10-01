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

// This repo makes use of Laravels Eloquent Model handling framework
// to fetch all instances, search for a particular by ID etc.
//
// It also delegates the creation and modification of instances
// to the respective factory.
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

    // If we wanted to support the notification of other services when instances
    // are created, updated or destroyed, we'd register the observatory here and
    // call it's respective notify methods on the given events.
    public function registerObservatory(GenericObservatoryContract $observatory)
    {
        // not implemented in this case.
        // eg: $this->observatory = $observatory;
    }

    public function unregisterObservatory(GenericObservatoryContract $observatory)
    {
        // not implemented in this case.
        // eg: $this->observatory = null;
    }

    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    ) {
        return $this->factory->update($handler, $instance, $attributes);
    }
}
