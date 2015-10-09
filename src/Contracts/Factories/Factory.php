<?php

namespace R\Hive\Contracts\Factories;

use R\Hive\Contracts\Handlers\OnCreate as OnCreateContract;
use R\Hive\Contracts\Handlers\OnUpdate as OnUpdateContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;
use R\Hive\Contracts\Observers\Observatory as ObservatoryContract;

interface Factory
{
    /**
     * Create a new instance given the attributes.
     *
     * @param OnCreateContract $handler    The requesting class that will handle the result.
     * @param array            $attributes The attributes of the new instance.
     *
     * @return object The new instance.
     */
    public function make(
        OnCreateContract $handler,
        $attributes = [],
        ObservatoryContract $observatory = null
    );

    /**
     * Update the given instance with the supplied attributes.
     *
     * @param OnUpdateContract $handler    The requesting class that will handle the result.
     * @param InstanceContract $instance   The instance being updated.
     * @param array            $attributes The new attributes for the instance.
     *
     * @return object The updated instance.
     */
    public function update(
        OnUpdateContract $handler,
        InstanceContract $instance,
        $attributes = [],
        ObservatoryContract $observatory = null
    );
}
