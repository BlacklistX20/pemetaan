-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 08:05 AM
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
(1, 'Padi', 100, 230, 76, 86, 19, 27, 0, 1500),
(2, 'Jagung', 85, 200, 78, 83, 21, 34, 50, 1800),
(3, 'Semangka', 40, 50, 40, 60, 25, 30, 0, 600),
(4, 'Bawang Merah', 30, 250, 50, 70, 25, 32, 0, 1000),
(5, 'Cabai', 80, 250, 60, 80, 16, 32, 0, 1400);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`) VALUES
(1, 'Syafrul', 'a.syafrul.aswar20@gmail.com', 'admin01'),
(2, 'Abdul', 'abdullahy552@gmail.com', 'admin02');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
