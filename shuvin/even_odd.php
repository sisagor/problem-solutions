<?php 

$input = [2, 111, 9];

 for ($i=0; $i <= count($input) ; $i++) { 
 	if (!empty($input[$i])) {
 
	 	 if ($input[$i]%2==0) {
	 	 	echo "Even";
	 	 	echo "<br/>";
	 	 }else {
	 	 	echo "Odd";
	 	 	echo "<br/>";
	 	 }
 	}

 }