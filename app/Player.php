<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'playerId';
    
	public function register(Player $player)
    {
    	
        // Post::create([

        //     'title' => request('title'),

        //     'body' => request('body'),

        //     'user_id' => auth()->id()
        // ]);

    }
}