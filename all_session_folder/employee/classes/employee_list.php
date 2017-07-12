<?php
  require_once 'all_class.php';
  $obj= new myclass();
  $listing=$obj->select();
//print_r($listing);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employee Listing</h2><br>
              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>City</th>
        <th>State</th>
        <th>Gender</th>
        <th  colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach($listing as $value){
    ?>
      <tr>
        <td><?=$value['name']?></td>
        <td><?=$value['email']  ?></td>
        <td><?=$value['phone'] ?></td>
        <td><?=$value['city'] ?></td>
        <td><?=$value['state'] ?></td>
        <td><?=$value['gender']?></td>
        <td><a href="view.php?id=<?=$value['id'] ?>">view</a></td>
        <td><a href="edit.php?id=<?=$value['id'] ?>">Edit</a></td>
         <td><a href="delete.php?id=<?=$value['id'] ?>">Delete</a></td>
        
      </tr>
      <?php
        }
      ?>
     </tbody>
  </table>
</div>

</body>
</html>