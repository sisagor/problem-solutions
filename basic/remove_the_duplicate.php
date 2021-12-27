<?php

$array = [1,2,3,4, 5, 6, 7, 8, 10, 10];


//remove the duplicate number;
$duplicate = 0;


foreach ($array as $key => $item) {

    //find duplicate;
    for ($j = $key + 1; $j < count($array); $j++) {
        // compare array element with
        // all next element
        if ($array[$key] == $array[$j]) {

            $duplicate = $array[$key];
            unset($array[$item]);

        }
    }

}

echo "duplicate number : ". $duplicate;

var_dump($array);