<?php

namespace R\Hive\Contracts\Factories;

use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface GenericFactory
{
    public function make(
        CreateHandlerContract $handler,
        $attributes = []
    );

    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    );
}
