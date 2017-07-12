<?php
require_once "myclass.php";

class childclass extends myclass{

	function __construct(){

		myclass::__construct();
		echo "This is child construct";
	}

	function testing(){

		echo "<br/>";
		$this->newfunction();
		//$this->test();
	}
}


$obj = new childclass();

$obj->testing();

?>