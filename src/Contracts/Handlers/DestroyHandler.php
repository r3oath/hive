<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface DestroyHandler
{
    /**
     * Called when destroying an instance succeeds.
     * @param  GenericInstanceContract $instance A shallow reference to the deleted instance.
     * @return mixed
     */
    public function destroySucceeded(GenericInstanceContract $instance);

    /**
     * Called when destroying an instance fails.
     * @param  GenericMessageContract $message The associated error message/information.
     * @return mixed
     */
    public function destroyFailed(GenericMessageContract $message);
}
