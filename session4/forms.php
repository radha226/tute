<?php
if(isset($_POST['submit'])){
    // echo "<pre/>";
    // print_r($_POST['table']);
    $table = $_POST['table'];
    $length=$_POST['length'];
    $skipped=$_POST['skipped'];
    for($i=1; $i<=$length; $i++){
        if(in_array($i, $skipped)){
            echo "skippped"; 
        }else{
        echo $table."*".$i."=".$table*$i."<br>";
        }
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Enter Table</label>
        <input type="text" name="table" /><br>
        <lable>length</label>
        <input type ="text" name="length" /><br>
        <label> skipped value </label>
        <input type="text" name="skipped" />
        <input type="submit" name="submit" value="Click To Draw" />
    </form>
</body>
</html>