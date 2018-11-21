<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
	protected $primaryKey = 'incidentCode';

	//an incident belongs to one schoolId
	public function school()
    {
    	return $this->belongsTo(School::class);
    }
}