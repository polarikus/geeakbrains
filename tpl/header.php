<?php
if ($_SERVER['REQUEST_URI'] == "/"){
    $main = "#";
} else {
    $main = "http://auction.lc/";
}
if ($_SESSION['auth'] == true){
    $lk = "Личный кабинет";
    $lkUrl = "http://auction.lc/lk";
}else{
    $lk = "Войти";
    $lkUrl = "http://auction.lc/auth";
}
?>
<div class="menue">
    <ul>
        <li><a href="<?=$main?>">Главная</a></li>
        <li><a href="<?=$lkUrl?>"><?=$lk?></a></li>
        <li><a href="">Отзывы</a></li>
        <li><a href="http://auction.lc/catalog">Каталог товаров</a></li>
    </ul>
</div>