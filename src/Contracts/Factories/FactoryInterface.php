<?php

namespace R\Hive\Contracts\Factories;

use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;

interface FactoryInterface
{
    /**
     * Create a new instance given the attributes.
     *
     * @param OnCreateInterface $handler    The requesting class that will handle the result.
     * @param array             $attributes The attributes of the new instance.
     *
     * @return object The new instance.
     */
    public function make(
        OnCreateInterface $handler,
        $attributes = [],
        ObservatoryInterface $observatory = null
    );

    /**
     * Update the given instance with the supplied attributes.
     *
     * @param OnUpdateInterface $handler    The requesting class that will handle the result.
     * @param InstanceInterface $instance   The instance being updated.
     * @param array             $attributes The new attributes for the instance.
     *
     * @return object The updated instance.
     */
    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        $attributes = [],
        ObservatoryInterface $observatory = null
    );
}
