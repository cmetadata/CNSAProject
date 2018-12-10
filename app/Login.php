<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'logins';
	//Setting the primary key to be named something other than id
    protected $primaryKey = 'loginId';

}