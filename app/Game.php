<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //Setting the primary key to be named something other than id
    protected $table = 'games';

    protected $fillable = ['gameDate', 'gameAttendance', 'stadiumId'];
}