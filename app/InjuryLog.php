<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InjuryLog extends Model
{
    //Setting the primary key to be named something other than id
    //injury_logs
    protected $table = 'injury_logs';
    protected $primaryKey = 'injuryLogId';

    public function player()
    {
    	return $this->belongsTo(Player::class);
    }
}