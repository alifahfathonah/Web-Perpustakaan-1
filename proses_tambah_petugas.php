<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_ptgs = $_POST['kd_ptgs'];
		$nama_ptgs = $_POST['nama_ptgs'];

		$tambah = mysql_query("INSERT into petugas values ('$kd_ptgs', '$nama_ptgs')") or die (mysql_error());
		
		if ($tambah){
			header("Location:petugas.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>