-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2020 pada 10.50
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertanian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_pertanian`
--

CREATE TABLE `berita_pertanian` (
  `id_berita` varchar(6) NOT NULL,
  `nama_berita` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_pertanian`
--

INSERT INTO `berita_pertanian` (`id_berita`, `nama_berita`, `keterangan`) VALUES
('BR0001', 'Efek Covid 19 pada pertanian', 'Kompas.com'),
('BR0002', 'Berita Pertanian Pada 2018', 'Kompas.com'),
('BR0003', 'Gatau Berita Apa', 'wkwkwkw.com'),
('BR0004', 'Beritanya ilang', 'gabut.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_pertanian`
--
ALTER TABLE `berita_pertanian`
  ADD PRIMARY KEY (`id_berita`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
