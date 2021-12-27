<?php

$array = [1,2,3,4, 5, 6, 7, 8, 10, 10];


//find target index and value;

$target  = 7;
$index  = 5;


function getIndexByValue($array, $target)
{
    foreach ($array as $key => $item) {

        if ($item == $target) {
            return $key;
        }
    }
}

function getValueByIndex($array, $index)
{
    foreach ($array as $key => $item) {

        if ($key == $index) {
            return $item;
        }
    }
}


echo "The given number index is  : ". getIndexByValue($array, $target);
echo '<br/>';
echo "The given index value is  : ". getValueByIndex($array, $index);




