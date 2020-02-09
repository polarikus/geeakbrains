<?php
session_start();
include "models/goods.php";
if($_SERVER['REQUEST_URI'] == "/"){
    include "controllers/main.php";
}elseif ($_GET['url'] == "auth"){
    include "controllers/auth.php";
}elseif ($_GET['url'] == "catalog"){
    include "controllers/catalog.php";
}elseif ($_GET['url'] == "lk"){
    include "controllers/lk.php";
}


include "tpl/main.php";