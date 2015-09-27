<?php

namespace R\Hive\Contracts\Repos;

use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface GenericRepo
{
    public function all();

    public function find($id);

    public function create(
        CreateHandlerContract $handler,
        $attributes = []
    );

    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    );

    public function destroy(
        DestroyHandlerContract $handler,
        GenericInstanceContract $instance
    );
}
