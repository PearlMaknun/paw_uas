<?php

class koneksi{

	public $con;
	
	public function __construct(){
		$this->con = mysqli_connect("localhost", "root", "", "star_futsal");
		if($this->con){
		}
		else{
			echo "Not Connected";
		}
	}
}

?>