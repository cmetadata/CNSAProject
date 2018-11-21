<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
	protected $primaryKey = 'teamId';

	//a team has one coach
	public function coach()
    {
    	return $this->belongsTo(Coach::class);
    }

    //a team has many players
	public function players()
    {
    	return $this->hasMany(Player::class);
    }
}