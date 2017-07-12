<?php
abstract class myclass{
	abstract function get_child();
		//echo "this is function get with protected";
	
}
class child extends myclass{
	function get_child(){
		$this->get();
		echo "<br>";
		echo "text";
	}
}
class subchild extends child{
	abstract function  sub_child(){
		$this->get_child();
		echo "<br>";
		echo "subclass";
	}
}

$obj =new subchild();
$obj->sub_child();

?>