<?php

namespace App\Http\Controllers\Admin\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizCreateController extends Controller
{
    function index() {
        return view('admin.quiz.quiz_create');
    }

    function send(Request $request) {
        dd($request->title);
        return view('admin.quiz.quiz_create');
    }
}
