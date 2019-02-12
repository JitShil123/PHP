<?php 



spl_autoload_register(function($jekono){
	include "class/".$jekono.".php";
});

if(class_exists("Css")){
	$obj= new Css();
	$obj-> display()->display2();//--------------chaning process----------
	
}else{
	echo "NO method exist";
}

echo "</br>";
$obj2= new Html();
echo "</br>";
$obj3= new Java();
?>