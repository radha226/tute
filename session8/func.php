<?php
	
	function test(){
		echo "Hello World!"."<br>";
	}

	function newTest(){

		$a = 10; 
		$b = 20;
		$c = $a+$b;
		return $c;
	}
	test();

	$result = newTest();

	echo $result;
?>