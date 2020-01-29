<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
</head>
<?php 
    include 'connect.php';
    $sql = "SELECT * FROM `photo` ORDER BY `count` DESC";
    $res = mysqli_query($connect_photo,$sql);
    while($photo = mysqli_fetch_assoc($res)):?>
        <a href="http://minimalistica.lc/image.php?img=<?=$photo['name']?>"><img src="<?=$photo['url']?>" alt="<?=$photo?>" width='150px' height='200px'></a>
    <?php endwhile; ?>
<body>
    <form action="download.php" method="POST" enctype="multipart/form-data">
    <p>Выбери файл</p>
    <input type="file" name="photo"><br>
    <input type="submit" value="Загрузить">
    </form>
</body>
</html>
