<?php
	include "konek.php";

	$id = $_GET['edit'];

	$query = mysql_query("select *from buku where buku_kode ='$id'");
	$row = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Buku | Edit Data | Perpustakaan</title>
		<link rel="stylesheet" type="text/css" href="style_rm.css">
	</head>
	<body>
		<div class="navigasi">
			<div class="nav">
				<b><p>Navigasi</p></b>
			</div>
			<div class="menu">
				<div class="menu-isi">
					<a href="index.php" style="background-color: #303840"><p>Buku</p></a>
					<a href="peminjaman.php"><p>Peminjaman</p></a>
					<a href="peminjam.php"><p>Peminjam</p></a>
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
					<p>> Buku > Edit Data</p>
				</div>

				<div class="tabel">
					<div class="judul-tab">
						<a href="index.php"><img src="img/left-arrow.png"></a>
						<p>Edit Data Buku</p>
					</div>

					<div class="form">
						<div class="isi-form">
							<form method="POST" action="proses_edit_buku.php">
								<table border="0" cellspacing="0" cellpadding="7" align="center">
									<tr>
										<td width="150px">Kode Buku</td>
										<td>:</td>
										<td><input type="text" name="kd_buku" placeholder="Kode Buku" value="<?php echo $row['buku_kode']?>" required/></td>
									</tr>
									<tr>
										<td>Kode Kategori</td>
										<td>:</td>
										<td><input type="text" name="kd_ktgr" placeholder="Kode Kategori" value="<?php echo $row['kategori_kode']?>" required/></td>
									</tr>
									<tr>
										<td>Kode Penerbit</td>
										<td>:</td>
										<td><input type="text" name="kd_penerbit" placeholder="Kode Penerbit" value="<?php echo $row['penerbit_kode']?>" required/></td>
									</tr>
									<tr>
										<td>Judul Buku</td>
										<td>:</td>
										<td><input type="text" name="judul_buku" placeholder="Judul Buku" value="<?php echo $row['buku_judul']?>" required/></td>
									</tr>
									<tr>
										<td>Jumlah Buku</td>
										<td>:</td>
										<td><input type="number" name="jml_buku" placeholder="Jumlah Buku" value="<?php echo $row['buku_jumlah']?>" required/></td>
									</tr>
									<tr>
										<td>Deskripsi</td>
										<td>:</td>
										<td><textarea name="desc_buku" placeholder="Deskripsi" required><?php echo $row['buku_deskripsi']?></textarea></td>
									</tr>
									<tr>
										<td>Pengarang</td>
										<td>:</td>
										<td><input type="text" name="pengarang" placeholder="Pengarang" value="<?php echo $row['buku_pengarang']?>" required/></td>
									</tr>
									<tr>
										<td> Tahun Terbit</td>
										<td>:</td>
										<td><input type="text" name="thn_terbit" placeholder="Tahun Terbit" value="<?php echo $row['buku_tahun_terbit']?>" required/></td>
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