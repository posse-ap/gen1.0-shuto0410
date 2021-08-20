<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function admin(){
        return view("layouts.admin_top");
    }
}
