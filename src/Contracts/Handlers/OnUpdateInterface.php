<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Instances\InstanceInterface;

interface OnUpdateInterface
{
    /**
     * Called when an update succeeds.
     *
     * @param InstanceInterface $instance The updated instance.
     *
     * @return mixed
     */
    public function updateSucceeded(InstanceInterface $instance);

    /**
     * Called when an update fails.
     *
     * @param MessageInterface $message The associated error message/information.
     *
     * @return mixed
     */
    public function updateFailed(MessageInterface $message);
}
