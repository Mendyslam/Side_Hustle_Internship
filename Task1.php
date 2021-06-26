<?php
//A Range Function that takes two arguments, start amd end and returns an array containing all numbers from start up to (and) including end.
function rangeFunction(int $start, int $end) {                      
    $rangeArray = array($start);
    $diff = abs($end - $start) - 1;
    for($i = 0; $i <= $diff; $i++) {
        if($end > $start) {
            $start++;
            array_push($rangeArray, $start);
        } elseif($end < $start) {
            $start--;
            array_push($rangeArray, $start);
        } elseif($end === $start) {
            array_push($rangeArray, $start);
        } else{
            echo "Enter valid numbers";
        }
    }
    print_r($rangeArray);
}
rangeFunction(10, 15);
?>