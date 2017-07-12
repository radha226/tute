<?php
require_once "all_class.php";
  //require_once 'all_class.php';
  $obj=new myclass();
  if(isset($_GET['id'])){
    //print_r($_POST);
    $view=$obj->view($_GET['id']);
    $view=$view[0];
    //echo "<pre>";
    //  print_r($view);

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>view page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>View details of <?=$view['name'] ?></h2><Br><Br>
  <form class="form-horizontal" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" value="<?=$view['name']; ?>" name="firstname" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email </label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" value="<?=$view['email'] ?>" name="email" readonly>
      </div>
     </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone No  </label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="phone" placeholder="Enter phone" 
        value="<?=$view['phone']?>" name="phone" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City</label>
      <div class="col-sm-10">          
        <input type="city" class="form-control" id="city" placeholder="Enter city" value="<?=$view['city'] ?>" name="city" readonly>

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="state">state </label>
      <div class="col-sm-10">          
       <select name="state" class="form-control" value="<?=$view['state']; ?>" readonly>
        <option value="punjab" <?php if($view['state']=='punjab'){ echo "selected='selected'";} ?>>Punjab</option>
        <option value="Goa" <?php if($view['state']=='Goa'){ echo "selected='selected'";} ?>>Goa</option>
        <option value=" Gujarat" <?php if($view['state']=='Gujarat'){ echo "selected='selected'";} ?>> Gujarat</option>
        <option value=" Haryana" <?php if($view['state']=='Haryana'){ echo "selected='selected'";} ?>> Haryana</option>

    </select>

      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="sex">Gender  </label>
      <div class="col-sm-10"> 
      <?php
      if($view['gender']==='male'){
      ?>         
      <input type="radio" name="gender" value="male" <?=$view['gender']='checked' ?> readonly> Male
      <?php }else{ ?>
       <input type="radio" name="gender" value="female" <?=$view['gender']='checked' ?> readonly> female
       <?php
     }
     ?>

      </div>
    </div>
   
      </form>
</div>

</body>
</html>
