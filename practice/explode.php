

<h1>simple upload file</h1>
<?php
	// if(isset($_POST['submit'])){
	// 	echo "<pre>";
	// 	print_r($_FILES);
	// 	move_uploaded_file($_FILES['fileupload']['tmp_name'], 'images/'.$_FILES['fileupload']['name']);
		
	// }
?>

<h3>upload with any random number</h3>
<?php
	if(isset($_POST['submit'])){
		echo "<pre>";
		print_r($_FILES);
		$name=$_FILES['fileupload']['name'];
		echo $name;
		$array=explode(".", $name);
		print_r($array);
		$final=end($array);
		

		if(file_exists("images/".$name)){
			$rename=rand(1,100);
			move_uploaded_file($_FILES['fileupload']['tmp_name'], 'images/'.$rename.".".$final);
			//echo "file exist";
		}else{
			//echo "image upload";
			 move_uploaded_file($_FILES['fileupload']['tmp_name'], 'images/'.$name);
		}
	}
?>

<!-- why we r using dot on line no 27 -->

<form method="post" enctype="multipart/form-data">
	<label>select a file</label>
	<input type="file" name="fileupload" value="">
	<input type="submit" name="submit" value="upload">

</form>




