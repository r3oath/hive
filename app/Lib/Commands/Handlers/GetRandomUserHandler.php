<?php

namespace App\Lib\Commands\Handlers;

use R\Hive\Contracts\Commands\Command as CommandContract;
use R\Hive\Contracts\Commands\Handlers\Handler as HandlerContract;

class GetRandomUserHandler implements HandlerContract
{
    public function execute(CommandContract $command)
    {
        $entries = $command->entries;

        return $entries[mt_rand(0, count($entries) - 1)];
    }
}
