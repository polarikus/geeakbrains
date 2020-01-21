<?php

$i= 0;
do {
    if($i == 0) {
        echo "$i - Ноль <br>";
    } elseif(($i % 2) == 0) {
        echo "$i - Четное <br>";
    } else {
        echo "$i - Нечетное <br>";
    } 
    $i++;
}while($i<=10);

?>