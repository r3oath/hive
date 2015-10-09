<?php

namespace R\Hive\Contracts\Repos;

use R\Hive\Contracts\Observers\ObservatoryInterface;

interface SupportsObservatoryInterface
{
    /**
     * Register an observatory class that will dispatch notifications.
     *
     * @param ObservatoryInterface $observatory The observatory.
     *
     * @return void
     */
    public function registerObservatory(ObservatoryInterface $observatory);

    /**
     * Unregister an observatory class that no longer wishes to dispatch notifications.
     *
     * @param ObservatoryInterface $observatory The observatory.
     *
     * @return void
     */
    public function unregisterObservatory(ObservatoryInterface $observatory);
}
