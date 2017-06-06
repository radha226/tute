<?php
	class myclass{

		private $db;
		private $a;
		private $b;
	function __construct(){

			$this->db = new PDO('mysql:host=localhost;dbname=tute','root','');
		}

		function one($a){
			 $this->a=$a;
			return $this;

		}
		function two($b){
			 $this->b=$b;
			 return $this;

		}

		function view(){
			return $this->a 
			return $this->b;
		}
	}


	$obj=new myclass();
	//$obj->one(3);
	//$obj->two(4);
	 echo $obj->one(3)->two(4)->view();
	 


?>