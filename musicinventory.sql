-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2021 at 07:34 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `musicrecords`
--

DROP TABLE IF EXISTS `musicrecords`;
CREATE TABLE IF NOT EXISTS `musicrecords` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Artist` varchar(225) NOT NULL,
  `Album` varchar(225) NOT NULL,
  `Released_Year` varchar(225) NOT NULL,
  `Track_Number` varchar(225) NOT NULL,
  `Track_Title` varchar(225) NOT NULL,
  `Genre` varchar(225) NOT NULL,
  `rating` int(1) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
