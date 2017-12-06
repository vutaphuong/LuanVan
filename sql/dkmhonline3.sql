-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2017 at 01:36 PM
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
-- Table structure for table `dangky`
--

DROP TABLE IF EXISTS `dangky`;
CREATE TABLE IF NOT EXISTS `dangky` (
  `madk` int(10) NOT NULL AUTO_INCREMENT,
  `ngaydk` date DEFAULT NULL,
  `mssv` varchar(10) DEFAULT NULL,
  `mamh` varchar(10) DEFAULT NULL,
  `manv` varchar(10) DEFAULT NULL,
  `magv` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`madk`),
  KEY `mamh` (`mamh`),
  KEY `mssv` (`mssv`),
  KEY `manv` (`manv`),
  KEY `magv` (`magv`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`madk`, `ngaydk`, `mssv`, `mamh`, `manv`, `magv`) VALUES
(44, '2017-12-06', 'DH87654321', 'KDCL', NULL, NULL),
(54, '2017-12-06', 'CD12345678', 'KNGT', NULL, NULL),
(55, '2017-12-06', 'CD12345678', 'OSS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

DROP TABLE IF EXISTS `giangvien`;
CREATE TABLE IF NOT EXISTS `giangvien` (
  `magv` varchar(10) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `hoten` tinytext NOT NULL,
  `gt` varchar(15) NOT NULL,
  `quequan` tinytext NOT NULL,
  `noio` tinytext NOT NULL,
  `email` tinytext,
  `sdt` int(15) DEFAULT NULL,
  `avt` tinytext,
  `makhoa` varchar(10) DEFAULT NULL,
  `manv` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`magv`) USING BTREE,
  KEY `makhoa` (`makhoa`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`magv`, `pass`, `hoten`, `gt`, `quequan`, `noio`, `email`, `sdt`, `avt`, `makhoa`, `manv`) VALUES
('GV12345678', '12345678', 'Nguyễn Thị ... gì đó ko bt', 'không xác định', 'Ai biết', 'Lào cai :)', 'abc.cba', NULL, NULL, 'CNTP', 'NV12345678'),
('GV87654321', '87654321', 'Trần văn hùng', 'Nam', 'Không rõ nữa nak', 'Sài Gòn á', 'Em quên mất rồi thầy, thôi khỏi nhập', NULL, NULL, 'CNTP', 'NV87654321');

-- --------------------------------------------------------

--
-- Table structure for table `gvphutrachmh`
--

DROP TABLE IF EXISTS `gvphutrachmh`;
CREATE TABLE IF NOT EXISTS `gvphutrachmh` (
  `magv` varchar(10) NOT NULL,
  `mamh` varchar(10) NOT NULL,
  PRIMARY KEY (`magv`,`mamh`) USING BTREE,
  KEY `mamh` (`mamh`),
  KEY `magv` (`magv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gvphutrachmh`
--

INSERT INTO `gvphutrachmh` (`magv`, `mamh`) VALUES
('GV12345678', 'KTTP'),
('GV87654321', 'LTUDWB');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

DROP TABLE IF EXISTS `khoa`;
CREATE TABLE IF NOT EXISTS `khoa` (
  `makhoa` varchar(10) NOT NULL,
  `tenkhoa` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`makhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTP', 'Công nghệ thực phẩm'),
('CNTT', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `mamh` varchar(10) NOT NULL,
  `tenmh` varchar(50) NOT NULL,
  `manganh` varchar(10) DEFAULT NULL,
  `hocky` int(2) DEFAULT NULL,
  `tinchi` int(2) NOT NULL,
  `sotiet` int(2) NOT NULL,
  `thuchanh` int(2) NOT NULL,
  `lythuyet` int(2) NOT NULL,
  `doan` int(2) NOT NULL,
  `baitap` int(2) NOT NULL,
  PRIMARY KEY (`mamh`),
  KEY `manganh` (`manganh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`, `manganh`, `hocky`, `tinchi`, `sotiet`, `thuchanh`, `lythuyet`, `doan`, `baitap`) VALUES
('DAPTTK', 'Đồ án phân tích thiết kế hệ thống thông tin', 'LTWEB', 1, 2, 35, 0, 0, 35, 0),
('KDCL', 'Kiểm định chất lượng thực phẩm', 'KDCLSP', 2, 2, 35, 15, 15, 0, 5),
('KNGT', 'Kỹ năng giao tiếp', 'LTWEB', 3, 2, 35, 5, 20, 0, 10),
('KTTP', 'Kỹ thuật thực phẩm', 'PTVSTP', 1, 2, 35, 0, 15, 5, 15),
('LTUDWB', 'Lý thuyết lập trình website', 'LTWEB', 4, 2, 35, 0, 15, 5, 15),
('LTUDWD', 'Lập trình ứng dụng windows', 'LTWIN', 5, 2, 35, 0, 15, 5, 15),
('OSS', 'Open Source Software', 'LTWEB', 5, 2, 35, 15, 15, 0, 5),
('PPLST', 'Phương pháp luận sáng tạo', 'LTWIN', 5, 2, 35, 0, 20, 0, 15),
('PTTKHT', 'Phân tích thiết kế hệ thông thông tin', 'LTWEB', 5, 2, 35, 0, 35, 0, 0),
('SHVS', 'Hóa học vi sinh', 'KTBQTP', 4, 2, 35, 0, 15, 5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

DROP TABLE IF EXISTS `nganh`;
CREATE TABLE IF NOT EXISTS `nganh` (
  `manganh` varchar(10) NOT NULL,
  `tennganh` tinytext,
  `makhoa` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`manganh`),
  KEY `makhoa` (`makhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`manganh`, `tennganh`, `makhoa`) VALUES
('KDCLSP', 'Kiểm định chất lượng sản phẩm', 'CNTP'),
('KTBQTP', 'Kiểm tra và bảo quản thực phẩm', 'CNTP'),
('LTAND', 'Lập trình android', 'CNTT'),
('LTWEB', 'Lập trình web', 'CNTT'),
('LTWIN', 'Lập trình windows', 'CNTT'),
('PTVSTP', 'Phân tích vi sinh thực phẩm', 'CNTP');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` varchar(10) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `hoten` tinytext NOT NULL,
  `gt` varchar(15) NOT NULL,
  `quequan` tinytext NOT NULL,
  `noio` tinytext NOT NULL,
  `email` tinytext,
  `sdt` int(15) DEFAULT NULL,
  `avt` tinytext,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `pass`, `hoten`, `gt`, `quequan`, `noio`, `email`, `sdt`, `avt`) VALUES
('NV12345678', '12345678', 'Nguyễn Ngọc Anh Thư', 'Nữ', 'Lấp vò, Đồng Tháp', '159/9 Đặng chất, P2, Q8, TP Hồ Chí Minh', NULL, 1677435879, NULL),
('NV87654321', '987654321', 'Nguyễn Thế Mạnh', 'Nam', 'Quỳ Hợp, Nghệ An', 'C5, Phạm hùng, Bình chánh, TP Hồ Chí Minh', 'nguyenthemanh26011996@gmail.com', 966173668, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `mssv` varchar(10) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `hoten` tinytext NOT NULL,
  `gt` tinytext NOT NULL,
  `quequan` tinytext NOT NULL,
  `noio` tinytext NOT NULL,
  `manv` varchar(10) DEFAULT NULL,
  `sothich` tinytext,
  `avt` tinytext,
  `email` tinytext,
  `sdt` int(12) DEFAULT NULL,
  `manganh` varchar(10) DEFAULT NULL,
  `makhoa` varchar(10) DEFAULT NULL,
  `covanht` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`mssv`),
  KEY `makhoa` (`makhoa`),
  KEY `manganh` (`manganh`),
  KEY `manv` (`manv`),
  KEY `covanht` (`covanht`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `pass`, `hoten`, `gt`, `quequan`, `noio`, `manv`, `sothich`, `avt`, `email`, `sdt`, `manganh`, `makhoa`, `covanht`) VALUES
('CD12345678', '12345678', 'Nguyễn Thế Mạnh', 'Nam', 'Quỳ Hợp, Nghệ An', 'C5 Phạm Hùng, Bình Chánh, TP Hồ Chí Minh', 'NV12345678', 'Anh Thư mèo', NULL, 'AnhThuMeo@meothu.com', 1677435879, 'LTWEB', 'CNTT', 'GV87654321'),
('DH51400668', 'DH51400668', 'Nguyen The Manh Thu', 'Nam', 'Dong Thap', 'p2. Q8, TP HCM', 'NV12345678', NULL, NULL, NULL, NULL, 'KDCLSP', 'CNTP', 'GV12345678'),
('DH87654321', '87654321', 'Nguyễn Ngọc Anh Thư', 'Nữ', 'Lấp Vò, Đồng Tháp', '159/9 Đặng chất, p2, q8, TP Hồ Chí Minh', 'NV87654321', 'mèo, màu hồng', 'Array', 'meo.thu@thumeo.com', 1677435879, 'KDCLSP', 'CNTP', 'GV87654321');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dangky`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_dangky`;
CREATE TABLE IF NOT EXISTS `v_dangky` (
`mssv` varchar(10)
,`mamh` varchar(10)
,`tenmh` varchar(50)
,`manganh` varchar(10)
,`tinchi` int(2)
,`thuchanh` int(2)
,`lythuyet` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `v_dangky`
--
DROP TABLE IF EXISTS `v_dangky`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dangky`  AS  select `dangky`.`mssv` AS `mssv`,`dangky`.`mamh` AS `mamh`,`monhoc`.`tenmh` AS `tenmh`,`monhoc`.`manganh` AS `manganh`,`monhoc`.`tinchi` AS `tinchi`,`monhoc`.`thuchanh` AS `thuchanh`,`monhoc`.`lythuyet` AS `lythuyet` from (`dangky` join `monhoc` on((`dangky`.`mamh` = `monhoc`.`mamh`))) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dangky`
--
ALTER TABLE `dangky`
  ADD CONSTRAINT `dangky_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dangky_ibfk_2` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dangky_ibfk_3` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dangky_ibfk_4` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`) ON UPDATE CASCADE;

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `giangvien_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`) ON UPDATE CASCADE;

--
-- Constraints for table `gvphutrachmh`
--
ALTER TABLE `gvphutrachmh`
  ADD CONSTRAINT `gvphutrachmh_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`) ON UPDATE CASCADE,
  ADD CONSTRAINT `gvphutrachmh_ibfk_3` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`) ON UPDATE CASCADE;

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`) ON UPDATE CASCADE;

--
-- Constraints for table `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`) ON UPDATE CASCADE;

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_3` FOREIGN KEY (`covanht`) REFERENCES `giangvien` (`magv`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_4` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_5` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sinhvien_ibfk_6` FOREIGN KEY (`manganh`) REFERENCES `nganh` (`manganh`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
