<?php
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_pinjaman     = $_POST['kd_pinjaman'];
		$kd_ptgs	  = $_POST['kd_ptgs'];
		$kd_peminjam	  = $_POST['kd_peminjam'];
		$tgl_pinjam	  = $_POST['tgl_pinjam'];
		$tgl_kembali	  = $_POST['tgl_kembali'];

		$tambah = mysql_query("insert into peminjaman values('$kd_pinjaman','$kd_ptgs','$kd_peminjam','$tgl_pinjam','$tgl_kembali')") or die (mysql_error());

		if($tambah){
			header ("location:peminjaman.php");
			die();
		}else{
			echo 'Data Gagal Di Tambahkan !!';
			echo '<a herf ="peminjaman.php"> kembali</a>';
		}
	}
?>