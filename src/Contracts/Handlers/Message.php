<?php

namespace R3O\Hive\Contracts\Handlers;

interface Message
{
    public function getMessage();

    public function hasValidator();

    public function getValidator();
}
