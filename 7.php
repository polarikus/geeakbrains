<?php
function timer() {
    $h = date('G');
    $m = date('i');
    $minute = "";
    if($m == 1 || $m == 21 || $m == 31 || $m == 41 || $m == 51){
        $minute = "$m минута";
    }elseif($m >1 && $m <5 || $m >21 && $m <25 || $m >31 && $m <35 || $m > 41 && $m < 45 || $m > 51 && $m <55){
        $minute = "$m минуты";
    }else {
        $minute = "$m минут";
    }
  if ($h == 1 || $h == 21) {
    return "$h час, $minute";
  }elseif ($h >1 && $h<5 || $h ==22) {
        return "$h часа, $minute";
    }elseif($h>5 && $h<21) {
      return "$h часов, $minute";
  }
    
}

echo timer();

?>