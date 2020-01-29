<?php
const HOST = "localhost";
const USR = "root";
const PASS = "";
const DB_PHOTO = "photo_galery";

$connect_photo = mysqli_connect(HOST,USR,PASS,DB_PHOTO) or die("Ошибка подключения к Mysql");
?>