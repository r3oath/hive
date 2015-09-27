<?php

namespace R\Hive\Contracts\Factories;

use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface GenericFactory
{
    /**
     * Create a new instance given the attributes.
     * @param  CreateHandlerContract $handler    The requesting class that will handle the result.
     * @param  array                 $attributes The attributes of the new instance.
     * @return object                            The new instance.
     */
    public function make(
        CreateHandlerContract $handler,
        $attributes = []
    );

    /**
     * Update the given instance with the supplied attributes.
     * @param  UpdateHandlerContract   $handler    The requesting class that will handle the result.
     * @param  GenericInstanceContract $instance   The instance being updated.
     * @param  array                   $attributes The new attributes for the instance.
     * @return object                              The updated instance.
     */
    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    );
}
