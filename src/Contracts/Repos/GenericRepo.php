<?php

namespace R\Hive\Contracts\Repos;

use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

/**
 * Represents a generic instance repository.
 */
interface GenericRepo
{
    /**
     * Returns a collection of all the instances.
     * @return array
     */
    public function all();

    /**
     * Find and return the instance by the given id.
     * @param  integer $id The instance id.
     * @return mixed       Instance object, or null if not found.
     */
    public function find($id);

    /**
     * Create a new instance.
     * @param  CreateHandlerContract $handler    The requesting class that will handle the result.
     * @param  array                 $attributes The attributes for the new instance.
     * @return void
     */
    public function create(
        CreateHandlerContract $handler,
        $attributes = []
    );

    /**
     * Update the given instance.
     * @param  UpdateHandlerContract   $handler    The requesting class that will handle the result.
     * @param  GenericInstanceContract $instance   The instance being updated.
     * @param  array                   $attributes The attributes to be updated.
     * @return void
     */
    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    );

    /**
     * Destroy the given instance.
     * @param  DestroyHandlerContract  $handler  The requesting class that will handle the result.
     * @param  GenericInstanceContract $instance The instance to be destroyed.
     * @return void
     */
    public function destroy(
        DestroyHandlerContract $handler,
        GenericInstanceContract $instance
    );

    /**
     * Whether this repository supports and observatory.
     * @return boolean
     */
    public function supportsObservatory();
}
