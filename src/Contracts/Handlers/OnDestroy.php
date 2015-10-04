<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;

interface OnDestroy
{
    /**
     * Called when destroying an instance succeeds.
     * @param  InstanceContract $instance A shallow reference to the deleted instance.
     * @return mixed
     */
    public function destroySucceeded(InstanceContract $instance);

    /**
     * Called when destroying an instance fails.
     * @param  MessageContract $message The associated error message/information.
     * @return mixed
     */
    public function destroyFailed(MessageContract $message);
}
