<?php

namespace R\Hive\Contracts\Data;

interface Validator
{
    /**
     * Validate the given attributes for the instance type associated.
     * @param  array  $attributes The attributes to validate.
     * @return void
     */
    public function validate($attributes = []);

    /**
     * Whether this validator has any errors available.
     * @return boolean True if errors available, false otherwise.
     */
    public function hasErrors();

    /**
     * Get the errors associated with this validator.
     * @return array The errors.
     */
    public function getErrors();
}
