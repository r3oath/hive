<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use R\Hive\Contracts\Instances\InstanceInterface;

class Entry extends Model implements InstanceInterface
{
    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'content'];

    /**
     * Automatically casts the given date attributes to carbon instances.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The unique identifier for this instance.
     *
     * @return mixed
     */
    public function identity()
    {
        return $this->id;
    }
}