<?php 

//include 'class/Css.php';

spl_autoload_register(function($jekono){
	include "class/".$jekono.".php";
});

if(class_exists("Css")){
	$obj= new Css();
	if(method_exists($obj, 'display')){
		$obj-> display();
	}else{
		echo "Here is no method";
	}
	
}else{
	echo "NO method exist";
}

echo "</br>";
$obj2= new Html();
echo "</br>";
$obj3= new Java();
?>