<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$barkode_kartu = $_POST['kartu_barkode'];
		$kd_ptgs = $_POST['kd_ptgs'];
		$kd_peminjam = $_POST['kd_peminjam'];
		$tgl_buat_kartu = $_POST['tgl_buat_kartu'];
		$berlaku_sampai = $_POST['berlaku_sampai'];
		$pilih = $_POST['pilih'];

		$update = mysql_query("UPDATE kartu_pendaftaran set kartu_barkode = '$barkode_kartu', petugas_kode = '$kd_ptgs', peminjam_kode = '$kd_peminjam', kartu_tgl_pembuatan = '$tgl_buat_kartu', kartu_tgl_akhir = '$berlaku_sampai', kartu_status_aktif = '$pilih' where kartu_barkode = '$barkode_kartu'") or die (mysql_error());
		
		if ($update){
			header("Location:kartu_pendaftar.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>