<?php
// A sum function that takes an array of numbers and returns the sum of the numbers
function sumFunction($array = array()) {
    $sum = 0;
    for($i = 0; $i <= count($array)-1; $i++) {
        $sum += $array[$i];
    }
    echo $sum;
}

sumFunction(array(2, 3, 10, 6, 5, 7, 8));
?>