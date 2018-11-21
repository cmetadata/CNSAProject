<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
	//look Matt it's a comment
    protected $primaryKey = 'scholarshipId';

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
