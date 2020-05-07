<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_pinjam = $_POST['kd_pinjam'];
		$kd_buku = $_POST['kd_buku'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$denda = $_POST['denda'];
		$pilih = $_POST['pilih'];

		$update = mysql_query("UPDATE detail_pinjam set peminjaman_kode = '$kd_pinjam', buku_kode = '$kd_buku', detail_tgl_kembali = '$tgl_kembali', detail_denda = '$denda', detail_status_kembali = '$pilih' where peminjaman_kode = '$kd_pinjam'") or die (mysql_error());
		
		if ($update){
			header("Location:detail_peminjaman.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>