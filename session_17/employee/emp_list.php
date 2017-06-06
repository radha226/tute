<?php
	require_once "class.php";
	$obj=new employee();
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
			<td>Id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Phone NO</td>
			<td>City</td>
			<td>State</td>
			<td>Sex</td>
			<td colspan="3">Action</td>
		</tr>
		<?php
			foreach($listing as $key=>$value){


		?>
			<tr>
				<td><?=$value['id']; ?></td>
				<td><?=$value['emp_name']; ?></td>
				<td><?=$value['email'] ?></td>
				<td><?=$value['phone_no'] ?></td>
				<td><?=$value['city'] ?></td>
				<td><?=$value['state'] ?></td>
				<td><?=$value['sex'] ?></td>
				<td><a href="view.php?id=<?=$value['id'] ?>">view</a></td>
				<td><a href="edit.php?id=<?=$value['id'] ?>">Edit</a></td>
				<td><a href="delete.php?id=<?=$value['id'] ?>">Delete</a></td>
			</tr>
			<?php
		}
		?>
		</table>
	</form>
</body>
</html>