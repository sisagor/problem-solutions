<?php 

$input = [100,200];

$n = 0;

for ($i=0; $i < count($input); $i++) { 

	echo $input[$i]." \t";

	if ($input[$i] !=1) {

		if ($input[$i] % 2 != 0) {
			$n = pow(3, $input[$i]) + 1;
		}
		else{
			$n = ($input[$i] / 2);
		}

		echo $n ."\t";
	}
	else{
		echo $input[$i]."\t";
	}
	//echo "<br/>";

	

	

}

