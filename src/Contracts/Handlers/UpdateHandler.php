<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface UpdateHandler
{
    public function updateSucceeded(GenericInstanceContract $instance);

    public function updateFailed(GenericMessageContract $message);
}
