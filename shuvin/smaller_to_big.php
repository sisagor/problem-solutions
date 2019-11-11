<?php 

$input = [564, 385, 164];


foreach ($input as $key => $value) {

	$count = $key+1;
	$chunk = chunk_split($value, 1, ',');
	$array = explode(',', $chunk);

	echo "Case " .$count. ": ";

	$dump_max = [];
	$dump_min = [];

	$box_max =[];
	$box_min =[];

	$compare = 0;

	foreach ($array as $key1 => $value1) {

		if (!empty($value1)) {
			//echo $compare;
			//echo "<br/>";

			if ($compare >= $value1) {
				$box_min[] = $value1;
			}

			else if($compare <= $value1){
				$box_max[] = $value1;
			}

			$compare = $value1;

		}

	}
	//print_r($box_min);
	
	//print_r($box_max);
	//echo "<br/>";
	//print_r($box_min);

	$total = array_merge($box_min, $box_max);
	sort($total);

		$value = 0;

		$smaller = 0;

		for ($i = 0; $i <= count($total) ; $i++) { 

			if (!empty($total[$i])) {
				//echo $smaller;
				if ($total[$i] != $value) {
					echo " \t". $total[$i]. "\t";
				}

				$value = $total[$i];
			}

		
		}
		//exit();

		echo "<br/>";
		

}