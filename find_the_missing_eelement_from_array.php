<?php
//Find the missing numbbers from array using xor methodp;

$array = [1,2,3,4, 5, 6, 7, 8, 10, 10];

echo getMissing($array);

function getMissing($array){
    $a = 1; $b = 1;

	for ($j=0; $j < count($array) -1; $j++){
	    $a = $a^$array[$j];
    }

	for ($i=0; $i <= count($array); $i++){
	    $b = $b^$i;
    }

	return $a^$b;

} 
