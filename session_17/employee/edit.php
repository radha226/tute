<?php
require_once "class.php";
$obj=new employee();
if(isset($_GET['id'])){
	 $id=$_GET['id'];
$viewall=$obj->getdata($_GET['id']);
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
	<label>Name</label>
	<input type="text" name="name" value="<?=$viewall['emp_name'] ?>"><br><Br>
	<label>email</label>
	<input type="text" name="email" value="<?=$viewall['email'] ?>"><br><Br>
	<label>phone no</label>
	<input type="number" name="phone" value="<?=$viewall['phone_no'] ?>"></Br></Br>
	<label>city</label>
	<input type="text" name="city" value="<?=$viewall['city'] ?>"><br><br>
	<label>state</label>
	<input type="text" name="state" value="<?=$viewall['state'] ?>"><br><Br>
	<label>Sex</label>
	
	
	<input type="radio" name="gender" value="male" <?=$viewall['sex']=='male'? 'checked': "" ?>>male<br>
	
		<input type="radio" name="gender" value="female" <?=$viewall['sex']=='female' ? 'checked' : "" ?>>Female<br>
	
	<input type="submit" name="update" value="update">
	</form>
</body>
	</html>