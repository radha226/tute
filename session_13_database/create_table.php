<?php


 class db{

 	private $db;

 	function __construct(){

 		$this->db =  new PDO('mysql:host=localhost;dbname=tute','root','');
 	}

 	function testCon(){

 	$query = $this->db->prepare("CREATE TABLE practice (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )");
	$query->execute();
//echo "<pre>";
//print_r($sql);


 		
 	
 		// print_r($query->fetchObject());
 	}
 }

 $obj = new db;

 $obj->testCon();

?>
