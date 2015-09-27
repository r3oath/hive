<?php

namespace R\Hive\Concrete\Data;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;

class Message implements GenericMessageContract
{
    protected $message;
    protected $validator;

    public function __construct($message, $validator = null)
    {
        $this->message   = $message;
        $this->validator = $validator;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getValidator()
    {
        return $this->validator;
    }

    public function hasValidator()
    {
        return $this->validator !== null;
    }
}
