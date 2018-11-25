<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncidentLog extends Model
{
	protected $table = 'recruiting_incident_logs';
	protected $primaryKey = 'logId';

	//an incident belongs to one schoolId
	public function school()
    {
    	return $this->belongsTo(School::class);
    }
}