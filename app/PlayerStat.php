<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerStat extends Model
{
    //Setting the primary key to be named something other than id
    protected $table = 'player_stats';
    protected $primaryKey = 'playerStatId';

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
    
	public function register(Player $player)
    {
    	
        // Post::create([

        //     'title' => request('title'),

        //     'body' => request('body'),

        //     'user_id' => auth()->id()
        // ]);

    }
}