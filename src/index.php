<?php
require_once __DIR__ . '/../vendor/autoload.php';
$str = $_GET['text'];
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(trim(strlen($str)) > 0){
        $text = URLify::slug ($str);
    }
    //header('location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form class="form" method="get" action="<?=$_SERVER['PHP_SELF']?>">
        <label>
        <textarea name="text" autofocus>
        </textarea>
        </label>
        <button class="btn" type="submit">Отправить</button>
    </form>
    <h2 class="text"><?=$text?></h2>
    <h2 class="str"><?=base_convert(microtime(), 10, 32)?></h2>
</div>
<script src="js.js"></script>
</body>
</html>
