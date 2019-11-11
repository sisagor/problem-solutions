<?php 

function LetterChanges($str) {

  // code goes here
	$divide = chunk_split($str, 1, ',');

	$divide2 = explode(',', $divide);

	var_dump($divide2);


  //return $str;



}
   
// keep this function call here  
echo LetterChanges("Hello");  

?>