<?php
require_once "all_class.php";
	//require_once 'all_class.php';
	$obj=new myclass();
	if(isset($_POST['submit'])){
		print_r($_POST);
		$obj->insert($_POST);

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add Employee</h2><Br><Br>
  <form class="form-horizontal" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="firstname">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email	</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="phone">Phone No	</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="city">City</label>
      <div class="col-sm-10">          
        <input type="city" class="form-control" id="city" placeholder="Enter city" name="city">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="state">state	</label>
      <div class="col-sm-10">          
       <select name="state" class="form-control">4
  			<option value="punjab">Punjab</option>
		    <option value="Goa">Goa</option>
		    <option value="	Gujarat">	Gujarat</option>
		    <option value="	Haryana">	Haryana</option>

		</select>

      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="sex">Gender	</label>
      <div class="col-sm-10">          
      <input type="radio" name="gender" value="male">Male
       <input type="radio" name="gender" value="female">female

      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
