<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    public function getChoices($question_id){
        return $this->where('question_id',$question_id)->get();
    }
    public function choice_update($choice_ids,$choices)
    {
        foreach($choice_ids as $index => $choice_id){
            $this->where('id',$choice_id)->update(['choice'=>$choices[$index]]);
        }
    }
}
