<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $data["type"] = "naiyo";
        return view("layouts.base", $data);
    }
    public function quiz($type)
    {
        $data["type"] = $type;
        return view("layouts.base", $data);
    }
}
