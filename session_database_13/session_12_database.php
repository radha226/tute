<?php


 class db{

 	private $db;

 	function __construct(){

 		$this->db =  new PDO('mysql:host=localhost;dbname=tute','root','');
 	}

 	function testCon(){

 		$query = $this->db->prepare('select * from practice');
 		$query->execute();
 		echo "<pre/>";
 		print_r($query->fetchAll(PDO::FETCH_ASSOC));
 		// print_r($query->fetchObject());
 	}
 }

 $obj = new db;

 $obj->testCon();

?>
