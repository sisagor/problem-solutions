<?php

$array = [1,2,3,4, 5, 6, 7, 8, 10, 10];

//find smallest and largest number;
$large = $small  = $array[0];

//find the duplicate number;
$duplicate = 0;


foreach ($array as $key => $item) {

    if ($item > $large){
        $large = $item;
    }

    if ($item < $small){
        $small = $item;
    }

    //find duplicate;
    for ($j = $key + 1; $j < count($array); $j++) {
        // compare array element with
        // all next element
        if ($array[$key] == $array[$j]) {

            $duplicate = $array[$key];

        }
    }

}

echo "largest number : ". $large;
echo '<br/>';
echo "smallest number : ". $small;
echo '<br/>';
echo "duplicate number : ". $duplicate;



