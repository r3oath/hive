<?php

namespace App\Lib\Repos;

use App\Entry;
use App\Lib\Factories\EntryFactory;
use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;
use R\Hive\Contracts\Observers\GenericObservatory as GenericObservatoryContract;
use R\Hive\Contracts\Repos\GenericRepo as GenericRepoContract;
use R\Hive\Contracts\Repos\SupportsObservatory as SupportsObservatoryContract;

// This repo makes use of Laravels Eloquent Model handling framework
// to fetch all instances, search for a particular by ID etc.
//
// It also delegates the creation and modification of instances
// to the respective factory.
class EntryRepo implements GenericRepoContract, SupportsObservatoryContract
{
    protected $factory;
    protected $observatory;

    public function __construct(EntryFactory $factory)
    {
        $this->factory     = $factory;
        $this->observatory = null;
    }

    public function all()
    {
        return Entry::all();
    }

    public function create(
        CreateHandlerContract $handler,
        $attributes = []
    ) {
        return $this->factory->make(
            $handler,
            $attributes,
            $this->observatory
        );
    }

    public function destroy(
        DestroyHandlerContract $handler,
        GenericInstanceContract $instance
    ) {
        $instance->delete();

        if ($this->observatory !== null) {
            $this->observatory->notifyOnDestroySucceeded($instance);
        }

        return $handler->destroySucceeded($instance);
    }

    public function find($id)
    {
        return Entry::find($id);
    }

    public function registerObservatory(GenericObservatoryContract $observatory)
    {
        $this->observatory = $observatory;
    }

    public function supportsObservatory()
    {
        return true;
    }

    public function unregisterObservatory(GenericObservatoryContract $observatory)
    {
        $this->observatory = null;
    }

    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    ) {
        return $this->factory->update(
            $handler,
            $instance,
            $attributes,
            $this->observatory
        );
    }
}
