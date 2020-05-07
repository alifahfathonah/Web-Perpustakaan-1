<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_pinjaman     = $_POST['kd_pinjaman'];
		$kd_ptgs	  = $_POST['kd_ptgs'];
		$kd_peminjam	  = $_POST['kd_peminjam'];
		$tgl_pinjam	  = $_POST['tgl_pinjam'];
		$tgl_kembali	  = $_POST['tgl_kembali'];

		$update = mysql_query("UPDATE peminjaman set peminjaman_kode = '$kd_pinjaman', petugas_kode = '$kd_ptgs', peminjam_kode = '$kd_peminjam', peminjaman_tgl = '$tgl_pinjam', peminjaman_tgl_hrs_kembali = '$tgl_kembali' where peminjaman_kode = '$kd_pinjaman'") or die (mysql_error());

		if ($update){
			header("Location:peminjaman.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>