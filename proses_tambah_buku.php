<?php
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_buku     = $_POST['kd_buku'];
		$kd_ktgr	  = $_POST['kd_ktgr'];
		$kd_penerbit	  = $_POST['kd_penerbit'];
		$judul_buku	  = $_POST['judul_buku'];
		$jml_buku	  = $_POST['jml_buku'];
		$desc     = $_POST['desc_buku'];
		$pengarang        = $_POST['pengarang'];
		$thn_terbit      = $_POST['thn_terbit'];

		$tambah = mysql_query("insert into buku values('$kd_buku','$kd_ktgr','$kd_penerbit','$judul_buku','$jml_buku','$desc','$pengarang','$thn_terbit')") or die (mysql_error());

		if($tambah){
			header ("location:index.php");
			die();
		}else{
			echo 'Data Gagal Di Tambahkan !!';
			echo '<a herf ="index.php"> kembali</a>';
		}
	}
?>