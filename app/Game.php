<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public function stadium()
    {
    	return $this->belongsTo(Stadium::class);
    }

    public function teams()
    {
    	return $this->hasMany(Team::class);
    }
}