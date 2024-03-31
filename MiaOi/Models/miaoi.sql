-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2024 lúc 09:49 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `miaoi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcm` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcm`, `idkh`, `idsp`, `content`) VALUES
(1, 2, 12001, 'Rõ vị matcha và chocolate, ngon đậm đà'),
(2, 2, 12002, 'Mùi caramel đậm, ngon ngọt không bị đắng'),
(3, 5, 12001, 'Không hợp khẩu vị của tôi'),
(4, 5, 12002, 'Vị machiato quá gắt'),
(5, 4, 12003, 'Cà phê ngon'),
(6, 6, 12003, 'Mùi cà phê hơi nhạt'),
(7, 5, 12004, 'Ngon lắm'),
(8, 2, 12004, 'Latte uống hơi nhạt'),
(9, 6, 26001, 'Rõ vị lá dứa mà không mất vị mía, ngon'),
(10, 5, 26001, 'Uống hơi kì'),
(11, 4, 26002, 'Vị quýt khá ngon'),
(12, 2, 26002, 'Vị mía quá gắt, át đi vị quýt'),
(13, 6, 26003, 'Khá ngon, vị dâu đậm'),
(14, 5, 26003, 'Không ngon lắm'),
(15, 2, 26004, '10 điểm không nhưng'),
(16, 4, 26004, 'Vị không hợp miệng'),
(17, 6, 26005, 'Vị ô long tương đối ngon'),
(18, 4, 26005, 'Uống được nhưng không hấp dẫn'),
(19, 2, 26006, 'Khá ngon, sẽ ủng hộ'),
(20, 5, 26006, 'Dễ ngán'),
(21, 6, 26007, 'Kết rồi đó, ngon lắm'),
(22, 4, 26007, 'Nhạt đối với tôi'),
(23, 2, 26008, 'Khá ổn, vị tương đối ngon'),
(24, 5, 26008, 'Chịu luôn :)))'),
(25, 4, 26001, 'Yummy'),
(26, 2, 26007, 'Good'),
(27, 5, 26007, '  GGG'),
(28, 5, 26007, '  Yêu em bé Mai Phương của anh lắm <3'),
(29, 5, 26007, '  Yêu em bé Mai Phương của anh lắm\r\n\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `idhd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `topping` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `size` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`idhd`, `idsp`, `soluong`, `topping`, `size`, `thanhtien`, `tinhtrang`) VALUES
(1, 26005, 1, '', '1', 33000, 0),
(1, 26007, 1, '', '1', 33000, 0),
(2, 26005, 1, '', '1', 33000, 0),
(2, 26007, 1, '', '1', 33000, 0),
(3, 26005, 1, '', '1', 33000, 0),
(3, 26007, 1, '', '1', 33000, 0),
(4, 26005, 1, '', '1', 33000, 0),
(4, 26007, 1, '', '1', 33000, 0),
(5, 26005, 1, '', '1', 33000, 0),
(5, 26007, 1, '', '1', 33000, 0),
(6, 26003, 3, '', '2', 99000, 0),
(6, 26007, 1, '', '2', 33000, 0),
(7, 26003, 3, '', '2', 99000, 0),
(7, 26007, 1, '', '2', 33000, 0),
(8, 26003, 3, '', '2', 99000, 0),
(8, 26007, 1, '', '2', 33000, 0),
(9, 26004, 3, '', '2', 99000, 0),
(9, 26006, 3, '', '2', 99000, 0),
(10, 26004, 3, '', '2', 99000, 0),
(10, 26006, 3, '', '2', 99000, 0),
(11, 26004, 3, '', '2', 99000, 0),
(11, 26006, 3, '', '2', 99000, 0),
(12, 26008, 1, '', '1', 40000, 0),
(13, 26008, 4, '', '1', 160000, 0),
(14, 26003, 1, '', '1', 33000, 0),
(14, 26008, 4, '', '1', 160000, 0),
(15, 26007, 4, '', '1', 132000, 0),
(16, 26007, 4, '', '1', 132000, 0),
(17, 26007, 4, '', '1', 132000, 0),
(18, 26007, 4, '', '1', 132000, 0),
(19, 26007, 4, '', '1', 132000, 0),
(20, 26007, 4, '', '1', 132000, 0),
(21, 26007, 4, '', '1', 132000, 0),
(22, 26007, 4, '', '1', 132000, 0),
(23, 26007, 4, '', '1', 132000, 0),
(24, 26007, 4, '', '1', 132000, 0),
(25, 26007, 4, '', '1', 132000, 0),
(26, 26007, 4, '', '1', 132000, 0),
(27, 26007, 4, '', '1', 132000, 0),
(28, 26007, 4, '', '1', 132000, 0),
(29, 26007, 4, '', '1', 132000, 0),
(30, 26007, 4, '', '1', 132000, 0),
(31, 26007, 4, '', '1', 132000, 0),
(32, 26007, 4, '', '1', 132000, 0),
(33, 26007, 4, '', '1', 132000, 0),
(34, 26007, 4, '', '1', 132000, 0),
(35, 26007, 4, '', '1', 132000, 0),
(36, 26007, 4, '', '1', 132000, 0),
(37, 26007, 4, '', '1', 132000, 0),
(38, 26007, 4, '', '1', 132000, 0),
(39, 26008, 1, '31442,32251,52114,56554,65741,77884,78554,96124', '1', 40000, 0),
(40, 26008, 1, '31442,32251,52114,56554,65741,77884,78554,96124', '1', 40000, 0),
(41, 26008, 1, '31442,32251,52114,56554,65741,77884,78554,96124', '1', 40000, 0),
(42, 26008, 1, '31442,32251,52114,56554,65741,77884,78554,96124', '1', 40000, 0),
(43, 26008, 1, '31442,32251,52114,56554,65741,77884,78554,96124', '1', 40000, 0),
(44, 26008, 1, '31442,32251,52114,56554,65741,77884,78554,96124', '1', 40000, 0),
(45, 26002, 1, '31442,78554,32251', '2', 33000, 0),
(46, 26002, 1, '31442,78554,32251', '2', 33000, 0),
(47, 26007, 2, '31442,52114', '1', 66000, 0),
(48, 26007, 2, '31442,52114', '1', 66000, 0),
(49, 26007, 2, '31442,52114', '1', 66000, 0),
(50, 26007, 2, '31442,52114', '1', 66000, 0),
(51, 26007, 2, '31442,52114', '1', 66000, 0),
(52, 26007, 2, '31442,52114', '1', 66000, 0),
(53, 26007, 2, '31442,52114', '1', 66000, 0),
(54, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(54, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(55, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(55, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(56, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(56, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(57, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(57, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(58, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(58, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(59, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(59, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(60, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(60, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(61, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(61, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(62, 26004, 1, '32251,52114,96124', '2', 33000, 0),
(62, 26006, 2, '31442,32251,52114', '2', 66000, 0),
(63, 26007, 1, '31442,56554', '2', 33000, 0),
(64, 26007, 1, '31442,56554', '2', 33000, 0),
(65, 26007, 1, '31442,56554', '2', 33000, 0),
(66, 26006, 2, '0', '1', 66000, 0),
(66, 26007, 1, '0', '1', 33000, 0),
(67, 26006, 2, '0', '1', 66000, 0),
(67, 26007, 1, '0', '1', 33000, 0),
(68, 26006, 2, '0', '1', 66000, 0),
(68, 26007, 1, '0', '1', 33000, 0),
(69, 26006, 2, '0', '1', 66000, 0),
(69, 26006, 1, '31442,52114', '1', 33000, 0),
(69, 26007, 1, '0', '1', 33000, 0),
(70, 26006, 2, '0', '1', 66000, 0),
(70, 26006, 1, '31442,52114', '1', 33000, 0),
(70, 26007, 1, '0', '1', 33000, 0),
(71, 26006, 2, '0', '1', 66000, 0),
(71, 26006, 1, '31442,52114', '1', 33000, 0),
(71, 26007, 1, '0', '1', 33000, 0),
(72, 26006, 2, '0', '1', 66000, 0),
(72, 26006, 1, '31442,52114', '1', 33000, 0),
(72, 26007, 1, '0', '1', 33000, 0),
(73, 26006, 2, '0', '1', 66000, 0),
(73, 26006, 1, '31442,52114', '1', 33000, 0),
(73, 26007, 1, '0', '1', 33000, 0),
(74, 26006, 2, '0', '1', 66000, 0),
(74, 26006, 1, '31442,52114', '1', 33000, 0),
(74, 26007, 1, '0', '1', 33000, 0),
(75, 26006, 2, '0', '1', 66000, 0),
(75, 26006, 1, '31442,52114', '1', 33000, 0),
(75, 26007, 1, '0', '1', 33000, 0),
(76, 26007, 3, '', '2', 99000, 0),
(77, 26007, 3, '', '2', 99000, 0),
(78, 26007, 3, '', '2', 99000, 0),
(79, 26007, 3, '', '2', 99000, 0),
(80, 26007, 3, '', '2', 99000, 0),
(81, 26007, 3, '', '2', 99000, 0),
(82, 26007, 3, '', '2', 99000, 0),
(83, 26007, 3, '', '2', 99000, 0),
(84, 26006, 3, '', '2', 99000, 0),
(85, 26006, 3, '', '', 2, 0),
(86, 26006, 3, '', '2', 99000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctsanpham`
--

CREATE TABLE `ctsanpham` (
  `idsp` int(11) NOT NULL,
  `idsize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ctsanpham`
--

INSERT INTO `ctsanpham` (`idsp`, `idsize`) VALUES
(12001, 1),
(12002, 1),
(12003, 3),
(12003, 4),
(12003, 5),
(12004, 0),
(12010, 1),
(26001, 1),
(26001, 2),
(26002, 1),
(26002, 2),
(26003, 1),
(26003, 2),
(26004, 1),
(26004, 2),
(26005, 1),
(26005, 2),
(26006, 1),
(26006, 2),
(26007, 1),
(26007, 2),
(26008, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `idkh`, `ngaydat`, `tongtien`) VALUES
(1, 5, '2024-02-28', 66000),
(2, 5, '2024-02-28', 66000),
(3, 5, '2024-02-28', 66000),
(4, 5, '2024-02-28', 66000),
(5, 5, '2024-02-28', 66000),
(6, 5, '2024-02-28', 132000),
(7, 5, '2024-02-28', 132000),
(8, 5, '2024-02-28', 132000),
(9, 5, '2024-02-28', 198000),
(10, 5, '2024-02-28', 198000),
(11, 5, '2024-02-28', 198000),
(12, 5, '2024-02-28', 40000),
(13, 5, '2024-02-28', 160000),
(14, 5, '2024-02-28', 193000),
(15, 5, '2024-02-28', 132000),
(16, 5, '2024-02-28', 132000),
(17, 5, '2024-02-28', 132000),
(18, 5, '2024-02-28', 132000),
(19, 5, '2024-02-28', 132000),
(20, 5, '2024-02-28', 132000),
(21, 5, '2024-02-28', 132000),
(22, 5, '2024-02-28', 132000),
(23, 5, '2024-02-28', 132000),
(24, 5, '2024-02-28', 132000),
(25, 5, '2024-02-28', 132000),
(26, 5, '2024-02-28', 132000),
(27, 5, '2024-02-28', 132000),
(28, 5, '2024-02-28', 132000),
(29, 5, '2024-02-28', 132000),
(30, 5, '2024-02-28', 132000),
(31, 5, '0000-00-00', 132000),
(32, 5, '0000-00-00', 132000),
(33, 5, '2024-02-28', 132000),
(34, 5, '2024-02-28', 132000),
(35, 5, '2024-02-28', 132000),
(36, 5, '2024-02-28', 132000),
(37, 5, '2024-02-28', 132000),
(38, 5, '2024-02-28', 132000),
(39, 2, '2024-02-28', 0),
(40, 2, '2024-02-28', 0),
(41, 2, '2024-02-29', 0),
(42, 2, '2024-02-29', 0),
(43, 2, '2024-02-29', 0),
(44, 2, '2024-02-29', 0),
(45, 2, '2024-02-29', 33000),
(46, 2, '2024-02-29', 33000),
(47, 2, '2024-02-29', 66000),
(48, 2, '2024-02-29', 66000),
(49, 2, '2024-02-29', 66000),
(50, 2, '2024-02-29', 66000),
(51, 2, '2024-02-29', 66000),
(52, 2, '2024-02-29', 66000),
(53, 2, '2024-02-29', 66000),
(54, 2, '2024-02-29', 0),
(55, 2, '2024-02-29', 99000),
(56, 2, '2024-02-29', 99000),
(57, 2, '2024-02-29', 0),
(58, 2, '2024-02-29', 0),
(59, 2, '2024-02-29', 99000),
(60, 2, '2024-02-29', 99000),
(61, 2, '2024-02-29', 0),
(62, 2, '2024-02-29', 99000),
(63, 2, '2024-02-29', 0),
(64, 5, '2024-02-29', 0),
(65, 5, '2024-02-29', 33000),
(66, 5, '2024-02-29', 99000),
(67, 5, '2024-02-29', 99000),
(68, 5, '2024-02-29', 0),
(69, 5, '2024-02-29', 132000),
(70, 5, '2024-02-29', 132000),
(71, 5, '2024-02-29', 132000),
(72, 5, '2024-02-29', 132000),
(73, 5, '2024-02-29', 132000),
(74, 5, '2024-02-29', 132000),
(75, 5, '2024-02-29', 132000),
(76, 5, '2024-03-14', 99000),
(77, 5, '2024-03-14', 99000),
(78, 5, '2024-03-14', 99000),
(79, 5, '2024-03-14', 99000),
(80, 5, '2024-03-14', 99000),
(81, 5, '2024-03-14', 99000),
(82, 5, '2024-03-14', 99000),
(83, 5, '2024-03-14', 99000),
(84, 5, '2024-03-18', 99000),
(85, 5, '2024-03-18', 99000),
(86, 5, '2024-03-18', 99000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(11) NOT NULL,
  `hoten` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `hoten`, `address`, `email`, `user`, `pass`, `phone`) VALUES
(2, 'Đỏ Thuận', 'Aeon Bình Tân', 'thuan@gmail.com', 'Red', '123456', 909090909),
(4, 'Thuận', 'TpHCM', 'thuan1@gmail.com', 'Đỏ', 'HuuThuan110804', 0),
(5, 'Thuận', '21 Aeon BT', 'thuan321@gmail.com', 'TRED', 'thuan2004', 909134492),
(6, 'Hữu Thuận', '532 Bình Tân', 'huuthuan110804@gmail.com', 'DoThuanUwU', '123456', 909134492);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `idloai` int(11) NOT NULL,
  `tenloai` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`idloai`, `tenloai`) VALUES
(1, 'Mía Menu'),
(2, 'Coffe Menu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhnv` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `diachi`, `username`, `matkhau`, `hinhnv`) VALUES
(0, 'Hữu Thuận', 'Aeon Bình Tân', 'HuuThuan', 'Thuan2004', 'admin2.jpg'),
(1, 'Huỳnh Hữu Thuận', '532 Khu y Tế Kĩ Thuật Cao', 'DoThuan', 'thuan2004', 'admin1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhsp` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giasp` float NOT NULL,
  `soluongton` int(20) NOT NULL,
  `idloai` int(11) NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `soluongmua` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `hinhsp`, `giasp`, `soluongton`, `idloai`, `mota`, `soluongmua`) VALUES
(12001, 'Chocolate mocha machiato', 'sp12.jpg', 33000, 10, 2, 'Ngon ngọt vừa vị, khiến ta khi đã uống thì sẽ không dừng được', 2),
(12002, 'Caramel machiato', 'sp11.jpg', 33000, 6, 2, 'Caramel đi với Machiato, còn gì phải bàn', 3),
(12003, 'Cà phê', 'sp10.jpg', 25000, 20, 2, 'Cà Phê Mía Ơi pha theo công thức độc quyền đem lại hương vị không thể nào quên', 4),
(12004, 'Cappuccino / Latte', 'sp9.jpg', 33000, 5, 2, 'Ngon, Béo, Xịn là 3 từ để diễn tả cảm xúc khi sử dụng', 1),
(12010, 'Trà Lài Nho Xanh', 'sp13.jpg', 40000, 10, 1, 'Vị tương mát của Trà Lài kết hợp với sự chua nhẹ của Nho Xanh tạo ra hương vị hài hòa', 4),
(26001, 'Mía lá dứa', 'sp1.jpg', 33000, 10, 1, 'Sự ngọt lịm của mía kết hợp với lá dứa tạo ra hương thơm khó quên', 2),
(26002, 'Mía Quýt', 'sp2.jpg', 33000, 10, 1, 'Vị chua nhẹ của Quýt cùng với Mía tạo ra một bản hòa ca hoàn hảo', 3),
(26003, 'Mía dâu', 'sp3.jpg', 33000, 12, 1, 'MÍa Dâu là sự kết hợp vừa lạ vừa độc đáo', 5),
(26004, 'Mía chanh dây', 'sp4.jpg', 33000, 16, 1, 'Chanh dây chua nhẹ cùng với Mía tạo ra một hương vị đậm chất Mía Ơi', 6),
(26005, 'Mía ô long', 'sp5.jpg', 33000, 8, 1, 'Vị Ô long thanh mát cùng với Mía cho ta cảm giác thoải mái khi uống', 2),
(26006, ' Mía hisbicus', 'sp6.jpg', 33000, 6, 1, 'Hisbicus, vừa lạ vừa quen', 1),
(26007, 'Mía xí muội đỏ', 'sp7.jpg', 33000, 2, 1, 'Vị xí muội chua mặn cùng với vị ngọt của Mía tái hiện lại thức uống từ xa xưa', 0),
(26008, 'Mía cà phê', 'sp8.jpg', 33000, 3, 1, 'Mía cà phê!!!, không dành cho dân bụng yếu :))', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `tensize` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giasize` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `tensize`, `giasize`) VALUES
(1, 'Nhỏ', 0),
(2, 'Lớn', 3000),
(3, 'Cà Phê Đen', 0),
(4, 'Cà Phê Sữa', 2000),
(5, 'Bạc Xỉu', 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spgiamgia`
--

CREATE TABLE `spgiamgia` (
  `idgg` int(11) NOT NULL,
  `magg` int(11) NOT NULL,
  `giagiam` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `star_ratin`
--

CREATE TABLE `star_ratin` (
  `idsp` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topping`
--

CREATE TABLE `topping` (
  `idtp` int(11) NOT NULL,
  `tentp` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hinhtp` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giatp` float NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `topping`
--

INSERT INTO `topping` (`idtp`, `tentp`, `hinhtp`, `giatp`, `mota`) VALUES
(31442, 'Hạt Chia', 'tp2.jpg', 6000, ''),
(32251, 'Hạt sen', 'tp1.png', 6000, ''),
(52114, 'Nha Đam', 'tp3.jpg', 6000, ''),
(56554, 'Trân Châu Trắng', 'tp8.webp', 6000, ''),
(65741, 'Thạch Trái Cây', 'tp7.jpg', 6000, ''),
(77884, 'Trân Châu', 'tp5.jpg', 6000, ''),
(78554, 'Thạch Củ Năng', 'tp4.png', 6000, ''),
(96124, 'Kem Foam', 'tp6.jpg', 6000, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcm`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`idhd`,`idsp`,`topping`,`size`);

--
-- Chỉ mục cho bảng `ctsanpham`
--
ALTER TABLE `ctsanpham`
  ADD PRIMARY KEY (`idsp`,`idsize`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idloai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `FK_loai` (`idloai`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- Chỉ mục cho bảng `spgiamgia`
--
ALTER TABLE `spgiamgia`
  ADD PRIMARY KEY (`idgg`);

--
-- Chỉ mục cho bảng `star_ratin`
--
ALTER TABLE `star_ratin`
  ADD PRIMARY KEY (`idsp`,`idkh`);

--
-- Chỉ mục cho bảng `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`idtp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26009;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `spgiamgia`
--
ALTER TABLE `spgiamgia`
  MODIFY `idgg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `topping`
--
ALTER TABLE `topping`
  MODIFY `idtp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96126;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_loai` FOREIGN KEY (`idloai`) REFERENCES `loai` (`idloai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
