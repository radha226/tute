<?php
	$myarray=array(2,3);
	$multiply= array(1,2,3,4,5,6,7,8,9,10);

	function table($value,$multiply)
	{
		//echo $value;
		array_walk($multiply, function($val) use ($value){

			echo $val*$value."<br>"; 	
		});

		// echo $value."<Br>";
		// echo"<pre>";
		// print_r($multiply);
	

	};


	array_walk($myarray, function($value) use ($multiply){
		    // array_walk($mu, funcname)


		table($value, $multiply);
	});


	

	
?>