<?php
	include "konek.php";
	$id = $_GET['hapus'];

	$hapus =mysql_query("DELETE from petugas where petugas_kode = '$id'");

	if($hapus){
		header("Location:petugas.php");
	}else{
		echo 'Data Gagal di Hapus !';
		echo '<a href="petugas.php">Kembali</a>';
	}
?>