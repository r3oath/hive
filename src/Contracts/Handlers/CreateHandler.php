<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface CreateHandler
{
    /**
     * Called when creation succeeds.
     * @param  GenericInstanceContract $instance The newly created instance.
     * @return mixed
     */
    public function createSucceeded(GenericInstanceContract $instance);

    /**
     * Called when creation fails.
     * @param  GenericMessageContract $message The associated error message/information.
     * @return mixed
     */
    public function createFailed(GenericMessageContract $message);
}
