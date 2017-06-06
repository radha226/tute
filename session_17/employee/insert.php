<?php
	require_once "class.php";
	$obj= new employee();
	if(isset($_POST['submit'])){
		$obj->insert($_POST);
		// print_r($rr);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>insert data</title>
</head>
<body>
	<form method="POST">
	<h2>Fill Your Details</h2>
	<label>Name</label>
	<input type="text" name="name"><br><Br>
	<label>email</label>
	<input type="text" name="email"><br><Br>
	<label>phone no</label>
	<input type="number" name="phone"></Br></Br>
	<label>city</label>
	<input type="text" name="city"><br><br>
	<label>state</label>
	<input type="text" name="state"><br><Br>
	<label>Sex</label>
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female<br>
	<input type="submit" name="submit">
	</form>
</body>
</html>