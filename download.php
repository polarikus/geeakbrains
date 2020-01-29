<?php
include 'connect.php';
//print_r($_FILES);
$path = "images/".$_FILES['photo']['name'];
$sql = "INSERT INTO `photo` (`name`, `url`, `size`, `count`) VALUES ('".$_FILES['photo']['name']."', '$path', '".$_FILES['photo']['size']."', '0');";
//echo $sql;
$mas = scandir("images");
foreach($mas as $file){
    if ($file == $_FILES['photo']['name']){
    die("Файл с таким именем уже существует!");
    }else{
        continue;
    }
}

if (stristr($_FILES['photo']['type'], '/', true) != 'image'){
    die("Это не картинка!");
}else{
    if ($_FILES['photo']['size'] > 20971520){
    die("Загружаемый файл больше 20 Мегабайт");
} elseif(move_uploaded_file($_FILES['photo']['tmp_name'],$path) && mysqli_query($connect_photo, $sql)){
        echo "Файл ".$_FILES['photo']['name']." загружен!";
    } else {
        echo "Ошибка при загрузке файла";
    }
}


?>