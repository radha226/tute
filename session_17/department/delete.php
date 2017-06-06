<?php
require_once "class.php";
$obj=new departmeant();
if(isset($_GET['id'])){
$obj->delete($_GET['id']);

}


?>