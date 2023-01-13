-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2023 at 07:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi_pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `id` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`id`, `id_mhs`, `id_matkul`, `nilai`) VALUES
(17, 15, 2, '-'),
(18, 26, 1, '-'),
(19, 28, 2, '-'),
(20, 28, 3, '-');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level_akun` enum('Admin','Mahasiswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jenis_kelamin`, `alamat`, `tgl_lahir`, `pass`, `level_akun`) VALUES
(3, '2000018075', 'admin', 'L', 'Yogyakarta ha', '2023-01-10', '12345678', 'Admin'),
(15, '004', 'Arya', 'L', 'Meikarta', '2023-01-02', '12345678', 'Mahasiswa'),
(26, '0076', 'Ijat', 'L', 'Hello World', '2023-01-13', '12345678', 'Mahasiswa'),
(27, '0096', 'Reza', 'L', 'Hello World', '2023-01-09', '12345678', 'Mahasiswa'),
(28, '009', 'Opan', 'L', 'Hello World', '2023-01-17', '12345678', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sks` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `kode`, `nama`, `sks`, `sem`) VALUES
(1, 'INF1', 'Dasar-Dasar Pemrograman', 3, 1),
(2, 'INF2', 'Dasar Sistem Komputer', 2, 1),
(3, 'INF3', 'Logika Informatika', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `khs_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`),
  ADD CONSTRAINT `khs_ibfk_10` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_11` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_12` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_13` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_14` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_15` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_16` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_17` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_18` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_19` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_2` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`),
  ADD CONSTRAINT `khs_ibfk_20` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_21` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_22` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_23` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_24` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_25` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_26` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_27` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_28` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_29` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_3` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_30` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_31` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_32` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_33` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_34` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_35` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_36` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_37` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_38` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_39` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_4` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_40` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_41` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_42` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_43` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_44` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_45` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_46` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_47` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_48` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_49` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_5` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_50` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_51` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_52` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_53` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_6` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_7` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_8` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `khs_ibfk_9` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
