<?php
	class myclass{
		private $db;
		public $abc;
		function __construct(){
			$this->db = new pdo('mysql:host=localhost; dbname=tute', 'root','');
		}
		function insert($d){
			$Query=$this->db->prepare('INSERT INTO Practice1 (name,password)VALUES (?,?)');
			$Query->execute(
							array(
									$d['username'],
									$d['password']
								)
							);
		
			//echo "<pre/>";
			//print_r($Query->fetchObject());
			echo $Query->rowCount() . "record added succesfully"."<br>";
			if($Query->rowCount()>0){
				header("location:view.php");
			}else{
				echo "no record added";
			}
			
		}

		function selectdata(){
			$query=$this->db->prepare('select * from practice1');
			 $query->execute();
			
			return	$query->fetchAll(PDO::FETCH_ASSOC);

		}
		function getdata($h){
			
			$query=$this->db->prepare("select * from practice1 where id = ?");
			 $query->execute(array
								($h)
							);
			return $query->fetch(PDO::FETCH_ASSOC);
			
		}

		function updatedata($upd, $id){
			print_r($upd);
			
			$query=$this->db->prepare("update practice1 SET name= ?, email=?,password = ? where id=?");
			 $query->execute(array(
								$upd['username'],
								$upd['email'],
								$upd['password'],
								$id
							));
				//$query->fetchObject();
			 echo "hiii";
			 if($query->execute()){
			 	header("location:view.php");
			 }else{
			 	echo "not updated";
			 }
		}
		function deletedata($del){
			$query=$this->db->prepare("DELETE FROM practice1 where id=?");
			$query->execute(array($del));
			if($query->execute()){
				header("location:view.php");
			}else{
				echo "not deleted";
			}
		}

	
}

?>