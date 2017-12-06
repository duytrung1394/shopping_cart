-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 01:21 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giohang`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `mahd` int(11) NOT NULL,
  `masp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`mahd`, `masp`, `soluong`) VALUES
(74, 1, 3),
(75, 3, 2),
(75, 2, 3),
(76, 1, 2),
(76, 2, 7),
(77, 3, 3),
(78, 1, 1),
(79, 3, 3),
(80, 3, 1),
(80, 2, 4),
(81, 2, 1),
(82, 1, 4),
(82, 2, 2),
(83, 3, 2),
(84, 2, 2),
(84, 1, 4),
(84, 3, 5),
(85, 3, 3),
(86, 3, 13),
(87, 1, 4),
(87, 2, 6),
(87, 3, 7),
(88, 3, 6),
(89, 3, 7),
(89, 1, 4),
(90, 1, 4),
(90, 2, 6),
(91, 3, 87),
(92, 1, 90),
(93, 1, 4),
(94, 1, 1),
(95, 4, 4),
(96, 5, 20),
(96, 4, 1),
(96, 3, 1),
(96, 2, 1),
(96, 1, 1),
(97, 4, 99),
(98, 4, 5),
(99, 4, 1),
(100, 5, 1),
(100, 4, 1),
(100, 3, 1),
(100, 2, 1),
(100, 1, 1),
(101, 4, 1),
(101, 5, 1),
(101, 1, 1),
(102, 3, 1),
(103, 3, 4),
(104, 4, 4),
(105, 2, 4),
(105, 1, 1),
(105, 3, 1),
(116, 2, 2),
(117, 2, 3),
(118, 1, 3),
(119, 1, 2),
(120, 4, 2),
(121, 3, 2),
(122, 1, 2),
(123, 4, 3),
(124, 2, 1),
(125, 3, 2),
(126, 1, 2),
(127, 3, 1),
(128, 3, 2),
(129, 4, 3),
(130, 2, 2),
(131, 4, 2),
(132, 2, 1),
(133, 3, 3),
(134, 3, 2),
(135, 1, 2),
(136, 4, 1),
(137, 2, 1),
(137, 1, 1),
(138, 1, 3),
(141, 3, 3),
(143, 3, 2),
(146, 5, 2),
(148, 3, 1),
(153, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `ngay` datetime NOT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `ngay`, `hoten`, `sodienthoai`, `diachi`, `tongtien`) VALUES
(74, '2017-09-22 22:16:01', 'Lê Văn Hùng', 999399239, 'Hưng lộc - Vinh - Nghệ An', 33000),
(75, '2017-09-22 22:16:38', 'Hà Khánh Linh', 111112030, 'Hưng Dũng - Vinh - Nghệ Anh', 105000),
(76, '2017-09-22 22:17:28', 'Lê Duy Trung', 199202033, 'Hưng Lộc - Vinh - Nghệ An', 127000),
(77, '2017-09-22 22:18:01', 'Hoàng văn Hi', 102030201, '15 Bến Nghé ', 90000),
(78, '2017-09-22 22:18:28', 'Lò Văn Hò', 20003002, 'Hà Tĩnh', 11000),
(79, '2017-09-22 22:18:57', 'Koosey', 203020321, 'Syne', 90000),
(80, '2017-09-22 22:19:26', 'Lê Huyền My', 999299922, 'Hải Phòng', 90000),
(81, '2017-09-22 22:19:49', 'Tòng Thị Phóng', 2147483647, 'Mỹ Đình Hà Nội', 15000),
(82, '2017-09-23 14:47:45', 'Lê Duy Trung', 2147483647, 'Vinh Nghệ An', 30000),
(83, '2017-09-23 14:50:39', 'Hi hà hòng', 120301023, 'Hải phòng việt nam', 60000),
(84, '2017-09-23 14:53:56', 'Nguyên Ngọc Trâm', 979449329, 'Vinh Nghệ An', 224000),
(85, '2017-09-23 18:30:42', 'Long Ha lo', 915503213, 'x10', 90000),
(86, '2017-09-23 20:03:12', 'Hoàng Thị Hà', 900123002, 'Quận 1 Thành phố Hồ Chí Minh', 390000),
(87, '2017-09-23 20:05:38', 'Suni Hạ Linh', 978388288, 'Đống Đa Hà Nội', 344000),
(88, '2017-09-23 20:06:12', 'Huyền My', 870302203, 'Hưng Yên', 180000),
(89, '2017-09-23 20:07:05', 'Nguyễn Hoàng Phương Uyên', 2147483647, 'Hà Nội', 254000),
(90, '2017-09-23 20:07:54', 'Khánh Linh', 994999321, 'Hồ Chí Minh', 134000),
(91, '2017-09-23 21:06:52', 'Đại Gia Gia', 234234123, 'Vinh Nghệ An', 2610000),
(92, '2017-09-23 21:07:47', 'Lê linh Linh', 199123993, 'Nam Đàn', 990000),
(93, '2017-09-23 21:08:42', 'Thai Văn Hùng', 949912993, 'Đà Nẵng', 44000),
(94, '2017-09-23 21:09:56', 'Hồ Văn Hào', 999392342, 'Vũng Tàu', 11000),
(95, '2017-09-23 21:25:00', 'Hoàng Thị Đại Gia', 120301031, 'Vinh', 32000000),
(96, '2017-09-23 21:34:01', 'Em Là Đại Gia', 1230002, 'Đại Gia Phố', 143596000),
(97, '2017-09-23 21:35:28', 'Hi Ho Ha Hè Hừm', 2147483647, 'Vinh Phố', 792000000),
(98, '2017-09-23 21:35:53', 'Mua Thị Áo', 123012030, 'Hình Su', 40000000),
(99, '2017-09-23 21:47:52', 'Lê Duy Trung', 123102213, 'Vinh Nghệ An', 8000000),
(100, '2017-09-23 21:48:39', 'Hong thi Phong', 130012300, 'Lào', 14833000),
(101, '2017-09-23 21:49:25', 'Trung Duy', 123013123, 'Hà Nội', 14788000),
(102, '2017-10-01 22:12:47', '123123', 10023002, '3123123', 30000),
(103, '2017-10-03 16:31:30', 'Hi hi haha', 2147483647, 'Vinh', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `hinhanh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tensp` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `hinhanh`, `tensp`, `dongia`) VALUES
(1, 'anh1.jpg', 'Áo thu họa tiết', 11000),
(2, 'anh2.jpg', 'Áo len\r\n', 15000),
(3, 'anh3.jpg', 'váy xèo và áo len', 30000),
(4, 'anh5.JPG', 'áo phông', 50000),
(5, '41650316IJ_13_f.jpg', 'áo trắng', 13200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
