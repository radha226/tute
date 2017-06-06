<?php
	require_once "class.php";
	$obj=new myclass();
	if(isset($_GET['id'])){
		 $update=$obj->getdata($_GET['id']);
		 print_r($update);
	}

	if(isset($_POST['update'])){
		$obj->updatedata($_POST,$_GET['id']);
	}
	
	
?>
<html>
	<title>edit</title>
	<body>
	<form method="POST">
		<?php


		?>
		<lable>name</lable>
		<input type="text" name="username" value="<?=$update['name'] ?>"><br>
		<label>email</label>
		<input type="email" name="email" value="<?=$update['email'] ?>"><br>
		<label>password</label>
		<input type="password" name="password" value="<?=$update['password'] ?>"><br>

		<input type="submit" name="update" value="update" >
	</form>
	</body>
</html>