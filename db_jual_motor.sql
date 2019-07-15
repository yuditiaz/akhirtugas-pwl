-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Jul 2019 pada 10.49
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jual_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'dika', 'dika', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motor`
--

CREATE TABLE `tb_motor` (
  `id_motor` varchar(30) NOT NULL,
  `id_pegawai` varchar(30) NOT NULL,
  `merk_motor` varchar(30) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `tahun_pembuatan` varchar(10) NOT NULL,
  `warna_motor` varchar(30) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `jumlah_motor` varchar(10) NOT NULL,
  `harga_motor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `id_pegawai`, `merk_motor`, `no_polisi`, `tahun_pembuatan`, `warna_motor`, `no_mesin`, `jumlah_motor`, `harga_motor`) VALUES
('IDM101', 'IDE101', 'Honda', 'K-20299-GA', '2018', 'Putih', '938383938', '1', '13000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` varchar(30) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nik_ktp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat`, `jk`, `no_hp`, `nik_ktp`) VALUES
('IDE101', 'Budi Santosa', 'Jepara', 'Laki-laki', '085888555999', '9229883928282899');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` varchar(30) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `jk_pembeli` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nik_ktp` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `umur` varchar(40) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `nama_pembeli`, `alamat_pembeli`, `jk_pembeli`, `no_hp`, `nik_ktp`, `email`, `umur`, `status`) VALUES
('IDP101', 'Ardika', 'Jepara', 'Laki-laki', '085888555999', '93393939202020', 'sardika4@gmail.com', '23', 'Belum Kawin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` varchar(30) NOT NULL,
  `id_pembeli` varchar(30) NOT NULL,
  `id_motor` varchar(30) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `bonus` varchar(50) NOT NULL,
  `kembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_pembeli`, `id_motor`, `tgl_pembelian`, `jumlah_bayar`, `bonus`, `kembalian`) VALUES
('IDA105', 'IDP101', 'IDM101', '2019-07-13', '13000000', 'Medapatkan Helm', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_motor`
--
ALTER TABLE `tb_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;