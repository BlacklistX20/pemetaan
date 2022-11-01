-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 04:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `pemetaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `ID` int(11) NOT NULL,
  `Komoditas` varchar(255) COLLATE latin1_general_ci NOT NULL,
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
  `Username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(255) COLLATE latin1_general_ci NOT NULL
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
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
