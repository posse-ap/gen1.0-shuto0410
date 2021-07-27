<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function getTitle($id){
        $title_data = $this->find($id); 
        return $title_data;
    }
}
