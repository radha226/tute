<style>
table,tr,td{
	border:1px solid black;
}
</style>

<?php

class myclass{

	function __construct(){

		$this->db = new PDO('mysql:host=localhost;dbname=tute','root','');
	}


	function getData(){

		$query = $this->db->prepare('select * from practice1');
		$query->execute();
		/*if($query->rowCount()>=1){
			
		}*/

		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	// function deleteData($id){
	// 	$query = $this->db->prepare('delete from practice1 where id = ?');
	// 	$query->execute(array($id));
	// 	return true;
	// }

	// function deleteCheckbox($check){
	// 	foreach ($check as $key => $value) {
	// 		$query= $this->db->prepare('delete from practice1 where id = ?');
	// 		$query->execute(array($value));
	// 	}

	// 	return true;

	// }
}


?>

<?php
$obj = new myclass();
// if(isset($_GET['id'])){
// 	$obj->deleteData($_GET['id']);
// 	header('location:insert.php');
// }
// if(isset($_POST['check'] )){
// 	$obj->deleteCheckbox($_POST['check']);
// }
$data = $obj->getData();

?>
<html>
<body>
<form method="POST">
<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>email</td>
		<td>password</td>
		<td>checked</td>
		<td>Action</td>
	</tr>

	<?php
		foreach ($data as $key => $value) {
		
		
	?>

	<tr>
		<td><?=$value['id']; ?></td>
		<td><?=$value['name']; ?></td>
		<td><?=$value['email']; ?></td>
		<td><?=$value['password'] ?></td>
		<td><input type="checkbox" value="<?=$value['id']?>" name="check[]"></td>
		<td><a href="insert.php?id=<?=$value['id']?>">Delete</a></td>
	</tr>

	<?php

	}
	?>
	<tr><td><input type="submit" name="delete"></td></tr>
</table>
</form>
</body>
</html>