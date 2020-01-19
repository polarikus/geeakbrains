<?php

    $a = 2;
    $b = 2;
    $result = 0;
    echo " a=$a b=$b";
    if($a >= 0 && $b >= 0){
        $result = $a - $b;
        } if($a < 0 &&  $b < 0) {
            $result = $a * $b;
            } else {
                    $result = $a + $b;
                }
    echo "<br>$result";
?>