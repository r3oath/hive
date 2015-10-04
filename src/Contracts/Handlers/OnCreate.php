<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;

interface OnCreate
{
    /**
     * Called when creation succeeds.
     * @param  InstanceContract $instance The newly created instance.
     * @return mixed
     */
    public function createSucceeded(InstanceContract $instance);

    /**
     * Called when creation fails.
     * @param  MessageContract $message The associated error message/information.
     * @return mixed
     */
    public function createFailed(MessageContract $message);
}
