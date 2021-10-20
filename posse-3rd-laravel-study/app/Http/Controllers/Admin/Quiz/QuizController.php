<?php

namespace App\Http\Controllers\Admin\Quiz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Title;
use App\Question;
use App\Choice;
use Illuminate\Support\Facades\App;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_list = new Title;
        $title_list = $title_list->all();
        return view('admin.quiz.quiz_title_list',compact('title_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quiz.quiz_create.blade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title_id)
    {
        $title_model = new Title;
        $quiz = $title_model->with('questions.choices')->find($title_id);
        return view('admin.quiz.quiz_list',compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($title_id)
    {
        $title_model = new Title;
        $quiz = $title_model->with('questions.choices')->find($title_id);
        return view('admin.quiz.quiz_edit',compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $title_id)
    {
        if ($request->submit == 'title') { 
            $title_model = new Title;
            $title_model->title_update($title_id,$request->title);
        }else{
            $question_model = new Question;
            $question_model->question_update($request->question_id,$request->sentence);
            $choice_model = new Choice;
            $choice_model->choice_update($request->choice_ids,$request->choices);
            $document = $request->file('document')->storeAs('public/images',$title_id."-".$request->question_id.".png");
            // 画像を"storage/app/public"に保存
        }
        return redirect(route('quiz.edit',['quiz'=>$title_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
