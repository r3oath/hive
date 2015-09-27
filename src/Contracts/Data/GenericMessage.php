<?php

namespace R\Hive\Contracts\Data;

interface GenericMessage
{
    public function getMessage();

    public function hasValidator();

    public function getValidator();
}
