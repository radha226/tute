<?php


 /**
 * 
 */
 class db
 {
 	protected $db;

 	function __construct()
 	{
 		try{
 			$this->db = new PDO('mysql:host=localhost;dbname=tute','root','');
 		}catch(PDOException $e){
 			echo "connection failed ".$e->getMessage();
 		}

 		
 	}

 	function getAllEmployees(){

 		$query = $this->db->prepare('select * from dept');
 		$query->execute();
 		return $query->fetchAll(PDO::FETCH_OBJ);
 	}

 	function singleEmployee($id){

 		$query = $this->db->prepare('select * from dept where employee_id = ?');
 		$query->execute(array($id));

 		return $query->fetch(PDO::FETCH_OBJ);
 	}
 	
 }


?>