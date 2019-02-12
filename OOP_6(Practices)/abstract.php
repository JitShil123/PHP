<?php 
//-------------------------abstract-------------------------------
abstract class student {
	public $name ="Jit shil";
	public function name(){
		echo $this-> name;
	}

	abstract public function age();
}

	
	class sub extends student{
		public function display(){
			parent:: name();
		}
		public function age(){
			echo "age is 21";
		}
	}


	$output= new sub();
	echo $output -> display();
	echo "<br/>";
	$output -> age(); 


//-------------------------Interface------------------------------	
?>