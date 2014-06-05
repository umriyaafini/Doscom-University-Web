-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2014 at 11:46 AM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktifitas`
--

CREATE TABLE IF NOT EXISTS `aktifitas` (
  `idList` int(5) NOT NULL AUTO_INCREMENT,
  `todo` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('0%','10 %','20 %','30 %','40 %','50 %','70 %','80 %','90 %','done') NOT NULL,
  `hapus` int(1) NOT NULL,
  PRIMARY KEY (`idList`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aktifitas`
--

INSERT INTO `aktifitas` (`idList`, `todo`, `tanggal`, `status`, `hapus`) VALUES
(1, 'project akhir PBO', '2014-06-09', '0%', 0),
(2, 'fdsfg gtfdgd dgfd', '0000-00-00', '0%', 0),
(3, 'bikin poster', '2014-06-17', '0%', 0),
(4, 'project game flappy owl', '2014-06-25', '0%', 0),
(5, 'bikin web yg kece buat seseorang :*', '2014-08-01', '0%', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
