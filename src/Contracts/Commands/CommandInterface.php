<?php

namespace R\Hive\Contracts\Commands;

interface CommandInterface
{
    /**
     * A unique string-serial that describes this command.
     * Eg: "create_new_user".
     *
     * @return string
     */
    public function serial();
}
