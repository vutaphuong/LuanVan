-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2017 at 08:23 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkmh`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginsv`
--

DROP TABLE IF EXISTS `loginsv`;
CREATE TABLE IF NOT EXISTS `loginsv` (
  `MSSV` varchar(10) CHARACTER SET ascii NOT NULL,
  `pass` varchar(12) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`MSSV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loginsv`
--

INSERT INTO `loginsv` (`MSSV`, `pass`) VALUES
('123456789', '123456789'),
('DH51400668', 'Thumeo1711'),
('DH51400669', 'Anhthu1711');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
