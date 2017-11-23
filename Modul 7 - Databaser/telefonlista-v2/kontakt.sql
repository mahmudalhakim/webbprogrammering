-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 20 nov 2017 kl 11:56
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `telefonlista`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `kontakt`
--

CREATE TABLE `kontakt` (
  `namn` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `kontakt`
--

    INSERT INTO `kontakt` (`namn`, `telefon`) VALUES
    ('Mahmud Al Hakim', '070-1234567'),
    ('Kalle Anka', '076-1234567');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`telefon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
