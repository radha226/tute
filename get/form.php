<?php
	if(isset($_GET['submit'])){

		echo "<pre/>";
		print_r($_GET);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Query String</title>
</head>
<body>
	<form method="GET">
		<label>Username</label>
		<input type="text" name="username" value="" />
		<label>Password</label>
		<input type="password" name="password" value=""/>
		<input type="submit" name="submit" value="Click Me" />
	</form>
</body>
</html>