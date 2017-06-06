<?php
	require_once "../abstract.php";
	class departmeant extends myclass{

		function insert($ins){
			// print_r($ins);
			$query=	$this->db->prepare('INSERT INTO dept(emp_name,department,role,	fees)
				VALUES (?,?,?,?)');
			 $query->execute(array(
								$ins['name'],
								$ins['department'],
								$ins['role'],
								$ins['city']
							
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
			$query=$this->db->prepare('select * from dept');
			$query->execute();
			return $query->fetchALL(PDO::FETCH_ASSOC);
			//print_r($query->fetchALL(PDO::FETCH_ASSOC));
			//print_r($query->fetchObject());
		}
		
		function getdata($view){
			//print_r($view);
			$query=$this->db->prepare('select * from dept where employee_id=? ');
			$query->execute(array(	
								$view
							));
			//print_r($query->fetchALL(PDO::FETCH_ASSOC));
			return $query->fetch(PDO::FETCH_ASSOC);
			
		}
		function update($upd,$id){
			print_r($upd);
			$query=$this->db->prepare('update dept SET emp_name=?, department =? , role =?, fees=? where employee_id= ?');
			$query->execute(array(
								$upd['name'],
								$upd['department'],
								$upd['role'],
								$upd['fees'],
								
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
			$query=$this->db->prepare('DELETE FROM dept where employee_id = ?');
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