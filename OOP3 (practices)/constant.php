<?php
//constant 
class Person{
	const new= "some thing is special new";

	public function constant(){
	 echo Person::new;
	}
}

$result= new Person;
$result -> constant();


// constractor and destructor

class Person2{
	public $mobile = "<h1>START</h1> ";
	public $end ="<h1>END </h1>";
	public $History="<h2>History always written in favor of the winner </h2>";
	public static $new ="Static Variable";
	public static $property=" kisu akta";
//static function
	public static function stat(){
		echo "output";
		echo self:: $property;
	}
	public function __construct(){
		echo $this-> mobile;
	}
	public function History(){
		echo $this-> History;
	}
	public function __destruct(){
		echo $this-> end;
	}
}


$result= new Person2;
$result -> History();

// static 
Person2 :: stat();
echo "<br/>";
echo Person2 ::  $new;
?>