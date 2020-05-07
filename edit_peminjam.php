<?php
	include "konek.php";

	$id = $_GET['edit'];

	$query = mysql_query("select *from peminjam where peminjam_kode ='$id'");
	$row = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Peminjam | Edit Data | Perpustakaan</title>
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
					<a href="peminjam.php" style="background-color: #303840"><p>Peminjam</p></a>
					<a href="kategori.php"><p>Kategori</p></a>
					<a href="kartu_pendaftar.php"><p>Kartu Pendaftaran</p></a>
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
					<a href="peminjam.php"><p>> Peminjam </a>> Edit Data</p></a>
				</div>

				<div class="tabel">
					<div class="judul-tab">
						<a href="peminjam.php"><img src="img/left-arrow.png"></a>
						<p>Edit Data Peminjam</p>
					</div>

					<div class="form">
						<div class="isi-form">
							<form method="POST" action="proses_edit_peminjam.php" enctype="multipart/form-data">
								<table border="0" cellspacing="0" cellpadding="7" align="center">
									<tr>
										<td width="150px">Kode Peminjam</td>
										<td>:</td>
										<td><input type="text" name="kd_peminjam" placeholder="Kode Peminjaman" value="<?php echo $row['peminjam_kode']?>" required/></td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td><input type="text" name="nama" placeholder="Kode Petugas" value="<?php echo $row['peminjam_nama']?>" required/></td>
									</tr>
									<tr>
										<td>Alamat Peminjam</td>
										<td>:</td>
										<td><textarea name="alamat_peminjam" placeholder="Alamat Peminjam" required/><?php echo $row['peminjam_alamat']?></textarea></td>
									</tr>
									<tr>
										<td>Telpon Peminjaman</td>
										<td>:</td>
										<td><input type="number" name="tlp_peminjam" placeholder="Telpon Peminjam" value="<?php echo $row['peminjam_telp']?>" required/></td>
									</tr>
									<tr>
										<td>Foto Peminjam</td>
										<td>:</td>
										<td><input type="file" name="peminjam_foto" value="<?php echo $row['peminjam_foto']?>" required/></td>
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