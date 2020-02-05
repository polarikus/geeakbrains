<!doctype html>
<html lang="ru">
<head>
    <?php
    include 'connect.php';
    $sql_order = "SELECT * FROM `orders` WHERE `id`='".$_GET['id']."'";
    $res_order = mysqli_query($connect,$sql_order);
    $order = mysqli_fetch_assoc($res_order);
    $sql_img = "SELECT * FROM `images` WHERE `id`= '".$order['image_inside']."'";
    $res_img = mysqli_query($connect,$sql_img);
    $img_arr = mysqli_fetch_assoc($res_img);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$order['name']?></title>
</head>
<body>
<div class="order_inside">
    <h2><?=$order['name']?></h2>
    <img src="<?=$img_arr['path'].'/'.$img_arr['name']?>" alt="<?=$img_arr['name']?>">
    <p><?=$order['about']?></p>
    <p>Ник продовца: <?=$order['order']?></p>
    <a href="http://auction.lc/car.php?caruser=<?=$_COOKIE['login']?>&orderid=<?=$order['id']?>">В корзину</a>
</div>
</body>
</html>