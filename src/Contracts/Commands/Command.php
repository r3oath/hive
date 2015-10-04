<?php

namespace R\Hive\Contracts\Commands;

interface Command
{
    /**
     * A unique serial-string that describes this command type.
     * Eg: "register_new_user".
     * @return string
     */
    public function serial();
}
