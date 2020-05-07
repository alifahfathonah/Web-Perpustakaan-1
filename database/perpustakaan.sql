-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2019 pada 12.58
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `buku_kode` varchar(10) NOT NULL,
  `kategori_kode` varchar(10) NOT NULL,
  `penerbit_kode` varchar(10) NOT NULL,
  `buku_judul` varchar(50) NOT NULL,
  `buku_jumlah` int(20) NOT NULL,
  `buku_deskripsi` varchar(250) NOT NULL,
  `buku_pengarang` varchar(30) NOT NULL,
  `buku_tahun_terbit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`buku_kode`, `kategori_kode`, `penerbit_kode`, `buku_judul`, `buku_jumlah`, `buku_deskripsi`, `buku_pengarang`, `buku_tahun_terbit`) VALUES
('11', '10', '100', 'Human', 12, 'Buku Human', 'Batur', 2002),
('12', '11', '101', 'Buku Bukuan', 5, 'Buku Mainan', 'Batur', 2010),
('13', '12', '102', 'Buku Ajaib', 8, 'Buku yang Ajaib', 'Batur Keneh', 2001),
('14', '13', '103', 'Judul Judulan', 9, 'Judul Buku yang Judul Judulan', 'Batur Keneh', 2017);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE IF NOT EXISTS `detail_pinjam` (
  `peminjaman_kode` varchar(10) NOT NULL,
  `buku_kode` varchar(10) NOT NULL,
  `detail_tgl_kembali` date NOT NULL,
  `detail_denda` double NOT NULL,
  `detail_status_kembali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`peminjaman_kode`, `buku_kode`, `detail_tgl_kembali`, `detail_denda`, `detail_status_kembali`) VALUES
('100', '11', '2019-12-11', 10000, 'Kembali'),
('101', '12', '2019-12-28', 0, 'Kembali'),
('102', '13', '2019-12-20', 30000, 'Kembali'),
('103', '14', '2019-12-28', 1000, 'Kembali'),
('104', '15', '2019-12-03', 20000, 'Tidak Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_pendaftaran`
--

CREATE TABLE IF NOT EXISTS `kartu_pendaftaran` (
  `kartu_barkode` varchar(10) NOT NULL,
  `petugas_kode` varchar(10) NOT NULL,
  `peminjam_kode` varchar(10) NOT NULL,
  `kartu_tgl_pembuatan` date NOT NULL,
  `kartu_tgl_akhir` date NOT NULL,
  `kartu_status_aktif` varchar(20) NOT NULL,
  `kode_kartu_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu_pendaftaran`
--

INSERT INTO `kartu_pendaftaran` (`kartu_barkode`, `petugas_kode`, `peminjam_kode`, `kartu_tgl_pembuatan`, `kartu_tgl_akhir`, `kartu_status_aktif`, `kode_kartu_status`) VALUES
('1122334455', '100', '1000', '2019-12-02', '2019-12-24', 'Aktif', 'Non-Aktif'),
('1222334455', '101', '1001', '2019-12-02', '2019-12-31', 'Aktif', 'Aktif'),
('1422334455', '104', '1004', '2019-12-23', '2019-12-25', 'Aktif', 'Aktif'),
('1522334455', '105', '1005', '2019-12-25', '2019-12-26', 'Non-Aktif', 'Non-Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_kode` varchar(10) NOT NULL,
  `kategori_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_kode`, `kategori_nama`) VALUES
('100', 'Cerita Rakyat'),
('101', 'Novel'),
('102', 'IPS'),
('103', 'Komik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`ID`, `nama`, `username`, `password`) VALUES
(1, 'Rinaldy', 'rinaldy', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjam`
--

CREATE TABLE IF NOT EXISTS `peminjam` (
  `peminjam_kode` varchar(10) NOT NULL,
  `peminjam_nama` varchar(30) NOT NULL,
  `peminjam_alamat` varchar(50) NOT NULL,
  `peminjam_telp` bigint(20) NOT NULL,
  `peminjam_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjam`
--

INSERT INTO `peminjam` (`peminjam_kode`, `peminjam_nama`, `peminjam_alamat`, `peminjam_telp`, `peminjam_foto`) VALUES
('1', 'a', 'a', 1, '17122019054352am.png'),
('1000', 'Rinaldy', 'Kp. Sukamaju', 81321876421, '17122019060550am.png'),
('1001', 'Rino', 'Kp. Cisaroni', 8372817281, '17122019060614am.png'),
('1002', 'Rizal', 'Kp. Sukamaju', 81728172817, '17122019060629am.png'),
('1003', 'Cipluk', 'Kp. Cisarino', 8928192283, '17122019060648am.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
  `peminjaman_kode` varchar(10) NOT NULL,
  `petugas_kode` varchar(10) NOT NULL,
  `peminjam_kode` varchar(10) NOT NULL,
  `peminjaman_tgl` date NOT NULL,
  `peminjaman_tgl_hrs_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_kode`, `petugas_kode`, `peminjam_kode`, `peminjaman_tgl`, `peminjaman_tgl_hrs_kembali`) VALUES
('11', '100', '1000', '2019-12-01', '2019-12-03'),
('12', '101', '1001', '2019-12-02', '2019-12-04'),
('13', '102', '1002', '2019-12-03', '2019-12-05'),
('14', '104', '1004', '2019-12-04', '2019-12-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `penerbit_kode` varchar(10) NOT NULL,
  `penerbit_nama` varchar(20) NOT NULL,
  `penerbit_alamat` varchar(50) NOT NULL,
  `penerbit_telp` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`penerbit_kode`, `penerbit_nama`, `penerbit_alamat`, `penerbit_telp`) VALUES
('101', 'Rinaldy', 'Kp. Sukamaju', 81321876421),
('102', 'Cipluk', 'Kp. Cisaroni', 83827198721),
('103', 'Rino', 'Kp. Cisaroni', 89781764281),
('104', 'Rizal', 'Kp. Sukamaju', 82817492817);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_kode` varchar(10) NOT NULL,
  `petugas_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`petugas_kode`, `petugas_nama`) VALUES
('100', 'Rinaldy HH'),
('101', 'Rino'),
('102', 'Rizal'),
('104', 'Cipluk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_kode`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`peminjaman_kode`);

--
-- Indexes for table `kartu_pendaftaran`
--
ALTER TABLE `kartu_pendaftaran`
  ADD PRIMARY KEY (`kartu_barkode`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_kode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`peminjam_kode`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`penerbit_kode`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
