-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: St 20.Sep 2023, 16:48
-- Verzia serveru: 10.4.28-MariaDB
-- Verzia PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `dadsgarage`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `stk`
--

CREATE TABLE `stk` (
  `ID` int(11) NOT NULL,
  `druh` text DEFAULT NULL,
  `znacka` text DEFAULT NULL,
  `model` text DEFAULT NULL,
  `spz` text DEFAULT NULL,
  `vin` varchar(20) DEFAULT NULL,
  `vykonana` date DEFAULT NULL,
  `platna` date DEFAULT NULL,
  `dvatyzdne` date DEFAULT NULL,
  `meno` text DEFAULT NULL,
  `telefon` bigint(20) DEFAULT NULL,
  `mesto` text DEFAULT NULL,
  `cena` bigint(20) DEFAULT NULL,
  `popis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `stk`
--

INSERT INTO `stk` (`ID`, `druh`, `znacka`, `model`, `spz`, `vin`, `vykonana`, `platna`, `dvatyzdne`, `meno`, `telefon`, `mesto`, `cena`, `popis`) VALUES
(1, 'Osobné autá', 'Hyundai', 'i30', 'SA 165CZ', 'TMAD351CAEJ126552', '2023-05-22', '2025-05-22', '2025-05-08', 'Zoltán Szentiványi', 907233576, 'Šala', 130, ''),
(2, 'Osobné autá', 'BMW', '3 Séria', 'NR 204JP', 'WBAVG11080VH92956', '2023-07-04', '2025-07-04', '2025-06-20', 'Peter Konderík', 907260239, 'Komjatice', 100, ''),
(3, 'Osobné autá', 'Volkswagen', 'CC', 'NZ  768GS', 'WVWZZZ3CZEE530640', '2023-01-16', '2025-01-16', '2025-01-02', 'Martin Gróf', 910419928, 'Komjatice', 120, ''),
(4, 'Osobné autá', 'Opel', 'Sintra', 'NZ  885FM', '4GDDU0390WD323069', '2022-04-08', '2024-04-08', '2024-03-25', 'Roman Mráz', 911475425, 'Komjatice', 100, ''),
(5, 'Osobné autá', 'BMW', 'X3', 'NZ  161 GI', 'WBAPE11090WJ53989', '2022-10-17', '2024-10-17', '2024-10-03', 'Juraj Burda', 917980090, 'Komjatice', 120, ''),
(6, 'Osobné autá', 'Opel', 'Zafira', 'NZ 195FL', 'W0LPE9E75G1003618', '2021-11-09', '2023-11-09', '2023-10-26', 'František Tokoly', 905582093, 'Šurany', 120, ''),
(7, 'Osobné autá', 'Citroen', 'Berlingo', 'NZ 268ED', 'VF7MFKFXF65360564', '2022-05-19', '2024-05-19', '2024-05-05', 'p.Martiš', 948633631, 'KOMJATICE', 120, ''),
(8, 'Osobné autá', 'Škoda', 'Octavia', 'NZ 844DJ', 'TMBCS61Z38C013021', '2021-10-15', '2023-10-15', '2023-10-01', 'Marian Martiš', 918299424, 'Komjatice', 120, ''),
(9, 'Osobné autá', 'Škoda', 'Fabia', 'NZ 858EM', 'TMBJB16Y623468530', '2022-01-26', '2024-01-26', '2024-01-12', 'Martišová', 911808427, 'Komjatice', 120, 'za hadičku opakovaná 20,- EUR'),
(10, 'Osobné autá', 'Ford', 'Mondeo', 'NZ 287CE', 'WF0AXXGBBAWB40789', '2021-10-18', '2023-10-18', '2023-10-04', 'p.Bakus', 0, 'Komjatice', 120, ' za kat opakovaná 20,- EUR'),
(11, 'Osobné autá', 'Toyota', 'Auris', 'NZ 104FF', 'NMTKC58E20R037334', '2021-10-18', '2023-10-18', '2023-10-04', 'Michal Repka', 905136524, 'Komjatice', 120, ''),
(15, 'Dodávky', 'Iveco', 'Daily', 'NZ 645CU', 'ZCFC3591005531624', '2021-10-28', '2023-10-28', '2023-10-14', 'Kmeťovci', 910592122, 'Komjatice', 100, ''),
(16, 'Dodávky', 'Citroen', 'Jumper', 'NZ 283DO', 'VF7YAAMFA11695389', '2021-11-11', '2023-11-11', '2023-10-28', 'Blesk', 0, 'Komjatice', 120, ''),
(17, 'Osobné autá', 'Ford', 'Mondeo', 'NZ 355FT', 'WF0GXXGBBGBY44667', '2021-11-12', '2023-11-12', '2023-10-29', 'Martin Mach', 905154341, 'Ondrochov', 125, ''),
(18, 'Osobné autá', 'Peugeot', '206', 'NZ 952CV', 'VF32AKFWA47751279', '2021-11-19', '2023-11-19', '2023-11-05', 'Rudolf Rakovský', 903433394, 'Šurany, K.SEK, JUŽNÁ 1996/3', 100, ''),
(19, 'Osobné autá', 'Fiat', 'Freemont', 'NZ 066FK', '3E4PK4FYXBT548757', '2021-10-28', '2023-10-28', '2023-10-14', 'Matej Sabo Mlieko', 903670288, 'Komjatice', 120, ''),
(20, 'Dodávky', 'FS', 'Lublin', 'NZ 202EP', 'SUL055427Y0069809', '2021-12-03', '2023-12-03', '2023-11-19', 'Kmeťovci', 904915532, 'Komjatice', 120, ''),
(21, 'Osobné autá', 'Škoda', 'Octavia', 'NZ 809FB', 'TMBBK41U4Y2345740', '2021-12-16', '2023-12-16', '2023-12-02', 'Miky', 917717065, 'Veľký kýr', 120, 'zadné brzdy zle, lambda zlá'),
(22, 'Osobné autá', 'Mercedes - Benz', 'E-trieda', 'NZ 598EA', 'WDB2112081B268525', '2021-12-14', '2023-12-14', '2023-11-30', 'Molnárovci - Filipovič', 0, 'Komjatice', 120, ''),
(23, 'Osobné autá', 'Land Rover', 'Range Rover Sport', 'NZ 343GK', 'SALLSAA147A990748', '2021-12-10', '2023-12-10', '2023-11-26', 'Pavol Keskés', 0, 'Šurany', 120, ''),
(24, 'Osobné autá', 'Mercedes - Benz', 'S-trieda', 'NR 500II', 'WDD2221331A242266', '2022-01-04', '2024-01-04', '2023-12-21', 'Dominika', 917656120, 'Nitra', 80, ''),
(25, 'Osobné autá', 'Hyundai', 'Atos', 'NZ 706BP', 'MALAC51HP4M460576', '2021-12-07', '2023-12-07', '2023-11-23', 'p.Kováč', 907769303, 'Komjatice', 120, ''),
(26, 'Osobné autá', 'Škoda', 'Octavia', 'NZ 184FE', 'TMBGE41U7Y243669', '2022-01-14', '2024-01-14', '2023-12-31', 'p.Gocník', 905754722, 'Komjatice', 120, ''),
(27, 'Osobné autá', 'Peugeot', '207', 'NZ 559GC', 'VF34C9HVC9Y148175', '2022-01-25', '2024-01-25', '2024-01-11', 'Lukáš Molnár', 0, 'Komjatice', 120, ''),
(28, 'Osobné autá', 'Škoda', 'Fabia', 'NZ 242ED', 'TMBJA25J2C3046575', '2022-02-14', '2024-02-14', '2024-01-31', 'Marek Krajčík', 0, 'Šurany', 120, ''),
(29, 'Osobné autá', 'Alfa Romeo', '6C', 'NZ 218FE', 'ASSASASASASASA', '2021-09-20', '2023-09-30', '2023-09-19', 'DanielHolik', 907436746, 'Komjatice', 180, '');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `stk`
--
ALTER TABLE `stk`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `vin` (`vin`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `stk`
--
ALTER TABLE `stk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
