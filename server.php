
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отпавка отзыва</title>
</head>
<body>
<a href="http://auction.lc/otziv.php"><h3>Назад</h3></a>
<?php
include 'connect.php';
//print_r($_POST);
$date = date('o-m-d-h:i');
$name =  strip_tags($_POST['name']);
if ($_POST['capt'] != $_POST['cap']) {
    die("<script>alert('Вы не верно ввели капчу')</script>");
    $result = "Не верно вычеслен пример";
}
if($name == ""){
    $name = "anonim";
}
$sql ="INSERT INTO `otziv` (`name`, `content`, `date`) VALUES ('$name', '".strip_tags($_POST['otziv'])."', '$date');";
if(mysqli_query($connect, $sql)){
    $result =  "Отзыв отправлен!";
}else{
    $result = "Ошибка";
}
?>
<h1><?=$result?></h1>
</body>
</html>

