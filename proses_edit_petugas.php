<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_ptgs = $_POST['kd_ptgs'];
		$nama_ptgs = $_POST['nama_ptgs'];

		$update = mysql_query("UPDATE petugas set petugas_kode = '$kd_ptgs', petugas_nama = '$nama_ptgs' where petugas_kode = '$kd_ptgs'") or die (mysql_error());
		
		if ($update){
			header("Location:petugas.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>