<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScholarshipLog extends Model
{
    //look Matt it's a comment
    protected $table = 'scholarships_log';
    protected $primaryKey = 'scholarshipLogId';

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
