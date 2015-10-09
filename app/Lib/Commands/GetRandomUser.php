<?php

namespace App\Lib\Commands;

use R\Hive\Contracts\Commands\CommandInterface;

class GetRandomUser implements CommandInterface
{
    public $entries;

    public function __construct($entries)
    {
        $this->entries = $entries;
    }

    public function serial()
    {
        return 'get_random_user';
    }
}
