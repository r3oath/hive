<?php

namespace R3O\Hive\Contracts\Handlers;

use R3O\Hive\Contracts\Handlers\Message as MessageContract;
use R3O\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface CreateHandler
{
    public function createSucceeded(GenericInstanceContract $instance);

    public function createFailed(MessageContract $message);
}
