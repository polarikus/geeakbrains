<?php
function sum($a,$b) {
    $result = $a + $b;
    return $result;
}

function minus($a,$b) {
    $result = $a - $b;
    return $result;
}

function umn($a,$b) {
    $result = $a * $b;
    return $result;
}

function del($a,$b) {
    $result = $a / $b;
    return $result;
}

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "+":
        $result = sum($arg1, $arg2);
        return $result;
        break;
        case "-":
        $result = minus($arg1, $arg2);
        return $result;
        break;
        case "*":
        $result = umn($arg1, $arg2);
        return $result;
        break;
        case "/":
        $result = del($arg1, $arg2);
        return $result;
        break;
    }
}

echo mathOperation(5,5,"/");


?>