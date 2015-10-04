<?php

namespace R\Hive\Contracts\Instances;

interface Instance
{
    /**
     * Returns the id for the given instance.
     * @return integer The instance id.
     */
    public function identity();
}
