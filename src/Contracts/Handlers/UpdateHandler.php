<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

interface UpdateHandler
{
    /**
     * Called when an update succeeds.
     * @param  GenericInstanceContract $instance The updated instance.
     * @return mixed
     */
    public function updateSucceeded(GenericInstanceContract $instance);

    /**
     * Called when an update fails.
     * @param  GenericMessageContract $message The associated error message/information.
     * @return mixed
     */
    public function updateFailed(GenericMessageContract $message);
}
