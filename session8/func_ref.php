<?php
	
	$a = 10;
$b;
	function test(&$xyz){
		echo $xyz."<br/>";
		$xyz = 19;
	}

	test($a);
	echo $a;

?>