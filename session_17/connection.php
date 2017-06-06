<?php
	class connection{

		public $db;
		function __construct(){
			$this->db = new pdo('mysql:host=localhost; dbname=tute', 'root','');
		}
	}

?>