<?php

namespace App\Lib\Repos;

use App\Entry;
use App\Lib\Factories\EntryFactory;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnDestroyInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;
use R\Hive\Contracts\Repos\RepoInterface;
use R\Hive\Contracts\Repos\SupportsObservatoryInterface;

// This repo makes use of Laravels Eloquent Model handling framework
// to fetch all instances, search for a particular by ID etc.
//
// It also delegates the creation and modification of instances
// to the respective factory.
class EntryRepo implements RepoInterface, SupportsObservatoryInterface
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
        OnCreateInterface $handler,
        $attributes = []
    ) {
        return $this->factory->make(
            $handler,
            $attributes,
            $this->observatory
        );
    }

    public function destroy(
        OnDestroyInterface $handler,
        InstanceInterface $instance
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

    public function registerObservatory(ObservatoryInterface $observatory)
    {
        $this->observatory = $observatory;
    }

    public function supportsObservatory()
    {
        return true;
    }

    public function unregisterObservatory(ObservatoryInterface $observatory)
    {
        $this->observatory = null;
    }

    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
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
