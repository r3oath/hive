<?php

namespace R\Hive\Contracts\Commands;

use R\Hive\Contracts\Commands\Command as CommandContract;

interface Bus
{
    /**
     * Process the given command and possibly return a result.
     * @param  CommandContract $command The command to process.
     * @return mixed
     */
    public function process(CommandContract $command);

    /**
     * Resolve the command handler for the given command serial.
     * @param  string $serial The command serial.
     * @return Object         The command handler.
     */
    public function resolveHandler($serial);
}
