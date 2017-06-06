<?php
	require_once "autoload.php";

	$obj = new myclass();
	$test = $obj->one();
	$test->two();
	echo $test->three();
	//echo $obj->one()->two()->three();
	/*$obj->one();
	$obj->two();
	echo $obj->three();*/
?>