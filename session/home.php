<?php
	session_start();
	if($_SESSION['user'] == ''){

		header('location:login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>This is Home Page</title>
</head>
<body>
	<h1>Welcome To Home Page</h1>
</body>
</html>