<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'personId';

}