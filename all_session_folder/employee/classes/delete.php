<?php
	require_once 'all_class.php';
	$obj=new myclass();
	if(isset($_GET['id'])){
		$obj->delete($_GET['id']);
	}

?>