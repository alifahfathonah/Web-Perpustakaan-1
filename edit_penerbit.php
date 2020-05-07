<?php
	include "konek.php";

	$id = $_GET['edit'];

	$query = mysql_query("SELECT * from penerbit where penerbit_kode = '$id'");
	$row = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Penerbit | Edit Data | Perpustakaan</title>
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
					<a href="penerbit.php" style="background-color: #303840"><p>Penerbit</p></a>
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
					<a href="penerbit.php"><p>> Penerbit </a>> Edit Data</p></a>
				</div>

				<div class="tabel">
					<div class="judul-tab">
						<a href="penerbit.php"><img src="img/left-arrow.png"></a>
						<p>Edit Data Penerbit</p>
					</div>

					<div class="form">
						<div class="isi-form">
							<form method="POST" action="proses_edit_penerbit.php">
								<table border="0" cellspacing="0" cellpadding="7" align="center">
									<tr>
										<td width="150px">Kode Penerbit</td>
										<td>:</td>
										<td><input type="text" name="kd_penerbit" value="<?php echo $row['penerbit_kode']?>" placeholder="Kode Penerbit" required/></td>
									</tr>
									<tr>
										<td>Nama Penerbit</td>
										<td>:</td>
										<td><input type="text" name="nama_penerbit" value="<?php echo $row['penerbit_nama']?>" placeholder="Nama Penerbit" required/></td>
									</tr>
									<tr>
										<td>Alamat Penerbit</td>
										<td>:</td>
										<td><textarea name="alamat_penerbit" placeholder="Alamat Penerbit" required><?php echo $row['penerbit_alamat']?></textarea></td>
									</tr>
									<tr>
										<td>No. Telpon</td>
										<td>:</td>
										<td><input type="number" name="telp" value="<?php echo $row['penerbit_telp']?>" placeholder="No. Telpon" required/></td>
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