<?php 
//-------------------------interface--------------------------
interface student{
	public function display();
}
interface newone{
	public function new();
}



class output implements student, newone {
	public function display(){
		echo "Jit shil";
	}
	public function new(){
		echo "this is new one";
	}
}

$result = new output();
$result -> display();
echo "<br/>";
$result-> new();





?>