<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use R\Hive\Contracts\Instances\Instance as InstanceContract;

class Entry extends Model implements InstanceContract
{
    protected $fillable = ['name', 'content'];

    public function identity()
    {
        return $this->id;
    }
}
