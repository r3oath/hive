<?php

namespace R\Hive\Contracts\Observers;

use R\Hive\Contracts\Data\Message as MessageContract;
use R\Hive\Contracts\Instances\Instance as InstanceContract;
use R\Hive\Contracts\Observers\Observer as ObserverContract;

interface Observatory
{
    /**
     * Register an observer wishing to receive notifications.
     * @param  ObserverContract $observer The observer.
     * @return void
     */
    public function registerObserver(ObserverContract $observer);

    /**
     * Unregister an observer that no longer wishes to receive notifications.
     * @param  ObserverContract $observer The observer.
     * @return void
     */
    public function unregisterObserver(ObserverContract $observer);

    /**
     * Get the list of all registered observers in this observatory.
     * @return array
     */
    public function getObservers();

    /**
     * Notify all observers that a create succeeded.
     * @param  InstanceContract $instance The new instance.
     * @return void
     */
    public function notifyOnCreateSucceeded(InstanceContract $instance);

    /**
     * Notify all observers that a create failed.
     * @param  MessageContract $message The associated failure message.
     * @return void
     */
    public function notifyOnCreateFailed(MessageContract $message);

    /**
     * Notify all observers that an update succeeded.
     * @param  InstanceContract $instance The updated instance.
     * @return void
     */
    public function notifyOnUpdateSucceeded(InstanceContract $instance);

    /**
     * Notify all observers that an update failed.
     * @param  MessageContract $message The associated failure message.
     * @return void
     */
    public function notifyOnUpdateFailed(MessageContract $message);

    /**
     * Notify all observers that a destroy succeeded.
     * @param  InstanceContract $instance The shallow reference to the delete instance.
     * @return void
     */
    public function notifyOnDestroySucceeded(InstanceContract $instance);

    /**
     * Notify all observers that a destroy failed.
     * @param  MessageContract $message The associated failure message.
     * @return void
     */
    public function notifyOnDestroyFailed(MessageContract $message);
}
