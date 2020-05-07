<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_penerbit = $_POST['kd_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$alamat_penerbit = $_POST['alamat_penerbit'];
		$telp = $_POST['telp'];

		$tambah = mysql_query("INSERT into penerbit values ('$kd_penerbit', '$nama_penerbit', '$alamat_penerbit', '$telp')") or die (mysql_error());
		
		if ($tambah){
			header("Location:penerbit.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>