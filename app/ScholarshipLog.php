<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    //look Matt it's a comment
    protected $table = 'scholarships_log';
    protected $primaryKey = 'logId';

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
