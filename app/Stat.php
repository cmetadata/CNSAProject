<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'statId';

    public function game()
    {
    	return $this->belongsTo(Game::class);
    }

}