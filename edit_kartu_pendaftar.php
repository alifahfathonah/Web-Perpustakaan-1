<?php
	include "konek.php";

	$id = $_GET['edit'];

	$query = mysql_query("SELECT * from kartu_pendaftaran where kartu_barkode = '$id'");
	$row = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kartu Pendaftaran | Edit Data | Perpustakaan</title>
		<link rel="stylesheet" type="text/css" href="style_rm.css">
	</head>
	<body>
		<div class="navigasi">
			<div class="nav">
				<b><p>Navigasi</p></b>
			</div>
			<div class="menu">
				<div class="menu-isi">
					<a href="index.php"><p>Buku</p></a>
					<a href="peminjaman.php"><p>Peminjaman</p></a>
					<a href="peminjam.php"><p>Peminjam</p></a>
					<a href="kategori.php"><p>Kategori</p></a>
					<a href="kartu_pendaftar.php" style="background-color: #303840"><p>Kartu Pendaftaran</p></a>
					<a href="detail_peminjaman.php"><p>Detail Peminjaman</p></a>
					<a href="penerbit.php"><p>Penerbit</p></a>
					<a href="petugas.php"><p>Petugas</p></a>
					<div class="logout">
						<a href="logout.php"><p>Logout</p></a>
					</div>
				</div>
				
			</div>
		</div>
		<div id="container-utama">
			<div class="head">
				<img src="img/buku.png">
				<h3>Perpustakaan</h3>

				<div class="cari">
					<div class="kolom">
						<input type="text" placeholder="Cari..." name="cari">
						<button type="submit">Cari</button>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="alamat-link">
					<a href="kartu_pendaftar.php"><p>> Kartu Pendaftaran </a>> Edit Data</p></a>
				</div>

				<div class="tabel">
					<div class="judul-tab">
						<a href="kartu_pendaftar.php"><img src="img/left-arrow.png"></a>
						<p>Edit Data Kartu Pendaftaran</p>
					</div>

					<div class="form">
						<div class="isi-form">
							<form method="POST" action="proses_edit_kartu_pendaftar.php">
								<table border="0" cellspacing="0" cellpadding="7" align="center">
									<tr>
										<td width="150px">Barkode Kartu</td>
										<td>:</td>
										<td><input type="text" name="kartu_barkode" value="<?php echo $row['kartu_barkode']?>" placeholder="Barkode Kartu" required/></td>
									</tr>
									<tr>
										<td>Kode Petugas</td>
										<td>:</td>
										<td><input type="text" name="kd_ptgs" value="<?php echo $row['petugas_kode']?>" placeholder="Kode Petugas" required/></td>
									</tr>
									<tr>
										<td>Kode Peminjam</td>
										<td>:</td>
										<td><input type="text" name="kd_peminjam" value="<?php echo $row['peminjam_kode']?>" placeholder="Kode Peminjam" required/></td>
									</tr>
									<tr>
										<td>Tanggal Pembuatan Kartu</td>
										<td>:</td>
										<td><input type="date" name="tgl_buat_kartu" value="<?php echo $row['kartu_tgl_pembuatan']?>" required/></td>
									</tr>
									<tr>
										<td>Berlaku Sampai</td>
										<td>:</td>
										<td><input type="date" name="berlaku_sampai" value="<?php echo $row['kartu_tgl_akhir']?>" required/></td>
									</tr>
									<tr>
										<td>Status Kartu</td>
										<td>:</td>
										<td><select name="pilih" >
											<option <?php if ($row['kartu_status_aktif'] == "Aktif") { ?>selected <?php } ?> value="Aktif">Aktif</option>
											<option <?php if ($row['kartu_status_aktif'] == "Non-Aktif") { ?>selected <?php } ?> value="Non-Aktif">Non-Aktif</option>
										</select></td>
									</tr>
									<tr>
										<td colspan="3" align="right"><a href="#"><input type="submit" name="simpan" value="Simpan"></a></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
				<div class="footer">
					<div class="foot">
						<p>&copy; 2019 | Rinaldy Harisma Hidayat</p>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>