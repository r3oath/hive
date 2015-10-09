<?php

namespace R\Hive\Contracts\Instances;

interface InstanceInterface
{
    /**
     * Returns the id for the given instance.
     *
     * @return int The instance id.
     */
    public function identity();
}
