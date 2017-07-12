<?php
	class myclass{
		private $abc;
		private $db;
		function __construct(){
			$this->db= new PDO('mysql:host=localhost;dbname=tute','root','');

		}
		// function insert($d){
		// 	$Query=$this->db->prepare('INSERT INTO tute(username,password)VALUES (?,?)');
		// 	$Query->execute(
		// 					array(
		// 							$d['username'],
		// 							$d['password']
		// 						)
		// 					);
		
		// 	echo "<pre/>";
		// 	print_r($Query->fetchObject());
		// echo $Query->rowCount() . "record added succesfully"."<br>";
		// 	 $last=$this->db->lastInsertId();
		// 	 header('location:insert.php?id='.$last);
			
		// }

		function insert($d){
			$Query=$this->db->prepare('INSERT INTO practice (name,password)VALUES (:user,:pass)');

			$Query->bindParam('user',$d['username']);
		 $Query->bindParam('pass',$d['password']);
			$Query->execute();

		
			
			//print_r($Query->fetchAll(PDO::FETCH_ASSOC));
			
			 echo $Query->rowCount() . "record added succesfully"."<br>";
			 $last=$this->db->lastInsertId();
			// header('location:insert.php?id='.$last);
			
		}
		function update(){

		}

		function getData($id){
			$query = $this->db->prepare('select * from practice where id = ?');
			$query->execute(array($id));
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}

?>