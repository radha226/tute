<?php

	class connection{
		public $db;
		function __construct(){
			$this->db=new PDO('mysql:host=localhost;dbname=tute','root','');	
		}

	}


?>