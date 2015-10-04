<?php

namespace R\Hive\Contracts\Commands;

use R\Hive\Contracts\Commands\Command as CommandContract;

interface Handler
{
    /**
     * Execute the given command and possibly return a result.
     * @param  CommandContract $command The command to execute.
     * @return mixed
     */
    public function execute(CommandContract $command);
}
