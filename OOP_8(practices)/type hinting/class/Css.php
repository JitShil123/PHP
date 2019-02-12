<?php 

/**
 * Css
 */
class Css
{
	public function display($jekono){
		foreach ($jekono as $key => $value) {
			echo $value[1]."</br>";
		}
		return $this;
	}
	public function display2(){
		echo "display 2 method";
		return $this;
	}


}


?>