<?php
session_start();
$title = "Личный кабинет";
if($_SESSION['auth']== true){
    $content = "tpl/lk.php";
}else{
    die("<script>alert('Вы не авторизированы!')</script>");
}
if($_SESSION['auth']== true && $_GET['auth'] == true){
    $alert = "alert('Успешная авторизация!')";
}
