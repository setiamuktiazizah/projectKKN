-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 01:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkkkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `lihat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabai`
--

-- CREATE TABLE `project` (
--   `id_project` int(11) NOT NULL,
--   `nama_project` varchar(225) NOT NULL,
--   `bidang` varchar(1000) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

-- INSERT INTO `project` (`id_project`, `nama_project`, `bidang`) VALUES
-- (1, 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)', 'kesehatan'),
-- (2, 'Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)', 'kesehatan'),
-- (3, 'Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma', 'kesehatan'),
-- (4, 'Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif', 'pendidikan'),
-- (5, 'Penyuluhan pentingnya pendidikan bagi anak ', 'pendidikan'),
-- (6, 'Pelatihan guru untuk meningkatkan keterampilan dan pengetahuan guru dalam pengajaran dan manajemen kelas', 'pendidikan'),
-- (7, 'Pelatihan dasar-dasar komputer (ms.office)', 'teknologi'),
-- (8, 'Membangun aplikasi atau web yang dibutuhkan di desa', 'teknologi'),
-- (9, 'Membantu memperbaiki atau membangun sarana air bersih, seperti sumur bor atau instalasi air bersih sederhana', 'lingkungan'),
-- (10, 'Mengadakan kegiatan kerja bakti lingkungan', 'lingkungan'),
-- (11, 'Membuat jalur mitigasi bencana', 'lingkungan'),
-- (12, 'Mengadakan kegiatan penyuluhan dan pelatihan kepada masyarakat tentang mitigasi bencana, termasuk pengetahuan tentang risiko bencana, identifikasi bahaya dan langkah pencegahan yang dapat diambil', 'lingkungan'),
-- (13, 'Mengadakan kegiatan daur ulang sampah menjadi barang yang berguna', 'lingkungan'),
-- (14, 'Penyuluhan mengenai teknik bercocok tanam, kondisi tanaman yang sesuai berdasarkan jenis tanah, iklim, dll.', 'pertanian'),
-- (15, 'Pelatihan mengenai pembuatan dan perawatan tanaman hidroponik', 'pertanian');

-- --------------------------------------------------------

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `nama_project` varchar(225) NOT NULL,
  `bidang` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `bidang`) VALUES
(1,'desa Ponggok, Klaten ', 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)'),
(2,'desa Janti, Klaten', 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)'),
(3,'desa Delanggu, Klaten', 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)'),
(4,'desa Teloyo, Klaten', 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)'),
(5,'desa Kedunglumbu, Surakarta', 'Penyuluhan terkait isu kesehatan (kebersihan, pola makan sehat, pencegahan penyakit, pentingnya imunisasi)'),
(6, 'desa Ponggok, Klaten ','Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)'),
(7, 'desa Janti, Klaten','Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)'),
(8, 'desa Kedunglumbu, Surakarta','Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)'),
(9, 'desa Delanggu, Klaten','Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)'),
(10, 'desa Teloyo, Klaten','Pemeriksaan kesehatan gratis (pemeriksaan tekanan darah, gula darah, pengukuran berat badan, dsb)'),
(11, 'desa Ponggok, Klaten ', 'Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma'),
(12, 'desa Janti, Klaten', 'Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma'),
(13, 'desa Delanggu, Klaten', 'Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma'),
(14, 'desa Teloyo, Klaten', 'Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma'),
(15, 'desa Kedunglumbu, Surakarta', 'Pelatihan pertolongan pertama kepada masyaratakt, termasuk penanganan luka, pernapasan buatan, pendarahan, dan pengelolaan trauma'),
(16, 'desa Ponggok, Klaten ', 'Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif'),
(17, 'desa Janti, Klaten', 'Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif'),
(18, 'desa Delanggu, Klaten','Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif'),
(19, 'desa Teloyo, Klaten', 'Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif'),
(20, 'desa Kedunglumbu, Surakarta', 'Kegiatan bimbingan belajar dalam membantu siswa memahami pelajaran dan meningkatkan kemampuan akademik mereka dengan menerapkan metode pembelajaran yang inovatif'),
(21, 'desa Ponggok, Klaten ', 'Pelatihan dasar-dasar komputer (ms.office)'),
(22, 'desa Janti, Klaten', 'Pelatihan dasar-dasar komputer (ms.office)'),
(23, 'desa Delanggu, Klaten','Pelatihan dasar-dasar komputer (ms.office)'),
(24, 'desa Teloyo, Klaten', 'Pelatihan dasar-dasar komputer (ms.office)'),
(25, 'desa Kedunglumbu, Surakarta', 'Pelatihan dasar-dasar komputer (ms.office)');


--
-- Table structure for table `desc_kriteria`
--

CREATE TABLE `desc_kriteria` (
  `id_desc` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desc_kriteria`
--

INSERT INTO `desc_kriteria` (`id_desc`, `id_kriteria`, `deskripsi`, `nilai`) VALUES
(1, 1, 'mudah (bisa dilalui kendaraan besar, hampir semua jalan diaspal)', 1),
(2, 1, 'sedang (bisa dilalui roda 4 dan roda 2 tapi tidak bisa dilalui kendaraan besar, tidak semua jalan diaspal', 3),
(3, 1, 'sulit (hanya bisa dilalui roda 2, hampir seluruh jalan tidak diaspal)', 9),
(4, 2, 'sedikit (tingkat ketersediaan air bersih terbatas)', 7),
(5, 2, 'sedang (ketersediaan air cukup untuk memenuhi kebutuhan dasar populasi)', 4),
(6, 2, 'banyak (tersedia sumber air yang melimpah)', 2),
(7, 3, 'dekat (<10 km)', 2),
(8, 3, 'sedang (10-50 km)', 5),
(9, 3, 'jauh (>50 km)', 7),
(10, 4, 'tidak rawan', 2),
(11, 4, 'rawan sedang', 5),
(12, 4, 'rawan tinggi', 8),
(13, 5, 'tidak ada akses internet', 9),
(14, 5, 'tidak stabil dan jangkauan terbatas', 7),
(15, 5, 'cepat dan stabil', 3),
(16, 6, 'rendah', 6),
(17, 6, 'sedang', 5),
(18, 6, 'tinggi', 3),
(19, 7, 'baik (akses terhadap fasilitas kesehatan, sanitasi memadai)', 2),
(20, 7, 'cukup baik', 4),
(21, 7, 'kurang baik', 7),
(22, 7, 'buruk', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`) VALUES
(1, 'Sarana transportasi'),
(2, 'Sumber air'),
(3, 'Jarak desa ke pusat kota'),
(4, 'Rawan bencana'),
(5, 'Akses internet'),
(6, 'Tingkat pendidikan'),
(7, 'Tingkat kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id_nilai_alternatif` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id_nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `baris` int(11) NOT NULL,
  `kolom` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_nilai`, `id_kriteria`, `baris`, `kolom`, `nilai`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 2, 2),
(3, 1, 1, 3, 3),
(4, 1, 1, 4, 1),
(5, 1, 1, 5, 2),
(6, 1, 1, 6, 3),
(7, 1, 1, 7, 4),
(8, 2, 2, 2, 1),
(9, 2, 2, 3, 2),
(10, 2, 2, 4, 3),
(11, 2, 2, 5, 4),
(12, 2, 2, 6, 6),
(13, 2, 2, 7, 8),
(14, 3, 3, 3, 1),
(15, 3, 3, 4, 2),
(16, 3, 3, 5, 5),
(17, 3, 3, 6, 7),
(18, 3 ,3 ,7, 9),
(19, 4, 4, 4, 1),
(20, 4, 4, 5, 3),
(21, 4, 4, 6, 4),
(22, 4, 4, 7, 1),
(23, 5, 5, 5, 1),
(24, 5, 5, 6, 5),
(25, 5, 5, 7, 7),
(26, 6, 6, 6, 1),
(27, 6, 6, 7, 9),
(28, 7, 7, 7, 1),
(29, 2, 2, 1, 0.5),
(30, 3, 3, 1, 0.333),
(31, 3, 3, 2, 0.5),
(32, 4, 4, 1, 1),
(33, 4, 4, 2, 0.333),
(34, 4, 4, 3, 0.5),
(35, 5, 5, 1, 0.5),
(36, 5, 5, 2, 0.25),
(37, 5, 5 ,3, 0.2),
(38, 5, 5, 4, 0.333),
(39, 6, 6, 1, 0.333),
(40, 6, 6, 2, 0.166),
(41, 6, 6, 3, 0.143),
(42, 6, 6, 4, 0.25),
(43, 6, 6, 5, 0.2),
(44, 7, 7, 1, 0.25),
(45, 7, 7, 2, 0.125),
(46, 7, 7, 3, 0.111),
(47, 7, 7, 4, 1),
(48, 7, 7, 5, 0.143),
(49, 7, 7, 6, 0.111);

-- --------------------------------------------------------

--
-- Table structure for table `pemberian_skor`
--

CREATE TABLE `pemberian_skor` (
  `id_pemberian` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `data_awal` varchar(225) NOT NULL,
  `konversi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `cabai`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `desc_kriteria`
--
ALTER TABLE `desc_kriteria`
  ADD PRIMARY KEY (`id_desc`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id_nilai_alternatif`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pemberian_skor`
--
ALTER TABLE `pemberian_skor`
  ADD PRIMARY KEY (`id_pemberian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cabai`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `desc_kriteria`
--
ALTER TABLE `desc_kriteria`
  MODIFY `id_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id_nilai_alternatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pemberian_skor`
--
ALTER TABLE `pemberian_skor`
  MODIFY `id_pemberian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
