<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Title;
use App\Question;
use App\Choice;

class QuizController extends Controller
{
    public function index()
    {
        $title_model = new Title;
        $titles = $title_model->getTitles();
        return view("select.quiz.index",compact('titles'));
    }

    public function quiz($id)
    {
        $title_model = new Title;
        $question_data = $title_model->with('questions.choices')->get();
        dd($question_data);
        return view("content.quiz.index", compact('question_data'));
    }
}