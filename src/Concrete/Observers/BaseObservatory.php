<?php

namespace R\Hive\Concrete\Observers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Handlers\CreateHandler as CreateHandlerContract;
use R\Hive\Contracts\Handlers\DestroyHandler as DestroyHandlerContract;
use R\Hive\Contracts\Handlers\UpdateHandler as UpdateHandlerContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;
use R\Hive\Contracts\Observers\GenericObservatory as GenericObservatoryContract;
use R\Hive\Contracts\Observers\GenericObserver as GenericObserverContract;

class BaseObservatory implements GenericObservatoryContract
{
    protected $observers = [];

    public function getObservers()
    {
        return $this->observers;
    }

    public function notifyOnCreateFailed(GenericMessageContract $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof CreateHandlerContract) {
                $observer->createFailed($message);
            }
        }
    }

    public function notifyOnCreateSucceeded(GenericInstanceContract $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof CreateHandlerContract) {
                $observer->createSucceeded($instance);
            }
        }
    }

    public function notifyOnDestroyFailed(GenericMessageContract $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof DestroyHandlerContract) {
                $observer->destroyFailed($message);
            }
        }
    }

    public function notifyOnDestroySucceeded(GenericInstanceContract $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof DestroyHandlerContract) {
                $observer->destroySucceeded($instance);
            }
        }
    }

    public function notifyOnUpdateFailed(GenericMessageContract $message)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof UpdateHandlerContract) {
                $observer->updateFailed($message);
            }
        }
    }

    public function notifyOnUpdateSucceeded(GenericInstanceContract $instance)
    {
        foreach ($this->observers as $observer) {
            if ($observer instanceof UpdateHandlerContract) {
                $observer->updateSucceeded($instance);
            }
        }
    }

    public function registerObserver(GenericObserverContract $observer)
    {
        $this->observers[$observer->serial()] = $observer;
    }

    public function unregisterObserver(GenericObserverContract $observer)
    {
        if (array_key_exists($observer->serial(), $this->observers)) {
            unset($this->observers[$observer->serial()]);
            $this->observers = array_values($this->observers);
        }
    }
}
