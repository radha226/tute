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
  if(isset($_POST['update'])){
    $obj->update($_POST,$_GET['id']);
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
  <h2>Update details of <?=$view['name'] ?></h2><Br><Br>
  <form class="form-horizontal" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" value="<?=$view['name']; ?>" name="firstname" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email </label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" value="<?=$view['email'] ?>" name="email" >
      </div>
     </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone No  </label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="phone" placeholder="Enter phone" 
        value="<?=$view['phone']?>" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City</label>
      <div class="col-sm-10">          
        <input type="city" class="form-control" id="city" placeholder="Enter city" value="<?=$view['city'] ?>" name="city" >

      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="state">state </label>
      <div class="col-sm-10">          
       <select name="state" class="form-control" value="<?=$view['state']; ?>" >
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
      <input type="radio" name="gender" value="male" <?=$view['gender']==='male'? 'checked': "" ?>>male
  
    <input type="radio" name="gender" value="female" <?=$view['gender']==='female' ? 'checked' : "" ?>>Female<br>
  

     <!--  <input type="radio" name="gender" value="male" <?php if($view['gender']==-'male'){
       $view['gender']='checked'; }?> > Male
    
       <input type="radio" name="gender" value="female" <?php if($view['gender']==='female'){
      
       $view['gender']='checked'; } ?> > female
      --> 

      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="update" class="btn btn-default">update</button>
      </div>
    </div>
  
   
      </form>
</div>

</body>
</html>
