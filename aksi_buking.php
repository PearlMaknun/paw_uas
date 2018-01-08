<?php

include 'database/koneksi.php';

class Booking extends koneksi{

	public function _kd_auto($field,$table,$x) {
		$query = "SELECT $field FROM $table where $field LIKE'%".$x."%' ORDER BY $field DESC LIMIT 0,1";
		$sql =mysqli_query($this->con,$query);
		$kode_temp = mysqli_fetch_row($sql);
		if ($kode_temp[0] == '')
			$kode = $x."01";
		else {
			$jum = substr($kode_temp[0], 1, 2);
			$jum++;
			if ($jum <= 9)
				$kode = $x."0" . $jum;
			elseif ($jum <= 99)
				$kode = $x. $jum;
			else
				die("ID melebihi batas");
		}
		return $kode;
	}
	
	public function insert($table,$fields){

		$query = "";
		$query .= "INSERT INTO $table";
		$query .= "(".implode(",", array_keys($fields)).") VALUES ";
		$query .= "('".implode("','", array_values($fields))."');";
		echo $query;
		$sql = mysqli_query($this->con,$query);

		if($query){
			return true;
		}
	}

	public function read($table){
		$query = "SELECT * FROM ".$table;
		$array = array();
		$sql = mysqli_query($this->con,$query);
		//echo $query;
		while($row = mysqli_fetch_assoc($sql)){
			$array[] = $row;
		}
		return $array;
	}

	public function select($table, $where){
		$query = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$query = "SELECT * FROM ".$table ." WHERE " .$condition;
		echo $query;
		$sql = mysqli_query($this->con,$query);
		$row = mysqli_fetch_array($sql);
		return $row;
	}

	public function update($table, $where, $fields){
		$query = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value) {
			$query .= $key . "='" . $value . "', ";
		}
		echo $query;
		$query = substr($query, 0, -2);
		$query = "UPDATE " . $table . " SET " . $query . " WHERE " . $condition;
		if(mysqli_query($this->con,$query)){
			return true;
		}
	}

	public function delete($table, $where){
		$query = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$query = "DELETE FROM " . $table . " WHERE " . $condition;
		if(mysqli_query($this->con,$query)){
			return true;
		}
	}
}

	$buk = new Booking;

?>