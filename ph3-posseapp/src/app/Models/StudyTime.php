<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyTime extends Model
{
    protected $fillable = ['user_id','content_id','study_time','created_at'];
    function content(){
        return $this->belongsTo('App\Models\Content');
    }
}
