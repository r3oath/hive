<?php

namespace R\Hive\Contracts\Commands\Handlers;

use R\Hive\Contracts\Commands\CommandInterface;

interface HandlerInterface
{
    /**
     * Execute the given command and possibly return a result.
     *
     * @param CommandContract $command The command to execute.
     *
     * @return mixed
     */
    public function execute(CommandInterface $command);
}
