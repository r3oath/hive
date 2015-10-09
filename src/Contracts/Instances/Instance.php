<?php

namespace R\Hive\Contracts\Instances;

interface Instance
{
    /**
     * Returns the id for the given instance.
     *
     * @return int The instance id.
     */
    public function identity();
}
