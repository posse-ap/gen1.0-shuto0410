<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>quizy1</title>
    <link
        href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="./quizy1.css">
</head>

<body>
    <div class="main">
        <div class="quiz">
            <h1>{{$title->title}}</h1>

            {{-- 問題を生成 --}}
            @foreach ($questions as $question_number=>$question)
                <h2>{{$question->sentence}}</h2>
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
                    <li class="answerlist" >{{$choices[$question_number][$choice_number[$i]]->choice}}</li>
                    @endfor
                    <li class="answerbox">
                        <span>正解は「{{$choices[$question_number][0]->choice}}」です！</span>
                    </li>
                </ul>
            @endforeach
        <script src="./quizy1.js"></script>
    </div>
</body>

</html>