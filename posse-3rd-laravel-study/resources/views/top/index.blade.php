@extends('layouts.top')
<?php 
$quizzes = [["id"=>1,"title" => "東京の人しか解けない難読クイズ"],
            ["id"=>2,"title" => "広島の人しか解けない難読クイズ"],
];
?>
@section('content')
    @foreach ( $quizzes as $quiz)
    <a href="/<?=$quiz["id"]?>"><?=$quiz["title"]?></a>
    @endforeach 
@endsection
