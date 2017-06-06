<?php
require_once "class.php";
	$obj=new myclass();
if(isset($_GET['id'])){
	// print_r($_GET);
	$obj->deletedata($_GET['id']);
}

?>