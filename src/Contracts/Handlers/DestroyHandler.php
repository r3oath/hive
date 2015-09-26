<?php

namespace R3O\Hive\Contracts\Handlers;

use R3O\Hive\Contracts\Handlers\Message as MessageContract;

interface DestroyHandler
{
    public function destroySucceeded();

    public function destroyFailed(MessageContract $message);
}
