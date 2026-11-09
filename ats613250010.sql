-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2026 at 07:35 AM
-- Server version: 8.4.3
-- PHP Version: 8.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats613250010`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_010`
--

CREATE TABLE `member_010` (
  `id` int NOT NULL,
  `email` varchar(34) DEFAULT NULL,
  `password` varchar(34) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `active` enum('1','0') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member_010`
--

INSERT INTO `member_010` (`id`, `email`, `password`, `nama`, `active`) VALUES
(1, 'akuadmin@gmail.com', '0192023a7bbd73250516f069df18b500', 'Admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mobil_010`
--

CREATE TABLE `mobil_010` (
  `no_id` int NOT NULL,
  `nomor_kendaraan` varchar(12) DEFAULT NULL,
  `jenis_kendaraan` enum('Sedan','Pickup','Truk','Bemo') DEFAULT NULL,
  `pemilik` varchar(50) DEFAULT NULL,
  `tahun_pembuatan` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobil_010`
--

INSERT INTO `mobil_010` (`no_id`, `nomor_kendaraan`, `jenis_kendaraan`, `pemilik`, `tahun_pembuatan`) VALUES
(6, 'D 0001 AD', 'Pickup', 'Mas Faiz', '2004'),
(7, 'D 0015 BC', 'Bemo', 'Mas Alif', '2006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_010`
--
ALTER TABLE `member_010`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil_010`
--
ALTER TABLE `mobil_010`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_010`
--
ALTER TABLE `member_010`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobil_010`
--
ALTER TABLE `mobil_010`
  MODIFY `no_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
