<?php
	require_once '../abstract.php';
	class myclass extends abstractclass{
		public function insert($ins){
			$query=$this->db->prepare('INSERT INTO employee (name,email,phone,city,state,gender) Values (?,?,?,?,?,?)');
			$query->execute(array(
								$_POST['firstname'],
								$_POST['email'],
								$_POST['phone'],
								$_POST['city'],
								$_POST['state'],
								$_POST['gender']

								));

			header("location:../index.php");
		}
		function select(){
			$query=$this->db->prepare("select * from employee");
			$query->execute();
			return $query->FetchAll(PDO::FETCH_ASSOC);

		}
		function view($id){
			$query=$this->db->prepare("select * from employee where id=?");
			$query->execute(array($id));
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		function update($upd,$id){

			$query=$this->db->prepare("update employee SET name=?,email=?,phone=?,city=?,state=?,gender=? where id=?");
			$query->execute(array(
								   $upd['firstname'],
								   $upd['email'],
								   $upd['phone'],
								   $upd['city'],
								   $upd['state'],
								   $upd['gender'],
								   $id

								));
			header("location:employee_list.php");
		}
		function delete($id){
			$query=$this->db->prepare("delete from employee where id=?");
			$query->execute(array($id));
			header("location:employee_list.php");;
		}


	}


?>