<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $primaryKey = 'schoolId';

    public function teams()
    {
        // Teams had an s here -- mistake ?
        return $this->hasMany(Team::class);
    }
}
