<?php

namespace App\Lib\Observers;

use Log;
use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;
use R\Hive\Contracts\Observers\GenericObserver as GenericObserverContract;

class EntryLogObserver implements GenericObserverContract, CreateHandlerContract, UpdateHandlerContract, DestroyHandlerContract
{
    public function createFailed(GenericMessageContract $message)
    {
        Log::error('Entry creation failed with message: ' . $message->getMessage());
    }

    public function createSucceeded(GenericInstanceContract $instance)
    {
        Log::info('Entry creation succeeded.');
    }

    public function destroyFailed(GenericMessageContract $message)
    {
        Log::error('Entry destroy failed with message: ' . $message->getMessage());
    }

    public function destroySucceeded(GenericInstanceContract $instance)
    {
        Log::info('Entry destroy succeeded.');
    }

    public function serial()
    {
        return 'entry_log_observer';
    }

    public function updateFailed(GenericMessageContract $message)
    {
        Log::error('Entry updated failed with message: ' . $message->getMessage());
    }

    public function updateSucceeded(GenericInstanceContract $instance)
    {
        Log::info('Entry update succeeded.');
    }
}
