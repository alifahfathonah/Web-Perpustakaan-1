<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_ktgr     = $_POST['kd_ktgr'];
		$nama_ktgr	  = $_POST['nama_ktgr'];

		$update = mysql_query("UPDATE kategori set kategori_kode = '$kd_ktgr', kategori_nama = '$nama_ktgr' where kategori_kode = '$kd_ktgr'") or die (mysql_error());
		
		if ($update){
			header("Location:kategori.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>