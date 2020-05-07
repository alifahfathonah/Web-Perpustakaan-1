<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_buku     	= $_POST['kd_buku'];
		$kd_ktgr	  	= $_POST['kd_ktgr'];
		$kd_penerbit	= $_POST['kd_penerbit'];
		$judul_buku	  	= $_POST['judul_buku'];
		$jml_buku	  	= $_POST['jml_buku'];
		$desc    		= $_POST['desc_buku'];
		$pengarang      = $_POST['pengarang'];
		$thn_terbit     = $_POST['thn_terbit'];

		$update = mysql_query("UPDATE buku set buku_kode = '$kd_buku', kategori_kode = '$kd_ktgr', penerbit_kode = '$kd_penerbit', buku_judul = '$judul_buku', buku_jumlah = '$jml_buku', buku_deskripsi = '$desc', buku_pengarang = '$pengarang', buku_tahun_terbit = '$thn_terbit' where buku_kode = '$kd_buku'") or die (mysql_error());

		if ($update){
			header("Location:index.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>