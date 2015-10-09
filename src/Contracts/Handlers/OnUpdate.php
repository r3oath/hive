<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;

interface OnUpdate
{
    /**
     * Called when an update succeeds.
     *
     * @param InstanceContract $instance The updated instance.
     *
     * @return mixed
     */
    public function updateSucceeded(InstanceContract $instance);

    /**
     * Called when an update fails.
     *
     * @param MessageContract $message The associated error message/information.
     *
     * @return mixed
     */
    public function updateFailed(MessageContract $message);
}
