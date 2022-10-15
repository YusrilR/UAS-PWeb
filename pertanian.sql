-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2020 pada 08.32
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
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_pertanian`
--

INSERT INTO `berita_pertanian` (`id_berita`, `nama_berita`, `keterangan`) VALUES
('BR0001', 'Di Tengah Wabah Covid-19, Mentan Lepas Ekspor Pertanian Senilai Rp 23,7 Miliar', 'KOMPAS.com : Wabah coronavirus disease 2019 (Covid-19) bukan hanya berdampak pada bidang kesehatan, namun juga perekonomian secara global. Meski begitu, Menteri Pertanian (Mentan) Syahrul Yasin Limpo mengatakan sektor pertanian di Indonesia haruslah tetap produktif dan tak terpengaruh wabah Covid-19. Hal itu dibuktikan Mentan dengan melepas ekspor komoditas pertanian kacang mete, olahan minyak Cashew Nut Shell Liquid (CNSL), dedek gandum, merica, dan cengkeh dari Salodong Makassar, Rabu (22/4/2020). \'Hari ini kami melepas ekspor lima kontainer mete ke Eropa dan Amerika, serta pelet ke China dengan total nilai Rp 23,7 miliar,\' kata Syahrul, seperti dalam keterangan tertulisnya. Hal tersebut sebagai bentuk nyata dukungan sektor pertanian terhadap perekonomian saat ini.'),
('BR0002', 'Mentan: Ekspor Pertanian Saat Pandemi Covid-19 Harus Meningkat\r\n\r\nArtikel ini telah tayang di Kompas', 'KOMPAS.com : Menteri Pertanian (Mentan) Syahrul Yasin Limpo mengatakan, ekspor komoditas pertanian pada masa pandemi Covid-19 harus bisa lebih berjaya atau meningkat dibanding sebelum pandemi. Dia menjelaskan, ekspor komoditas pertanian saat ini tidak mengenal pantangan apa pun dan harus tetap tersedia. Pasalnya, seluruh dunia tetap membutuhkan makanan, di antaranya komoditas rempah seperti pala, cengkeh dan lainnya. \'Artinya negara bangsa dan rakyat yang begitu banyak mengharapkan kita tidak boleh diam. Yang paling penting jaga kesehatan semua,\' ujarnya saat melepas ekspor komoditas pertanian di Kota Manado, Sulawesi Utara, Selasa (21/4/2020). Menteri yang akrab disapa SYL ini juga menegaskan, hal penting dalam menghadapi virus corona adalah mematuhi protokol kesehatan, seperti pemakaian masker.'),
('BR0003', 'Agar Kualitas Panen Meningkat, Mentan Ajak Petani Jagung di Jeneponto Manfaatkan KUR', 'KOMPAS.com : Menteri Pertanian ( Mentan) Syahrul Yasin Limpo meminta petani jagung di Kabupaten Jeneponto, Sulawesi Selatan (Sulsel), untuk memanfaatkan Kredit Usaha Rakyat ( KUR) pertanian. Hal itu ditujukan agar petani bisa melakukan pengolahan pascapanen, seperti penjemuran agar kualitas jagung baik dan memiliki harga jual lebih tinggi. \'Ada KUR pertanian sebesar Rp 50 triliun. Manfaatkan itu,\' ujar Syahrul dalam keterangan tertulis. Pernyataan itu ia sampaikan saat berkunjung ke Kabupaten Jeneponto yang merupakan salah satu sentra produksi jagung di Sulsel, Senin (20/4/2020).'),
('BR0004', 'Petani Bisa Ajukan Pembangunan Jaringan Irigasi ke Dinas Pertanian', 'KOMPAS.com - Direktur Jenderal (Dirjen) Prasarana dan Sarana Pertanian (PSP) Kementerian Pertanian (Kementan) Sarwo Edhy mengatakan, petani dapat mengajukan pembangunan Rehabilitasi Jaringan Irigasi Tersier (RJIT) berupa embung atau dam parit, ke Dinas Pertanian kabupaten atau kota masing-masing. Rumus program RJIT adalah jaringan sudah rusak, di sekitarnya ada sawah yang diairi, ada sumber air, dan ada petani. Nanti dinas bisa meneruskannya ke Direktorat Jenderal (Ditjen) PSP untuk ditindaklanjuti. \'Bantuan ini diharapkan bisa mensejahterakan petani\' ,kata Sarwo, seperti dalam keterangan tertulisnya. Pembangunan embung atau dam parit dapat meminimalisir kerugian petani sebab embung akan menampung air hujan dan mengairi sawah.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_gambar` varchar(6) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `keterangan_gambar` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_gambar`, `nama_gambar`, `keterangan_gambar`, `gambar`) VALUES
('GB001', 'Padi Sawah Hibrida', 'Merupakan Padi Hibrida', 'berita1.jpg'),
('GB002', 'Gambar 2', 'Keterangan 2', 'berita2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `padi`
--

CREATE TABLE `padi` (
  `id_padi` varchar(6) NOT NULL,
  `nama_padi` varchar(20) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `id_supplier` varchar(6) DEFAULT NULL,
  `tanggal_tanam` date NOT NULL,
  `tanggal_panen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `padi`
--

INSERT INTO `padi` (`id_padi`, `nama_padi`, `harga`, `stok`, `id_supplier`, `tanggal_tanam`, `tanggal_panen`) VALUES
('BR001', 'Barang 1', 1000, 10, 'SP001', '2020-06-01', '2020-06-08'),
('BR002', 'Barang 2', 2000, 30, 'SP001', '2020-06-01', '2020-06-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(6) NOT NULL,
  `nama_pembeli` varchar(30) NOT NULL,
  `jk` char(1) DEFAULT NULL,
  `no_telp` char(14) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `jk`, `no_telp`, `alamat`) VALUES
('PM001', 'Bagus', 'L', '082140604207', 'lengkong'),
('PM002', 'Bagus', 'P', '082140604207', 'asdasdasdasdad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pengumuman` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `nama_pengumuman`, `keterangan`) VALUES
(1, 'DIBUKA LOWONGAN PEKERJAAN ADMIN WEB', 'Kami Pertanian Anak Nolep membutuhkan seorang ADMIN WEB dengan ketentuan sebagai berikut : USIA : Min 18 dan Maks 30 thn, Lulusan SMK/SMA dan memiliki kemampuan dalam bahasa pemrograman PHP dan HTML. Dan yang paling penting mau belajar, disiplin dan giat bekerja. Untuk anda yang sekiranya ingin melamar anda bisa mengontak kami lewat email PertanianAnNolep@gmail.com'),
(2, 'MAINTENANCE WEB PADA TANGGAL 19 JUNI - 21 JUNI 2020', 'Kami mohon maaf atas ketidaknyamanan anda dikarenakan maintnenace ini karena terdapat beberapa bug yang harus diperbaiki, dan renovasi interface web');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` varchar(6) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_telp`, `alamat`) VALUES
('SP001', 'Nama Supplier 1', '082140604206', 'Ini Alamat Supplier 1'),
('SP002', 'Nama Supplier 2', '082140604207', 'Ini Alamat Supplier 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_padi` varchar(6) DEFAULT NULL,
  `id_pembeli` varchar(6) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita_pertanian`
--
ALTER TABLE `berita_pertanian`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `padi`
--
ALTER TABLE `padi`
  ADD PRIMARY KEY (`id_padi`),
  ADD KEY `fk_supplier` (`id_supplier`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_padi` (`id_padi`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `padi`
--
ALTER TABLE `padi`
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_padi` FOREIGN KEY (`id_padi`) REFERENCES `padi` (`id_padi`),
  ADD CONSTRAINT `id_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
