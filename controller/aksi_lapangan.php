<?php

include "../database/aksi.php";

	$obj = new Aksi;

	if(isset($_POST["tambah"]))
	{
		$kd = $obj->_kd_auto('KODE_LAPANGAN','lapangan','L');
		$item_lapangan = array(
		"KODE_LAPANGAN" => $kd,
		"JUDUL" => $_POST["lapangan"],
		"TIPE" => $_POST["tipe_lantai"]
		);
		
		if($obj->insert('lapangan', $item_lapangan)){
			header("location:../admin/index.php?page=lapangan&?msg=Data Berhasil Disimpan");
		}		
	}

	if(isset($_POST["update"])){
		$id = $_POST['id'];
		$where = array("KODE_LAPANGAN" => $id);
		$myArray = array(
			"JUDUL" => $_POST["lapangan"],
			"TIPE" => $_POST["tipe_lantai"]
		);
		if($obj->update("lapangan",$where,$myArray)){
			header("location:../admin/index.php?page=lapangan&?msg=Data Berhasil di Update");
		}		
	}

	if(isset($_GET["delete"]) == 1){
		$id = $_GET["id"] ?? null;
		$where = array("KODE_LAPANGAN"=>$id);
		if($obj->delete("lapangan",$where)){
			header("location:../admin/index.php?page=lapangan&?msg=Data Berhasil di Hapus");
		}		
	}

		
?>