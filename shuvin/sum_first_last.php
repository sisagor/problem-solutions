<?php
#number length can any:
$input = [12321, 23434, 84734, 98712, 47569];

for ($i=0; $i <count($input) ; $i++) { 
	$first = substr($input[$i], 0, 1);
	$last = substr($input[$i], -1);
	//echo $first;
	//echo "<br>";
	$sum = ($first + $last);

	echo "sum = ". $sum;
	echo "<br>";


}