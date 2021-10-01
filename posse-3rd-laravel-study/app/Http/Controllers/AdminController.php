<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    return view("admin.quiz_creation");
    }

    public function send(Request $request){
        $title = new Title;
        $title->insert($request);
    return view("admin.quiz_creation");
    }

}
