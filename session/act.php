<?php
	
	if(isset($_POST['submit'])){
			//print_r ($_POST);
		if($_POST['username'] == 'test' && $_POST['password'] == '123456'){

			session_start();
			$_SESSION['user'] = $_POST['username'];
			header('location:home.php');
		}else{

			echo "Wrong user details!!!";
		}
	}

?>