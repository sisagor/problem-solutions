<?php

$input = [
	"-1234 3466 345435", 
	"34 - 95 56- 233- 3 -3 -3", 
	"3- -3 9 933 9- 33 -33 -44"
];

for ($i=0; $i <= count($input) ; $i++) { 
	if (!empty($input[$i])) {
	
		$array = explode(' ', $input[$i]);
		//print_r($array);
		$number_count = [];
		
		for ($j=0; $j <count($array) ; $j++) { 
			$number = str_replace('-', '', $array[$j]);
			array_push($number_count , $number);
		}

	echo count($number_count);
	echo "<br/>";

	}
	
}
