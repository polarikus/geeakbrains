<?php
include "connect.php";
require 'tpl/main.tpl';
$login = (!empty($_COOKIE['login']))?strip_tags($_COOKIE['login']):"";
$pass = (!empty($_COOKIE['pass']))?strip_tags($_COOKIE['pass']):"";
$sql_auch = "SELECT * FROM `users` WHERE `login`='$login' and `pass`='$pass';";
$res_auch = mysqli_query($connect,$sql_auch) or die("Ошибка: ".mysqli_error($connect));
if(mysqli_num_rows($res_auch) == 0){
    die("Ошибка аутентификации");
}
?>
<?php
if($_GET['success'] && $_COOKIE[login]):?>
<script>alert('УЗ подтверждена')</script>
<?php endif;?>
<h1>Ваш логин: <?=$_COOKIE['login']?></h1>

