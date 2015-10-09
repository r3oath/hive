<?php

namespace R\Hive\Concrete\Observers;

use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Handlers\OnCreateInterface;
use R\Hive\Contracts\Handlers\OnDestroyInterface;
use R\Hive\Contracts\Handlers\OnUpdateInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObservatoryInterface;
use R\Hive\Contracts\Observers\ObserverInterface;

class Observatory implements ObservatoryInterface
{
    protected $observers = [];

    public function getObservers()
    {
        return $this->observers;
    }

    public function notifyOnCreateFailed(MessageInterface $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnCreateInterface) {
                $observer->createFailed($message);
            }
        }
    }

    public function notifyOnCreateSucceeded(InstanceInterface $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnCreateInterface) {
                $observer->createSucceeded($instance);
            }
        }
    }

    public function notifyOnDestroyFailed(MessageInterface $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnDestroyInterface) {
                $observer->destroyFailed($message);
            }
        }
    }

    public function notifyOnDestroySucceeded(InstanceInterface $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnDestroyInterface) {
                $observer->destroySucceeded($instance);
            }
        }
    }

    public function notifyOnUpdateFailed(MessageInterface $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnUpdateInterface) {
                $observer->updateFailed($message);
            }
        }
    }

    public function notifyOnUpdateSucceeded(InstanceInterface $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof OnUpdateInterface) {
                $observer->updateSucceeded($instance);
            }
        }
    }

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[$observer->serial()] = $observer;
    }

    public function unregisterObserver(ObserverInterface $observer)
    {
        if (array_key_exists($observer->serial(), $this->observers)) {
            unset($this->observers[$observer->serial()]);
            $this->observers = array_values($this->observers);
        }
    }
}
