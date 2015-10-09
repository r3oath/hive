<?php

namespace R\Hive\Contracts\Data;

use R\Hive\Contracts\Data\ValidatorInterface;

interface MessageInterface
{
    /**
     * Get the human readable description of this message.
     *
     * @return string The message.
     */
    public function getMessage();

    /**
     * Attach a validator instance to this message.
     *
     * @param ValidatorInterface $validator The validator.
     *
     * @return void
     */
    public function attachValidator(ValidatorInterface $validator);

    /**
     * Whether this message has an associated validator.
     *
     * @return bool True if a validator is available, false otherwise.
     */
    public function hasValidator();

    /**
     * Get the validator associated with this message.
     *
     * @return object The validator.
     */
    public function getValidator();
}
