<?php

namespace R\Hive\Contracts\Instances;

interface GenericInstance
{
    /**
     * Returns the id for the given instance.
     * @return integer The instance id.
     */
    public function identity();
}
