-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2018 at 10:44 AM
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
-- Database: `dkmhkhoacntt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdongiangvienphutrachmonhoc`
--

DROP TABLE IF EXISTS `chitietdongiangvienphutrachmonhoc`;
CREATE TABLE IF NOT EXISTS `chitietdongiangvienphutrachmonhoc` (
  `madk` int(10) NOT NULL AUTO_INCREMENT,
  `manamhoc` int(10) NOT NULL,
  KEY `madk` (`madk`),
  KEY `manamhoc` (`manamhoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietgiangvienphutrachmonhoc`
--

DROP TABLE IF EXISTS `chitietgiangvienphutrachmonhoc`;
CREATE TABLE IF NOT EXISTS `chitietgiangvienphutrachmonhoc` (
  `manamhoc` int(10) NOT NULL AUTO_INCREMENT,
  `tennamhoc` text NOT NULL,
  `magv` varchar(15) NOT NULL,
  `mamh` varchar(15) NOT NULL,
  PRIMARY KEY (`manamhoc`),
  KEY `magv` (`magv`),
  KEY `mamh` (`mamh`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietgiangvienphutrachmonhoc`
--

INSERT INTO `chitietgiangvienphutrachmonhoc` (`manamhoc`, `tennamhoc`, `magv`, `mamh`) VALUES
(2, 'Năm học 2018', 'GV87654321', '1THBTTN002'),
(4, 'Năm học 2018', 'GV12345678', '9CBXHDC001'),
(5, 'Năm học 2018', 'GV12345678', '1CBTODC001');

-- --------------------------------------------------------

--
-- Table structure for table `chitietgv`
--

DROP TABLE IF EXISTS `chitietgv`;
CREATE TABLE IF NOT EXISTS `chitietgv` (
  `machitietgv` varchar(15) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(15) NOT NULL,
  `quequan` text NOT NULL,
  `noio` text NOT NULL,
  `avata` text NOT NULL,
  `sdt` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `magv` varchar(15) NOT NULL,
  PRIMARY KEY (`machitietgv`),
  KEY `magv` (`magv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietgv`
--

INSERT INTO `chitietgv` (`machitietgv`, `ngaysinh`, `gioitinh`, `quequan`, `noio`, `avata`, `sdt`, `email`, `magv`) VALUES
('GV12345678', '1990-07-11', 'Nam', 'Thái Bình', 'Quận 10', '', '0164587237', 'Văn B', 'GV12345678'),
('GV87654321', '1985-12-08', 'Nữ', 'Nam Định', 'QUân6', '', '0987654321', 'TranvanB@gmail.com', 'GV87654321');

-- --------------------------------------------------------

--
-- Table structure for table `chitietphuongthucgiangdaymonhoc`
--

DROP TABLE IF EXISTS `chitietphuongthucgiangdaymonhoc`;
CREATE TABLE IF NOT EXISTS `chitietphuongthucgiangdaymonhoc` (
  `mamh` varchar(15) NOT NULL,
  `mapphoc` varchar(15) NOT NULL,
  `lythuyet` int(11) NOT NULL,
  `baitap` int(2) NOT NULL,
  `thuchanh` int(2) NOT NULL,
  `doan` int(11) NOT NULL,
  `LATN` int(3) NOT NULL,
  `tinchi` int(11) NOT NULL,
  KEY `mamh` (`mamh`),
  KEY `mapphoc` (`mapphoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietphuongthucgiangdaymonhoc`
--

INSERT INTO `chitietphuongthucgiangdaymonhoc` (`mamh`, `mapphoc`, `lythuyet`, `baitap`, `thuchanh`, `doan`, `LATN`, `tinchi`) VALUES
('1CBBTTN001', 'LT', 15, 15, 0, 0, 0, 2),
('1CBLYDC001', 'LT', 45, 15, 0, 0, 0, 2),
('1CBLYDC002', 'LT', 45, 15, 0, 0, 0, 3),
('1CBTODC001', 'LT', 45, 15, 0, 0, 0, 2),
('1CBTODC002', 'LT', 30, 15, 0, 0, 0, 2),
('1CBTODC003', 'LT', 45, 15, 0, 0, 0, 3),
('1THBTTN002', 'LATN', 0, 0, 0, 0, 225, 0),
('1THCHCN001', 'LT', 30, 15, 0, 0, 0, 3),
('1THCHCN002', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCN003', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCN004', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCN005', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCN006', 'DA', 0, 0, 0, 45, 0, 2),
('1THCHCN008', 'LT', 30, 15, 0, 0, 0, 3),
('1THCHCN009', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCN010', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCN011', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCN013', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCN014', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCN015', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCN017', 'LT', 30, 15, 0, 0, 0, 3),
('1THCHCN018', 'LT', 30, 15, 0, 0, 0, 1),
('1THCHCN019', 'DA', 0, 0, 0, 45, 0, 2),
('1THCHCS001', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS002', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS003', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS003', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS004', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS005', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS006', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS007', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS008', 'TH', 0, 150, 30, 0, 0, 1),
('1THCHCS009', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS010', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS011', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS012', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS013', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS014', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS015', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS016', 'TH', 0, 0, 30, 0, 0, 1),
('1THCHCS017', 'LT', 30, 15, 0, 0, 0, 2),
('1THCHCS018', 'LT', 30, 15, 0, 0, 0, 3),
('1THLTCN003', 'LT', 30, 15, 0, 0, 0, 3),
('1THLTCN004', 'TH', 0, 0, 30, 0, 0, 1),
('1THTTTN001', 'DA', 0, 0, 90, 0, 0, 2),
('1THWECN005', 'LT', 30, 15, 0, 0, 0, 2),
('1THWECN006', 'DA', 0, 0, 0, 45, 0, 2),
('1THWECN009', 'LT', 30, 0, 15, 0, 0, 3),
('9CBAVDC001', 'LT', 30, 15, 0, 0, 0, 3),
('9CBAVDC002', 'LT', 30, 15, 0, 0, 0, 3),
('9CBAVDC003', 'LT', 30, 15, 0, 0, 0, 2),
('9CBAVDC004', 'LT', 30, 15, 0, 0, 0, 2),
('9CBCTDC001', 'LT', 45, 30, 0, 0, 0, 4),
('9CBCTDC002', 'LT', 30, 0, 0, 0, 0, 2),
('9CBCTDC003', 'LT', 45, 0, 0, 0, 0, 3),
('9CBLYDC004', 'TH', 0, 0, 15, 0, 0, 1),
('9CBLYDC005', 'TH', 0, 0, 15, 0, 0, 1),
('9CBTDDC001', 'TH', 0, 0, 30, 0, 0, 0),
('9CBTDDC002', 'TH', 0, 0, 30, 0, 0, 0),
('9CBTDDC003', 'TH', 0, 0, 30, 0, 0, 0),
('9CBTDDC004', 'TH', 0, 0, 30, 0, 0, 0),
('9CBXHDC001', 'LT', 30, 15, 0, 0, 0, 2),
('9DTXHDC002', 'LT', 30, 15, 0, 0, 0, 1),
('9DTXHTC101', 'LT', 30, 15, 0, 0, 0, 2),
('9THTHDC001', 'LT', 30, 15, 0, 0, 0, 2),
('9THTHDC002', 'TH', 0, 0, 30, 0, 0, 1),
('9TPHODC001', 'LT', 30, 15, 0, 0, 0, 2),
('C123456789', 'DA', 30, 15, 0, 0, 0, 3),
('NB123456789', 'LATN', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chitietsv`
--

DROP TABLE IF EXISTS `chitietsv`;
CREATE TABLE IF NOT EXISTS `chitietsv` (
  `machitietsv` varchar(15) NOT NULL,
  `mssv` varchar(15) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(15) NOT NULL,
  `quequan` tinytext NOT NULL,
  `noio` tinytext,
  `sothich` tinytext,
  `email` varchar(50) DEFAULT NULL,
  `avata` tinytext,
  `sdt` int(15) DEFAULT NULL,
  `ngaynhaphoc` date DEFAULT NULL,
  PRIMARY KEY (`machitietsv`),
  KEY `mssv` (`mssv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietsv`
--

INSERT INTO `chitietsv` (`machitietsv`, `mssv`, `ngaysinh`, `gioitinh`, `quequan`, `noio`, `sothich`, `email`, `avata`, `sdt`, `ngaynhaphoc`) VALUES
('DH28282828', 'DH28282828', '1998-01-10', 'Nam', 'Bãi Cát', 'Long Biên', 'ĐI phượt', 'nedkelly91195@gmail.com', NULL, 123456789, '2016-09-01'),
('DH32323232', 'DH32323232', '2000-07-09', 'Nam', '', NULL, NULL, NULL, NULL, NULL, '2018-09-01'),
('DH45454545', 'DH45454545', '1996-09-11', 'Nam', 'Ninh Bình', 'Lạng sơn', NULL, NULL, NULL, NULL, '2016-01-01'),
('DH51400357', 'DH51400357', '1996-07-12', 'Nữ', 'Vũng Tàu', 'Bàu Bàng TPHCM', 'Ăn kem mùa đông', NULL, NULL, NULL, '2016-01-19'),
('DH51400962', 'DH51400962', '1995-07-03', 'Nam', 'Thái Bình', 'QUận 8 TPHCM', 'Đi phượt', NULL, NULL, NULL, '2016-09-01'),
('DH54545454', 'DH54545454', '1998-07-09', 'Nữ', '', NULL, NULL, NULL, NULL, NULL, '2019-09-01'),
('DH56565657', 'DH56565657', '1998-09-04', 'Nữ', 'Thanh Hóa', 'Bình Dã TPHCM', NULL, NULL, NULL, NULL, '2018-09-01'),
('DH85868585', 'DH85868585', '1995-02-07', 'Nam', 'Thái Bình', 'Cà Mau', NULL, NULL, NULL, NULL, '2019-01-01'),
('DH98989898', 'DH98989898', '1996-06-06', 'Nam', 'Thanh Hóa', 'Nam định', NULL, NULL, NULL, NULL, '2017-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `dangkymonhoc`
--

DROP TABLE IF EXISTS `dangkymonhoc`;
CREATE TABLE IF NOT EXISTS `dangkymonhoc` (
  `madk` int(10) NOT NULL AUTO_INCREMENT,
  `ngaydk` datetime NOT NULL,
  `mssv` varchar(15) NOT NULL,
  `mamh` varchar(15) NOT NULL,
  PRIMARY KEY (`madk`),
  KEY `mssv` (`mssv`),
  KEY `mamh` (`mamh`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dangkymonhoc`
--

INSERT INTO `dangkymonhoc` (`madk`, `ngaydk`, `mssv`, `mamh`) VALUES
(10, '2018-07-17 00:00:00', 'DH28282828', '1THCHCN001'),
(11, '2018-07-17 00:00:00', 'DH28282828', '1THCHCN002'),
(12, '2018-07-17 00:00:00', 'DH28282828', '1THCHCN003'),
(13, '2018-07-17 00:00:00', 'DH28282828', '1THCHCN004'),
(14, '2018-07-17 00:00:00', 'DH28282828', '1THCHCN005'),
(15, '2018-07-17 00:00:00', 'DH28282828', '1THCHCN006'),
(16, '2018-07-17 00:00:00', 'DH32323232', '1CBLYDC001'),
(17, '2018-07-17 00:00:00', 'DH32323232', '1CBTODC001'),
(18, '2018-07-17 00:00:00', 'DH32323232', '1CBTODC002'),
(19, '2018-07-17 00:00:00', 'DH32323232', '9CBAVDC001'),
(20, '2018-07-17 00:00:00', 'DH32323232', '9CBLYDC004'),
(21, '2018-07-17 00:00:00', 'DH32323232', '9THTHDC001'),
(22, '2018-07-17 00:00:00', 'DH32323232', '9THTHDC002');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

DROP TABLE IF EXISTS `giangvien`;
CREATE TABLE IF NOT EXISTS `giangvien` (
  `magv` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `machitietgv` varchar(15) NOT NULL,
  `makhoa` varchar(15) NOT NULL,
  PRIMARY KEY (`magv`),
  KEY `makhoa` (`makhoa`),
  KEY `machitietgv` (`machitietgv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`magv`, `pass`, `hoten`, `machitietgv`, `makhoa`) VALUES
('GV12345678', 'GV12345678', 'Nguyễn Văn A', 'GV12345678', 'TH'),
('GV87654321', 'GV87654321', 'Trần Văn B', 'GV87654321', 'TH');

-- --------------------------------------------------------

--
-- Table structure for table `hockycanhan`
--

DROP TABLE IF EXISTS `hockycanhan`;
CREATE TABLE IF NOT EXISTS `hockycanhan` (
  `mahk` varchar(15) NOT NULL,
  `tenhk` varchar(15) NOT NULL,
  PRIMARY KEY (`mahk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hockycanhan`
--

INSERT INTO `hockycanhan` (`mahk`, `tenhk`) VALUES
('1', 'Học kỳ 1'),
('2', 'Học kỳ 2'),
('3', 'Học kỳ 3'),
('4', 'Học kỳ 4'),
('5', 'Học kỳ 5'),
('6', 'Học kỳ 6'),
('7', 'Học kỳ 7'),
('8', 'Học kỳ 8');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

DROP TABLE IF EXISTS `khoa`;
CREATE TABLE IF NOT EXISTS `khoa` (
  `makhoa` varchar(15) NOT NULL,
  `tenkhoa` text NOT NULL,
  PRIMARY KEY (`makhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('TH', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
CREATE TABLE IF NOT EXISTS `lop` (
  `malop` varchar(15) NOT NULL,
  `tenlop` varchar(50) NOT NULL,
  `magv` varchar(15) NOT NULL,
  `makhoa` varchar(15) NOT NULL,
  PRIMARY KEY (`malop`),
  KEY `magv` (`magv`),
  KEY `makhoa` (`makhoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`malop`, `tenlop`, `magv`, `makhoa`) VALUES
('TH01', 'Tin học 01', 'GV12345678', 'TH'),
('TH02', 'Tin học 02', 'GV87654321', 'TH'),
('TH03', 'Tin hoc 03', 'GV87654321', 'TH'),
('TH04', 'Tin học 04', 'GV87654321', 'TH'),
('TH05', 'Tin học 05', 'GV12345678', 'TH'),
('TH06', 'Tin học 06', 'GV12345678', 'TH');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `mamh` varchar(15) NOT NULL,
  `tenmh` text NOT NULL,
  `mahk` varchar(15) NOT NULL,
  PRIMARY KEY (`mamh`),
  KEY `mahk` (`mahk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`, `mahk`) VALUES
('1CBBTTN001', 'Lý luận chính trị cuối khóa', '8'),
('1CBLYDC001', 'Vật lý 1 (Cơ - Nhiệt)', '1'),
('1CBLYDC002', 'Vật lý 2 (Điện từ - quang)', '2'),
('1CBTODC001', 'Toán A1 (Hàm 1 biến, chuỗi)', '1'),
('1CBTODC002', 'Toán A2 (Đại số tuyến tính)', '1'),
('1CBTODC003', 'Toán A3 (Hàm nhiều biến, giải tích vectơ)', '2'),
('1THBTTN002', 'Đồ án / Khóa luận tốt nghiệp', '8'),
('1THCHCN001', 'Công nghệ phần mềm', '5'),
('1THCHCN002', 'Lập trình hướng đối tượng', '5'),
('1THCHCN003', 'Thực hành Lập trình hướng đối tượng', '5'),
('1THCHCN004', 'Nhập môn Web và ứng dụng', '5'),
('1THCHCN005', 'Thực hành Nhập môn Web và ứng dụng', '5'),
('1THCHCN006', 'Đồ án tin học', '5'),
('1THCHCN008', 'Quản trị mạng', '6'),
('1THCHCN009', 'Phát triển phần mềm nguồn mở', '7'),
('1THCHCN010', 'Thực hành Phát triển phần mềm nguồn mở', '7'),
('1THCHCN011', 'Tự chọn ngành 1 : Thương mại điện tử', '6'),
('1THCHCN013', 'Thực hành Lập trình ứng dụng cơ sở dữ liệu', '6'),
('1THCHCN014', 'Lập trình Web', '7'),
('1THCHCN015', 'Thực hành Lập trình Web', '7'),
('1THCHCN017', 'Tự chọn ngành 2 : Lập trình ứng dụng cơ sở dữ liệu', '6'),
('1THCHCN018', 'Seminar nghề nghiệp', '6'),
('1THCHCN019', 'Đồ án Chuyên ngành', '7'),
('1THCHCS001', 'Nhập môn lập trình', '2'),
('1THCHCS002', 'Thực hành Nhập môn lập trình', '2'),
('1THCHCS003', 'Hệ thống số', '2'),
('1THCHCS004', 'Thí nghiệm Hệ thống số', '2'),
('1THCHCS005', 'Tổ chức cấu trúc máy tính', '3'),
('1THCHCS006', 'Thực hành Tổ chức cấu trúc máy tính', '3'),
('1THCHCS007', 'Kỹ thuật lập trình', '3'),
('1THCHCS008', 'Thực hành Kỹ thuật lập trình', '3'),
('1THCHCS009', 'Nhập môn cấu trúc dữ liệu', '3'),
('1THCHCS010', 'Thực hành Nhập môn cấu trúc dữ liệu', '3'),
('1THCHCS011', 'Cấu trúc dữ liệu và thuật giải', '4'),
('1THCHCS012', 'Thực hành Cấu trúc dữ liệu và thuật giải', '4'),
('1THCHCS013', 'Cơ sở dữ liệu', '4'),
('1THCHCS014', 'Thực hành Cơ sở dữ liệu', '4'),
('1THCHCS015', 'Hệ điều hành', '4'),
('1THCHCS016', 'Thực hành Hệ điều hành', '4'),
('1THCHCS017', 'Toán tin học', '3'),
('1THCHCS018', 'Mạng máy tính', '5'),
('1THLTCN003', 'An ninh máy tính', '6'),
('1THLTCN004', 'Thực tập An ninh máy tính', '6'),
('1THTTTN001', 'Thực tập tốt nghiệp', '8'),
('1THWECN005', 'Phân tích thiết kế hệ thống thông tin', '7'),
('1THWECN006', 'Đồ án Phân tích thiết kế hệ thống thông tin', '7'),
('1THWECN009', 'Xây dựng phần mềm Web', '8'),
('9CBAVDC001', 'Tiếng Anh 1', '1'),
('9CBAVDC002', 'Tiếng Anh 2', '2'),
('9CBAVDC003', 'Tiếng Anh 3', '3'),
('9CBAVDC004', 'Tiếng Anh 4', '4'),
('9CBCTDC001', 'Những nguyên lý cơ bản của chủ nghĩa Mác - Lênin', '2'),
('9CBCTDC002', 'Tư tưởng Hồ Chí Minh', '3'),
('9CBCTDC003', 'Đường lối cách mạng của Đảng Cộng sản Việt Nam', '4'),
('9CBLYDC004', 'Thí nghiệm Vật lý 1', '1'),
('9CBLYDC005', 'Thí nghiệm Vật lý 2', '2'),
('9CBTDDC001', 'Giáo dục thể chất 1 (Bóng chuyền)', '2'),
('9CBTDDC002', 'Giáo dục thể chất 2 (Bóng chuyền)', '2'),
('9CBTDDC003', 'Giáo dục thể chất 3 (Bóng rổ)', '3'),
('9CBTDDC004', 'Giáo dục thể chất 4 (Bóng rổ)', '3'),
('9CBXHDC001', 'Pháp luật Việt Nam đại cương', '3'),
('9DTXHDC002', 'Nhập môn công tác kỹ sư', '4'),
('9DTXHTC101', 'KHXHNV tự chọn 1 : Kỹ năng giao tiếp', '7'),
('9THTHDC001', 'Tin học đại cương', '1'),
('9THTHDC002', 'Thực hành Tin học đại cương', '1'),
('9TPHODC001', 'Hóa đại cương', '1'),
('C123456789', 'Hóa vi sinh', '2'),
('NB123456789', 'Phân tử lượng', '2');

-- --------------------------------------------------------

--
-- Table structure for table `ngaymodangky`
--

DROP TABLE IF EXISTS `ngaymodangky`;
CREATE TABLE IF NOT EXISTS `ngaymodangky` (
  `mangaymodk` int(11) NOT NULL AUTO_INCREMENT,
  `ngaymodk` date NOT NULL,
  `ngaydongdk` date DEFAULT NULL,
  PRIMARY KEY (`mangaymodk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ngaymodangky`
--

INSERT INTO `ngaymodangky` (`mangaymodk`, `ngaymodk`, `ngaydongdk`) VALUES
(1, '2018-07-16', '2018-07-20'),
(2, '2019-01-01', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `manv` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `hoten` text NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gt` varchar(15) NOT NULL,
  `quequan` text NOT NULL,
  `noio` text NOT NULL,
  `email` text NOT NULL,
  `sdt` text NOT NULL,
  `avt` text NOT NULL,
  PRIMARY KEY (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `pass`, `hoten`, `ngaysinh`, `gt`, `quequan`, `noio`, `email`, `sdt`, `avt`) VALUES
('NV12345678', 'NV12345678', 'Nguyễn Xuân Hiếu', '1975-07-02', 'Nam', '', '', '', '123456789', ''),
('NV87654321', 'NV87654321', 'Nguyễn Thị DUyên', '1954-01-19', 'Nữ', 'Quảng Bình', 'Nghĩa Trung Gia Nghĩa ĐN', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucgiangday`
--

DROP TABLE IF EXISTS `phuongthucgiangday`;
CREATE TABLE IF NOT EXISTS `phuongthucgiangday` (
  `mapphoc` varchar(15) NOT NULL,
  `tenpphoc` text NOT NULL,
  PRIMARY KEY (`mapphoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phuongthucgiangday`
--

INSERT INTO `phuongthucgiangday` (`mapphoc`, `tenpphoc`) VALUES
('DA', 'Đồ án'),
('LATN', 'Luận văn tốt nghiệp'),
('LT', 'Lý thuyết'),
('TH', 'Thực hành');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `mssv` varchar(15) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hoten` tinytext NOT NULL,
  `machitietsv` varchar(15) NOT NULL,
  `malop` varchar(15) NOT NULL,
  `manv` varchar(15) NOT NULL,
  PRIMARY KEY (`mssv`),
  KEY `machitietsv` (`machitietsv`),
  KEY `malop` (`malop`),
  KEY `manv` (`manv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`mssv`, `pass`, `hoten`, `machitietsv`, `malop`, `manv`) VALUES
('DH28282828', 'DH28282828', 'Bấc Sơn', 'DH28282828', 'TH01', 'NV87654321'),
('DH32323232', 'DH32323232', 'Nguyễn Khải', 'DH32323232', 'TH03', 'NV87654321'),
('DH45454545', 'DH45454545', 'Nguyễn Hoàng Nam', 'DH45454545', 'TH05', 'NV12345678'),
('DH51400357', 'DH51400357', 'Nguyễn Thị Thu Thủy', 'DH51400357', 'TH02', 'NV87654321'),
('DH51400962', 'DH51400962', 'Vũ Tá Phương', 'DH51400962', 'TH01', 'NV12345678'),
('DH54545454', 'DH54545454', 'Nguyễn Thị Mến', 'DH54545454', 'TH05', 'NV87654321'),
('DH56565657', 'DH56565657', 'Nguyễn Thị Hương', 'DH56565657', 'TH05', 'NV87654321'),
('DH85868585', 'DH85868585', 'Trần Tấn Đạt', 'DH85868585', 'TH01', 'NV12345678'),
('DH98989898', 'DH98989898', 'Nguyễn Hoàng Na', 'DH98989898', 'TH01', 'NV12345678');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dangky`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_dangky`;
CREATE TABLE IF NOT EXISTS `v_dangky` (
`mamh` varchar(15)
,`mssv` varchar(15)
,`mapphoc` varchar(15)
,`lythuyet` int(11)
,`baitap` int(2)
,`thuchanh` int(2)
,`doan` int(11)
,`LATN` int(3)
,`tinchi` int(11)
,`tenmh` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_dangkytest`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `v_dangkytest`;
CREATE TABLE IF NOT EXISTS `v_dangkytest` (
`mssv` varchar(15)
,`mamh` varchar(15)
,`mapphoc` varchar(15)
,`lythuyet` int(11)
,`baitap` int(2)
,`thuchanh` int(2)
,`doan` int(11)
,`LATN` int(3)
,`tinchi` int(11)
,`tenmh` text
);

-- --------------------------------------------------------

--
-- Structure for view `v_dangky`
--
DROP TABLE IF EXISTS `v_dangky`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dangky`  AS  select `monhoc`.`mamh` AS `mamh`,`dangkymonhoc`.`mssv` AS `mssv`,`chitietphuongthucgiangdaymonhoc`.`mapphoc` AS `mapphoc`,`chitietphuongthucgiangdaymonhoc`.`lythuyet` AS `lythuyet`,`chitietphuongthucgiangdaymonhoc`.`baitap` AS `baitap`,`chitietphuongthucgiangdaymonhoc`.`thuchanh` AS `thuchanh`,`chitietphuongthucgiangdaymonhoc`.`doan` AS `doan`,`chitietphuongthucgiangdaymonhoc`.`LATN` AS `LATN`,`chitietphuongthucgiangdaymonhoc`.`tinchi` AS `tinchi`,`monhoc`.`tenmh` AS `tenmh` from ((`monhoc` join `dangkymonhoc`) join `chitietphuongthucgiangdaymonhoc`) where ((`monhoc`.`mamh` = `dangkymonhoc`.`mamh`) and (`chitietphuongthucgiangdaymonhoc`.`mamh` = `monhoc`.`mamh`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_dangkytest`
--
DROP TABLE IF EXISTS `v_dangkytest`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dangkytest`  AS  select `dangkymonhoc`.`mssv` AS `mssv`,`dangkymonhoc`.`mamh` AS `mamh`,`chitietphuongthucgiangdaymonhoc`.`mapphoc` AS `mapphoc`,`chitietphuongthucgiangdaymonhoc`.`lythuyet` AS `lythuyet`,`chitietphuongthucgiangdaymonhoc`.`baitap` AS `baitap`,`chitietphuongthucgiangdaymonhoc`.`thuchanh` AS `thuchanh`,`chitietphuongthucgiangdaymonhoc`.`doan` AS `doan`,`chitietphuongthucgiangdaymonhoc`.`LATN` AS `LATN`,`chitietphuongthucgiangdaymonhoc`.`tinchi` AS `tinchi`,`monhoc`.`tenmh` AS `tenmh` from ((`monhoc` join `chitietphuongthucgiangdaymonhoc`) join `dangkymonhoc`) where ((`dangkymonhoc`.`mamh` = `monhoc`.`mamh`) and (`monhoc`.`mamh` = `chitietphuongthucgiangdaymonhoc`.`mamh`)) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdongiangvienphutrachmonhoc`
--
ALTER TABLE `chitietdongiangvienphutrachmonhoc`
  ADD CONSTRAINT `chitietdongiangvienphutrachmonhoc_ibfk_3` FOREIGN KEY (`madk`) REFERENCES `dangkymonhoc` (`madk`),
  ADD CONSTRAINT `chitietdongiangvienphutrachmonhoc_ibfk_4` FOREIGN KEY (`manamhoc`) REFERENCES `chitietgiangvienphutrachmonhoc` (`manamhoc`);

--
-- Constraints for table `chitietgiangvienphutrachmonhoc`
--
ALTER TABLE `chitietgiangvienphutrachmonhoc`
  ADD CONSTRAINT `chitietgiangvienphutrachmonhoc_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`),
  ADD CONSTRAINT `chitietgiangvienphutrachmonhoc_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Constraints for table `chitietgv`
--
ALTER TABLE `chitietgv`
  ADD CONSTRAINT `chitietgv_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`);

--
-- Constraints for table `chitietphuongthucgiangdaymonhoc`
--
ALTER TABLE `chitietphuongthucgiangdaymonhoc`
  ADD CONSTRAINT `chitietphuongthucgiangdaymonhoc_ibfk_1` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`),
  ADD CONSTRAINT `chitietphuongthucgiangdaymonhoc_ibfk_2` FOREIGN KEY (`mapphoc`) REFERENCES `phuongthucgiangday` (`mapphoc`);

--
-- Constraints for table `chitietsv`
--
ALTER TABLE `chitietsv`
  ADD CONSTRAINT `chitietsv_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`);

--
-- Constraints for table `dangkymonhoc`
--
ALTER TABLE `dangkymonhoc`
  ADD CONSTRAINT `dangkymonhoc_ibfk_1` FOREIGN KEY (`mssv`) REFERENCES `sinhvien` (`mssv`),
  ADD CONSTRAINT `dangkymonhoc_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Constraints for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD CONSTRAINT `giangvien_ibfk_1` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`magv`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`);

--
-- Constraints for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`mahk`) REFERENCES `hockycanhan` (`mahk`);

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`malop`) REFERENCES `lop` (`malop`),
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
