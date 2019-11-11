<?php
#every possible divisor will ascending order with case no
#input
$input = [6, 15, 23];

#iterate input array:
 for ($k=0; $k <= count($input); $k++) { 
 	#check make sure Array position not empty:
 	if (!empty($input[$k])) {

 		$no = $k+1;
 		$min_box =[0];
 		$max_box =[0];
 		$compare = 0;

 		#echo Case No:
 		echo "Case ". $no .": "; 

 		#itterate input number squre Root:
		for ($i = 1; $i <= sqrt($input[$k]); $i++) { 

			#check if divisor:
		    if ($input[$k] % $i == 0) 
		    { 
		 
		        # If divisors are not equal, 
		        if ($input[$k] / $i !== $i){ 
		        	#divide by position:
		        	 $box2  = ($input[$k] / $i);

		        	 #if number is min:
		        	 if ($compare > $box2) {
		        	 	#min and max number:
		        	 	$min_box[] = $i;
		        	 	$min_box[] = $box2;
		        	 	
		        	 }
		        	 else{
		        	 	#max number and min:
		        	 	$min_box[] = $i;
		        	 	$max_box[] = $box2;
		        	 }
		        	 #assign calculate number for compare:
		        	 $compare = $box2;
		        	//$stemp = 0;
		        	 
		        }

		    } 

		} 


		#Marg Min And Max Array and Chunk Duplicate:
		$total = array_merge($min_box, $max_box);
		sort($total);
		$value = 0;
		for ($i = 0; $i <= count($total) ; $i++) { 

			if (!empty($total[$i])) {
				
				if ($total[$i] != $value) {
					echo " \t". $total[$i]. "\t";
				}

				$value = $total[$i];
			}

		}
		echo "<br/>";



	
 	}
 
}

#echo "Cheers :T:";




	
