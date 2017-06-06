<?php
	
	if(isset($_POST['submit'])){

		echo "<pre/>";
		print_r($_FILES);
		if($_FILES['image']['type'] == 'application/vnd.ms-excel'){
			echo "Its Excel File";
		}else{
			echo "Another File";
		}
		// move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$_FILES['image']['name']);
		// move_uploaded_file($_FILES['image']['tmp_name'], 'images/test.jpg');

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
</head>
<body>
	<form method="POST" enctype="multipart/form-data">
		<label>Select File</label>
		<input type="file" name="image" value="" />
		<input type="submit" name="submit" value="Upload" />
	</form>
</body>
</html>