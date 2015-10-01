<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use R\Hive\Contracts\Instances\GenericInstance as GenericInstanceContract;

class Entry extends Model implements GenericInstanceContract
{
    protected $fillable = ['name', 'content'];

    public function identity()
    {
        return $this->id;
    }
}
