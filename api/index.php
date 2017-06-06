<?php

	 header('Access-Control-Allow-Origin: *');
	 require_once 'db.php';

	 
	 function getEmployeeList(){
	 	$obj = new db;
	 	$employees = $obj->getAllEmployees();
		echo json_encode(['status'=>'success','data'=>$employees]);
	 }

	 function employeById($employeeId){
	 	$obj = new db;
	 	$details = $obj->singleEmployee($employeeId);
	 	if($details){
	 		echo json_encode(['status'=>'success','data'=>$details]);
	 	}else{
	 		echo json_encode(['status'=>'error','message'=>'No user found!']);
	 	}
	 	
	 }


	 if(isset($_GET['method'])){

	 	if(function_exists($_GET['method'])){
	 		if($_GET['method'] == 'employeById'){
	 			if(isset($_POST['employee_id']) && $_POST['employee_id'] != ''){
	 				employeById($_POST['employee_id']);
	 			}else{

	 				echo json_encode(['status'=>'error','message'=>'required params for method are missing!']);
	 			}
	 		}
	 		if($_GET['method'] == 'getEmployeeList'){
	 			getEmployeeList();
	 		}

	 		if($_GET['method'] == 'insertNewEmployee'){
	 			
	 		}
	 	}else{

	 		echo json_encode(['status'=>'error','message'=>'given method not found!']);
	 	}

	 }else{

	 	echo json_encode(['status'=>'error','message'=>'required parameters are missing!']);
	 }


	 

	 
	 

?>