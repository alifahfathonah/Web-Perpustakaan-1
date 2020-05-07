<?php
	include "konek.php";

	$id = $_GET['edit'];

	$query = mysql_query("SELECT * from detail_pinjam where peminjaman_kode = '$id'");
	$row = mysql_fetch_array($query);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Detail Peminjaman | Edit Data | Perpustakaan</title>
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
					<a href="detail_peminjaman.php" style="background-color: #303840"><p>Detail Peminjaman</p></a>
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
					<a href="detail_peminjaman.php"><p>> Detail Peminjaman </a>> Edit Data</p></a>
				</div>

				<div class="tabel">
					<div class="judul-tab">
						<a href="detail_peminjaman.php"><img src="img/left-arrow.png"></a>
						<p>Edit Data Detail Peminjaman</p>
					</div>

					<div class="form">
						<div class="isi-form">
							<form method="POST" action="proses_edit_detail_pinjam.php">
								<table border="0" cellspacing="0" cellpadding="7" align="center">
									<tr>
										<td width="150px">Kode Peminjaman</td>
										<td>:</td>
										<td><input type="text" name="kd_pinjam" value="<?php echo $row['peminjaman_kode'];?>" placeholder="Kode Peminjaman" required/></td>
									</tr>
									<tr>
										<td>Kode Buku</td>
										<td>:</td>
										<td><input type="text" name="kd_buku" value="<?php echo $row['buku_kode'];?>" placeholder="Kode Buku" required/></td>
									</tr>
									<tr>
										<td>Tanggal Kembali</td>
										<td>:</td>
										<td><input type="date" name="tgl_kembali" value="<?php echo $row['detail_tgl_kembali'];?>" required/></td>
									</tr>
									<tr>
										<td>Denda</td>
										<td>:</td>
										<td><input type="number" name="denda" value="<?php echo $row['detail_denda'];?>" placeholder="Denda" required/></td>
									</tr>
									<tr>
										<td>Status Kembali</td>
										<td>:</td>
										<td><select name="pilih">
											<option disabled selected>- Pilih -</option>
											<option <?php if ($row['detail_status_kembali'] == "Kembali") { ?>selected <?php } ?> value="Kembali">Kembali</option>	
											<option <?php if ($row['detail_status_kembali'] == "Tidak Kembali") { ?>selected <?php } ?> value="Tidak Kembali">Tidak Kembali</option>	
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