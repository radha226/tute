<?php
session_start();

class myclass{
	public $a;
	public function setinput(){
		
	}	
}

$test = $_SESSION['mytest'];


session_unset();
session_destroy();
?>