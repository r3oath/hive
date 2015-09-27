<?php

namespace R\Hive\Contracts\Handlers;

use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;

interface GenericObserver extends CreateHandlerContract, DestroyHandlerContract, UpdateHandlerContract
{
    // An observer will receive all create, update and destroy notifications.
    // for a given instance type.
    // ...
}
