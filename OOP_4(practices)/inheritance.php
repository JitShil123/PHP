<?php 
 class Person{
 	public $one ="this is first";
 	public $two ="this is function ";
 	public $three ="this is 3rd ";

 	public function new(){
 		echo $this-> two;
 	}
 }

 class sub extends Person{
 	public $three ="Bisoyta hasyakor";

 }

	 $sub= new sub(); 
	 echo $sub-> one;
	 echo "</br>";
	 $sub-> new();
	 echo "</br>";
	echo  $sub-> three;
?>



<?php 
/*
 class Person2{
 	public $one ="this is first";
 	public $two ="this is function ";
 
 	public final function new(){
 		echo $this-> two;
 	}
 }

 class sub2 extends Person2{
 	public  function new(){
 		echo $this-> two;
 	}

 }

	 $sub= new sub2(); 
	 echo "</br>";
	 echo "</br>";
	 $sub-> new();
	 */
	 
?>