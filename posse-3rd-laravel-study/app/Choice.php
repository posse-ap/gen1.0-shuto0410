<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function getChoices($question_id){
        return $this->where('question_id',$question_id)->get();
    }
}
