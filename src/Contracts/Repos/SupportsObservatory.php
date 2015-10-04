<?php

namespace R\Hive\Contracts\Repos;

use R\Hive\Contracts\Observers\Observatory as ObservatoryContract;

interface SupportsObservatory
{
    /**
     * Register an observatory class that will dispatch notifications.
     * @param  ObservatoryContract $observatory The observatory.
     * @return void
     */
    public function registerObservatory(ObservatoryContract $observatory);

    /**
     * Unregister an observatory class that no longer wishes to dispatch notifications.
     * @param  ObservatoryContract $observatory The observatory.
     * @return void
     */
    public function unregisterObservatory(ObservatoryContract $observatory);
}
