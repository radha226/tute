<?php

 class myclass{

 	private $string;
 	function __construct(){

 	}

 	function one(){

 		$this->string = 'Function One';
 		return $this;
 	}

 	function two(){
 		$this->string .= ', Function Two';
 		return $this;
 	}

 	function three(){

 		return $this->string;
 	}
 }

?>