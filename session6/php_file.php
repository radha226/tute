<?php
    if(isset($_POST['submit'])){
        echo "<pre>";
        print_r($_FILES);
        $name=$_FILES['image']['name'];
        echo $name."<br>";

       $check=explode('.',$name);
       print_r($check);

       $ext=count($check);
       $final=$ext-1;
       echo $final;

       if(file_exists("images/".$name)){
           $rename=rand(1, 50);
           
           move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$rename.".".$check[$final]);
       }else{
             move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$_FILES['image']['name']);
       }
        




    }

?>