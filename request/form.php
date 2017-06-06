<?php
	
	if(isset($_REQUEST['submit'])){

		echo "<pre/>";
		print_r($_REQUEST);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REQUEST</title>
</head>
<body>
	<form method="GET">
		<label>Username</label>
		<input type="text" name="username" value="">
		<label>Password</label>
		<input type="password" name="password" value=""/>
		<input type="submit" name="submit" value="Click" />
	</form>
</body>
</html>