-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: dbserver2.bg.bib.de
-- Erstellungszeit: 23. Dez 2021 um 10:51
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
-- Datenbank: `bbm3h20awe_project`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pr_mitarbeiter`
--

CREATE TABLE `pr_mitarbeiter` (
  `PersonID` int(11) NOT NULL,
  `Vorname` varchar(50) NOT NULL,
  `Nachname` varchar(50) NOT NULL,
  `Steuerklasse` int(1) NOT NULL,
  `anzahlKinder` int(4) NOT NULL,
  `Bruttogehalt` double NOT NULL,
  `Prozentsatz` double NOT NULL,
  `Arbeitsnehmeranteil` double NOT NULL,
  `Provision` double NOT NULL,
  `Arbeitsgeberzuschlag` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pr_mitarbeiter`
--

INSERT INTO `pr_mitarbeiter` (`PersonID`, `Vorname`, `Nachname`, `Steuerklasse`, `anzahlKinder`, `Bruttogehalt`, `Prozentsatz`, `Arbeitsnehmeranteil`, `Provision`, `Arbeitsgeberzuschlag`) VALUES
(1, 'Jerome', 'Weber', 5, 1, 9000, 7, 500, 2000, 400),
(2, 'Kev', 'Ura', 2, 3, 2323.23, 23, 532, 2332.1, 23.1),
(21, 'Hey', 'Kurn', 1, 0, 3221.1, 2.122, 21.2, 2, 2112.4),
(22, 'Leo', 'Hurn', 3, 22, 11213, 21, 1231, 2, 212),
(23, 'Adrian', 'Keko', 6, 991, 92231, 2, 123, 12123, 122),
(24, 'Tim', 'ko', 3, 300, 12, 0, 92, 10, 1992),
(25, 'Valury', 'RedBall', 3, 30, 10000000, 100, 0, 1093939233, 6.372678326891372e60),
(26, 'Nico', 'Bums', 1, 0, 77, 2, 21, 2000, 100),
(27, 'Belinda', 'Bommes', 1, 0, 2550, 20, 0, 0, 0),
(28, 'Fred', 'Ferkel', 4, 2, 4350, 20, 0, 500, 0),
(29, 'Konrad', 'Krawalski', 3, 1, 6540, 20, 0, 750, 750);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pr_steuer`
--

CREATE TABLE `pr_steuer` (
  `SteuerID` int(11) NOT NULL,
  `Lohnsteuer` double NOT NULL,
  `Kirschensteuer` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pr_steuer`
--

INSERT INTO `pr_steuer` (`SteuerID`, `Lohnsteuer`, `Kirschensteuer`) VALUES
(1, 650, 100),
(2, 734.3, 223.2),
(3, 752, 5434),
(4, 648, 452645),
(5, 5624, 5642),
(6, 547, 2437),
(7, 247, 24784),
(8, 538945, 35345),
(9, 0, 0),
(10, 0, 0),
(11, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `pr_versicherrung`
--

CREATE TABLE `pr_versicherrung` (
  `VersicherrungsID` int(11) NOT NULL,
  `Versicherrungsabgeben` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `pr_versicherrung`
--

INSERT INTO `pr_versicherrung` (`VersicherrungsID`, `Versicherrungsabgeben`) VALUES
(1, 3500),
(2, 4023.223),
(3, 765634),
(4, 34456),
(5, 345),
(6, 3246),
(7, 4564),
(8, 243),
(9, 513.1875),
(112, 908.0625),
(113, 1399.56);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `pr_mitarbeiter`
--
ALTER TABLE `pr_mitarbeiter`
  ADD PRIMARY KEY (`PersonID`);

--
-- Indizes für die Tabelle `pr_steuer`
--
ALTER TABLE `pr_steuer`
  ADD PRIMARY KEY (`SteuerID`);

--
-- Indizes für die Tabelle `pr_versicherrung`
--
ALTER TABLE `pr_versicherrung`
  ADD PRIMARY KEY (`VersicherrungsID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `pr_mitarbeiter`
--
ALTER TABLE `pr_mitarbeiter`
  MODIFY `PersonID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT für Tabelle `pr_steuer`
--
ALTER TABLE `pr_steuer`
  MODIFY `SteuerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `pr_versicherrung`
--
ALTER TABLE `pr_versicherrung`
  MODIFY `VersicherrungsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
