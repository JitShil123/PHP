<?php 

/**
 * magic method
 */
class ClassName
{
	
	public $name;

	public function display(){
		echo "function method";
	}

	public function __get($onno){
		echo "Name : ".$onno;
	}

	public function __set($a,$b){
		echo "undefined $a->$b";
	}

	public function __call($a,$b){
		echo "method = ".$a." value =".implode(' ', $b);
	}
}

$obj= new ClassName;
$obj-> display();
echo "</br>";
$obj-> Bishwajit;
echo "</br>";
$obj->age=21;
echo "</br>";
$obj->notun(1,13,4,5,5);


?>