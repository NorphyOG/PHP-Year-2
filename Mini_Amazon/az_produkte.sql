-- phpMyAdmin SQL Dump
-- version 4.9.8
-- https://www.phpmyadmin.net/
--
-- Host: dbserver2.bg.bib.de
-- Erstellungszeit: 02. Mrz 2022 um 08:45
-- Server-Version: 5.7.24-log
-- PHP-Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bbm3h20awe_miniaz`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `az_produkte`
--

CREATE TABLE `az_produkte` (
  `proid` int(255) NOT NULL,
  `name` text NOT NULL,
  `stock` int(11) NOT NULL,
  `preis` double NOT NULL,
  `bildWeg` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `az_produkte`
--

INSERT INTO `az_produkte` (`proid`, `name`, `stock`, `preis`, `bildWeg`) VALUES
(1, 'Monster Energy', 99, 23.28, 'Bilder/monster-energy-dose.jpg'),
(2, 'Red Bull', 13, 25.5, 'Bilder/reddbull.jpg'),
(3, 'Rockstar', 52, 24.21, 'Bilder/rockstar.jpg'),
(4, 'Cola', 36, 11.99, 'Bilder/cola.jpg'),
(5, 'Effect', 67, 29.76, 'Bilder/effect.jpg'),
(6, 'Fanta Exotic', 12, 14.99, 'Bilder/fanta-ex.jpg'),
(7, 'The Doctor Monster', 1, 23.28, 'Bilder/monster-energy-doctor.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `az_produkte`
--
ALTER TABLE `az_produkte`
  ADD PRIMARY KEY (`proid`),
  ADD UNIQUE KEY `proid` (`proid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `az_produkte`
--
ALTER TABLE `az_produkte`
  MODIFY `proid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
