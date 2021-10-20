<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function getQuestion($title_id){
        return $this->where('title_id',$title_id)->get();
    }
    public function choices(){
        return $this->hasMany(Choice::class);
    }
    public function question_update($question_id,$sentence)
    {
        $this->where('id',$question_id)->update(['sentence'=>$sentence]);
    }
}
