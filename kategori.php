<?php
	include "konek.php";
	session_start();

	if (!isset($_SESSION['login_user'])) {
		header("Location:login.php");
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kategori | Perpustakaan</title>
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
					<a href="kategori.php" style="background-color: #303840"><p>Kategori</p></a>
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
					<a href="kategori.php"><p>> Kategori</p></a>
				</div>
				
				<div class="tabel-utama">
					<div class="judul-tab">
						<p>Data Kategori</p>
					</div>
					<table border="0" cellpadding="10" cellspacing="0" align="center">
						<tr style="background: white;">
							<td colspan="10" align="right"><a href="tambah_kategori.php"><input type="submit" name="tambah-data" value=" +   Tambah Data"></td>
						</tr>
						<tr>
							<td style="border-bottom: 1px solid #808080;" width="20px" align="center">No</td>
							<td style="border-bottom: 1px solid #808080;" width="120px" align="center">Kode Kategori</td>
							<td style="border-bottom: 1px solid #808080;" width="110px" align="center">Nama Kategori</td>
							<td style="border-bottom: 1px solid #808080;" width="80px" align="center">Aksi</td>
						</tr>

						<?php 
							$query = mysql_query("SELECT * from kategori order by kategori_kode asc") or die (mysql_error());
							if (mysql_num_rows($query) == 0) {
								echo '<tr>';
									echo '<td style="border-bottom: 1px solid #808080;" colspan="10" align="center">Tidak Ada Data !</td>';
								echo '</tr>';
							}

							$no = 1;
							while ($row = mysql_fetch_array($query)) {
								echo '<tr align="center">';
									echo '<td style="border-bottom: 1px solid #808080;">'.$no.'</td>';
									echo '<td style="border-bottom: 1px solid #808080;">'.$row['kategori_kode'].'</td>';
									echo '<td style="border-bottom: 1px solid #808080;">'.$row['kategori_nama'].'</td>';
									echo '<td style="border-bottom: 1px solid #808080;" align="center"><a href="edit_kategori.php?edit='.$row['kategori_kode'].'"><img src="img/edit.png" class="icon-aksi"/></a> <a href="hapus_kategori.php?hapus='.$row['kategori_kode'].'"><img src="img/delete.png" class="icon-aksi"/></a></td>';
								echo '</tr>';

								$no++;
							}
						 ?>
					</table>
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