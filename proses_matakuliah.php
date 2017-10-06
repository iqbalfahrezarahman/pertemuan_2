<?php 
	include ("db.php");

	if($_GET['action'] == "add")
	{
		
		$query ="INSERT INTO matakuliah (kode_matkul, nama_matkul) VALUES ('$_POST[kode_matkul]', '$_POST[nama_matkul]')";
	}
	else if($_GET['action'] == "edit")
	{
		
		$query = "UPDATE matakuliah SET kode_matkul = '$_POST[kode_matkul]', nama_matkul = '$_POST[nama_matkul]' WHERE id=$_POST[id]";
	}
	else if($_GET['action'] == "delete")
	{
		$query = "DELETE FROM matakuliah WHERE id =$_GET[id]";
	}

	mysqli_query ($koneksi, $query);
	
	
	header ('Location: template.php?page=matakuliah');
?>