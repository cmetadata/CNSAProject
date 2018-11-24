<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $primaryKey = 'stadiumId';

    // public function team()
    // {
    // 	return $this->belongsTo(Team::class);
    // }

    public function games()
    {
    	return $this->hasMany(Game::class);
    }
}
