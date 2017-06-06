<?php
	require_once "class.php";
	$obj=new departmeant();
	$listing=$obj->selectdata();
	// echo "<pre>";
	// print_r($listing);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>listing</title>
</head>
<body>
	<form>
		<table border="1" width=100%;>
		<h3>Listing of Employee</h3>
		<tr>
			<td>Employee_Id</td>
			<td>Name</td>
			<td>department</td>
			<td>Role</td>
			<td>Fees</td>
			
			
			<td colspan="3">Action</td>
		</tr>
		<?php
			foreach($listing as $key=>$value){


		?>
			<tr>
				<td><?=$value['employee_id']; ?></td>
				<td><?=$value['emp_name']; ?></td>
				<td><?=$value['department'] ?></td>
				<td><?=$value['role'] ?></td>
				<td><?=$value['fees'] ?></td>
				
				<td><a href="view.php?id=<?=$value['employee_id'] ?>">view</a></td>
				<td><a href="edit.php?id=<?=$value['employee_id'] ?>">Edit</a></td>
				<td><a href="delete.php?id=<?=$value['employee_id'] ?>">Delete</a></td>
			</tr>
			<?php
		}
		?>
		</table>
	</form>
</body>
</html>