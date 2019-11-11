<?php
function factorialByLoop($number){
    $num = 1;
    if ($number < 2) {
        return 1;
    }
    else
    {
        for ($i=1; $i <= $number ; $i++) {
            //var_dump($i);
            $num *= $i;
        }
    }
    return $num;
}
echo factorialByLoop(4);