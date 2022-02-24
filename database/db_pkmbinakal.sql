-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2022 pada 14.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pkmbinakal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadbd`
--

CREATE TABLE `datadbd` (
  `id_data` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `jml_penderita` int(11) NOT NULL,
  `jml_meninggal` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datadbd`
--

INSERT INTO `datadbd` (`id_data`, `id_desa`, `jml_penderita`, `jml_meninggal`, `tahun`, `created`, `updated`) VALUES
(3, 8, 4, 0, 2018, '2022-02-22 02:18:05', NULL),
(4, 1, 2, 0, 2018, '2022-02-22 02:53:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `geojson` longtext NOT NULL,
  `latitude` text NOT NULL,
  `longtitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id_desa`, `nama_desa`, `geojson`, `latitude`, `longtitude`) VALUES
(1, 'Baratan', '', '', ''),
(2, 'Binakal', '', '', ''),
(3, 'Kembangan', '', '', ''),
(4, 'Sumber Waru', '', '', ''),
(5, 'Jeruk Sok-sok', '', '', ''),
(6, 'Gading Sari', '', '', ''),
(7, 'Sumber Tengah', '', '', ''),
(8, 'Bendelan', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_nama`, `nama`, `email`, `alamat`, `telepon`, `password`) VALUES
(6, 'Ana Farida', 'E41182196@polije.ac.id', 'bondowoso', '546789064745', 'ana123'),
(9, 'feny', 'feny@gmail.com', 'jember', '12345678912', 'feny123');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_desa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_desa` (
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_desa`
--
DROP TABLE IF EXISTS `v_desa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_desa`  AS SELECT `datadbd`.`jml_penderita` AS `jml_penderita`, `datadbd`.`jml_meninggal` AS `jml_meninggal`, `datadbd`.`bulan` AS `bulan`, `datadbd`.`tahun` AS `tahun`, `desa`.`nama_desa` AS `nama_desa` FROM (`datadbd` join `desa`) WHERE `desa`.`id_desa` = `desa`.`id_desa` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datadbd`
--
ALTER TABLE `datadbd`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datadbd`
--
ALTER TABLE `datadbd`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datadbd`
--
ALTER TABLE `datadbd`
  ADD CONSTRAINT `datadbd_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
