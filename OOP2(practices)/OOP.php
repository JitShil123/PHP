<?php 

//OOP 1-2
class Person{

	public $har="person to person vary ";
	public $kar="public to public vary";

	public function sing(){
		echo "gan gaba naki";
	}


}

$result=new Person;
$result -> sing();
echo "<br/>";
echo $result -> har; 
echo "</br>";

//OOP 3-4
class Person1{

	public $har="person to person vary ";
	public $kar="public to public vary";
	public $something="public try to speak";

	public function sing(){
		echo $this ->something;
	}
}

$result=new Person1;
$result ->sing();

?>