<?php 

$input = [1, 3, 5];

for ($i=0; $i <= count($input) ; $i++) { 

	if (!empty($input[$i])) {
	
		for ($j=0; $j <$input[$i] ; $j++) { 

			$mul = ($input[$i]);
			//echo "*";
			for ($k=1; $k <= $mul; $k++) { 
				echo "*";
			}
			echo "<br>";
			
		}
		echo "<br/>";

	}
	
}
	