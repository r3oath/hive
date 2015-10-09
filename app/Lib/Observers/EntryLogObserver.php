<?php

namespace App\Lib\Observers;

use Log;
use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnDestroyInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObserverInterface;

class EntryLogObserver implements ObserverInterface, OnCreateInterface, OnUpdateInterface, OnDestroyInterface
{
    public function createFailed(MessageInterface $message)
    {
        Log::error('Entry creation failed with message: ' . $message->getMessage());
    }

    public function createSucceeded(InstanceInterface $instance)
    {
        Log::info('Entry creation succeeded.');
    }

    public function destroyFailed(MessageInterface $message)
    {
        Log::error('Entry destroy failed with message: ' . $message->getMessage());
    }

    public function destroySucceeded(InstanceInterface $instance)
    {
        Log::info('Entry destroy succeeded.');
    }

    public function serial()
    {
        return 'entry_log_observer';
    }

    public function updateFailed(MessageInterface $message)
    {
        Log::error('Entry updated failed with message: ' . $message->getMessage());
    }

    public function updateSucceeded(InstanceInterface $instance)
    {
        Log::info('Entry update succeeded.');
    }
}
