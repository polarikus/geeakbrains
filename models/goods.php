<?php
function GetAllGoods ($connect){
    $sql_order = "SELECT * FROM `orders` INNER JOIN `images` ON `orders`.`image_mane` = `images`.`idimg`";
    $res_order = mysqli_query($connect,$sql_order);
    $n = mysqli_num_rows($res_order);
    $goods = array();
    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($res_order);
        $goods[] = $row;
    }

    return $goods;
}

function GetGood ($connect,$id){
    $sql = "SELECT * FROM `orders` INNER JOIN `images` ON `orders`.`image_inside` = `images`.`idimg` WHERE `id` = $id";
    $res = mysqli_query($connect,$sql);
    $n = mysqli_num_rows($res);
    $goods = array();
    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($res);
        $goods[] = $row;
    }

    return $goods;
}