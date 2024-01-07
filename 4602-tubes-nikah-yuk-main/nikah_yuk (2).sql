-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2024 at 01:57 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah_yuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `id_desain` int NOT NULL,
  `nama_desain` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`id_desain`, `nama_desain`) VALUES
(1, 'Classic'),
(2, 'Blue Blossom'),
(3, 'Golden');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int NOT NULL,
  `iduser` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `iduser`, `nama`, `komentar`) VALUES
(7, 12, 'Syfa', 'oke'),
(8, 15, 'Syfa', 'keren banget');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int NOT NULL,
  `iduser` int NOT NULL,
  `tanggal` datetime NOT NULL,
  `bukti_pembayaran` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status_pembayaran` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT ' Belum Terverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `iduser`, `tanggal`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(28, 14, '2023-06-18 22:25:01', 'bukti_2.png', 'Lunas'),
(29, 15, '2024-01-04 17:36:52', 'Halaman Desain Blue Blossom (1).png', 'Lunas'),
(30, 15, '2024-01-04 17:36:53', 'Halaman Desain Blue Blossom (1)_1.png', 'Belum Terverifikasi'),
(31, 15, '2024-01-06 10:44:10', '5 3.png', 'Belum Terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int NOT NULL,
  `iduser` int NOT NULL,
  `id_desain` int NOT NULL,
  `nama_pengantin_pria` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pengantin_wanita` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_hp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi_acara` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_acara` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_acara` date NOT NULL,
  `nama_ayah_pengantin_pria` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu_pengantin_pria` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ayah_pengantin_wanita` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu_pengantin_wanita` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `ayat_kitab_suci` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto_pengantin_pria` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_pengantin_wanita` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_prewedd_satu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_galeri_satu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `norek_pengantin_pria` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `norek_pengantin_wanita` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `lagu` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status_pesanan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Dalam Proses',
  `foto_prewedd_dua` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_galeri_dua` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_galeri_tiga` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_galeri_empat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `linkundangan` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `iduser`, `id_desain`, `nama_pengantin_pria`, `nama_pengantin_wanita`, `nomor_hp`, `lokasi_acara`, `waktu_acara`, `tanggal_acara`, `nama_ayah_pengantin_pria`, `nama_ibu_pengantin_pria`, `nama_ayah_pengantin_wanita`, `nama_ibu_pengantin_wanita`, `ayat_kitab_suci`, `foto_pengantin_pria`, `foto_pengantin_wanita`, `foto_prewedd_satu`, `foto_galeri_satu`, `norek_pengantin_pria`, `norek_pengantin_wanita`, `lagu`, `tanggal_pemesanan`, `status_pesanan`, `foto_prewedd_dua`, `foto_galeri_dua`, `foto_galeri_tiga`, `foto_galeri_empat`, `linkundangan`) VALUES
(67, 14, 1, 'Rey Mbayang', 'Dinda Hauw', '082345667899', 'BRP Sovereign Plaza Ballroom', '09:00 - 16:00', '2023-06-30', 'Atmaja', 'Hani', 'Kemas', 'Husna', '\"Wanita yang baik adalah untuk lelaki yang baik. Lelaki yang baik untuk wanita yang baik pula (begitu pula sebaliknya). Bagi mereka ampunan.dan reski yang melimpah (yaitu Surga).\" (QS. An Nuur(24):26)', 'rey.jpg', 'dinda.jpg', 'prewedd1.jpg', 'galeri1.jpg', '0909766557900', '999976655799', 'its you - seizari', '2023-06-18 22:24:23', 'Selesai', 'prewedd2.jpg', 'galeri2.jpg', 'galeri3.jpg', 'galeri4.jpeg', 'http://localhost/4602-tubes-nikah-yuk-2/desainundangan/desain1/editindex1.php?id=67'),
(68, 15, 1, 'Adi', 'Ririn', '+6281358008183', 'gedung', '09.00 - selesai', '2024-01-20', 'abdul', 'maria', 'adi', 'ririn', 'ya gitu', 'Halaman (2).png', 'Detail Katalog.png', 'Halaman (2).png', 'Halaman (2).png', '123456', '123456', 'it\'s you', '2024-01-04 17:32:18', 'Dalam Proses', 'Halaman Desain Golden.png', 'Halaman Desain Golden.png', 'Halaman (1).png', 'Halaman (2)_1.png', 'default_value'),
(69, 15, 1, 'putra', 'yona', '081', 'gedung b', '09.00', '2024-01-26', 'abdul', 'maria', 'situmorang', 'riana', 'gitu ya', '5 3.png', 'Mask group.png', 'Mask group.png', 'Mask group.png', '70976789', '78900', 'its\'you', '2024-01-06 10:41:29', 'Selesai', 'Mask group_1.png', 'Mask group_1.png', 'Mask group_2.png', 'Mask group_3.png', ''),
(70, 15, 1, 'Kai', 'Jennie', '081', 'gedung b', '09.00', '2024-01-17', 'abdul', 'maria', 'situmorang', 'riana', 'ya gitu', 'Mask group.png', 'Mask group_1.png', 'Mask group_2.png', 'Mask group_4.png', '70976789', '78900', 'its\'you', '2024-01-06 11:13:12', 'Dalam Proses', 'Mask group_3.png', 'Mask group_5.png', 'Mask group_6.png', 'Mask group_7.png', 'default_value'),
(71, 15, 2, 'putra', 'yona', '081', 'gedung b', '09.00', '2024-01-24', 'abdul', 'maria', 'situmorang', 'riana', 'ya gitu ', 'Mask group_1.png', 'Mask group_2.png', 'Mask group_4.png', 'Mask group_8.png', '70976789', '78900', 'its\'you', '2024-01-06 20:49:35', 'Dalam Proses', 'Mask group_5.png', 'Mask group_9.png', 'Mask group_10.png', 'Mask group_11.png', 'default_value'),
(72, 15, 3, 'putra', 'yona', '081', 'gedung b', '09.00', '2024-01-17', 'abdul', 'maria', 'situmorang', 'riana', 'ya gitulah', 'Detail Katalog.png', 'Mask group_3.png', 'Mask group_6.png', 'Mask group_12.png', '70976789', '78900', 'its\'you', '2024-01-07 07:15:53', 'Dalam Proses', 'Mask group_7.png', 'Mask group_13.png', 'Mask group_14.png', 'Mask group_15.png', 'default_value');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(10, 'admin', 'nikahyuk1603@gmail.com', '285268f19165e2be1abaf02143cc6fa8', 1),
(14, 'Nadya', 'syfanadya_wening_27tkj@student.smktelkom-mlg.sch.id', '9fce44221f810740e02b83594a660e58', 0),
(15, 'syfanadya', 'syfanadya5@gmail.com', '15a8ba892d8983b8c2bf68e79db4850e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id_desain`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `id_desain` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
