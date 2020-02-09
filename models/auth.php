<?php
session_start();
include "connect_MSQ.php";
$salt = "AB4F63F9AC65152575886860DDE480A1";
$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";
$sql_auch = "SELECT * FROM `users` WHERE `login`='$login' and `pass`='".md5($pass).$salt."';";
$res_auch = mysqli_query($connect,$sql_auch) or die("Ошибка: ".mysqli_error($connect));
if(mysqli_num_rows($res_auch) > 0){
    $_SESSION['auth'] = true;
    header('Location: http://auction.lc/lk&auth=true');
}else{
    die("Ошибка авторизации");
}
?>