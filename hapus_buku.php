<?php
	include "konek.php";
	$id = $_GET['hapus'];

	$hapus =mysql_query("DELETE from buku where buku_kode = '$id'");

	if($hapus){
		header("Location:index.php");
	}else{
		echo 'Data Gagal di Hapus !';
		echo '<a href="index.php">Kembali</a>';
	}
?>