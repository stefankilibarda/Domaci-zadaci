-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 08:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `33d_5528_stefan_kilibarda`
--
CREATE DATABASE IF NOT EXISTS `33d_5528_stefan_kilibarda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `33d_5528_stefan_kilibarda`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(3) NOT NULL,
  `kolicina` smallint(5) UNSIGNED NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '198', 5, '990.00', '2021-06-17'),
(2, '492', 8, '880.00', '2021-06-17'),
(3, '618', 1, '82.50', '2021-06-17'),
(4, '468', 15, '3000.00', '2021-06-16'),
(5, '492', 10, '1000.00', '2021-05-01'),
(6, '198', 3, '540.00', '2021-05-01'),
(7, '468', 4, '880.00', '2021-06-17'),
(8, '618', 3, '225.00', '2021-06-16'),
(9, '492', 2, '200.00', '2021-05-01'),
(10, '198', 1, '180.00', '2021-06-16'),
(12, '789', 20, '4400.00', '2021-06-17'),
(13, '789', 40, '11000.00', '2021-06-17'),
(14, '789', 10, '2420.00', '2021-06-17'),
(15, '776', 30, '1500.00', '2021-05-01'),
(16, '761', 10, '800.00', '2021-05-01'),
(17, '761', 3, '264.00', '2021-06-17'),
(18, '761', 13, '1040.00', '2021-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(3) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('198', 'avokado', '180.00'),
('468', 'kumkvat', '200.00'),
('492', 'jabuka', '100.00'),
('618', 'banane', '75.00'),
('761', 'beli luk', '80.00'),
('776', 'crni luk', '50.00'),
('789', 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
