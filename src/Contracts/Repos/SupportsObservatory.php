<?php

namespace R\Hive\Contracts\Repos;

interface SupportsObservatory
{
    /**
     * Register an observatory class that will dispatch notifications.
     * @param  GenericObservatoryContract $observatory The observatory.
     * @return void
     */
    public function registerObservatory(GenericObservatoryContract $observatory);

    /**
     * Unregister an observatory class that no longer wishes to dispatch notifications.
     * @param  GenericObservatoryContract $observatory The observatory.
     * @return void
     */
    public function unregisterObservatory(GenericObservatoryContract $observatory);
}
