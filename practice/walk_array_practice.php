<h2>first way of printing table of 2</h2>
<?php
	$a=array(3,4);
	$b=array(1,2,3,4,4);

	function table($val1,$key1){
		echo $val1*$key1."<Br>";
	};

	array_walk($a, function($value) use($b){
		echo "table of ".$value."<br>";
		array_walk($b, function($mul) use($value){
			table($mul, $value);
		});
	});

?>


<h2>second way</h2>
<?php
$ff=array(2,3);
$gg=array(1,2,3,4,5);

function table1($value2, $gg){
	echo "table of ".$value2."<Br>";
	array_walk($gg, function($multi) use ($value2){

		echo $value2*$multi."<br>";
	});
	//print_r($gg);

}

array_walk($ff, function($value2) use($gg){
	table1($value2, $gg);
})


?>