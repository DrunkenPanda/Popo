-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2013 at 03:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mujablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE IF NOT EXISTS `postingan` (
  `post_id` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) NOT NULL,
  `tgl` int(2) NOT NULL,
  `bln` int(2) NOT NULL,
  `thn` int(4) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`post_id`, `judul`, `tgl`, `bln`, `thn`, `isi`) VALUES
(1, 'batmannn', 1, 1, 1990, 'nnnnnnnnnnnnn'),
(5, 'ceng cen poo', 5, 12, 1990, ''),
(6, 'ninonnon', 1, 1, 1990, ''),
(7, 'judullll', 1, 1, 1990, ''),
(8, 'ealaha', 1, 1, 1990, ''),
(9, 'popo', 1, 1, 1990, ''),
(10, 'judulllllll', 13, 1, 1990, ''),
(11, 'jjjjjjjjjjjjjjj', 1, 1, 1990, ''),
(12, 'testingdab', 1, 1, 1990, '<p>alohaaaaaaaaaaaaa'),
(13, 'iki kudune judul', 1, 1, 1990, '<p>iki kudune isine<'),
(14, 'iki kudune judul lho', 1, 1, 1990, '<p>iki kudune isine '),
(15, 'kudune judul', 1, 1, 1990, '<p>kudune isi</p>'),
(16, 'judle', 6, 4, 1990, '<p><em><strong>&frac'),
(17, 'uhyeah', 1, 1, 1990, '<p>uhyoooo</p>'),
(18, 'akhirnya', 27, 3, 2012, '<p>iso melbu datane bener kabehhhhh uhyeahhhhhhh</p>'),
(19, 'soprano', 1, 4, 1990, 'ohmy hussh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
