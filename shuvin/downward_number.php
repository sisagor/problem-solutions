<?php 

$step = 0;

for ( $i = 1000; $i >= 1; --$i) {
	$step++;

	echo  "\t" .($i). "\t" . "\t";
	
	if ($step ==3) {
		echo "<br/>";
		$step = 0;
	}


}