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
use R\Hive\Contracts\Data\MutatorInterface;

class EntryRepo implements RepoInterface, SupportsObservatoryInterface
{
    /**
     * The associated Entry factory.
     *
     * @var EntryFactory
     */
    protected $factory;

    /**
     * The associated observatory.
     *
     * @var ObservatoryInterface
     */
    protected $observatory;

    /**
     * Create a new repo with an associated EntryFactory.
     *
     * @param EntryFactory $factory Instance factory.
     */
    public function __construct(EntryFactory $factory)
    {
        $this->factory = $factory;
        $this->observatory = null;
    }

    /**
     * Return a collection of all Entry instances.
     *
     * @return array
     */
    public function all()
    {
        return Entry::all();
    }

    /**
     * Create a new Entry instance.
     *
     * @param OnCreateInterface $handler The requesting class.
     * @param MutatorInterface  $mutator The data mutator.
     *
     * @return Entry The new instance.
     */
    public function create(
        OnCreateInterface $handler,
        MutatorInterface $mutator
    ) {
        return $this->factory->make(
            $handler,
            $mutator,
            $this->observatory
        );
    }

    /**
     * Destroy the given instance.
     *
     * @param OnDestroyInterface $handler  The requesting class.
     * @param InstanceInterface  $instance The instance.
     *
     * @return mixed
     */
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

    /**
     * Find and return the instance by the given ID.
     *
     * @param integer $id The instance ID to search by.
     *
     * @return Entry|null The instance or null if not found.
     */
    public function find($id)
    {
        return Entry::find($id);
    }

    /**
     * Register the specified observatory.
     *
     * @param ObservatoryInterface $observatory The observatory.
     *
     * @return void
     */
    public function registerObservatory(ObservatoryInterface $observatory)
    {
        $this->observatory = $observatory;
    }

    /**
     * Whether this repo supports and observatory.
     *
     * @return bool True if observatory supported.
     */
    public function supportsObservatory()
    {
        return true;
    }

    /**
     * Unregister the specified observatory.
     *
     * @param ObservatoryInterface $observatory The observatory
     *
     * @return void
     */
    public function unregisterObservatory(ObservatoryInterface $observatory)
    {
        $this->observatory = null;
    }

    /**
     * Update the given Entry instance.
     *
     * @param OnUpdateInterface $handler  The requesting class.
     * @param InstanceInterface $instance The Entry instance.
     * @param MutatorInterface  $mutator  The data mutator.
     *
     * @return Entry The updated instance.
     */
    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        MutatorInterface $mutator
    ) {
        return $this->factory->update(
            $handler,
            $instance,
            $mutator,
            $this->observatory
        );
    }
}