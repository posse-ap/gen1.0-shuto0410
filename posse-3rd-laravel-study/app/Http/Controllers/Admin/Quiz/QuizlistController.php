<?php

namespace App\Http\Controllers\Admin\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Title;

class QuizlistController extends Controller
{
    function index(){
        $title_list = new Title;
        $title_list = $title_list->all();
        return view('admin.quiz.quiz_title_list',compact('title_list'));
    }
    function quiz(Request $request,$title_id){
        $title_model = new Title;
        $quiz = $title_model->with('questions.choices')->find($title_id);
        return view('admin.quiz.quiz_title_list',compact('quiz'));
    }
}
