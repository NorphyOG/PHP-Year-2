-- phpMyAdmin SQL Dump
-- version 4.9.8
-- https://www.phpmyadmin.net/
--
-- Host: dbserver2.bg.bib.de
-- Erstellungszeit: 15. Mrz 2022 um 12:32
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
-- Datenbank: `bbm3h20awe_biboj`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bands`
--

CREATE TABLE `bands` (
  `BandID` int(11) NOT NULL,
  `Bandname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `BenutzerID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `GebDate` date NOT NULL,
  `Geschlecht` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `PersonenID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Instrumente` varchar(30) DEFAULT NULL,
  `Geburtsdatum` date NOT NULL,
  `Mitwirkende` varchar(30) NOT NULL,
  `BandID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `playlist`
--

CREATE TABLE `playlist` (
  `PlaylistID` int(11) NOT NULL,
  `Playlistnamen` varchar(30) NOT NULL,
  `BenutzerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `playlist_create`
--

CREATE TABLE `playlist_create` (
  `PlaylistID` int(11) NOT NULL,
  `SongID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `song`
--

CREATE TABLE `song` (
  `SongID` int(11) NOT NULL,
  `Titel` varchar(30) NOT NULL,
  `Trackart` varchar(30) NOT NULL,
  `Erscheinungsjahr` date NOT NULL,
  `Songdauer` time NOT NULL,
  `Ersteller` int(30) DEFAULT NULL,
  `ErstellerBand` int(30) DEFAULT NULL,
  `bildWeg` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `song`
--

INSERT INTO `song` (`SongID`, `Titel`, `Trackart`, `Erscheinungsjahr`, `Songdauer`, `Ersteller`, `ErstellerBand`, `bildWeg`, `link`) VALUES
(1, 'Shadow', 'Song', '2022-03-01', '00:02:45', NULL, NULL, 'Bilder/logos/Shadow.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/1aPlEVh0l7KOTG5UWeE5kj?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(2, 'Subject to Change', 'Song', '2021-12-28', '00:02:55', NULL, NULL, 'Bilder/logos/Subject to Change.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/3EsdgC6BhyMpuhGlOVtQQH?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(3, '666!', 'Song', '2019-07-24', '00:02:55', NULL, NULL, 'Bilder/logos/666!.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/1028DKPPh0PxR5Vc2ehdTB?utm_source=generator&theme=0\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(4, 'Uber', 'Song', '2020-05-19', '00:02:00', NULL, NULL, 'Bilder/logos/Uber.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/0M0RRa7FS5l9uoIZOSNISB?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(5, 'Cycle Hit', 'Song', '2020-03-10', '00:05:18', NULL, NULL, 'Bilder/logos/CycleHit.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/6HrRFCbSJbwJ1b63UJe0rR?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(6, 'KillerBeast', 'Song', '2021-09-16', '00:04:07', NULL, NULL, 'Bilder/logos/KillerBeast.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/7wC2ejvUwTAAyp2fCXyyy7?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(7, 'M1LLIONPP', 'Song', '2022-03-31', '00:07:11', NULL, NULL, 'Bilder/logos/M1LLIONPP.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/3AtQwAbQ9c9KfSFBRah5i8?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(8, 'REALIZE', 'Song', '2019-10-09', '00:04:04', NULL, NULL, 'Bilder/logos/REALIZE.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/6KlqqFZmbUrpTz6RSC1pqF?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(9, 'Altar', 'Song', '2022-01-18', '00:02:40', NULL, NULL, 'Bilder/logos/Altar.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/2nKzhen7U2hJqZSKJcg8Ei?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(10, 'The Sun, the Moon, the Star', 'Song', '2018-08-13', '00:19:09', NULL, NULL, 'Bilder/logos/The Sun, the Moon, the Star.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/1OJndsXnWTDUEbB2PL1U2I?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(11, 'Phone Called Heart Break', 'Song', '2020-07-15', '00:02:20', NULL, NULL, 'Bilder/logos/Phone Called Heart Break.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/7vTBkhmPjHYEvQkCc2bCJo?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(12, 'Anything', 'Song', '2022-01-15', '00:03:13', NULL, NULL, 'Bilder/logos/Anything.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/1ooq3nlROfxMGr1uxWLhA1?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(13, 'Anklebiters', 'Song', '2022-02-09', '00:02:18', NULL, NULL, 'Bilder/logos/Anklebiters.png\r\n\r\n', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/3hgzEGrm5iTY6pkgJ827qX?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(14, 'Anemone', 'Song', '2021-12-01', '00:03:12', NULL, NULL, 'Bilder/logos/Anemone.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/2CPvvpzShRo25h1zEokK9S?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(15, 'LVT', 'Song', '2021-10-26', '00:02:32', NULL, NULL, 'Bilder/logos/LVT.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/29EbbQNDMvNH6Y3u51nmVK?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(16, 'Did You Right', 'Song', '2021-12-08', '00:02:23', NULL, NULL, 'Bilder/logos/Did You Right.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/67fkWbJUSbCo7uPJtitExj?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(17, 'Necro Fantasia', 'Song', '2022-01-11', '00:05:43', NULL, NULL, 'Bilder/logos/Necro Fantasia.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/6HIRol3N6J1PrttoiVuSWd?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(18, 'TAPIOCA', 'Song', '2021-02-16', '00:05:13', NULL, NULL, 'Bilder/logos/TAPIOCA.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/68zB0Haeo7znaKeYBq1tEA?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(19, 'Sound Chimera', 'Song', '2022-03-10', '00:05:08', NULL, NULL, 'Bilder/logos/Sound Chimera.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/1d14xCnYqUAIWZiGJnqg8D?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(20, 'The King Of Lions', 'Song', '2021-10-12', '00:04:31', NULL, NULL, 'Bilder/logos/The King Of Lions.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/2IXaB1yvaLjyy8YBoC7lHY?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(21, 'Feline', 'Song', '2021-10-12', '00:03:32', NULL, NULL, 'Bilder/logos/Feline.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/5R4Yrc2j4jw1itr4hKcN26?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(22, 'Flamewall', 'Song', '2021-04-18', '00:04:31', NULL, NULL, 'Bilder/logos/Flamewall.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/04Q6BGr8XdDJ7oDZ4iCI9G?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(23, 'Angreifer', 'Song', '2022-02-01', '00:07:06', NULL, NULL, 'Bilder/logos/Angreifer.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/4NKQPOYkcJUKRb6cbq9N5I?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>'),
(24, 'Can\'t Trust A Soul', 'Song', '2021-10-19', '00:02:45', NULL, NULL, 'Bilder/logos/Can\'t Trust A Soul.png', '<iframe style=\"border-radius:12px\" src=\"https://open.spotify.com/embed/track/3u2GQm2KSZzgpQb6QF1GNK?utm_source=generator\" width=\"100%\" height=\"80\" frameBorder=\"0\" allowfullscreen=\"\" allow=\"autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture\"></iframe>');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`BandID`);

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`BenutzerID`);

--
-- Indizes für die Tabelle `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`PersonenID`),
  ADD KEY `Mitwirkende` (`Mitwirkende`),
  ADD KEY `BandID` (`BandID`);

--
-- Indizes für die Tabelle `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`PlaylistID`),
  ADD KEY `BenutzerID` (`BenutzerID`);

--
-- Indizes für die Tabelle `playlist_create`
--
ALTER TABLE `playlist_create`
  ADD PRIMARY KEY (`PlaylistID`,`SongID`),
  ADD KEY `SongID` (`SongID`);

--
-- Indizes für die Tabelle `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `Ersteller` (`Ersteller`),
  ADD KEY `ErstellerBand` (`ErstellerBand`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `bands`
--
ALTER TABLE `bands`
  MODIFY `BandID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `BenutzerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `person`
--
ALTER TABLE `person`
  MODIFY `PersonenID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `playlist`
--
ALTER TABLE `playlist`
  MODIFY `PlaylistID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`BandID`) REFERENCES `bands` (`BandID`);

--
-- Constraints der Tabelle `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`BenutzerID`) REFERENCES `benutzer` (`BenutzerID`);

--
-- Constraints der Tabelle `playlist_create`
--
ALTER TABLE `playlist_create`
  ADD CONSTRAINT `playlist_create_ibfk_1` FOREIGN KEY (`PlaylistID`) REFERENCES `playlist` (`PlaylistID`),
  ADD CONSTRAINT `playlist_create_ibfk_2` FOREIGN KEY (`SongID`) REFERENCES `song` (`SongID`);

--
-- Constraints der Tabelle `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`Ersteller`) REFERENCES `person` (`PersonenID`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`ErstellerBand`) REFERENCES `bands` (`BandID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
