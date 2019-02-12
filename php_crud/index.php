<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center text-white h1 ">Student Form</h2>
					
					
					<div class="card">
						<div class="card-header">
						<h3 class="mb-10">Login</h3>
						</div>
					
						<div class="card-body">
							<form class="form" action="" method="post">
								<div class="form-group">


								<label for="name">name:</label>
									<input type="text" class="form-control " name="name" id="name" placeholder="name">
								</div>
								
								<div class="form-group">
								<label for="email">email</label>
									<input type="email" class="form-control " name="email" id="email" placeholder="example@gmail.com">
								</div>
								
								<div class="form-group">
									<label for="phone">phone</label>
									<input type="phone" class="form-control " name="phone" id="phone" placeholder="017....">
								</div>
								
									<input type="submit"  class="btn btn-success btn-lg float-left" name="submit" value="Submit">

							</form>
						</div>
					</div>
				
			</div>
		         
				<div class="col-md-6">
					
					<div class="card card-header text-white php">


						<?php 
						require_once('config.php');
						
						
						if(isset($_POST['submit'])){
						    
						    $name=$_POST['name'];
						    $email=$_POST['email'];
						    $phone=$_POST['phone'];
							
							$result=mysqli_query($connection,"INSERT INTO student (name,email,phone) 
							VALUES('$name','$email','$phone')");
							if($result){
							echo "<p style='color:yellow'>student add successfully</p>";
							}else{
							echo "<p style='color:red'>student add not successfully</p>";
							}
								
						}
						?>


					</div>
				</div>
				
	    </div>

	     <h2 class=text-center  >All Student</h2>
              
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>Name</th>
	        <th>Phone</th>
	        <th>Email</th>
	        <th>Action</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<?php if(isset($_GET['delete'])){
	    		$delete=$_GET['delete'];
	    		mysqli_query($connection,"DELETE FROM student where id='$delete'");}
	    	?>
	    	

	    		<div class="card">
						<div class="card-header">
							<div class="h4"><?php 
	    	require_once('config.php');
	    	if(isset($_POST['update'])){
	    		$edit=$_GET['edit'];
	    		$name=$_POST['name1'];
	    		$email=$_POST['email1'];
	    		$phone=$_POST['phone1'];
	    		$query=mysqli_query($connection,"UPDATE student SET name='$name', email='$email', 
	    			phone='$phone' where id='$edit'  ");

	    		if($query){
							 echo "<p style='color:green'>student add successfully</p>";
							}else{
							echo "<p style='color:red'>student add not successfully</p>";
							}
					
	    	}


	    	if(isset($_GET['edit'])):
	    		$edit=$_GET['edit'];
	    		$update=mysqli_query($connection,"SELECT*FROM student where id='$edit' ");
	    		$output=mysqli_fetch_all($update,MYSQLI_ASSOC);
	    		foreach ($output as  $value):
	    		?></div>
						<h3 class="mb-10">Edit</h3>
						</div>
					
						<div class="card-body">
							<form class="form" action="" method="post">
								<div class="form-group">


								<label for="name">name:</label>
									<input type="text" class="form-control " name="name1" id="name" value="<?php echo $value['name'] ?>">
								</div>
								
								<div class="form-group">
								<label for="email">email</label>
									<input type="email" class="form-control " name="email1" id="email" value="<?php echo $value['email'] ?>">
								</div>
								
								<div class="form-group">
									<label for="phone">phone</label>
									<input type="phone" class="form-control " name="phone1" id="phone" value="<?php echo $value['phone'] ?>">
								</div>
								
									<input type="submit"  class="btn btn-success btn-lg float-left" name="update" value="update">

							</form>
						</div>
					</div>

	    	<?php endforeach; endif;?>


		    <?php 
		    	$veiw_result=mysqli_query($connection,"SELECT*FROM student");
		    	$result=mysqli_fetch_all($veiw_result,MYSQLI_ASSOC);
		    	foreach($result as $item):
		    ?>

				    <tr>
				        <td><?php echo $item['name']?></td>
				        <td><?php echo $item['phone']?></td>
				        <td><?php echo $item['email']?></td>
				        
				        <td><a href="?delete=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a></td>
				         <td><a href="?edit=<?php echo $item['id'] ?>" class="btn btn-success">Edit</a></td>
				    </tr>
		    	<?php endforeach; ?>

	    </tbody>
	  </table>
	</div>
	
</body>
</html>