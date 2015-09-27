<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;

interface DestroyHandler
{
    public function destroySucceeded();

    public function destroyFailed(GenericMessageContract $message);
}
