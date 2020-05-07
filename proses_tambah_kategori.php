<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_ktgr     = $_POST['kd_ktgr'];
		$nama_ktgr	  = $_POST['nama_ktgr'];

		$tambah = mysql_query("INSERT into kategori values ('$kd_ktgr', '$nama_ktgr')") or die (mysql_error());
		
		if ($tambah){
			header("Location:kategori.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>