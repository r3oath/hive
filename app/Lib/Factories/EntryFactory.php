<?php

namespace App\Lib\Factories;

use App\Entry;
use App\Lib\Data\EntryValidator;
use R\Hive\Concrete\Data\Message;
use R\Hive\Concrete\Factories\Factory;
use R\Hive\Contracts\Factories\FactoryInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;
use R\Hive\Contracts\Data\MutatorInterface;

class EntryFactory extends Factory
{
    /**
     * A EntryValidator instance.
     *
     * @var EntryValidator
     */
    protected $validator;

    /**
     * Create a new EntryFactory with the given validator.
     *
     * @param EntryValidator $validator The associated validator.
     */
    public function __construct(EntryValidator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Create a new Entry instance.
     *
     * @param OnCreateInterface         $handler     The requesting class.
     * @param MutatorInterface          $mutator     The data mutator.
     * @param ObservatoryInterface|null $observatory An optional observatory.
     *
     * @return mixed
     */
    public function make(
        OnCreateInterface $handler,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    ) {
        // Whether this event is an update.
        $is_update = false;

        // Validate the supplied data.
        if (($message = $this->validate($this->validator, $mutator, $is_update, $observatory)) !== null) {
            return $handler->createFailed($message);
        }

        // Create the new instance here.
        $instance = new Entry;
        $instance->fill($mutator->all());
        $instance->save();

        $this->reportSuccess($instance, false, $observatory);

        return $handler->createSucceeded($instance);
    }

    /**
     * Update the given Entry instance.
     *
     * @param OnUpdateInterface         $handler     The requesting class.
     * @param InstanceInterface         $instance    The Entry instance to be updated.
     * @param MutatorInterface          $mutator     The data mutator.
     * @param ObservatoryInterface|null $observatory An optional observatory.
     *
     * @return mixed
     */
    public function update(
        OnUpdateInterface $handler,
        InstanceInterface $instance,
        MutatorInterface $mutator,
        ObservatoryInterface $observatory = null
    ) {
        // Whether this event is an update.
        $is_update = true;

        // Validate the supplied data.
        if (($message = $this->validate($this->validator, $mutator, $is_update, $observatory)) !== null) {
            return $handler->updateFailed($message);
        }

        // Update the instance here.
        $instance->fill($mutator->all());
        $instance->save();

        $this->reportSuccess($instance, true, $observatory);

        return $handler->updateSucceeded($instance);
    }
}
