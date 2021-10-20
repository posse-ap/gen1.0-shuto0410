@extends('layouts.admin.quiz')

@section('content')
    <form action="{{route('quiz.creation')}}" method="POST">
        @csrf
        <input type="text" name="title">
        <button>送信</button>
    </form>
@endsection