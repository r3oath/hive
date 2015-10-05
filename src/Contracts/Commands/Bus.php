<?php

namespace R\Hive\Contracts\Commands;

use R\Hive\Contracts\Commands\Command as CommandContract;

interface Bus
{
    /**
     * Execute the given command and possibly return a result.
     * @param  CommandContract $command The command to execute.
     * @return mixed
     */
    public function execute(CommandContract $command);

    /**
     * Resolve the command handler for the given command serial.
     * @param  string $serial The command serial.
     * @return Object         The command handler.
     */
    public function resolveHandler($serial);

    /**
     * The namespace in which the command handlers reside.
     * Eg: "App\Lib\Commands\Handlers"
     * @return string
     */
    public function handlersNamespace();
}
