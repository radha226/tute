<?php
	require_once "class.php";
	$obj= new departmeant();
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
	<label>Emp Name</label>
	<input type="text" name="name"><br><Br>
	<label>Department</label>
	<input type="text" name="department"><br><Br>
	<label>Role</label>
	<input type="text" name="role"></Br></Br>
	<label>Fees</label>
	<input type="number" name="fees"><br><br>
	
	<input type="submit" name="submit">
	</form>
</body>
</html>