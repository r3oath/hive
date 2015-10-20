<?php

namespace App\Lib\Data;

use R\Hive\Concrete\Data\Validator;

class EntryValidator extends Validator
{
    /**
     * Get the rules used during the creation of a new Entry instance.
     *
     * @return array Validation rules.
     */
    public function getCreateRules()
    {
        return $this->generateRules();
    }

    /**
     * Get the rules used during an update of a Entry instance.
     *
     * @return array Validation rules.
     */
    public function getUpdateRules()
    {
        return $this->generateRules(true);
    }

    /**
     * Generate the create or update rules dynamically.
     *
     * @param boolean $is_update True if update rules should be generated.
     *
     * @return array Validation rules.
     */
    protected function generateRules($is_update = false)
    {
        return [
            'name' => ($is_update ? 'sometimes|' : '') . 'required|string|min:2|max:32',
            'content' => ($is_update ? 'sometimes|' : '') . 'required|string|min:2|max:140',
        ];
    }
}
