<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Instances\InstanceInterface;

interface OnCreateInterface
{
    /**
     * Called when creation succeeds.
     *
     * @param InstanceInterface $instance The newly created instance.
     *
     * @return mixed
     */
    public function createSucceeded(InstanceInterface $instance);

    /**
     * Called when creation fails.
     *
     * @param MessageInterface $message The associated error message/information.
     *
     * @return mixed
     */
    public function createFailed(MessageInterface $message);
}
