<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTime extends Model
{
    function content(){
        return $this->belongsTo('App\Models\Content');
    }
}
