<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_pinjam = $_POST['kd_pinjam'];
		$kd_buku = $_POST['kd_buku'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$denda = $_POST['denda'];
		$pilih = $_POST['pilih'];

		$tambah = mysql_query("INSERT into detail_pinjam values ('$kd_pinjam', '$kd_buku', '$tgl_kembali', '$denda', '$pilih')") or die (mysql_error());
		
		if ($tambah){
			header("Location:detail_peminjaman.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>