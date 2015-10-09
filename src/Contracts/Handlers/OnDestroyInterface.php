<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Instances\InstanceInterface;

interface OnDestroyInterface
{
    /**
     * Called when destroying an instance succeeds.
     *
     * @param InstanceInterface $instance A shallow reference to the deleted instance.
     *
     * @return mixed
     */
    public function destroySucceeded(InstanceInterface $instance);

    /**
     * Called when destroying an instance fails.
     *
     * @param MessageInterface $message The associated error message/information.
     *
     * @return mixed
     */
    public function destroyFailed(MessageInterface $message);
}
