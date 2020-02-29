-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2016 at 10:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `codetable`
--

CREATE TABLE IF NOT EXISTS `codetable` (
  `codes` varchar(4) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `key` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=115 ;

--
-- Dumping data for table `codetable`
--

INSERT INTO `codetable` (`codes`, `key`) VALUES
('101A', 1),
('102A', 2),
('103A', 3),
('104A', 4),
('105A', 5),
('106A', 6),
('107A', 7),
('108A', 8),
('109B', 9),
('110B', 10),
('111B', 11),
('112B', 12),
('113B', 13),
('114B', 14),
('115B', 15),
('116B', 16),
('117C', 17),
('118C', 18),
('119C', 19),
('120C', 20),
('121C', 21),
('122C', 22),
('123D', 23),
('124D', 24),
('125D', 25),
('126D', 26),
('127D', 27),
('128D', 28),
('129E', 29),
('130E', 30),
('131E', 31),
('132E', 32),
('133E', 33),
('134E', 34),
('135F', 35),
('136F', 36),
('137F', 37),
('138F', 38),
('139F', 39),
('140F', 40),
('141G', 41),
('142G', 42),
('143G', 43),
('144G', 44),
('145G', 45),
('146H', 46),
('147H', 47),
('148H', 48),
('149H', 49),
('150H', 50),
('151J', 51),
('152J', 52),
('153J', 53),
('154J', 54),
('155K', 55),
('156K', 56),
('157K', 57),
('158K', 58),
('159L', 59),
('160L', 60),
('161L', 61),
('162L', 62),
('163M', 63),
('164M', 64),
('165M', 65),
('166M', 66),
('167N', 67),
('168N', 68),
('169N', 69),
('170N', 70),
('171O', 71),
('172O', 72),
('173O', 73),
('174O', 74),
('175P', 75),
('176P', 76),
('177P', 77),
('178P', 78),
('179Q', 79),
('180Q', 80),
('181Q', 81),
('182Q', 82),
('183R', 83),
('184R', 84),
('185R', 85),
('186R', 86),
('187S', 87),
('188S', 88),
('189S', 89),
('190S', 90),
('191U', 91),
('192U', 92),
('193U', 93),
('194U', 94),
('195V', 95),
('196V', 96),
('197V', 97),
('198V', 98),
('199W', 99),
('200W', 100),
('201W', 101),
('202W', 102),
('203X', 103),
('204X', 104),
('205X', 105),
('206X', 106),
('207Y', 107),
('208Y', 108),
('209Y', 109),
('210Y', 110),
('211Z', 111),
('212Z', 112),
('213Z', 113),
('214Z', 114);

-- --------------------------------------------------------

--
-- Table structure for table `havelist`
--

CREATE TABLE IF NOT EXISTS `havelist` (
  `codes` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `key1` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`key1`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `havelist`
--

INSERT INTO `havelist` (`codes`, `key1`) VALUES
('101A', 1),
('105A', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
