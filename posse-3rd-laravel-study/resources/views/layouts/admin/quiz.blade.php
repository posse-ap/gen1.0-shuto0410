<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <ul style="display: flex;">
            <li><a href="{{route('quiz.create')}}">クイズを作成する</a></li>
            <li><a href="{{route('quiz.index')}}">クイズ一覧</a></li>
            {{-- <li> <a href="{{route('quiz.edit')}}">クイズを編集する</a></li> --}}
        </ul>
    </header>
    @yield('content')
</body>
</html>