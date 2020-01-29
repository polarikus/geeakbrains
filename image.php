<script>
<?php 
    include 'connect.php';
    $name = $_GET['img'];
    $sql = "SELECT * FROM `photo` WHERE `name`='$name'";
    $count_update = "UPDATE `photo` SET `count` = `count`+1 WHERE `name`= '$name'";
    mysqli_query($connect_photo,$count_update);
    $res = mysqli_query($connect_photo,$sql);
    $photo = mysqli_fetch_assoc($res);
    ?>
</script>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<body>
   <div class="container">
    <img src="<?=$photo['url']?>" alt="<?=$photo?>"><br>
    <h1>Просмотров: <?=$photo['count']?></h1>
    </div>
</body>
</html>