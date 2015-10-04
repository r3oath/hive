<?php

namespace R\Hive\Concrete\Observers;

use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Handlers\OnCreate as OnCreateContract;
use R\Hive\Contracts\Handlers\OnDestroy as OnDestroyContract;
use R\Hive\Contracts\Handlers\OnUpdate as OnUpdateContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;
use R\Hive\Contracts\Observers\Observatory as ObservatoryContract;
use R\Hive\Contracts\Observers\Observer as ObserverContract;

class Observatory implements ObservatoryContract
{
    protected $observers = [];

    public function getObservers()
    {
        return $this->observers;
    }

    public function notifyOnCreateFailed(MessageContract $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnCreateContract) {
                $observer->createFailed($message);
            }
        }
    }

    public function notifyOnCreateSucceeded(InstanceContract $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnCreateContract) {
                $observer->createSucceeded($instance);
            }
        }
    }

    public function notifyOnDestroyFailed(MessageContract $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnDestroyContract) {
                $observer->destroyFailed($message);
            }
        }
    }

    public function notifyOnDestroySucceeded(InstanceContract $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnDestroyContract) {
                $observer->destroySucceeded($instance);
            }
        }
    }

    public function notifyOnUpdateFailed(MessageContract $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnUpdateContract) {
                $observer->updateFailed($message);
            }
        }
    }

    public function notifyOnUpdateSucceeded(InstanceContract $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnUpdateContract) {
                $observer->updateSucceeded($instance);
            }
        }
    }

    public function registerObserver(ObserverContract $observer)
    {
        $this->observers[$observer->serial()] = $observer;
    }

    public function unregisterObserver(ObserverContract $observer)
    {
        if (array_key_exists($observer->serial(), $this->observers)) {
            unset($this->observers[$observer->serial()]);
            $this->observers = array_values($this->observers);
        }
    }
}
