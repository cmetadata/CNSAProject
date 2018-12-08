<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameStat extends Model
{
    //Setting the primary key to be named something other than id

    public function stadium()
    {
    	return $this->belongsTo(Stadium::class);
    }

    public function teams()
    {
    	return $this->hasMany(Team::class);
    }
}