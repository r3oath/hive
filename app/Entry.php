<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use R\Hive\Contracts\Instances\InstanceInterface;

class Entry extends Model implements InstanceInterface
{
    protected $fillable = ['name', 'content'];

    public function identity()
    {
        return $this->id;
    }
}
