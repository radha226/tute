<?php
	require_once "connection.php";
	abstract class myclass extends connection{
		abstract function insert($ins);
		abstract function selectdata();
		abstract function getdata($view);
		abstract function update($upd,$id);
		abstract function delete($del);
	}
	
?>