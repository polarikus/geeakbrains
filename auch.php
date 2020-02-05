<?php
include "connect.php";
$login = (!empty($_POST['login']))?strip_tags($_POST['login']):"";
$pass = (!empty($_POST['pass']))?strip_tags($_POST['pass']):"";
$sql_auch = "SELECT * FROM `users` WHERE `login`='$login' and `pass`='$pass';";
$res_auch = mysqli_query($connect,$sql_auch) or die("Ошибка: ".mysqli_error($connect));
if(mysqli_num_rows($res_auch) > 0){
    setcookie("login",$login);
    setcookie("pass",$pass);
    header("Location: lc.php?success=true");
}else{
    die("Ошибка авторизации");
}
?>

