<?php
	require_once "login.php";
	$obj = new login();
	/*echo "<pre/>";
	var_export($obj);*/
	if(isset($_POST['username'])){
		$obj->loginUser($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My First Login Page</title>
</head>
<body>
	<form method="POST">
		<label>Username</label>
		<input type="text" name="username" value="" /><br/>

		<label>Password</label>
		<input type="password" name="password" value="" />
		<br/>
		<input type="submit" value="Login Now" />
	</form>
</body>
</html>