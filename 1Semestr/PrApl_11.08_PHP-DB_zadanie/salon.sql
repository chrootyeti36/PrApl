-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Wrz 2018, 08:26
-- Wersja serwera: 10.1.16-MariaDB
-- Wersja PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `salon`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text,
  `cena` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uslugi`
--

INSERT INTO `uslugi` (`id`, `nazwa`, `cena`) VALUES
(1, 'pazury', 30),
(2, 'mycie', 20),
(3, 'czesanie', 10),
(4, 'uszy', 30),
(5, 'szczepienie', 55),
(6, 'wycieranie', 10),
(8, 'odpchlenie', 60),
(9, 'zapchlenie', 17);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zwierzeta`
--

CREATE TABLE `zwierzeta` (
  `id` int(10) UNSIGNED NOT NULL,
  `usluga_id` int(11) NOT NULL,
  `rodzaj` int(10) UNSIGNED DEFAULT NULL,
  `imie` text,
  `wlasciciel` text,
  `telefon` text,
  `nastepna_wizyta` date DEFAULT NULL,
  `szczepienie` year(4) DEFAULT NULL,
  `opis` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zwierzeta`
--

INSERT INTO `zwierzeta` (`id`, `usluga_id`, `rodzaj`, `imie`, `wlasciciel`, `telefon`, `nastepna_wizyta`, `szczepienie`, `opis`) VALUES
(1, 3, 1, 'Fafik', 'Adam Kowalski', '111222333', '2017-06-30', 2016, 'problemy z uszami'),
(4, 1, 1, 'Saba', 'Monika Nowak', '333444555', NULL, 2015, 'kroplówka'),
(6, 4, 2, 'Figaro', 'Anna Kowalska', '555666777', NULL, NULL, 'problemy z uszami'),
(8, 2, 2, 'Fuks', 'Jan Nowak', '888999111', '2017-07-04', 2016, 'antybiotyk');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zwierzeta`
--
ALTER TABLE `zwierzeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `zwierzeta`
--
ALTER TABLE `zwierzeta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
