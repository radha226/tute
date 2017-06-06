<?php

	require_once "myclass.php";

	class childclass extends myclass{

		function testing(){

			echo "This is testing function of child class";
			$this->mynew();
		}

		function test(){

			echo "This function is required!";
		}
	}


	$obj = new childclass;

	$obj->testing();
	$obj->test();
?>