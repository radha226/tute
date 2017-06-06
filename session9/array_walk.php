<?php

	$myarray = array(2,3);
	$multiply = array(1,2,3,4,5,6,7,8,9,10);

function table($kk, $ll){
	echo $kk."*".$ll."=".$kk*$ll."<br/>";
}


	array_walk($myarray, function($value,$key) use ($multiply){
		//echo "table of ".$value."<Br>";
		array_walk($multiply, function($mult) use ($value){
			table($value, $mult);

			//echo $value."*".$mult."=".$value*$mult."<br/>";
		});
		
	});



?>