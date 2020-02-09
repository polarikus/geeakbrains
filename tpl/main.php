<?php
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title?></title>
</head>
<body>
URL: <?print_r($_GET);?><br>
Куки: <?print_r($_COOKIE);?>

<header>
    <? include "header.php"?>
</header>
<div class="content">
    <? include $content?>
</div>
<footer>
    <? include "footer.php"?>
</footer>
</body>
</html>