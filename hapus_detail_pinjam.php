<?php
	include "konek.php";
	$id = $_GET['hapus'];

	$hapus =mysql_query("DELETE from detail_pinjam where peminjaman_kode = '$id'");

	if($hapus){
		header("Location:detail_peminjaman.php");
	}else{
		echo 'Data Gagal di Hapus !';
		echo '<a href="detail_peminjaman.php">Kembali</a>';
	}
?>