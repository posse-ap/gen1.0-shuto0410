@extends('layouts.admin')

@section('form')
    <form action="/admin/quiz/creation" method="POST">
        <input type="text" name = 'title'>
        <button>送信</button>
    </form>
@endsection