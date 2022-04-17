-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2022 lúc 11:24 AM
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
-- Cơ sở dữ liệu: `pro_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_nhanvien`
--

CREATE TABLE `admin_nhanvien` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `lv` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin_nhanvien`
--

INSERT INTO `admin_nhanvien` (`id`, `username`, `password`, `full_name`, `lv`) VALUES
(5, 'admin', 'tung123456789', 'Tô Vân Tùng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(1, 'Quân áo'),
(2, 'Giày dép'),
(3, 'Vòng cố'),
(4, 'Thất lưng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder`
--

CREATE TABLE `oder` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(190) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` decimal(15,0) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_detail`
--

CREATE TABLE `oder_detail` (
  `id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(15,0) NOT NULL,
  `amount` decimal(15,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` decimal(15,0) NOT NULL,
  `amount` int(11) NOT NULL,
  `img_link` varchar(50) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `price`, `amount`, `img_link`, `content`) VALUES
(6, 3, 'vòng cố 1', '100000', 123, '../img/phukien_1.jpg', 'cực đẹp'),
(7, 3, 'Vòng cổ 2', '200000', 18, '../img/phukien_7.jpg', 'Đẹp cực kì rất đẹp'),
(8, 4, 'Sản phẩm 4', '100000', 90, '../img/dochoi_7.jpg', 'Samsung Galalxy X'),
(9, 1, 'Sản phẩm 4', '450000', 123, '../img/chuongnuoi_4.jpg', 'Samsung Galalxy x'),
(10, 2, 'Đồ chơi', '130000', 123, '../img/chuongnuoi_5.jpg', 'Đẹp cực kì'),
(11, 2, 'Sản phẩm chuồng nuôi', '900000', 10, '../img/dochoi_2.jpg', 'Samsung Galalxy X'),
(12, 4, 'tungtung', '10000', 123, '../img/thucan_7. jpg', 'Đẹp cực kì'),
(13, 2, 'Sản phẩm 4', '100000', 123, '../img/thucan_6.jpg', 'Samsung Galalxy X');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` int(1) NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_nhanvien`
--
ALTER TABLE `admin_nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oder_detail_ibfk_1` (`oder_id`),
  ADD KEY `oder_detail_ibfk_2` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`catalog_id`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rate_ibfk_1` (`user_id`),
  ADD KEY `rate_ibfk_2` (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_nhanvien`
--
ALTER TABLE `admin_nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD CONSTRAINT `oder_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`catalog_id`) REFERENCES `catalog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
