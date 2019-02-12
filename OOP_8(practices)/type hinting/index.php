<?php 



spl_autoload_register(function($jekono){
	include "class/".$jekono.".php";
});

if(class_exists("Css")){
	$obj= new Css();
	$arrayname= array(
					array('12','22','55'),
					array('12','20','60'),

	);
	$obj-> display($arrayname)->display2();
	
}else{
	echo "NO method exist";
}

echo "</br>";
$obj2= new Html();
echo "</br>";
$obj3= new Java();
?>
