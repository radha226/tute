<?php

class mynewclass{

	/*function mynewclass(){

		echo "This is construct";
	}*/

	private $keyValues = '';

	function __construct($one, $two){

		echo "This is constructor<br/>";
		echo $one;
		$this->keyValues = $one;
	}

	function testing(){

		echo $this->keyValues;
	}
}

?>