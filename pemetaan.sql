-- Adminer 4.8.1 MySQL 5.7.40 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `riwayat`;
CREATE TABLE `riwayat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal` date NOT NULL,
  `Latitude` decimal(5,2) NOT NULL,
  `Longitude` decimal(5,2) NOT NULL,
  `Hujan` decimal(5,2) NOT NULL,
  `Kelembapan` decimal(5,2) NOT NULL,
  `Suhu` decimal(5,2) NOT NULL,
  `Tanah` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `riwayat` (`ID`, `Tanggal`, `Latitude`, `Longitude`, `Hujan`, `Kelembapan`, `Suhu`, `Tanah`) VALUES
(1,	'2022-12-07',	-5.17,	119.62,	412.26,	70.45,	25.68,	302);

DROP TABLE IF EXISTS `syarat`;
CREATE TABLE `syarat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Komoditas` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `HujanMin` int(11) NOT NULL,
  `HujanMax` int(11) NOT NULL,
  `KelembapanMin` int(11) NOT NULL,
  `KelembapanMax` int(11) NOT NULL,
  `SuhuMin` int(11) NOT NULL,
  `SuhuMax` int(11) NOT NULL,
  `TanahMin` int(11) NOT NULL,
  `TanahMax` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `syarat` (`ID`, `Komoditas`, `HujanMin`, `HujanMax`, `KelembapanMin`, `KelembapanMax`, `SuhuMin`, `SuhuMax`, `TanahMin`, `TanahMax`) VALUES
(1,	'Padi',	100,	230,	76,	86,	19,	27,	0,	1500),
(2,	'Jagung',	85,	200,	78,	83,	21,	34,	50,	1800),
(3,	'Semangka',	40,	50,	40,	60,	25,	30,	0,	600),
(4,	'Bawang Merah',	30,	250,	50,	70,	25,	32,	0,	1000),
(5,	'Cabai',	80,	250,	60,	80,	16,	32,	0,	1400);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `user` (`ID`, `Username`, `Email`, `Password`) VALUES
(1,	'Syafrul',	'a.syafrul.aswar20@gmail.com',	'admin01'),
(2,	'Abdul',	'abdullahy552@gmail.com',	'admin02');

-- 2022-12-24 08:38:25
