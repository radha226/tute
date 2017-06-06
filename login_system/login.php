<?php
	
	class login{

		private $db;

		function __construct(){

			$this->db = new PDO('mysql:host=localhost;dbname=tute','root','');
		}

		function loginUser($data){
			
			$Query = $this->db->prepare('SELECT * FROM practice1 WHERE name = :user and password = :pass');
			// $Query->bindParam('user',$data['username']);
			// $Query->bindParam('pass',$data['password']);
			// $Query->execute();
			$Query->execute(
								array(
											'user'=>$data['username'],
											'pass'=>$data['password']
									 )
						   );
			echo "<pre/>";
			print_r($Query->fetchAll(PDO::FETCH_ASSOC));
			// print_r($Query->fetchObject());

			if($Query->rowCount() > 0){
				// header("location:dashboard.php");
				echo "correct info";
			}else
			{
				echo "wrong info";
			}


		}
	}

?>