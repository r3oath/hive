<?php

namespace R\Hive\Contracts\Data;

interface ValidatorInterface
{
    /**
     * Validate the given attributes for the instance type associated.
     *
     * @param array $attributes The attributes to validate.
     *
     * @return void
     */
    public function validate($attributes = []);

    /**
     * Whether this validator has any errors available.
     *
     * @return bool True if errors available, false otherwise.
     */
    public function hasErrors();

    /**
     * Get the errors associated with this validator.
     *
     * @return array The errors.
     */
    public function getErrors();

    /**
     * Get the validation create rules, called when attributes are
     * being validated for instance creation.
     *
     * @return array
     */
    public function getCreateRules();

    /**
     * Get the validation update rules, called when attributes are
     * being validated for instance modification.
     *
     * @return array
     */
    public function getUpdateRules();

    /**
     * Marks this validation request as an update.
     *
     * @return mixed
     */
    public function markAsUpdate();
}
