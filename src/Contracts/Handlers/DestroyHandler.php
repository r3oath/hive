<?php

namespace R3O\Hive\Contracts\Handlers;

interface DestroyHandler
{
    public function destroySucceeded(GenericInstanceContract $instance);

    public function destroyFailed(MessageContract $message);
}
