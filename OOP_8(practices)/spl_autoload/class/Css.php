<?php 

/**
 * Css
 */
class Css
{
	public $name= "Jit shil";
	public $age= 21;

	private $new= "Private";
	protected $num= 34555;

	public function display(){
		echo "Inner class"."</br>";
		foreach ($this as $key => $value) {
			echo $key."=".$value."</br>";
		}
	}

}


?>