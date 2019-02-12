<?php 

class Database { 
	public $host= DB_HOST;
	public $user= DB_USER;
	public $pass= DB_PASS;
	public $bdname= DB_NAME;

	public $link;
	public $error;

	public function  __construct(){
		$this->connectDB();
	}


	public function connectDB(){

		$this->link = new mysqli($this->host ,$this->user, $this->pass, $this->bdname);
			if(!$this->link){
				$this->error = "connection failed";

				return false;
			}
	}

	public function insert($query){
		$insert= $this->link->query($query) or die($this->link->error.__line__);

		if($insert){
			return $insert;
		}else{
			return false;
		}

	}


}



?>