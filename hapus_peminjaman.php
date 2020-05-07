<?php
	include "konek.php";
	$id = $_GET['hapus'];

	$hapus =mysql_query("DELETE from peminjaman where peminjaman_kode = '$id'");

	if($hapus){
		header("Location:peminjaman.php");
	}else{
		echo 'Data Gagal di Hapus !';
		echo '<a href="index.php">Kembali</a>';
	}
?>