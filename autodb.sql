-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 23.Mar 2023, 08:36
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `autodb`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vsauta`
--

CREATE TABLE `vsauta` (
  `ID` int(8) NOT NULL,
  `Datum` date NOT NULL DEFAULT current_timestamp(),
  `druh` varchar(20) NOT NULL,
  `znacka` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `rok` int(4) NOT NULL,
  `cena` int(10) NOT NULL,
  `palivo` varchar(10) NOT NULL,
  `kilometre` int(7) NOT NULL,
  `lokalita` varchar(25) NOT NULL,
  `objem` int(4) NOT NULL,
  `vykon` int(4) NOT NULL,
  `pohon` varchar(25) NOT NULL,
  `prevodovka` varchar(15) NOT NULL,
  `farba` varchar(30) NOT NULL,
  `popis` text NOT NULL,
  `fotky` varchar(40) NOT NULL,
  `meno` varchar(50) NOT NULL,
  `telefon` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `vsauta`
--

INSERT INTO `vsauta` (`ID`, `Datum`, `druh`, `znacka`, `model`, `rok`, `cena`, `palivo`, `kilometre`, `lokalita`, `objem`, `vykon`, `pohon`, `prevodovka`, `farba`, `popis`, `fotky`, `meno`, `telefon`, `email`) VALUES
(1, '2023-03-23', 'Osobné autá', 'Audi', 'A3', 1900, 5, 'benzin', 5, 'Celé Slovensko', 5, 5, 'predny', 'automaticka', 'modrá', 'toto je popis', '', 'Ciment', 2014, 'xcitron154x@gmail.com');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `vsauta`
--
ALTER TABLE `vsauta`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `vsauta`
--
ALTER TABLE `vsauta`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
