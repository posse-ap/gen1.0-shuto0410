@extends('layouts.admin.quiz')
@section('content')
    <h2>{{$quiz->title}}</h2>
    <a href="{{route('quiz.edit',['quiz'=>$quiz->id])}}">編集する</a>
    <ul>
        @foreach ($quiz->questions as $question)
            <li>
                {{$question->sentence}}
                <ul>
                    @foreach ($question->choices as $choice)
                        <li>{{$choice->choice}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection