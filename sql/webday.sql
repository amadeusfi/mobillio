-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Feb 2020 um 14:45
-- Server-Version: 10.4.8-MariaDB
-- PHP-Version: 7.3.10

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webday`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sites`
--

CREATE TABLE `sites`
(
  `siteid` int
(8) NOT NULL,
  `date` date NOT NULL,
  `site_name` varchar
(30) COLLATE utf8_bin NOT NULL,
  `url` varchar
(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usercomments`
--

CREATE TABLE `usercomments`
(
  `commentid` int
(8) NOT NULL,
  `comm_date` date NOT NULL,
  `comment` varchar
(800) COLLATE utf8_bin NOT NULL,
  `userid` int
(8) NOT NULL,
  `siteid` int
(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users`
(
  `userid` int
(8) NOT NULL,
  `user_name` varchar
(30) COLLATE utf8_bin NOT NULL,
  `email` varchar
(40) COLLATE utf8_bin NOT NULL,
  `reg_date` date NOT NULL,
  `hash` varchar
(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `usercomments`
--
ALTER TABLE `usercomments`
ADD PRIMARY KEY
(`commentid`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
ADD PRIMARY KEY
(`userid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `usercomments`
--
ALTER TABLE `usercomments`
  MODIFY `commentid` int
(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userid` int
(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
