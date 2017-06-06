<?php
	require_once "abstract.php";
	class dept extends myclass{

		function insert($ins){
			// print_r($ins);
			$query=	$this->db->prepare('INSERT INTO employee_details(emp_name,email,phone_no,city,state,sex)
				VALUES (?,?,?,?,?,?)');
			 $query->execute(array(
								$ins['name'],
								$ins['email'],
								$ins['phone'],
								$ins['city'],
								$ins['state'],
								$ins['gender']
							));
			 	 header("location:emp_list.php");


			 // print_r($query->fetchALL(PDO::FETCH_ASSOC));
			 	//header("location:emp_list.php");
			 // if($query->execute()>0){
			 // 	echo $query->rowCount()." "."row added";
			 // 	// header("location:index.php");

			 // }else{
			 // 	echo "no row added";
			 // }
			// echo "<pre/>";
			//print_r($query->fetchObject());
		}
	}