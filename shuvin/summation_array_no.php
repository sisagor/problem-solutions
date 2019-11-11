<?php
function toincreament($n){
    $number = Array(0,1,1,2,4,7,13,24,44,81);
    $count = array_search($n, $number);
    $end = $count-1;
    $start = $end-2;
    //echo $countAll;
    for ($i=$start; $i <= $end; $i++) {
        $num += $number[$i];
    }
    return $num;
}
echo toincreament(7);