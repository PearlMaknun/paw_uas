<?php
 use PHPUnit\Framework\TestCase;
 include 'database/koneksi.php';
 
 class belajarunittesting extends TestCase
 {
 //test penambahan...
		public function tambah(){
			$x = 5;
			$y = 5;
			echo $x. "+" .$y;
		}
 }
?>