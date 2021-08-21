@extends('layouts.select')

@section('content')
    @foreach ( $titles as $title)
    <a href="/quiz/{{$title->id}}">{{$title->title}}</a>
    @endforeach 
@endsection
