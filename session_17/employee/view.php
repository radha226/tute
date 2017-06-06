<?php
require_once "class.php";
$obj=new employee();
if(isset($_GET['id'])){
$viewall=$obj->getdata($_GET['id']);
// echo "<pre>";
// print_r($viewall);
}
 $id=$_GET['id'];
 // if(isset($_POST['submit'])){
 // 	header("location:emp_list.php");
 // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view</title>
</head>
<body>
	<form method="">
	<h2>view of detail</h2>
	<label>Name</label>
	<input type="text" name="name" value="<?=$viewall['emp_name'] ?>" readonly><br><Br>
	<label>email</label>
	<input type="text" name="email" value="<?=$viewall['email'] ?>" readonly><br><Br>
	<label>phone no</label>
	<input type="number" name="phone" value="<?=$viewall['phone_no'] ?>" readonly></Br></Br>
	<label>city</label>
	<input type="text" name="city" value="<?=$viewall['city'] ?>" readonly><br><br>
	<label>state</label>
	<input type="text" name="state" value="<?=$viewall['state'] ?>" readonly><br><Br>
	<label>Sex</label>
	<?php
		if($viewall['sex']==='male'){
	?>
	
	<input type="radio" name="gender" value="male" <?=$viewall['sex']='checked'?>>male<br>
	<?php 
	} else{
	?>
		<input type="radio" name="gender" value="female" <?=$viewall['sex']='checked' ?>>Female<br>
	<?php
		}
	?>
	<!-- <input type="submit" name="submit"> -->
	</form>
</body>
</html>