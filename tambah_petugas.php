<?php
	include "konek.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Petugas | Tambah Data | Perpustakaan</title>
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
					<a href="kartu_pendaftar.php"><p>Kartu Pendaftaran</p></a>
					<a href="detail_peminjaman.php"><p>Detail Peminjaman</p></a>
					<a href="penerbit.php"><p>Penerbit</p></a>
					<a href="petugas.php" style="background-color: #303840"><p>Petugas</p></a>
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
					<a href="kategori.php"><p>> Petugas </a>> Tambah Data</p></a>
				</div>

				<div class="tabel">
					<div class="judul-tab">
						<a href="petugas.php"><img src="img/left-arrow.png"></a>
						<p>Tambah Data Petugas</p>
					</div>

					<div class="form">
						<div class="isi-form">
							<form method="POST" action="proses_tambah_petugas.php">
								<table border="0" cellspacing="0" cellpadding="7" align="center">
									<tr>
										<td width="150px">Kode Petugas</td>
										<td>:</td>
										<td><input type="text" name="kd_ptgs" placeholder="Kode Petugas" required/></td>
									</tr>
									<tr>
										<td>Nama Petugas</td>
										<td>:</td>
										<td><input type="text" name="nama_ptgs" placeholder="Nama Petugas" required/></td>
									</tr>
									<tr>
										<td colspan="3" align="right"><a href="#"><input type="submit" name="simpan" value="Simpan"></a></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
				<div class="footer" style="margin-top: 165px;">
					<div class="foot">
						<p>&copy; 2019 | Rinaldy Harisma Hidayat</p>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>