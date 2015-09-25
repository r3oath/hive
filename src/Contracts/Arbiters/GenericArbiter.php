<?php

namespace R3O\Hive\Contracts\Factories;

interface GenericArbiter
{
    public function create($attributes = []);

    public function update($attributes = []);
}
