<?php

namespace R\Hive\Concrete\Exceptions;

use R\Hive\Concrete\Exceptions\DomainException;

class NoSupportedHandlerFoundException extends DomainException
{
    public function __construct($serial)
    {
        $message = sprintf('Command with serial [%s] has no associated handler.', $serial);
        parent::__construct($message);
    }
}
