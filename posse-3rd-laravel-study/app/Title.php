<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function getTitle($id){
        $title_data = $this->find($id); 
        return $title_data;
    }
    public function getTitles(){
        $titles_data = $this->get(); 
        return $titles_data;
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
