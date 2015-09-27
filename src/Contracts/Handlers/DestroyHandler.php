<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;

interface DestroyHandler
{
    /**
     * Called when destroying an instance succeeds.
     * @return mixed
     */
    public function destroySucceeded();

    /**
     * Called when destroying an instance fails.
     * @param  GenericMessageContract $message The associated error message/information.
     * @return mixed
     */
    public function destroyFailed(GenericMessageContract $message);
}
