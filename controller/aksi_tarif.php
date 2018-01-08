<?php

include "../database/aksi.php";

	$obj = new Aksi;

	if(isset($_POST["tambah"]))
	{
		$kd = $obj->_kd_auto('KODE_TARIF','tarif','T');
		$item_tarif = array(
		"KODE_TARIF" => $kd,
		"TARIF" => $_POST["nama"],
		"HARGA" => $_POST["harga"]
		);
		
		if($obj->insert('tarif', $item_tarif)){
			header("location:../admin/index.php?page=tarif&?msg=Data Berhasil Disimpan");
		}		
	}

	if(isset($_POST["update"])){
		$id = $_POST['id'];
		$where = array("KODE_TARIF" => $id);
		$myArray = array(
			"TARIF" => $_POST["nama"],
			"HARGA" => $_POST["harga"]
		);
		if($obj->update("tarif",$where,$myArray)){
			header("location:../admin/index.php?page=tarif&?msg=Data Berhasil di Update");
		}		
	}

	if(isset($_GET["delete"]) == 1){
		$id = $_GET["id"] ?? null;
		$where = array("KODE_TARIF"=>$id);
		if($obj->delete("tarif",$where)){
			header("location:../admin/index.php?page=tarif&?msg=Data Berhasil di Hapus");
		}		
	}

		
?>