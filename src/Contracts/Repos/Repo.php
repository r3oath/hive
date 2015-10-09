<?php

namespace R\Hive\Contracts\Repos;

use R\Hive\Contracts\Handlers\OnCreate as OnCreateContract;
use R\Hive\Contracts\Handlers\OnDestroy as OnDestroyContract;
use R\Hive\Contracts\Handlers\OnUpdate as OnUpdateContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;

/**
 * Represents a  instance repository.
 */
interface Repo
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
     * @param OnCreateContract $handler    The requesting class that will handle the result.
     * @param array            $attributes The attributes for the new instance.
     *
     * @return void
     */
    public function create(
        OnCreateContract $handler,
        $attributes = []
    );

    /**
     * Update the given instance.
     *
     * @param OnUpdateContract $handler    The requesting class that will handle the result.
     * @param InstanceContract $instance   The instance being updated.
     * @param array            $attributes The attributes to be updated.
     *
     * @return void
     */
    public function update(
        OnUpdateContract $handler,
        InstanceContract $instance,
        $attributes = []
    );

    /**
     * Destroy the given instance.
     *
     * @param OnDestroyContract $handler  The requesting class that will handle the result.
     * @param InstanceContract  $instance The instance to be destroyed.
     *
     * @return void
     */
    public function destroy(
        OnDestroyContract $handler,
        InstanceContract $instance
    );

    /**
     * Whether this repository supports an observatory.
     *
     * @return bool
     */
    public function supportsObservatory();
}
