<?php 

spl_autoload_register(function($jekono){
	include "class/".$jekono.".php";
});

if(class_exists("Css")){
	$obj= new Css();
	foreach ($obj as $key => $value) {
		echo $key."=".$value."</br>";
	}
	echo "</br>";
	$obj-> display();
	
}else{
	echo "NO method exist";
}

echo "</br>";
$obj2= new Html();
echo "</br>";
$obj3= new Java();
?>
