<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'positionId';

}