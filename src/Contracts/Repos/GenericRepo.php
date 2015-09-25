<?php

namespace R3O\Hive\Contracts\Repos;

interface GenericRepo
{
    public function all();

    public function find($id);

    public function create(CreateHandlerContract $handler, $attributes = []);

    public function update(UpdateHandlerContract $handler, $id, $attributes = []);

    public function destroy(DestroyHandlerContract $handler, $id);
}
