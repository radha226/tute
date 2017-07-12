<?php
require_once 'connection.php';
abstract class abstractclass extends connection{
	abstract function insert($ins);
	abstract function select();
	abstract function view($id);
	abstract function update($upd,$id);
	abstract function delete($id);
}

?>