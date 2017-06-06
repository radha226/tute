<?php

 $length=count($_POST['title']);

 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "tddute";
 try{
			
				$this->db = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $pass);
			}catch(PDOException $e){
				echo $e->getMessage();
			}

			
    // $dbc = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $pass);
 for($i=0;$i<$length;$i++){
  $q = "INSERT INTO crawler(title,description,image) VALUES(?,?,?)";
      $query = $dbc->prepare($q);
      $query->execute(array($_POST['title'][$i],$_POST['description'][$i],$_POST['image'][$i]));
 }
 
?>