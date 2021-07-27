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
        $data["type"] = "misenntaki";
        return view("layouts.top", $data);
    }
    public function quiz($id)
    {
        $title_model = new Title;
        $title = $title_model->getTitle($id);

        $question_model = new Question;
        $questions = $question_model-> getQuestion($id);

        $choice_model = new Choice;

        $choices = [];
        for($i=0; $i<$questions->count(); $i++){
            array_push($choices,($choice_model->getChoices($questions[$i]->id)));
        }
        return view("layouts.base", compact('title','questions','choices'));
    }
}