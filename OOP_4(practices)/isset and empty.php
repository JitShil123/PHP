<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Isset and empty</title>
</head>
<body>
<!---------------------OOP--4 practice------------------>
	<h2>isset and empty</h2>
<?php 
	//isset
	$x="kisu akta";
	$result= isset($x);
	var_dump($result);

	//empty
	$resulte =empty($x);
	var_dump($resulte);
	echo "</br>"
?>


	<h2>strtoupper and strtolower</h2>
<?php 
//stroupper and strolower
	$x="kisu akta";
	$y="KISU AKTA";
	$resultx= strtoupper($x);
	$resulty= strtolower($y);
	var_dump($resultx);
	var_dump($resulty);
	echo "</br>";
?>


	<h2>ucfirst function()</h2>
<?php 
	$x= "jit shil";
	$result= ucfirst($x);
	var_dump($result);
?>


</body>
</html>