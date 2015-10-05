<?php

namespace R\Hive\Concrete\Commands\Handlers;

use R\Hive\Contracts\Commands\Command as CommandContract;
use R\Hive\Contracts\Commands\Handlers\Handler as HandlerContract;

class Handler implements HandlerContract
{
    public function execute(CommandContract $command)
    {
        return null;
    }
}
