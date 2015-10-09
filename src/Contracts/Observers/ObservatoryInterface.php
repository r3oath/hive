<?php

namespace R\Hive\Contracts\Observers;

use R\Hive\Contracts\Data\MessageInterface;
use R\Hive\Contracts\Instances\InstanceInterface;
use R\Hive\Contracts\Observers\ObserverInterface;

interface ObservatoryInterface
{
    /**
     * Register an observer wishing to receive notifications.
     *
     * @param ObserverInterface $observer The observer.
     *
     * @return void
     */
    public function registerObserver(ObserverInterface $observer);

    /**
     * Unregister an observer that no longer wishes to receive notifications.
     *
     * @param ObserverInterface $observer The observer.
     *
     * @return void
     */
    public function unregisterObserver(ObserverInterface $observer);

    /**
     * Get the list of all registered observers in this observatory.
     *
     * @return array
     */
    public function getObservers();

    /**
     * Notify all observers that a create succeeded.
     *
     * @param InstanceInterface $instance The new instance.
     *
     * @return void
     */
    public function notifyOnCreateSucceeded(InstanceInterface $instance);

    /**
     * Notify all observers that a create failed.
     *
     * @param MessageInterface $message The associated failure message.
     *
     * @return void
     */
    public function notifyOnCreateFailed(MessageInterface $message);

    /**
     * Notify all observers that an update succeeded.
     *
     * @param InstanceInterface $instance The updated instance.
     *
     * @return void
     */
    public function notifyOnUpdateSucceeded(InstanceInterface $instance);

    /**
     * Notify all observers that an update failed.
     *
     * @param MessageInterface $message The associated failure message.
     *
     * @return void
     */
    public function notifyOnUpdateFailed(MessageInterface $message);

    /**
     * Notify all observers that a destroy succeeded.
     *
     * @param InstanceInterface $instance The shallow reference to the delete instance.
     *
     * @return void
     */
    public function notifyOnDestroySucceeded(InstanceInterface $instance);

    /**
     * Notify all observers that a destroy failed.
     *
     * @param MessageInterface $message The associated failure message.
     *
     * @return void
     */
    public function notifyOnDestroyFailed(MessageInterface $message);
}
