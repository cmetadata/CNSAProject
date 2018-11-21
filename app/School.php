<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $primaryKey = 'schoolId';

    public function teams()
    {
        return $this->hasMany(Teams::class);
    }
}
