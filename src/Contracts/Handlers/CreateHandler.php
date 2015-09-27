<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface CreateHandler
{
    public function createSucceeded(GenericInstanceContract $instance);

    public function createFailed(GenericMessageContract $message);
}
