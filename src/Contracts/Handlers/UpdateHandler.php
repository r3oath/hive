<?php

namespace R3O\Hive\Contracts\Handlers;

use R3O\Hive\Contracts\Handlers\Message as MessageContract;
use R3O\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface UpdateHandler
{
    public function updateSucceeded(GenericInstanceContract $instance);

    public function updateFailed(MessageContract $message);
}
