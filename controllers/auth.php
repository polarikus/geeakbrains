<?php
if ($_SESSION['auth'] == true){
    header('Location: http://auction.lc/lk');
}
if($_GET['reg'] == "1"){
    $content = "tpl/reg.php";
}
else{
    $title = "Авторизация";
    $content = "tpl/auth.php";
}
