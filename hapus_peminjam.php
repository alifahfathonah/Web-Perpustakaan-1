<?php
	include "konek.php";
	$id = $_GET['hapus'];

	$hapus =mysql_query("DELETE from peminjam where peminjam_kode = '$id'");

	if($hapus){
		header("Location:peminjam.php");
	}else{
		echo 'Data Gagal di Hapus !';
		echo '<a href="peminjam.php">Kembali</a>';
	}
?>