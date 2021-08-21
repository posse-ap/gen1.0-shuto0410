<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getCategories(){
        $categories_data = $this->get();
        return $categories_data;
    }
}
