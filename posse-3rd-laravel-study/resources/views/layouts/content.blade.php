<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>title</title>
    @yield('style')

</head>

<body>
    <div class="main">
        <div class="quiz--wrapper">
            @yield('title')
            @yield('content')
        </div>
    </div>
    @yield('script')
</body>

</html>