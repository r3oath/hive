<?php

namespace App\Lib\Commands;

use R\Hive\Contracts\Commands\Command as CommandContract;

class GetRandomUser implements CommandContract
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
