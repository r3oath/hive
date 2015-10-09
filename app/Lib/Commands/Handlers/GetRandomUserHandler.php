<?php

namespace App\Lib\Commands\Handlers;

use R\Hive\Contracts\Commands\CommandInterface;
use R\Hive\Contracts\Commands\Handlers\HandlerInterface;

class GetRandomUserHandler implements HandlerInterface
{
    public function execute(CommandInterface $command)
    {
        $entries = $command->entries;

        return $entries[mt_rand(0, count($entries) - 1)];
    }
}
