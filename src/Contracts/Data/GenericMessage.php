<?php

namespace R\Hive\Contracts\Data;

interface GenericMessage
{
    /**
     * Get the human readable description of this message.
     * @return string The message.
     */
    public function getMessage();

    /**
     * Whether this message has an associated validator.
     * @return boolean True if a validator is available, false otherwise.
     */
    public function hasValidator();

    /**
     * Get the validator associated with this message.
     * @return object The validator.
     */
    public function getValidator();
}
