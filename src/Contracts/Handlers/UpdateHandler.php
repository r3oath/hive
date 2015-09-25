<?php

namespace R3O\Hive\Contracts\Handlers;

interface UpdateHandler
{
    public function updateSucceeded(GenericInstanceContract $instance);

    public function updateFailed(MessageContract $message);
}
