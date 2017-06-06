<?php
require_once "class.php";
$obj=new employee();
if(isset($_GET['id'])){
$obj->delete($_GET['id']);

}


?>