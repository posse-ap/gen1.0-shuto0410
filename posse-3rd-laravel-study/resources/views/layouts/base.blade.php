<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy1</title>
    <link
        href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main">
        <div class="quiz--wrapper">
            <h1>{{$title->title}}</h1>

            {{-- 問題を生成 --}}
            @foreach ($questions as $question_number=>$question)
                <section class="quiz">
                    {{-- 問題文 --}}
                    <h2 class = "quiz--title">{{$question->sentence}}</h2>
                    {{-- 画像 --}}
                    <img src="/image/{{$question->img_name}}">
                    @php
                    // 乱数を生成
                        $choice_number = array();
                        while(count($choice_number)<$choices[$question_number]->count()){
                            $rand = rand(0,2);
                            if (!in_array($rand,$choice_number)){
                                array_push($choice_number,$rand);
                            }
                        }
                    @endphp
                    {{-- 
                        選択肢を生成
                        乱数の数列番目を表示を選択肢の数表示している
                    --}}
                    <ul>
                        @for ($i=0;$i<$choices[$question_number]->count(); $i++)
                        <li class="quiz__choice" id = "{{$question_number."-".$choice_number[$i]}}" onclick="checkAnswer({{$question_number}},{{$choice_number[$i]}})">{{$choices[$question_number][$choice_number[$i]]->choice}}</li>
                        @endfor
                        <li class="quiz__answer" id = "{{$question_number}}-answer-box">
                            <p class = "quiz__answer--result"id = "{{$question_number}}-answer">不正解!</p>
                            <p>正解は「{{$choices[$question_number][0]->choice}}」です！</p>
                            <p>{{$question->commentary}}</p>
                        </li>
                    </ul>
                </section>
            @endforeach
        <script src="{{ asset('js/all.js') }}"></script>
        </div>
    </div>
</body>

</html>