<?php

namespace R\Hive\Contracts\Factories;

use R\Hive\Contracts\Data\MutatorInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;

interface FactoryInterface
{
    /**
     * Create a new instance.
     *
     * @param OnCreateInterface         $handler     The requesting class.
     * @param MutatorInterface          $mutator     The data mutator for this instance type.
     * @param ObservatoryInterface|null $observatory An optional observatory.
     *
     * @return void
     */
    public function make(
        OnCreateInterface $handler,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    );

    /**
     * Update the given instance.
     *
     * @param OnUpdateInterface         $handler     The requesting class.
     * @param InstanceInterface         $instance    The instance to be updated.
     * @param MutatorInterface          $mutator     The data mutator for this instance type.
     * @param ObservatoryInterface|null $observatory An optional observatory.
     *
     * @return void
     */
    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    );
}
