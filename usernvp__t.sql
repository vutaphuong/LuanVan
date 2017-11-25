-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2017 lúc 02:27 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `usernvpđt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinnv`
--

CREATE TABLE `thongtinnv` (
  `manv` varchar(20) NOT NULL,
  `passnv` varchar(50) NOT NULL,
  `hotennv` tinytext NOT NULL,
  `gioitinhnv` tinytext NOT NULL,
  `quequannv` tinytext NOT NULL,
  `emailnv` varchar(50) NOT NULL,
  `sđtnv` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtinnv`
--

INSERT INTO `thongtinnv` (`manv`, `passnv`, `hotennv`, `gioitinhnv`, `quequannv`, `emailnv`, `sđtnv`) VALUES
('nv1', 'nv1', 'Nguyễn Thế Mạnh', 'Nam', 'Nghệ An, Sơn La', 'hoangtupro@gmail.com', 123456789),
('nv2', 'nv2', 'Nguyễn Xuân Hiếu', 'Nữ', 'Nghệ An, Cao Bằng', 'kaiser29061996@gmail.com', 123456788);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usernv`
--

CREATE TABLE `usernv` (
  `manv` varchar(20) NOT NULL,
  `passnv` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `usernv`
--

INSERT INTO `usernv` (`manv`, `passnv`) VALUES
('nv1', 'nv1'),
('nv2', 'nv2'),
('nv3', 'nv3'),
('nv4', 'nv4');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongtinnv`
--
ALTER TABLE `thongtinnv`
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `usernv`
--
ALTER TABLE `usernv`
  ADD PRIMARY KEY (`manv`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
