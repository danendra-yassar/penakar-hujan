-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2021 pada 07.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hujan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hujan`
--

CREATE TABLE `data_hujan` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lima_mnt` decimal(4,1) NOT NULL,
  `sepuluh_mnt` decimal(4,1) NOT NULL,
  `limabelas_mnt` decimal(4,1) NOT NULL,
  `tigapuluh_mnt` decimal(4,1) NOT NULL,
  `empatlima_mnt` decimal(4,1) NOT NULL,
  `enampuluh_mnt` decimal(4,1) NOT NULL,
  `seratusduapuluh` decimal(4,1) NOT NULL,
  `tiga_jm` decimal(4,1) NOT NULL,
  `enam_jm` decimal(4,1) NOT NULL,
  `duabelas_jm` decimal(4,1) NOT NULL,
  `tujuh` decimal(4,1) NOT NULL,
  `delapan` decimal(4,1) NOT NULL,
  `sembilan` decimal(4,1) NOT NULL,
  `sepuluh` decimal(4,1) NOT NULL,
  `sebelas` decimal(4,1) NOT NULL,
  `duabelas` decimal(4,1) NOT NULL,
  `tigabelas` decimal(4,1) NOT NULL,
  `empatbelas` decimal(4,1) NOT NULL,
  `limabelas` decimal(4,1) NOT NULL,
  `enambelas` decimal(4,1) NOT NULL,
  `tujuhbelas` decimal(4,1) NOT NULL,
  `delapanbelas` decimal(4,1) NOT NULL,
  `sembilanbelas` decimal(4,1) NOT NULL,
  `duapuluh` decimal(4,1) NOT NULL,
  `duasatu` decimal(4,1) NOT NULL,
  `duadua` decimal(4,1) NOT NULL,
  `duatiga` decimal(4,1) NOT NULL,
  `duaempat` decimal(4,1) NOT NULL,
  `satu` decimal(4,1) NOT NULL,
  `dua` decimal(4,1) NOT NULL,
  `tiga` decimal(4,1) NOT NULL,
  `empat` decimal(4,1) NOT NULL,
  `lima` decimal(4,1) NOT NULL,
  `enam` decimal(4,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hujan`
--

INSERT INTO `data_hujan` (`id`, `tanggal`, `lima_mnt`, `sepuluh_mnt`, `limabelas_mnt`, `tigapuluh_mnt`, `empatlima_mnt`, `enampuluh_mnt`, `seratusduapuluh`, `tiga_jm`, `enam_jm`, `duabelas_jm`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duasatu`, `duadua`, `duatiga`, `duaempat`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`) VALUES
(1, '2021-02-12', '1.5', '1.5', '3.2', '0.0', '1.4', '1.6', '1.5', '1.3', '1.9', '2.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.4', '1.4', '1.0', '0.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(3, '2021-02-01', '0.3', '0.5', '0.6', '1.0', '1.2', '1.5', '2.8', '3.2', '3.3', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.3', '1.3', '0.4', '0.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(4, '2021-02-19', '3.2', '3.3', '3.5', '0.0', '3.4', '3.5', '3.0', '2.8', '2.3', '3.5', '1.2', '1.1', '3.2', '2.1', '1.3', '2.1', '3.4', '2.2', '3.2', '3.5', '3.2', '1.4', '2.4', '1.2', '4.2', '2.1', '1.3', '1.4', '2.0', '0.3', '0.4', '0.5', '0.4', '0.6'),
(5, '2021-02-09', '0.5', '0.5', '0.6', '0.0', '0.5', '0.5', '0.8', '0.5', '0.5', '0.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.2', '2.1', '1.5', '1.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(6, '2021-02-08', '0.5', '1.5', '1.2', '0.0', '1.5', '1.6', '1.5', '1.8', '1.9', '2.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.5', '1.7', '3.2', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(7, '2021-02-11', '3.2', '1.5', '1.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '2.0', '2.1', '1.3', '1.2', '0.0', '0.0', '0.0', '0.0'),
(8, '2021-03-02', '0.5', '1.5', '1.2', '0.0', '0.5', '0.5', '0.8', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.5', '1.7', '3.2', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(9, '2021-03-03', '3.2', '3.3', '3.2', '0.0', '3.4', '3.5', '3.0', '2.8', '2.3', '2.0', '0.0', '0.0', '0.0', '0.0', '1.4', '1.5', '3.4', '2.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(10, '2021-03-04', '0.5', '1.5', '1.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '2.0', '2.1', '1.3', '1.2', '0.0', '0.0', '0.0', '0.0'),
(11, '2021-03-05', '0.5', '1.5', '1.2', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.0', '0.0', '0.0', '0.0', '1.5', '0.5', '1.7', '3.2', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(12, '2021-03-06', '0.3', '0.5', '0.6', '0.0', '1.2', '1.0', '2.8', '3.2', '3.3', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.3', '1.3', '0.4', '0.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(13, '2021-03-07', '0.2', '0.4', '0.6', '0.0', '1.0', '1.0', '1.3', '1.8', '2.1', '2.1', '0.0', '0.0', '0.0', '0.0', '0.0', '0.2', '0.5', '0.3', '0.8', '0.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(14, '2021-03-08', '0.5', '1.5', '1.2', '0.0', '0.5', '1.6', '0.8', '0.5', '2.3', '0.5', '0.4', '0.5', '0.4', '0.5', '1.4', '1.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(15, '2021-03-01', '3.2', '1.5', '0.6', '0.0', '0.5', '1.0', '0.8', '1.8', '0.5', '0.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.2', '0.4', '0.2', '2.1', '1.2', '1.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(16, '2021-03-09', '3.2', '1.5', '1.2', '0.0', '0.5', '0.5', '0.8', '1.8', '0.5', '0.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '1.3', '1.2', '2.1', '1.4', '0.4', '0.6'),
(17, '2021-03-10', '0.5', '0.5', '1.2', '0.0', '0.5', '1.6', '0.8', '1.3', '2.1', '3.3', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.5', '1.7', '3.2', '3.3', '2.0', '2.1', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0'),
(18, '2021-03-11', '1.0', '0.5', '0.6', '0.0', '1.5', '1.6', '1.7', '1.8', '1.9', '2.0', '0.8', '0.7', '0.6', '0.6', '1.4', '1.5', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '0.0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hujan`
--

CREATE TABLE `hujan` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `tigapuluh` decimal(4,2) NOT NULL,
  `empatlima` decimal(4,2) NOT NULL,
  `enampuluh` decimal(4,2) NOT NULL,
  `seratusduapuluh` decimal(4,2) NOT NULL,
  `tigajam` decimal(4,2) NOT NULL,
  `enamjam` decimal(4,2) NOT NULL,
  `duabelasjam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hujan`
--

INSERT INTO `hujan` (`id`, `tanggal`, `lima`, `sepuluh`, `limabelas`, `tigapuluh`, `empatlima`, `enampuluh`, `seratusduapuluh`, `tigajam`, `enamjam`, `duabelasjam`) VALUES
(9, '2021-02-01', '0.00', '0.00', '0.30', '4.00', '0.50', '0.50', '0.80', '1.20', '1.30', '1.10'),
(10, '2021-02-02', '0.00', '0.50', '0.00', '4.00', '0.50', '0.50', '0.80', '1.20', '1.30', '1.10'),
(11, '2020-02-26', '0.00', '0.00', '0.00', '4.00', '0.50', '0.50', '0.80', '1.20', '1.30', '1.10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hujanperjam`
--

CREATE TABLE `hujanperjam` (
  `id` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuh` decimal(4,2) NOT NULL,
  `delapan` decimal(4,2) NOT NULL,
  `sembilan` decimal(4,2) NOT NULL,
  `sepuluh` decimal(4,2) NOT NULL,
  `sebelas` decimal(4,2) NOT NULL,
  `duabelas` decimal(4,2) NOT NULL,
  `tigabelas` decimal(4,2) NOT NULL,
  `empatbelas` decimal(4,2) NOT NULL,
  `limabelas` decimal(4,2) NOT NULL,
  `enambelas` decimal(4,2) NOT NULL,
  `tujuhbelas` decimal(4,2) NOT NULL,
  `delapanbelas` decimal(4,2) NOT NULL,
  `sembilanbelas` decimal(2,2) NOT NULL,
  `duapuluh` decimal(4,2) NOT NULL,
  `duasatu` decimal(4,2) NOT NULL,
  `duadua` decimal(4,2) NOT NULL,
  `duatiga` decimal(4,2) NOT NULL,
  `duaempat` decimal(4,2) NOT NULL,
  `satu` decimal(4,2) NOT NULL,
  `dua` decimal(4,2) NOT NULL,
  `tiga` decimal(4,2) NOT NULL,
  `empat` decimal(4,2) NOT NULL,
  `lima` decimal(4,2) NOT NULL,
  `enam` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hujanperjam`
--

INSERT INTO `hujanperjam` (`id`, `tanggal`, `tujuh`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `tujuhbelas`, `delapanbelas`, `sembilanbelas`, `duapuluh`, `duasatu`, `duadua`, `duatiga`, `duaempat`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`) VALUES
(9, '2021-02-01', '0.00', '0.00', '0.00', '0.00', '0.00', '1.50', '0.20', '0.40', '0.30', '2.10', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(10, '2021-02-02', '0.40', '0.50', '0.40', '0.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(11, '2020-02-26', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2.10', '1.50', '1.50', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `nip` bigint(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `jabatan`, `email`, `password`) VALUES
(22, 1, 'Admin', 'Admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_hujan`
--
ALTER TABLE `data_hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hujan`
--
ALTER TABLE `hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hujanperjam`
--
ALTER TABLE `hujanperjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_hujan`
--
ALTER TABLE `data_hujan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `hujan`
--
ALTER TABLE `hujan`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `hujanperjam`
--
ALTER TABLE `hujanperjam`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
