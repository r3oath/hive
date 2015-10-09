<?php

namespace R\Hive\Concrete\Commands\Handlers;

use R\Hive\Contracts\Commands\CommandInterface;
use R\Hive\Contracts\Commands\Handlers\HandlerInterface;

class Handler implements HandlerInterface
{
    public function execute(CommandInterface $command)
    {
        return;
    }
}
