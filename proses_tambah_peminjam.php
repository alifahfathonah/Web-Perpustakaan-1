<?php
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_peminjam    	= $_POST['kd_peminjam'];
		$nama	  			= $_POST['nama'];
		$alamat_peminjam	= $_POST['alamat_peminjam'];
		$tlp_peminjam	  	= $_POST['tlp_peminjam'];
		$peminjam_file	  	= $_FILES['peminjam_foto']['name'];
		$peminjam_tmp		= $_FILES['peminjam_foto']['tmp_name'];
		$nama_file = gmdate('dmYhisa').".png";
		$path = 'upload/'.$nama_file;

		if (move_uploaded_file($peminjam_tmp, $path)){
			$tambah = mysql_query("insert into peminjam values('$kd_peminjam','$nama','$alamat_peminjam','$tlp_peminjam','$nama_file')") or die (mysql_error());

			if($tambah){
				header ("location:peminjam.php");
				die();
			}else{
				echo 'Data Gagal Di Tambahkan !!';
				echo '<a herf ="peminjam.php"> kembali</a>';
			}
		}
		
	}
?>