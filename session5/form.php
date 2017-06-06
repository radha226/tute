<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
	$name=$city= $phone=$comment=$address=$gender=$hobbies="";
    if(isset($_POST['submit'])){
        	
           
        $name=$_POST["name"];
        $city=$_POST['city'];
        $phone=$_POST['phone'];
      
       
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        $hobbies=$_POST['hobbies'];

    }

?>
    <form method="POST">
        <label>name</label><br>
        <input type="text" name="name" /><br>
        <lable>city</label><br>
        <input type ="text" name="city" /><br>
        <label> phone no </label><br>
        <input type="number" name="phone" /><br>
        <label>Address</label><br>
        <textarea cols="50%" rows="10" name="address" value=""></textarea><br>

        <label> Gender</label><br>
            <input type="radio" name="gender" value="male">
            <input type="radio" name="gender" value="female"><br><br>

        <label>hobbies</label><br>
            <input type="checkbox" name="hobbies" value="singing">singing<br>
            <input type="checkbox" name="hobbies" value="dancing">dancing<br>
            <input type="checkbox" name="hobbies" value="outing">outing<br><br>
        <input type="submit" name="submit" value="submit" />
    </form><br><BR>


<h1>Output</h1>
    <?php
        echo $name."<Br>";
        echo $city."<Br>";
         echo $phone."<Br>";
         echo $address."<Br>";
         echo $gender."<Br>";
        echo $hobbies."<Br>";
        
       
    ?>
</body>
</html>