-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 04:40 AM
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
-- Database: `pemetaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `iklim`
--

CREATE TABLE `iklim` (
  `ID` int(11) NOT NULL,
  `Latitude` decimal(5,2) NOT NULL,
  `Longitude` decimal(5,2) NOT NULL,
  `Bulan` int(2) NOT NULL,
  `Hujan` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `iklim`
--

INSERT INTO `iklim` (`ID`, `Latitude`, `Longitude`, `Bulan`, `Hujan`) VALUES
(1, '-5.25', '119.25', 1, '385.02'),
(2, '-5.25', '119.25', 2, '272.66'),
(3, '-5.25', '119.25', 3, '282.97'),
(4, '-5.25', '119.25', 4, '153.16'),
(5, '-5.25', '119.25', 5, '76.90'),
(6, '-5.25', '119.25', 6, '70.18'),
(7, '-5.25', '119.25', 7, '32.74'),
(8, '-5.25', '119.25', 8, '36.17'),
(9, '-5.25', '119.25', 9, '30.59'),
(10, '-5.25', '119.25', 10, '71.34'),
(11, '-5.25', '119.25', 11, '195.24'),
(12, '-5.25', '119.25', 12, '456.10'),
(13, '-5.25', '119.75', 1, '380.86'),
(14, '-5.25', '119.75', 2, '260.80'),
(15, '-5.25', '119.75', 3, '281.26'),
(16, '-5.25', '119.75', 4, '151.05'),
(17, '-5.25', '119.75', 5, '98.03'),
(18, '-5.25', '119.75', 6, '89.45'),
(19, '-5.25', '119.75', 7, '44.91'),
(20, '-5.25', '119.75', 8, '47.99'),
(21, '-5.25', '119.75', 9, '36.89'),
(22, '-5.25', '119.75', 10, '68.66'),
(23, '-5.25', '119.75', 11, '200.30'),
(24, '-5.25', '119.75', 12, '412.26'),
(25, '-5.25', '120.25', 1, '344.00'),
(26, '-5.25', '120.25', 2, '233.88'),
(27, '-5.25', '120.25', 3, '261.88'),
(28, '-5.25', '120.25', 4, '145.42'),
(29, '-5.25', '120.25', 5, '121.33'),
(30, '-5.25', '120.25', 6, '112.90'),
(31, '-5.25', '120.25', 7, '60.41'),
(32, '-5.25', '120.25', 8, '57.10'),
(33, '-5.25', '120.25', 9, '43.10'),
(34, '-5.25', '120.25', 10, '63.76'),
(35, '-5.25', '120.25', 11, '192.13'),
(36, '-5.25', '120.25', 12, '357.52');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `ID` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Latitude` decimal(5,2) NOT NULL,
  `Longitude` decimal(5,2) NOT NULL,
  `Hujan` decimal(5,2) NOT NULL,
  `Kelembapan` decimal(5,2) NOT NULL,
  `Suhu` decimal(5,2) NOT NULL,
  `Tanah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`ID`, `Tanggal`, `Latitude`, `Longitude`, `Hujan`, `Kelembapan`, `Suhu`, `Tanah`) VALUES
(1, '2022-12-07', '-5.17', '119.62', '412.26', '70.45', '25.68', 302);

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `ID` int(11) NOT NULL,
  `Komoditas` varchar(255) NOT NULL,
  `HujanMin` int(11) NOT NULL,
  `HujanMax` int(11) NOT NULL,
  `KelembapanMin` int(11) NOT NULL,
  `KelembapanMax` int(11) NOT NULL,
  `SuhuMin` int(11) NOT NULL,
  `SuhuMax` int(11) NOT NULL,
  `TanahMin` int(11) NOT NULL,
  `TanahMax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`ID`, `Komoditas`, `HujanMin`, `HujanMax`, `KelembapanMin`, `KelembapanMax`, `SuhuMin`, `SuhuMax`, `TanahMin`, `TanahMax`) VALUES
(2, 'Jagung', 100, 200, 0, 42, 25, 27, 0, 900),
(3, 'Semangka', 40, 50, 70, 100, 0, 25, 100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`) VALUES
(1, 'Syafrul', 'admin01'),
(2, 'Abdul', 'admin02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iklim`
--
ALTER TABLE `iklim`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iklim`
--
ALTER TABLE `iklim`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
