-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2019 pada 05.45
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pondok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_label` int(4) NOT NULL DEFAULT '0',
  `judul` varchar(100) NOT NULL,
  `isi` varchar(4000) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `id_label`, `judul`, `isi`, `gambar`) VALUES
(115, '2019-04-23', 1, 'aq', 'gbevfs', 'a-sorotan.png'),
(116, '2019-04-23', 2, 'sdv', 'ebfs', 'hsn.png'),
(117, '2019-04-23', 1, 'htger', 'fvsdax', 'k-sorotan.png'),
(118, '2019-04-23', 1, 'hghghh', 'hghgh', 'asyghil.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `counter`
--

CREATE TABLE `counter` (
  `id_counter` int(10) NOT NULL,
  `id_san` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `no` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(40) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`no`, `tanggal`, `judul`, `gambar`) VALUES
(3, '2019-04-08', 'C', 'm-sorotan.png'),
(5, '2019-04-08', 'fg', 'a-sorotan.png'),
(6, '2019-04-09', 'jajal', 'a-sorotan.png'),
(7, '2019-04-12', 'ahz', 'ahzaab.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `label`
--

CREATE TABLE `label` (
  `id_label` int(11) NOT NULL,
  `ket` varchar(30) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `label`
--

INSERT INTO `label` (`id_label`, `ket`) VALUES
(1, 'Kegiatan Internal'),
(2, 'Kegiatan Eksternal'),
(3, 'Ilmu Agama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(2, 'Aku', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User'),
(8, 'Achmad Najib Ibrahim', '130001', 'c17c0258253573f1bb1ff72942290595', 'User'),
(9, 'erna', 'erna', '950a4152c2b4aa3ad78bdd6b366cc179', 'User'),
(11, 'Bondan', '160001', 'd038525aa657fd736c8fabfa99610c2c', 'User'),
(12, 'aku ini', '111', '698d51a19d8a121ce581499d7b701668', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `no` int(4) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `notelp` int(20) NOT NULL,
  `pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`no`, `nama`, `email`, `notelp`, `pesan`) VALUES
(1, 'Najib Ibrahim', 'najibibra10@gmail.com', 2147483647, 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `santri`
--

CREATE TABLE `santri` (
  `id_no` int(5) NOT NULL,
  `nama_san` varchar(30) NOT NULL,
  `id_san` int(10) NOT NULL,
  `tempat_san` text NOT NULL,
  `tanggal_san` date NOT NULL,
  `jkel_san` varchar(11) NOT NULL,
  `tahun_san` int(4) NOT NULL,
  `alamat_san` varchar(150) NOT NULL,
  `status_san` varchar(20) NOT NULL,
  `tagihan_san` int(11) NOT NULL,
  `total_san` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `santri`
--

INSERT INTO `santri` (`id_no`, `nama_san`, `id_san`, `tempat_san`, `tanggal_san`, `jkel_san`, `tahun_san`, `alamat_san`, `status_san`, `tagihan_san`, `total_san`) VALUES
(0, 'Aku adalah', 1, 'Grobogan', '2001-01-01', 'Perempuan', 1, 'a', 'Aktif', 2, 600000),
(2, 'Bondan', 160001, 'Semarang', '2001-01-01', 'Perempuan', 2016, 'qqq																																													', 'Boyong', 2, 600000),
(9, 'Achmad Najib Ibrahim', 130001, 'Grobogan', '1998-03-18', 'Laki-laki', 2013, 'Grobogan', 'Aktif', 3, 900000),
(11, 'aku najib', 122222, 'Grobogan', '2016-02-01', 'Laki-laki', 2016, 'Pedurungan', 'Aktif', 0, 0),
(12, 'erna', 312, 'Kendal', '1999-02-11', 'Perempuan', 2011, 'kaliwungu rt rw kecamatan apa kabupaten kendal kal', 'Boyong', 12, 3600000),
(13, 'rosalina', 222, 'Klaten', '1980-12-31', 'Perempuan', 2001, 'desa sumberjosari rt rw rt rw kecamatan kecamatan kabupaten kabupaten kabupaten kabupaten', 'Boyong', 1, 300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `no` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(20) NOT NULL,
  `gambar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`no`, `tanggal`, `judul`, `gambar`) VALUES
(56, '2019-04-08', 'tr', 'asyghil fb.png'),
(59, '2019-04-11', 'l', 'hsn3.png'),
(67, '2019-04-11', 'jajal', 'coba web.png'),
(68, '2019-04-11', 'coba b', 'coba web5.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id_counter`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_no`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT untuk tabel `counter`
--
ALTER TABLE `counter`
  MODIFY `id_counter` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `label`
--
ALTER TABLE `label`
  MODIFY `id_label` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `santri`
--
ALTER TABLE `santri`
  MODIFY `id_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
