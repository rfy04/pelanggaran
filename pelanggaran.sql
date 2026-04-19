-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2026 at 06:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelanggaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelanggaran`
--

CREATE TABLE `jenis_pelanggaran` (
  `id_j_pel` int(11) NOT NULL,
  `n_j_pel` varchar(255) DEFAULT NULL,
  `poin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_pelanggaran`
--

INSERT INTO `jenis_pelanggaran` (`id_j_pel`, `n_j_pel`, `poin`) VALUES
(1, 'Terlambat', 3),
(2, 'Tanpa Izin', 5),
(3, 'Bertengkar', 10),
(4, 'Atribut Tidak Lengkap', 15),
(5, 'Membully Teman', 50),
(6, 'Pakaian Ketat', 25),
(7, 'Merokok', 75),
(9, 'Berpegangan Tangan', 35),
(10, 'Bawa Make Up', 25),
(11, 'Main HP Saat Pelajaran Berlangsung', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pel` int(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `id_j_pel` int(11) DEFAULT NULL,
  `tgl_pel` date DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pel`, `nis`, `id_j_pel`, `tgl_pel`, `ket`) VALUES
(101, 2017101, 1, '2023-01-10', 'Terlambat datang'),
(102, 2017201, 2, '2023-02-15', 'Tanpa izin meninggalkan kelas'),
(103, 2017301, 3, '2023-03-20', 'Bertengkar di koridor'),
(104, 2020021, 4, '2023-12-18', 'Rapikan Lagi Penampilannya'),
(105, 2020030, 5, '2023-12-10', 'Surat Peringatan Pertama'),
(106, 2020184, 6, '2023-12-03', 'Surat Peringatan Kedua'),
(107, 2019030, 7, '2023-12-17', 'Surat Pemanggilan Orang Tua'),
(108, 2018205, 9, '2023-12-05', 'Surat Peringatan Pertama'),
(109, 2018106, 10, '2023-12-14', 'Surat Peringatan Kedua'),
(110, 2018130, 11, '2023-12-08', 'Keluar Ruangan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `j_k` varchar(1) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `j_k`, `alamat`) VALUES
(2017101, 'Rila Fitri Yanti', 'XII-A', 'P', 'Jl. Contoh No. 123'),
(2017201, 'Yaumil Khairiyah', 'XI-B', 'P', 'Jl. Sample No. 456'),
(2017301, 'Sarlina', 'X-A', 'P', 'Jl. Demo No. 789'),
(2018106, 'Rizka Hamidah', 'IX-B5', 'P', 'Jln. Gamon Km. Kenangan nya Masih Ada'),
(2018130, 'Afifah Azzahra', 'IX-B5', 'P', 'Jln. Budiman Km.7 Sutan Syahrir'),
(2018205, 'Novita Sari', 'IX-B5', 'P', 'Jln. Gamon Km. Cinta Lama Belum Hilang'),
(2019030, 'Bian Pratama', 'IIX-A1', 'L', 'Jln. Patah Hati Km. Cinta Tak Terbalas'),
(2020021, 'Budi Sanjaya', 'X-B1', 'L', 'Jln. Diponegoro Km.5'),
(2020030, 'Putri Anjani', 'X-C2', 'P', 'Jln. Mawar Km.9'),
(2020184, 'Kurnia Azhari', 'X-D4', 'P', 'Jln. Manggopoh Km.9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_pelanggaran`
--
ALTER TABLE `jenis_pelanggaran`
  ADD PRIMARY KEY (`id_j_pel`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pel`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_j_pel` (`id_j_pel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `pelanggaran_ibfk_2` FOREIGN KEY (`id_j_pel`) REFERENCES `jenis_pelanggaran` (`id_j_pel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
