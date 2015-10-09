<?php

namespace App\Lib\Factories;

use App\Entry;
use App\Lib\Data\EntryValidator;
use R\Hive\Concrete\Data\Message;
use R\Hive\Contracts\Factories\FactoryInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;

class EntryFactory implements FactoryInterface
{
    protected $validator;

    public function __construct(EntryValidator $validator)
    {
        $this->validator = $validator;
    }

    // Here you create your instances in what ever fashion suit your needs.
    // I've used Laravels built in Model methods to do so.
    public function make(
        OnCreateInterface $handler,
        $attributes = [],
        ObservatoryInterface $observatory = null
    ) {
        // If the supplied attributes are invalid, we can let the requesting
        // class know something went wrong with making this instance and pass
        // along a message and a reference to the validator.
        $this->validator->validate($attributes);

        if ($this->validator->hasErrors()) {
            $message = new Message('Failed to validate supplied attributes', $this->validator);

            if ($observatory !== null) {
                $observatory->notifyOnCreateFailed($message);
            }

            return $handler->createFailed($message);
        }

        $instance = new Entry;
        $instance->fill($attributes);
        $instance->save();

        if ($observatory !== null) {
            $observatory->notifyOnCreateSucceeded($instance);
        }

        // The instance was successfully created, let the requesting class know!
        return $handler->createSucceeded($instance);
    }

    // Almost exactly the same as the make method, except here we just update
    // the attributes on the instance.
    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        $attributes = [],
        ObservatoryInterface $observatory = null
    ) {
        $this->validator->markAsUpdate()->validate($attributes);

        if ($this->validator->hasErrors()) {
            $message = new Message('Failed to validate supplied attributes', $this->validator);

            if ($observatory !== null) {
                $observatory->notifyOnUpdateFailed($message);
            }

            return $handler->updateFailed($message);
        }

        $instance->fill($attributes);
        $instance->save();

        if ($observatory !== null) {
            $observatory->notifyOnUpdateSucceeded($instance);
        }

        return $handler->updateSucceeded($instance);
    }
}
