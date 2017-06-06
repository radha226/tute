<html>
    <head></head>
    <body>
    <?php
    if(isset($_POST['submit'])){
        echo"<pre>";
        print_r($_FILES);
        $name = $_FILES['image']['name'];
        
        $check=explode('.', $name);
        print_r($check);

        $ext= count($check);
        $final=$ext-1;
        echo $final;
        $file_ext=$check[$final];
        echo $file_ext;

        // if($_FILES['image']['type']==explode(',', $name)){
            
        //             move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$_FILES['image']['']);

        
        // elseif($_FILES['image']['type']=='image/jpeg'){
        //          move_uploaded_file($_FILES['image']['tmp_name'], 'imagesjpg/'.$_FILES['image']['name']);
        // }elseif($_FILES['image']['type']=='application/vnd.openxmlformats-officedocument.wordprocessingml.document'){
        //     move_uploaded_file($_FILES['image']['tmp_name'], 'docs/'.$_FILES['image']['name']);
        // }
             


    }

    ?>

<form method="POST" enctype="multipart/form-data">
		<label>Select File</label>
		<input type="file" name="image" value="" />
		<input type="submit" name="submit" value="Upload" />
	</form>
    </body>
</html>