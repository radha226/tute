<?php
require_once "class.php";
$obj=new departmeant();
if(isset($_GET['id'])){
	 $id=$_GET['id'];
$viewall=$obj->getdata($_GET['id']);
//print_r($viewall);
}
 if(isset($_POST['update'])){
 	$obj->update($_POST, $_GET['id']);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view</title>
</head>
<body>
	<form method="POST">
	<h1>Edit Your Profile</h1>
	<label>Emp Name</label>
	<input type="text" name="name" value="<?=$viewall['emp_name'] ?>"><br><Br>
	<label>Department</label>
	<input type="text" name="department" value="<?=$viewall['department'] ?>"><br><Br>
	<label>Role</label>
	<input type="text" name="role" value="<?=$viewall['role'] ?>"></Br></Br>
	<label>Fees</label>
	<input type="number" name="fees" value="<?=$viewall['fees'] ?>"><br><br>
	
	
	<input type="submit" name="update" value="update">
	</form>
</body>
</html>