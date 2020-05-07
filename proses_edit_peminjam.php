<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_peminjam     	= $_POST['kd_peminjam'];
		$nama	  			= $_POST['nama'];
		$alamat_peminjam	= $_POST['alamat_peminjam'];
		$tlp_peminjam	  	= $_POST['tlp_peminjam'];
		$peminjam_file	  	= $_FILES['peminjam_foto']['name'];
		$peminjam_tmp		= $_FILES['peminjam_foto']['tmp_name'];
		$nama_file = gmdate('dmYhisa').".png";
		$path = 'upload/'.$nama_file;

		if(move_uploaded_file($peminjam_tmp, $path)){
			$update = mysql_query("UPDATE peminjam set peminjam_kode = '$kd_peminjam', peminjam_nama = '$nama', peminjam_alamat = '$alamat_peminjam', peminjam_telp = '$tlp_peminjam', peminjam_foto = '$nama_file' where peminjam_kode = '$kd_peminjam'") or die (mysql_error());

			if ($update){
				header("Location:peminjam.php");
				die;
			}else{
				echo "Gagal Edit";
			}
		}
		
	}
 ?>