<?php
	include "konek.php";
	$id = $_GET['hapus'];

	$hapus =mysql_query("DELETE from kategori where kategori_kode = '$id'");

	if($hapus){
		header("Location:kategori.php");
	}else{
		echo 'Data Gagal di Hapus !';
		echo '<a href="kategori.php">Kembali</a>';
	}
?>