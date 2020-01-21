<?php
/* Тут я проверял будет ли работать с intdiv()
$a = 16;
if($a/3==intdiv($a,3)) {
    echo "Да";
} else {
    echo "Нет";
}
*/
$i = 1;
while ($i <=100) {
    if($i/3==intdiv($i,3)){
        echo $i.'<br>';
    }
    
    $i ++;
}

?>