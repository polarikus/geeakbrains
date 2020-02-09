<?php
const HOST = "localhost";
const USR = "root";
const PASS = "";
const BD = "shop";

$connect = mysqli_connect(HOST,USR,PASS,BD) or die("Ошибка подключения к Mysql");
?>