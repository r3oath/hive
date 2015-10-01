<?php

namespace App\Lib\Factories;

use App\Entry;
use App\Lib\Data\EntryValidator;
use R\Hive\Concrete\Data\BaseMessage;
use R\Hive\Contracts\Factories\GenericFactory;
use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

class EntryFactory implements GenericFactory
{
    protected $validator;

    public function __construct(EntryValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(
        CreateHandlerContract $handler,
        $attributes = []
    ) {
        $this->validator->validate($attributes);
        if ($this->validator->hasErrors()) {
            $message = new BaseMessage('Failed to validate supplied attributes', $this->validator);
            return $handler->createFailed($message);
        }

        $instance = new Entry;
        $instance->fill($attributes);
        $instance->save();

        return $handler->createSucceeded($instance);
    }

    public function update(
        UpdateHandlerContract $handler,
        GenericInstanceContract $instance,
        $attributes = []
    ) {
        $this->validator->validate($attributes);
        if ($this->validator->hasErrors()) {
            $message = new BaseMessage('Failed to validate supplied attributes', $this->validator);
            return $handler->updateFailed($message);
        }

        $instance->fill($attributes);
        $instance->save();

        return $handler->updateSucceeded($instance);
    }
}
