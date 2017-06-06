<?php
include "class.php";
$obj=new myclass();
if(isset($_POST['submit'])){
	$obj->insert($_POST);
}


?>

<html>
<title>insert</title>
<body>
<form method="POST">
	<label>username</label>
	<input type="username" name="username"><br>
	<label>password</label>
	<input type="password" name="password"><br>
	<input type="submit" name="submit">

</form>


<!-- <form action="POST">
		<lable>name</lable>
		<input type="text" name="username" value="<?=$value['name'] ?>"><br>
		<label>email</label>
		<input type="email" name="email"><br>
		<label>password</label>
		<input type="password" name="password"><br>

		<input type="submit" name="update" value="update" >
	</form> -->
	
</body>
</html>