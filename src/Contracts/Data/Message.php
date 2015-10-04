<?php

namespace R\Hive\Contracts\Data;

use R\Hive\Contracts\Data\Validator as ValidatorContract;

interface Message
{
    /**
     * Get the human readable description of this message.
     * @return string The message.
     */
    public function getMessage();

    /**
     * Attach a validator instance to this message.
     * @param  ValidatorContract $validator The validator.
     * @return void
     */
    public function attachValidator(ValidatorContract $validator);

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
