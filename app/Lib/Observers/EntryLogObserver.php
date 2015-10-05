<?php

namespace App\Lib\Observers;

use Log;
use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Handlers\OnCreate as OnCreateContract;
use R\Hive\Contracts\Handlers\OnDestroy as OnDestroyContract;
use R\Hive\Contracts\Handlers\OnUpdate as OnUpdateContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;
use R\Hive\Contracts\Observers\Observer as ObserverContract;

class EntryLogObserver implements ObserverContract, OnCreateContract, OnUpdateContract, OnDestroyContract
{
    public function createFailed(MessageContract $message)
    {
        Log::error('Entry creation failed with message: ' . $message->getMessage());
    }

    public function createSucceeded(InstanceContract $instance)
    {
        Log::info('Entry creation succeeded.');
    }

    public function destroyFailed(MessageContract $message)
    {
        Log::error('Entry destroy failed with message: ' . $message->getMessage());
    }

    public function destroySucceeded(InstanceContract $instance)
    {
        Log::info('Entry destroy succeeded.');
    }

    public function serial()
    {
        return 'entry_log_observer';
    }

    public function updateFailed(MessageContract $message)
    {
        Log::error('Entry updated failed with message: ' . $message->getMessage());
    }

    public function updateSucceeded(InstanceContract $instance)
    {
        Log::info('Entry update succeeded.');
    }
}
