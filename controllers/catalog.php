<?php
include "models/connect_MSQ.php";
$title = "Каталог";
if($_GET['good']){
    $content = "tpl/about_good.php";
    $id = $_GET['good'];
    $orders = GetGood($connect,$id);
}else{
    $orders = GetAllGoods($connect);
    $content = "tpl/all_goods.php";
}

