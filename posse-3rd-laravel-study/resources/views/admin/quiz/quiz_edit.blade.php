@extends('layouts.admin.quiz')
@section('content')
    {{ Form::open(['url' => route('quiz.update', ['quiz' => $quiz->id]), 'method' => 'PUT']) }}
    <span>タイトル</span>
    {{ Form::text('', $quiz->title, ['name' => 'title', 'size' => 50]) }}
    {{Form::button('更新', ['name' => 'submit','value' => 'title', 'type' => 'submit', 'class' => 'btn btn-primary', 'onfocus' => 'this.blur();'])}}
    {{ Form::close() }}
    @foreach ($quiz->questions as $question)
    {{ Form::open(['url' => route('quiz.update', ['quiz' => $quiz->id]), 'method' => 'PUT', 'enctype'=>'multipart/form-data']) }}
        {{Form::hidden('question_id',$question->id)}}
        <span>問題</span>
        {{ Form::text('', $question->sentence, ['name' => 'sentence', 'size' => 50]) }}
        <img src="/storage/images/{{$question->img_name}}">
        {!! Form::file('document', ['class' => 'form-control']) !!}
        @foreach ($question->choices as $choice)
            {{ Form::text('', $choice->choice, ['name' => 'choices[]', 'size' => 50]) }}
            {{Form::hidden('choice_ids[]',$choice->id)}}
        @endforeach
        {{Form::button('更新', ['name' => 'submit', 'value' => 'question', 'type' => 'submit', 'class' => 'btn btn-primary', 'onfocus' => 'this.blur();'])}}
    {{{Form::close()}}}
    @endforeach
@endsection
