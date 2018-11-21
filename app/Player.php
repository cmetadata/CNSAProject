<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'playerId';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function injuries()
    {
        return $this->hasMany(Injury::class);
    }

    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
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