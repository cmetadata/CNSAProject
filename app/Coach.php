<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
	protected $table = 'team_managers';
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'managerId';

    public function team()
    {
    	return $this->belongsTo(Team::class);
    }
}