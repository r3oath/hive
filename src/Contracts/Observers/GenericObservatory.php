<?php

namespace R\Hive\Contracts\Observers;

use R\Hive\Contracts\Data\GenericMessage as GenericMessageContract;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;
use R\Hive\Contracts\Observers\GenericObserver as GenericObserverContract;

interface GenericObservatory
{
    /**
     * Register an observer wishing to receive notifications.
     * @param  GenericObserverContract $observer The observer.
     * @return void
     */
    public function registerObserver(GenericObserverContract $observer);

    /**
     * Unregister an observer that no longer wishes to receive notifications.
     * @param  GenericObserverContract $observer The observer.
     * @return void
     */
    public function unregisterObserver(GenericObserverContract $observer);

    /**
     * Get the list of all registered observers in this observatory.
     * @return array
     */
    public function getObservers();

    /**
     * Notify all observers that a create succeeded.
     * @param  GenericInstanceContract $instance The new instance.
     * @return void
     */
    public function notifyOnCreateSucceeded(GenericInstanceContract $instance);

    /**
     * Notify all observers that a create failed.
     * @param  GenericMessageContract $message The associated failure message.
     * @return void
     */
    public function notifyOnCreateFailed(GenericMessageContract $message);

    /**
     * Notify all observers that an update succeeded.
     * @param  GenericInstanceContract $instance The updated instance.
     * @return void
     */
    public function notifyOnUpdateSucceeded(GenericInstanceContract $instance);

    /**
     * Notify all observers that an update failed.
     * @param  GenericMessageContract $message The associated failure message.
     * @return void
     */
    public function notifyOnUpdateFailed(GenericMessageContract $message);

    /**
     * Notify all observers that a destroy succeeded.
     * @param  GenericInstanceContract $instance The shallow reference to the delete instance.
     * @return void
     */
    public function notifyOnDestroySucceeded(GenericInstanceContract $instance);

    /**
     * Notify all observers that a destroy failed.
     * @param  GenericMessageContract $message The associated failure message.
     * @return void
     */
    public function notifyOnDestroyFailed(GenericMessageContract $message);
}
