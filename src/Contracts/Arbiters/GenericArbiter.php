<?php

namespace R3O\Hive\Contracts\Factories;

use R3O\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface GenericArbiter
{
    public function create($attributes = []);

    public function update(GenericInstanceContract $instance, $attributes = []);
}
