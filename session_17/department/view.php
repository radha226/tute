<?php
require_once "class.php";
$obj=new departmeant();
if(isset($_GET['id'])){
$viewall=$obj->getdata($_GET['id']);
echo "<pre>";
print_r($viewall);
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
<?php
	echo $viewall['role'];
?>
	<form method="">
	<h2>view of detail</h2>
	<label>Name</label>
	<input type="text" name="name" value="<?=$viewall['emp_name'] ?>" readonly><br><Br>
	<label>department</label>
	<input type="text" name="department" value="<?=$viewall['department'] ?>" readonly><br><Br>
	<label>Role</label>
	<input type="text" name="role" value="<?=$viewall['role']?>" readonly></Br></Br>
	<label>Fees</label>
	<input type="text" name="fees" value="<?=$viewall['fees'] ?>" readonly><br><br>
	
	<!-- <input type="submit" name="submit"> -->
	</form>
</body>
</html>