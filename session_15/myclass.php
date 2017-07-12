<?php

class myclass{

	function __construct(){

		$this->db = new PDO('mysql:host=localhost;dbname=tute','root','');
	}


	function getData(){

		$query = $this->db->prepare('select * from practice where name = ?');
		$query->execute(array(''));

		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}


$obj = new myclass();

$data = $obj->getData();

echo "<pre/>";
print_r($data);

?>