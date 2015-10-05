<?php

namespace App\Lib\Repos;

use App\Entry;
use App\Lib\Factories\EntryFactory;
use R\Hive\Contracts\Handlers\OnCreate as OnCreateContract;
use R\Hive\Contracts\Handlers\OnDestroy as OnDestroyContract;
use R\Hive\Contracts\Handlers\OnUpdate as OnUpdateContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;
use R\Hive\Contracts\Observers\Observatory as ObservatoryContract;
use R\Hive\Contracts\Repos\Repo as RepoContract;
use R\Hive\Contracts\Repos\SupportsObservatory as SupportsObservatoryContract;

// This repo makes use of Laravels Eloquent Model handling framework
// to fetch all instances, search for a particular by ID etc.
//
// It also delegates the creation and modification of instances
// to the respective factory.
class EntryRepo implements RepoContract, SupportsObservatoryContract
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
        OnCreateContract $handler,
        $attributes = []
    ) {
        return $this->factory->make(
            $handler,
            $attributes,
            $this->observatory
        );
    }

    public function destroy(
        OnDestroyContract $handler,
        InstanceContract $instance
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

    public function registerObservatory(ObservatoryContract $observatory)
    {
        $this->observatory = $observatory;
    }

    public function supportsObservatory()
    {
        return true;
    }

    public function unregisterObservatory(ObservatoryContract $observatory)
    {
        $this->observatory = null;
    }

    public function update(
        OnUpdateContract $handler,
        InstanceContract $instance,
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
