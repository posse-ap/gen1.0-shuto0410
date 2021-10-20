@extends("layouts.content")

@section('style')
    <link href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title')
    <h1>{{$question_data->title}}</h1>
@endsection

@section('content')
    @foreach ($question_data->questions as $question_number => $question)
        <section class="quiz">
            {{-- 問題文 --}}
            <h2 class = "quiz--title">{{$question->sentence}}</h2>
            {{-- 画像 --}}
            <img src="/storage/images/{{$question->img_name}}">
            @php
            // 乱数を生成
                $choice_number = array();
                $choice_count = $question->choices->count();
                while(count($choice_number)<$choice_count){
                    $rand = rand(0,$choice_count-1);
                    if (!in_array($rand,$choice_number)){
                        array_push($choice_number,$rand);
                    }
                }
            @endphp
            <ul>    
                @for ($i = 0; $i < $choice_count; $i++)
                <li class="quiz__choice" id = "{{$question_number."-".$choice_number[$i]}}" onclick="checkAnswer({{$question_number}},{{$choice_number[$i]}})">{{$question->choices[$choice_number[$i]]->choice}}</li>
                @endfor
                <li class="quiz__answer" id = "{{$question_number}}-answer-box">
                    <p class = "quiz__answer--result"id = "{{$question_number}}-answer">不正解!</p>
                    <p>正解は「{{$question->choices[0]->choice}}」です！</p>
                    <p>{{$question->commentary}}</p>
                </li>
            </ul>
        </section>
    @endforeach
@endsection

@section('script')
<script src="{{ asset('js/all.js') }}"></script>
@endsection