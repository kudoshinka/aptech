-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2022 lúc 06:20 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `maytinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `Mahang` varchar(5) NOT NULL,
  `Tenhang` varchar(50) NOT NULL,
  `Soluong` int(32) NOT NULL,
  `Hinhanh` varchar(30) NOT NULL,
  `Mota` varchar(100) NOT NULL,
  `Giahang` decimal(10,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`Mahang`, `Tenhang`, `Soluong`, `Hinhanh`, `Mota`, `Giahang`) VALUES
('1', 'laptop1', 10, '../img/1.jpeg', 'dep', '1000000.0'),
('2', 'laptop2', 20, '../img/2.jpeg', 'dep', '2000000.0'),
('3', 'laptop3', 30, '../img/3.jpeg', 'dep', '3000000.0'),
('4', 'laptop4', 40, '../img/4.png', 'dep', '400000.0'),
('5', 'laptop5', 50, '../img/5.jpeg', 'dep', '5000000.0'),
('6', 'laptop6', 60, '../img/6.jpeg', 'dep', '6000000.0'),
('7', 'laptop7', 70, '../img/7.jpeg', 'dep', '7000000.0'),
('8', 'laptop8', 80, '../img/8.jpeg', 'dep', '8000000.0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
