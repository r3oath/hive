<?php

namespace R\Hive\Contracts\Repos;

use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnDestroyInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;

/**
 * Represents a  instance repository.
 */
interface RepoInterface
{
    /**
     * Returns a collection of all the instances.
     *
     * @return array
     */
    public function all();

    /**
     * Find and return the instance by the given id.
     *
     * @param int $id The instance id.
     *
     * @return mixed Instance object, or null if not found.
     */
    public function find($id);

    /**
     * Create a new instance.
     *
     * @param OnCreateInterface $handler    The requesting class that will handle the result.
     * @param array             $attributes The attributes for the new instance.
     *
     * @return void
     */
    public function create(
        OnCreateInterface $handler,
        $attributes = []
    );

    /**
     * Update the given instance.
     *
     * @param OnUpdateInterface $handler    The requesting class that will handle the result.
     * @param InstanceInterface $instance   The instance being updated.
     * @param array             $attributes The attributes to be updated.
     *
     * @return void
     */
    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        $attributes = []
    );

    /**
     * Destroy the given instance.
     *
     * @param OnDestroyInterface $handler  The requesting class that will handle the result.
     * @param InstanceInterface  $instance The instance to be destroyed.
     *
     * @return void
     */
    public function destroy(
        OnDestroyInterface $handler,
        InstanceInterface $instance
    );

    /**
     * Whether this repository supports an observatory.
     *
     * @return bool
     */
    public function supportsObservatory();
}
