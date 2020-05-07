<?php 
	include "konek.php";

	if (isset($_POST['simpan'])){
		$kd_penerbit = $_POST['kd_penerbit'];
		$nama_penerbit = $_POST['nama_penerbit'];
		$alamat_penerbit = $_POST['alamat_penerbit'];
		$telp = $_POST['telp'];

		$update = mysql_query("UPDATE penerbit set penerbit_kode = '$kd_penerbit', penerbit_nama = '$nama_penerbit', penerbit_alamat = '$alamat_penerbit', penerbit_telp = '$telp' where penerbit_kode = '$kd_penerbit'") or die (mysql_error());
		
		if ($update){
			header("Location:penerbit.php");
			die;
		}else{
			echo "Gagal Edit";
		}
	}
 ?>