<?php

namespace R\Hive\Contracts\Commands;

use R\Hive\Contracts\Commands\CommandInterface;

interface BusInterface
{
    /**
     * Execute the given command and possibly return a result.
     *
     * @param CommandInterface $command The command to execute.
     *
     * @return mixed
     */
    public function execute(CommandInterface $command);

    /**
     * Resolve the command handler for the given command serial.
     *
     * @param string $serial The command serial.
     *
     * @return object The command handler.
     */
    public function resolveHandler($serial);

    /**
     * The namespace in which the command handlers reside.
     * Eg: "App\Lib\Commands\Handlers".
     *
     * @return string
     */
    public function handlersNamespace();
}
