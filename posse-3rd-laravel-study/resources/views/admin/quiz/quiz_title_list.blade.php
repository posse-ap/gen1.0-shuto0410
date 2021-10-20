@extends('layouts.admin.quiz')
@section('content')
    @foreach ($title_list as $title)
        <a href="{{route('quiz.show',['quiz'=>$title->id])}}">{{$title->title}}</a>
    @endforeach
@endsection