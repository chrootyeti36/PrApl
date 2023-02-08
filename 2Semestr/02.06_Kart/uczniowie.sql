-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 07, 2023 at 11:00 AM
-- Server version: 10.4.24-MariaDB-1:10.4.24+maria~focal-log
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szkola`
--

-- --------------------------------------------------------

--
-- Table structure for table `uczniowie`
--

CREATE TABLE `uczniowie` (
  `id` int(11) NOT NULL,
  `imie` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL,
  `dataur` date DEFAULT NULL,
  `uwagi` text COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `uczniowie`
--

INSERT INTO `uczniowie` (`id`, `imie`, `nazwisko`, `dataur`, `uwagi`) VALUES
(1, 'Jan', 'Kowalski', '2013-02-07', 'Bardzo miły i uczynny.'),
(2, 'Paweł', 'Swoboda', '2014-01-13', 'Sprawia niekiedy problemy'),
(3, 'Anna', 'Korkowa', '2014-02-06', 'Wzorowa uczennica'),
(4, 'Katarzyna', 'Romanowa', '2013-07-12', 'Bardzo aktywna społecznie'),
(5, 'Wacław', 'Oszajca', '2014-08-15', 'Znany w mieście społecznik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uczniowie`
--
ALTER TABLE `uczniowie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uczniowie`
--
ALTER TABLE `uczniowie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
