-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2020 lúc 06:20 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `ngaygio` date DEFAULT NULL,
  `idsanpham` int(11) DEFAULT NULL,
  `diemso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `ngaygio`, `idsanpham`, `diemso`) VALUES
(1, '2020-10-20', 1, 3),
(2, '2020-11-20', 2, 5),
(3, '2020-12-20', 1, 3),
(4, '2020-10-20', 5, 2),
(5, '2020-11-23', 3, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(11) NOT NULL,
  `tendm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `tendm`, `status`) VALUES
(1, 'Hoa quả ba miền', 1),
(2, 'Thịt', 1),
(3, 'Combo Món ăn', 1),
(4, 'Món ăn', 1),
(15, 'Đồ uống giải khát', 0),
(20, 'học liệu khoa hoc', 0),
(21, 'học liệu khoa hoc', 0),
(22, 'f', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sltrongkho` int(11) DEFAULT NULL,
  `sldaban` int(11) NOT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `yeuthich` int(11) DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `iddanhmuc` int(11) DEFAULT NULL,
  `ngaymua` date NOT NULL,
  `new` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `discount`, `image`, `sltrongkho`, `sldaban`, `mota`, `yeuthich`, `trangthai`, `hot`, `iddanhmuc`, `ngaymua`, `new`) VALUES
(1, 'Nho mỹ ngon lành', 10000, 0, 'nho.jpg', 100, 10, 'Sản phẩm này rất ngon ', 10, 1, 1, 1, '2020-10-10', 0),
(2, 'Thịt lợn', 20000, 0, 'thit.jpg', 199, 20, 'thịt lợn thơm ngon', 12, 1, 0, 2, '2020-10-10', 0),
(3, 'Chanh vàng', 10000, 0.2, 'chanh.jpg', 100, 15, 'trà chanh dam me', 10, 1, 0, 3, '2020-10-12', 0),
(4, 'Chuối', 20000, 0.2, 'chuoi.jpg', 800, 12, 'Sản phẩm này rất ngon', 12, 1, 0, 1, '2020-11-12', 0),
(5, 'Dâu tây', 38888, 0.2, 'dautay.jpg', 123, 34, 'Sản phẩm từ tự nhiên', 13, 1, 1, 15, '2020-11-10', 0),
(6, 'Cà chua', 10022, 0.2, 'cachua.jpg', 1000, 45, 'Cà chua từ nông trại việt nam ', 1, 1, 1, 1, '2020-11-10', 0),
(7, 'khoai tây chiên', 15000, 0.3, 'dautay.jpg', 12, 55, 'df', 0, 1, 0, 1, '2020-11-12', 1),
(8, 'thanh long úc', 15000, 0.3, 'dautay.jpg', 12, 10, 'sản phẩm này rất ngon Sản phẩm này rất ngonSản phẩm này rất ngonSản phẩm này rất ngonSản phẩm này rất ngon', 1, 1, 1, 1, '2020-11-10', 0),
(9, 'thanh long úc', 15000, 0.3, 'dautay.jpg', 12, 0, 'sản phẩm này rất ngon', 1, 1, 1, 1, '2020-11-10', 0),
(10, 'CoCa CoLA', 15000, 0.4, 'cocaocla.jpg', 1000, 0, 'món cơm rang này rất là ngon', 4, 1, 1, 15, '2020-11-10', 1),
(14, 'Fanta', 333333, 0.6, 'fanta.jpg', 4555, 0, 'sản phẩm này rất tuyệt vời', 0, 1, 1, 15, '2020-12-12', 0),
(34, 'Sting đỏ ngon', 10000, 0.5, 'sting.jpg', 300, 0, 'sản phẩm tuyệt vời', 0, 1, 1, 1, '0000-00-00', 1),
(35, 'Pessi', 12000, 0.5, 'pesi.jpg', 300, 0, 'sản phẩm tuyệt vời', 0, 1, 0, 15, '0000-00-00', 1),
(36, 'Mận ngọt', 15000, 0, 'man.webp', 4555, 0, 'Nước giải khát tuyệt vời', 0, 1, 1, 15, '0000-00-00', 0),
(37, 'Roi chín mọng', 15000, 1, 'roi.webp', 12, 0, 'Nước uống tuyệt vời', 0, 1, 1, 15, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id`, `ten`, `username`, `password`, `role`, `image`, `email`) VALUES
(1, 'Lê Thế Hiếu', 'admin', 'admin', 1, 'hieu.jpg', 'lethehieu98@gmail.com'),
(3, 'Vũ thị mai lâm', 'admin@gmail.com', '12345', 0, 'profile.png', 'lethehieu@gmail.com'),
(5, 'Phạm Văn Khoa', 'phamkhoa', '12345', 0, 'icon.png', 'lethehieu151098@gmail.com'),
(9, 'hieucr7', 'hieu', '12345', 0, 'profile.png', 'af@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
