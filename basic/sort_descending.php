<?php

$array = [1,2,3,4,5,6, 8, 10 , 12, 14];

//make the array descending order;

$temp = array();

getDescendingOrder($array, $temp);



function getDescendingOrder($array, $temp)
{
    // traverse 0 to array length
    for ($i = 0; $i < count($array) - 1; $i++)

        // traverse i+1 to array length
        for ($j = $i + 1; $j < count($array); $j++)

            // compare array element with
            // all next element
            if ($array[$i] < $array[$j]) {

                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }

    // print all element of array
    foreach ($array as $val) {
        echo $val . ' ';
    }
}
