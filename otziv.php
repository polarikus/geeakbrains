<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title><?=$title?></title>
</head>
<header>
    <ul>
        <li><a href="http://auction.lc/">Главная</a></li>
        <li><a href="http://auction.lc/otziv.php">Отзывы</a></li>
    </ul>
</header>
<body>

        <?php

        include 'connect.php';
        $sql = 'SELECT * FROM `otziv`;';
        $res = mysqli_query($connect,$sql);
        $x = rand(5,15);
        $y = rand(5,15);
        $cap = $x + $y;
        ?>

  <?php
   while($otziv = mysqli_fetch_assoc($res)):?>
    <div class="container">
        <h1><?=$otziv['name']?></h1>
        <p><?=$otziv['content']?></p>
        <p><?=$otziv['date']?></p>
    </div>
    <?php endwhile; ?>
    
    <form action="server.php" method="post">
       <p>Имя:</p>
        <input type="text" name='name'>
        <p>Отзыв:</p>
        <textarea name="otziv" cols="30" rows="10"></textarea><br>
        <span>Сколько будет <?=$x?> + <?=$y?></span>
        <input type="text" name="cap"><br><br>
        <input type="number" name="capt" style="display: none" value="<?=$cap?>">
        <input type="submit" value="Отправить отзыв">
    </form>
</body>
</html>