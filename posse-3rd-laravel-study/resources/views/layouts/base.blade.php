<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link href="https://storage.googleapis.com/google-code-archive-downloads/v2/code.google.com/html5resetcss/html5reset-1.6.css">
    <link rel="stylesheet" href="./quizy3.css">
</head>
<!-- jsにデータを投げている -->
<script  type="text/javascript">
var page_id = <?php echo $page_id_js ?>;
var question_list = <?php echo $choices_js ?>
</script>

<body>
    <a href="http://localhost:8080<?php echo $url_param; ?>"><?php echo $place; ?>に切り替えるよ</a>
    <div id="main" class="main">
        <script src="./quizy3.js"></script>
    </div>
</body>

</html>