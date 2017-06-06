<?php
	require_once "../abstract.php";
	class employee extends myclass{

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
			 	 header("location:../index.php");


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

		function selectdata(){
			$query=$this->db->prepare('select * from employee_details');
			$query->execute();
			return $query->fetchALL(PDO::FETCH_ASSOC);
			//print_r($query->fetchALL(PDO::FETCH_ASSOC));
			//print_r($query->fetchObject());
		}
		
		function getdata($view){
			// print_r($view);
			$query=$this->db->prepare('select * from employee_details where id=? ');
			$query->execute(array(
								$view
							));
			return $query->fetch(PDO::FETCH_ASSOC);
			
		}
		function update($upd,$id){
			print_r($upd);
			$query=$this->db->prepare('update employee_details SET emp_name=?, email =? , phone_no =?, city=?, state=? , sex=? where id= ?');
			$query->execute(array(
								$upd['name'],
								$upd['email'],
								$upd['phone'],
								$upd['city'],
								$upd['state'],
								$upd['gender'],
								$id
							));

			if($query->execute()){
				echo "updated";
				header("location:emp_list.php");
			}else{
				echo "no updation yet !!!!";
			}
		}

		function delete($del){
			print_r($del);
			$query=$this->db->prepare('DELETE FROM employee_details where id = ?');
			$query->execute(array
								(
									$del
								)
							);
			if($query->execute()){
				echo "deleted";
				header("location:emp_list.php");
			}else{
				echo "not delted";
			}
		}
	}



	
?>