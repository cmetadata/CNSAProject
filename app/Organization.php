<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $primaryKey = 'organizationId';

    public function schools()
    {
        return $this->hasMany(School::class);
    }

    public function stadiums()
    {
        return $this->hasMany(Stadium::class);
    }


}
