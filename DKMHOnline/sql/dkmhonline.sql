-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2017 at 04:46 PM
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
-- Database: `dkmhonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `thongtinnv`
--

DROP TABLE IF EXISTS `thongtinnv`;
CREATE TABLE IF NOT EXISTS `thongtinnv` (
  `manv` varchar(12) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `gt` varchar(10) NOT NULL,
  `quequan` tinytext NOT NULL,
  `noio` tinytext NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sdt` int(12) DEFAULT NULL,
  `avt` tinytext,
  PRIMARY KEY (`hoten`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thongtinnv`
--

INSERT INTO `thongtinnv` (`manv`, `hoten`, `gt`, `quequan`, `noio`, `email`, `sdt`, `avt`) VALUES
('nv12345678', 'Nguyễn Thế Mạnh', 'Nam', 'Quỳ Hợp, Nghệ An', '81/c5 Bình Hưng, Bình Chánh', 'hoangtupro.a4@gmail.com', 1677435879, '');

-- --------------------------------------------------------

--
-- Table structure for table `thongtinsv`
--

DROP TABLE IF EXISTS `thongtinsv`;
CREATE TABLE IF NOT EXISTS `thongtinsv` (
  `mssv` varchar(10) CHARACTER SET utf8 NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 NOT NULL,
  `gt` varchar(10) CHARACTER SET utf8 NOT NULL,
  `quequan` text CHARACTER SET utf8 NOT NULL,
  `noio` text CHARACTER SET utf8 NOT NULL,
  `sothich` text CHARACTER SET utf8,
  `avt` text CHARACTER SET utf8,
  `email` text CHARACTER SET utf8,
  `sdt` int(12) DEFAULT NULL,
  PRIMARY KEY (`hoten`) USING BTREE,
  KEY `mssv` (`mssv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thongtinsv`
--

INSERT INTO `thongtinsv` (`mssv`, `hoten`, `gt`, `quequan`, `noio`, `sothich`, `avt`, `email`, `sdt`) VALUES
('123456789', 'Nguyễn Ngọc Anh Thư', 'Nữ', 'Lấp Vò,Đồng Tháp', '159/9 Đặng Chất,P2,Q8,tp HCM', 'Mèo, màu hồng', NULL, NULL, 1677435879);

-- --------------------------------------------------------

--
-- Table structure for table `usernv`
--

DROP TABLE IF EXISTS `usernv`;
CREATE TABLE IF NOT EXISTS `usernv` (
  `manv` varchar(10) NOT NULL,
  `pass` tinytext NOT NULL,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usernv`
--

INSERT INTO `usernv` (`manv`, `pass`) VALUES
('nv12345678', 'nv12345678');

-- --------------------------------------------------------

--
-- Table structure for table `usersv`
--

DROP TABLE IF EXISTS `usersv`;
CREATE TABLE IF NOT EXISTS `usersv` (
  `mssv` varchar(10) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`mssv`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersv`
--

INSERT INTO `usersv` (`mssv`, `pass`) VALUES
('12344321', '12344321'),
('123456789', '123456789');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `thongtinnv`
--
ALTER TABLE `thongtinnv`
  ADD CONSTRAINT `manv` FOREIGN KEY (`manv`) REFERENCES `usernv` (`manv`);

--
-- Constraints for table `thongtinsv`
--
ALTER TABLE `thongtinsv`
  ADD CONSTRAINT `MSSV` FOREIGN KEY (`mssv`) REFERENCES `usersv` (`mssv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
