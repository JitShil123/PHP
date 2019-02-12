<!DOCTYPE HTML
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background: green;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center text-white h1 ">Day_name_out</h2>
				<div class="card">
						<div class="card-header">
						<h3 class="mb-10">Input_date_here</h3>
						</div>
					
						<div class="card-body">
							<form class="form" action="" method="post">
								<div class="form-group">


								<label for="date">Date:</label>
									<input type="text" class="form-control " name="date" id="date" placeholder="09">
								</div>
								
								<div class="form-group">
								<label for="email">Month:</label>
									<input type="text" class="form-control " name="Month" id="Month" placeholder="10">
								</div>
								
								<div class="form-group">
									<label for="Year">Year</label>
									<input type="text" class="form-control " name="Year" id="Year" placeholder="2018">
								</div>
								
									<input type="submit"  class="btn btn-success btn-lg float-left" name="submit" value="Submit">

							</form>
						</div>
				</div>
				
			</div>

			<div class="col-md-3" style="color:white; margin-top:50px; padding-top: 50px; font-size: 50px; color: yellow;" >
					
								<?php 

								if(isset($_POST['submit'])){
											    
											    $date=$_POST['date'];
											    $Month=$_POST['Month'];
											    $Year=$_POST['Year'];
											    
											    echo "<h2>Day-Name</h2>";
											    echo $date ."-";  
									            echo $Month."-";
											    echo $Year."</br>";
											echo date('l' ,mktime(0,0,0,$Month,$date,$Year));
												
											};

											    ?>
					
			</div>	

		</div>
	</div>
</html>			