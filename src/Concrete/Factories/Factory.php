<?php

namespace R\Hive\Concrete\Factories;

use R\Hive\Concrete\Data\Message;
use R\Hive\Contracts\Data\MutatorInterface;
use R\Hive\Contracts\Data\ValidatorInterface;
use R\Hive\Contracts\Factories\FactoryInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;

abstract class Factory implements FactoryInterface
{
    /**
     * Report success to the observatory and call the handler event.
     *
     * @param InstanceInterface         $instance    The instance.
     * @param bool                      $is_update   If this event was part of an update.
     * @param ObservatoryInterface|null $observatory Optional observatory.
     *
     * @return mixed
     */
    protected function reportSuccess(
        InstanceInterface $instance,
        $is_update,
        ObservatoryInterface $observatory = null
    ) {
        // Notify the observatory if one exists.
        if ($observatory !== null) {
            if ($is_update) {
                $observatory->notifyOnUpdateSucceeded($instance);
            } else {
                $observatory->notifyOnCreateSucceeded($instance);
            }
        }
    }

    /**
     * Validate the given data.
     *
     * @param ValidatorInterface        $validator   The associated validator.
     * @param MutatorInterface          $mutator     The data mutator.
     * @param bool                      $is_update   Whether this data is for an update event.
     * @param ObservatoryInterface|null $observatory An optional observatory.
     *
     * @return Message|null A failure message or null.
     */
    protected function validate(
        ValidatorInterface $validator,
        MutatorInterface $mutator,
        $is_update,
        ObservatoryInterface $observatory = null
    ) {
        // First, validate the supplied data for either and update
        // or create event.
        if ($is_update) {
            $validator->markAsUpdate()->validate($mutator);
        } else {
            $validator->validate($mutator);
        }

        // If there are validation errors, create the associated
        // failure message, notify the observatory if one exsits
        // and return the message.
        if ($validator->hasErrors()) {
            $message = new Message('Failed to validate supplied data.', $validator);

            if ($observatory !== null) {
                if ($is_update) {
                    $observatory->notifyOnUpdateFailed($message);
                } else {
                    $observatory->notifyOnCreateFailed($message);
                }
            }

            return $message;
        }

        // If everything went well, return null.
        return;
    }

    abstract public function make(
        OnCreateInterface $handler,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    );

    abstract public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    );
}
