
<?php
require 'tpl/main.tpl';
include 'connect.php';
if(!$_COOKIE['login']){
    die('Авторизируйтесь на главной странице');
}
if($_GET[caruser] && $_GET[orderid]):?>
    <?$sql = "INSERT INTO `car` (`byer`, `order_id`) VALUES ('".$_GET['caruser']."', '".$_GET['orderid']."');";?>
    <?$res = mysqli_query($connect,$sql) or die("Ошибка: ".mysqli_error($connect));?>
    <?$sql_order = "SELECT * FROM `orders` WHERE `id`='".$_GET['orderid']."';";?>
    <?$res_ordercar = mysqli_query($connect,$sql_order) or die("Ошибка: ".mysqli_error($connect));?>
    <?$order_arr = mysqli_fetch_assoc($res_ordercar);?>
    <script>alert("Товар <?=$order_arr['name']?> добавлен в корзину")</script>
<?php endif;?>
<h1>Товары в корзине пользователя <?=$_COOKIE['login']?>:</h1>
<?php
$sql_car = "SELECT * FROM `car` WHERE `byer`='".$_COOKIE['login']."';";
$res_car = mysqli_query($connect,$sql_car);

?>

<?php
while($car_arr = mysqli_fetch_assoc($res_car)):?>

    <?php
    $sql_order = "SELECT * FROM `orders` WHERE `id`='".$car_arr['order_id']."'";
    $res_order = mysqli_query($connect,$sql_order);
    $order_arr = mysqli_fetch_assoc($res_order);
    ?>
    <div class="content">
        <p>Товар: <a href="http://auction.lc/orders.php?id=<?=$order_arr['id']?>""><?=$order_arr['name']?></a></p>
        <p>Продавец: <?=$order_arr['order']?></p>
        <hr>


    </div>
<?php endwhile; ?>
<input type="button" value="Оформить заказ">
