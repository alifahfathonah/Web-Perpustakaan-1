<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$barkode_kartu = $_POST['kartu_barkode'];
		$kd_ptgs = $_POST['kd_ptgs'];
		$kd_peminjam = $_POST['kd_peminjam'];
		$tgl_buat_kartu = $_POST['tgl_buat_kartu'];
		$berlaku_sampai = $_POST['berlaku_sampai'];
		$pilih = $_POST['pilih'];

		$tambah = mysql_query("INSERT into kartu_pendaftaran values ('$barkode_kartu', '$kd_ptgs', '$kd_peminjam', '$tgl_buat_kartu', '$berlaku_sampai', '$pilih')") or die (mysql_error());
		
		if ($tambah){
			header("Location:kartu_pendaftar.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>