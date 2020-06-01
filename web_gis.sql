-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2020 pada 01.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bangunan`
--

CREATE TABLE `bangunan` (
  `bangunan_id` int(11) NOT NULL,
  `bangunan_nama` varchar(100) NOT NULL,
  `bangunan_lat` varchar(100) NOT NULL,
  `bangunan_long` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bangunan`
--

INSERT INTO `bangunan` (`bangunan_id`, `bangunan_nama`, `bangunan_lat`, `bangunan_long`) VALUES
(1, 'Bangun Cafe', '110.4343843', '-7.0628697'),
(2, 'Anak Panah Cafe', '110.4339333', '-7.0626357'),
(3, 'Bertiga Cafe', '110.4361753', '-7.0652547'),
(4, 'Burjo Cafe', '110.4370456', '-7.0673298'),
(7, 'Polteknes', '110.434456', '-7.05334'),
(8, 'Bintang Cafe', '110.4543843', '-7.0728697'),
(11, 'Bulan Cafe', '110.448217', '-7.069889'),
(13, 'KOS ARA JELEK', '110.454311', '-7.05609'),
(14, 'KOS NARES CANTIK', '110.443583', '-7.057623');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidang`
--

CREATE TABLE `bidang` (
  `bidang_kode` int(11) NOT NULL,
  `bidang_nama` varchar(200) NOT NULL,
  `bidang_keterangan` text NOT NULL,
  `bidang_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bidang`
--

INSERT INTO `bidang` (`bidang_kode`, `bidang_nama`, `bidang_keterangan`, `bidang_gambar`) VALUES
(10, 'Fakultas Teknik Undip', 'Teknik Jaya', 'dekanat33.jpg'),
(20, 'FISIP Undip', 'Wilayah Fakultas Ilmuu Sosial Politik Undip', 'fisip1.png'),
(30, 'Fakultas Hukum', 'Fakultas Sosial dan Politik berdiri tanggal 1 Januari 1969 yang merupakan pemekaran dari Fakultas Hukum dan Masyarakat. Saat ini memiliki 5 Program S1, 3 Program S2 dan 2 Program Doktor.', 'Fakultas_hukum1.jpg'),
(40, 'Sekolah Vokasi', 'Universitas Diponegoro telah menyelenggarakan pendidikan vokasi khususnya program Diploma III di berbagai bidang ilmu. Selama ini, penyelenggaraan program Diploma III dilaksanakan dalam 21 Program Studi Diploma, yang terbagi dalam 4 departemen, yaitu Departemen Teknologi Industri, Departemen Sipil dan Perencanaan, Departemen Ekonomi dan Keuangan serta Departemen Sosial dan Bahasa dengan jumlah keseluruhan mahasiswa pada tahun 2016 adalah sebanyak 5.835 orang.', 'vokasi_undip1.jpg'),
(50, 'FIB', 'Fakultas Ilmu Budaya Universitas Diponegoro atau disingkat FIB UNDIP adalah salah satu fakultas di bawah Universitas Diponegoro yang mengkhususkan diri dalam ilmu pengetahuan budaya', 'fib_undip1.jpg'),
(60, 'FPIK', 'Fakultas Perikanan dan Ilmu Kelautan berdiri pada tanggal 8 Oktober 1968 merupakan pemekaran dari Fakultas Peternakan dan Perikanan. Saat ini memiliki 6 Program S1 semua terakreditasi A dan 2 Program S2 dan 1 Program Doktor.', 'fpik_undip1.jpg'),
(70, 'FSM', 'Fakultas Sains dan Matematika Universitas Diponegoro disingkat FSM UNDIP adalah salah satu Fakultas di Universitas Diponegoro, Semarang. Sebelum Tahun 2012, Fakultas Sains dan Matematika Universitas Diponegoro bernama Fakultas Matematika dan Ilmu Pengetahuan Alam', 'fsm1.jpg'),
(80, 'FEB', 'Fakultas Ekonomika dan Bisnis Universitas Diponegoro yang telah berdiri pada tanggal 14 Maret 1960 adalah salah satu Fakultas di Universitas Diponegoro, Semarang', 'febb-undip1.jpg'),
(90, 'FKM', 'Fakultas Kesehatan Masyarakat Universitas Diponegoro (FKM UNDIP) adalah satu dari lima FKM pertama di Indonesia dan merupakan lembaga pendidikan tinggi kesehatan masyarakat terkemuka serta menjadi referensi bagi institusi pendidikan tinggi sejenis lainnya di Indonesia. Sejak berdiri tahun 1985', 'fkm1.png'),
(100, 'FK', 'Fakultas Kedokteran, Universitas Diponegoro merupakan salah satu fakultas kedokteran terdepan di Indonesia. Fakultas Kedokteran Universitas Diponegoro didirikan pada 1 Oktober 1961, dan pada tahun 2011 merayakan 50 tahun keemasannya dalam memberikan tri dharma perguruan tinggi di Indonesia', 'fk_undip2.jpg'),
(110, 'FPP', 'Fakultas Peternakan dan Pertanian Universitas Diponegoro atau biasa disingkat FPP UNDIP adalah salah satu fakultas di bawah Universitas Diponegoro yang saat ini dipimpin oleh Dekan Prof. Dr. Ir. Mukh Arifin, M.Sc.', 'fppUNDIP1.jpg'),
(120, 'Fpsi', 'Fakultas Psikologi yang lebih mengarah pada Menguasai pengetahuan dasar psikologi dan teknik pengamatan objektif dalam menginterpretasikan tingkah laku manusia menurut kaidah-kaidah psikologi', 'psikologi_undip.jpg'),
(130, 'Dekanat Fakultas Teknik', 'Bagian Dekanat Lama', 'ft_lama.png');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `bidang_dokumentasi`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `bidang_dokumentasi` (
`bidang_kode` int(11)
,`bidang_nama` varchar(200)
,`bidang_keterangan` text
,`bidang_gambar` varchar(200)
,`dokumentasi_gambar` varchar(200)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `dokumentasi_id` int(11) NOT NULL,
  `bidang_kode` varchar(200) NOT NULL,
  `dokumentasi_gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`dokumentasi_id`, `bidang_kode`, `dokumentasi_gambar`) VALUES
(50, '10', 'teknik.jpg'),
(52, '30', 'fh.jpg'),
(53, '30', 'fh2.jpg'),
(54, '30', 'fh3.jpg'),
(55, '50', 'fib.jpg'),
(56, '50', 'fib2.jpg'),
(57, '50', 'fib3.jpg'),
(58, '60', 'fpik3.jpg'),
(59, '60', 'fpik2.jpg'),
(60, '60', 'fpik.jpg'),
(61, '70', 'fsm.jpg'),
(62, '70', 'fsm2.jpg'),
(63, '70', 'fsm3.jpg'),
(64, '80', 'feb.jpg'),
(65, '80', 'feb2.jpg'),
(66, '80', 'feb3.jpg'),
(67, '90', 'fkm.jpg'),
(68, '90', 'fkm3.jpg'),
(69, '90', 'fkm1.jpg'),
(70, '100', 'fk.jpg'),
(71, '100', 'fk2.jpg'),
(73, '100', 'fk3.jpg'),
(74, '110', 'fpp.jpg'),
(75, '110', 'fpp2.jpg'),
(76, '110', 'fpp3.jpg'),
(77, '120', 'fpsi.jpg'),
(78, '120', 'fpsi2.jpg'),
(79, '120', 'fpsi3.jpg'),
(80, '130', 'tekom.png'),
(81, '130', 'mastek.png'),
(82, '130', 'tekling.png'),
(83, '40', 'sv.jpg'),
(84, '40', 'sv2.jpg'),
(85, '40', 'sv3.jpg'),
(86, '20', 'fisip.jpg'),
(87, '20', 'fisip2.jpg'),
(88, '30', 'fisip3.jpg'),
(89, '130', 'ft.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'operator', '4b583376b2767b923c3e1da60d10de59', '2'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '3');

-- --------------------------------------------------------

--
-- Struktur untuk view `bidang_dokumentasi`
--
DROP TABLE IF EXISTS `bidang_dokumentasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bidang_dokumentasi`  AS  select `b`.`bidang_kode` AS `bidang_kode`,`b`.`bidang_nama` AS `bidang_nama`,`b`.`bidang_keterangan` AS `bidang_keterangan`,`b`.`bidang_gambar` AS `bidang_gambar`,`d`.`dokumentasi_gambar` AS `dokumentasi_gambar` from (`bidang` `b` left join `dokumentasi` `d` on(`b`.`bidang_kode` = `d`.`bidang_kode`)) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bangunan`
--
ALTER TABLE `bangunan`
  ADD PRIMARY KEY (`bangunan_id`);

--
-- Indeks untuk tabel `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`bidang_kode`);

--
-- Indeks untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`dokumentasi_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bangunan`
--
ALTER TABLE `bangunan`
  MODIFY `bangunan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `dokumentasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
