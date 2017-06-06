<?php
include "class.php";

$obj=new myclass();
$result=$obj->selectdata();	


?>
<html>
<title>view</title>
<body>
	<form method="POST">
	<table border="1">
	
	<?php
		foreach($result as $key=>$value){
		//echo "<pre>";
		//print_r($value);
	?>
	<tr>
		<td><?= $value['id'] ?></td>
		<td><?=$value['name'] ?></td>
		<td><?=$value['email'] ?></td>
		<td><?=$value['password'] ?></td>
		<td><a href="edit.php?id=<?=$value['id'] ?>">edit</a></td>
		<td><a href="delete.php?id=<?=$value['id'] ?>">delete</a></td>
	</tr>
	<?php
} 
?>
	</table>
	</form>
</body>
</html>