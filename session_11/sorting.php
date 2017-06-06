<?php
// $numbers = array(11, 4, 88, 45, 6,9,2,3,5);
// sort($numbers);
// $arraycount=count($numbers);
// for($i=0; $i< $arraycount; $i++){
// 	echo $numbers[$i]."<br>";

// }
?>



<h6>with classes</h6>
<?php

$array=array(11,4,88,45,6,9,2,3,5);
//array(4,11,88,45,6,9,2,3,5)
//array(4,11,45,88,6,7,2,3,5)
//array(4,11,45,6,88,7,2,3,5)
//array(4,11,6,45,88,7,2,3,5)
//array()
$array_size=count($array);
for($j = 0; $j < $array_size; $j++){
	for($i=0; $i<$array_size-1; $i++){
		//for ($j=0; $j < $array_size ; $j++) { 
		
		if($array[$i]>$array[$i+1]){
			$temp=$array[$i];
			$array[$i]=$array[$i+1];
			$array[$i+1]=$temp;
			//echo $array[$i]."<br>";
		}
	}
}

	
	
echo "<pre/>";

print_r($array);	

	


?>
