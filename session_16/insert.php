<?php
include "insert_class.php";
	$obj=new myclass();
	if(isset($_POST['submit'])){
	$obj->insert($_POST);
	}
	if(isset($_POST['update'])){
		$obj->update($_POST);
	}
	if(isset($_GET['id'])){
		$data = $obj->getData($_GET['id']);
	}
	//$obj->loginUser($_POST);
?>




<!DOCTYPE html>
<html>
<head>
	<title>My First Login Page</title>
</head>
<body>
	<form method="POST">
		<label>username</label><br>
		<input type="text" name="username" value="<?=@$data['name']?>"><br>
		<label>password</label><br>
		<input type="password" name="password" value="<?=@$data['password']?>"><br>
		<?php
			if(isset($_GET['id'])):
		?>
		<input type="submit" name="update" value="update">
		<!-- <input type="submit" name="update" value="update"> -->
		<?php
			else:
		?>
		<input type="submit" name="submit" value="submit">
		<?php
			endif;
		?>
		<input type="submit" name="delete" value="delete">
	</form>
</body>
</html>