<?php 
include 'lib/Database.php';
include 'config/config.php';

$bd= new Database();
?>


<?php 
if(isset($_POST['submit'])){
$name= $_POST['name']; 
$age= $_POST['age']; 
$roll= $_POST['roll']; 


if($name == '' || $age == '' || $roll == ''){
  $error= "field empty";
}else{
    $query= "INSERT INTO student(name,age,roll) VALUES('$name','$age','$roll')";
    $bd->insert($query);
}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background: green; color:#fff;">



<div class="container ">
  <h2 class="text-center">Student form</h2><br/><br/>
  <h4 class="text-center" style="color: red;">
    <?php
      if(isset($error)){
          echo $error;
      }
   ?></h4>
  <form action=" " method="POST" class="col-md-6 ">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group"> 
      <label for="age">Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter Age" name="age">
    </div>
     <div class="form-group">
      <label for="roll">RollNo.:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter RollNo" name="roll">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>





</div>

</body>
</html>
