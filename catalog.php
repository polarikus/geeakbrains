<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>
<body>
<header>
    <ul>
        <li><a href="http://auction.lc/index.php">Главная</a></li>
        <li><a href="http://auction.lc/otziv.php">Отзывы</a></li>
        <li><a href="http://auction.lc/car.php">Корзина</a></li>
    </ul>
</header>
<?php
include_once "connect.php";
$sql_order = "SELECT * FROM `orders`";
$res_order = mysqli_query($connect,$sql_order);
?>

<?php
while($order = mysqli_fetch_assoc($res_order)):?>

<?php
$sql_img = "SELECT * FROM `images` WHERE `id`= '".$order['image_mane']."'";
$res_img = mysqli_query($connect,$sql_img);
$img_arr = mysqli_fetch_assoc($res_img);
?>
<div class="content">
    <a href="http://auction.lc/orders.php?id=<?=$order['id']?>"><h1><?=$order['name']?></h1></a>
    <a href="http://auction.lc/orders.php?id=<?=$order['id']?>"><img src="<?=$img_arr['path'].'/'.$img_arr['name']?>" alt="<?=$img_arr['name']?>"></a>
    <p>Продовец: <?=$order['order']?></p>
    <a href="http://auction.lc/car.php?caruser=<?=$_COOKIE['login']?>&orderid=<?=$order['id']?>">Добавиь в корзину</a>

</div>
<?php endwhile; ?>
</body>
</html>