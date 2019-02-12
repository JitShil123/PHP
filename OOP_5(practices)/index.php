<?php 
//------ceil,floor & round----------

$number = 5.4;

echo ceil($number);
echo "</br>";
echo floor($number);
echo "</br>";
echo round($number);
 ?>


<?php
//-------Polymorphism-----------------------------
 class Person{

 	public $hat ="2 hands";
 	public $pa = "2 legs";

 	public function display(){

 	}
 }

 class sub extends Person{
   public $hat = "what a strong !!!";
 }

 $result = new sub;
 echo "</br>";
 echo $result -> hat;

?>





<?php 
class Person2{
 	public $hat ="2 hands";
 	private $pa = "2 legs";
 	protected $new ="something is new";

 	public function display(){
 		echo $this -> pa;
 		echo "</br> . super class---";
 		echo $this-> new;
 	}
 }

 class sub2 extends Person2{
   public function subf(){	
   	echo $this-> pa;
   	echo $this-> new;
   } 

}
 
  echo "</br>";
  $person = new Person2;
  $person -> display();

  echo "</br>";
  $result = new sub2;
  echo "</br> . Sub class---";
  echo $result ->subf();

?>




?>