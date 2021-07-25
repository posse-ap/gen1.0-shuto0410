<?php 
$quizzes = [["id"=>0,"title" => "東京の人しか解けない難読クイズ"],
            ["id"=>1,"title" => "広島の人しか解けない難読クイズ"],
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
</head>
<body>
    @foreach ( $quizzes as $quiz)
        <a href="/quizy/<?=$quiz["id"]?>"><?=$quiz["title"]?></a>
    @endforeach 
</body>
</html>