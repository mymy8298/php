-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2020 lúc 07:48 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCH` int(10) NOT NULL,
  `ND` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `A` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `B` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `C` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `D` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DapAn` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MaDe` int(10) NOT NULL,
  `img` text COLLATE utf8_unicode_ci,
  `mamh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`MaCH`, `ND`, `A`, `B`, `C`, `D`, `DapAn`, `MaDe`, `img`, `mamh`) VALUES
(1, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì?', '74 ', '154', '26 ', '130', '1', 3, 'img/cau1.jpg', 1),
(2, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ?', 'false', 'true', 'Có lỗi xảy ra ', 'true false', '2', 3, 'img/cau2.jpg', 1),
(3, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '4', '0', '20', '5', '2', 3, 'img/cau3.jpg', 1),
(4, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '154', '74', '130', '26', '2', 1, 'img/cau4.jpg', 1),
(5, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '10 ', '25', '0', 'Có lỗi xảy ra ', '2', 1, 'img/cau5.jpg', 1),
(6, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', 'Book Details ', 'Book Author ', 'Missing Book ', 'Book DetailsBook Author Missing Book ', '4', 1, 'img/cau6.jpg', 1),
(7, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ?', '5', '10', '2', 'Có lỗi xảy ra ', '2', 1, 'img/cau7.jpg', 1),
(8, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '12345', '56789', '123456789', '12346789', '4', 1, 'img/cau8.jpg', 1),
(9, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '1235', 'Có lỗi xảy ra ', '0', '1235Jason ', '1', 1, 'img/cau9.jpg', 1),
(10, 'Chức năng \"Tính tổng các phần tử trong mảng\" là chức năng của hàm nào trong các hàm sau đây?', 'sum ', 'array_sum ', 'sum_array ', 'Cả 3 đáp án trên', '2', 1, '', 1),
(11, 'Chức năng \"Loại bỏ phần tử cuối cùng của mảng và trả về phần tử cuối cùng đã được loại bỏ\" là chức năng của hàm nào trong các hàm sau đây ', 'array_pop ', 'array_shift', 'array_unique ', 'unset', '1', 1, '', 1),
(12, 'Chức năng \" Chuyển một chuỗi thành một mảng\" là chức năng của hàm nào trong các hàm sau đây?', 'str_to_array ', 'str_array ', 'implode', 'explode', '4', 2, '', 1),
(13, 'Chức năng \" Chuyển một mảng thành một chuỗi\" là chức năng của hàm nào trong các hàm sau đây?', 'array_to_str', 'array_str ', 'implode', 'explode ', '3', 2, '', 1),
(14, 'Chức năng \"Làm tròn số\" là chức năng của hàm nào trong các hàm sau đây?', 'round', 'ceil ', 'floor', 'Cả 3 đáp án trên', '4', 2, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `de`
--

CREATE TABLE `de` (
  `MaDe` int(10) NOT NULL,
  `DeThiSo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `de`
--

INSERT INTO `de` (`MaDe`, `DeThiSo`) VALUES
(1, 'De 1'),
(2, 'De 2'),
(3, 'De 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` int(11) NOT NULL,
  `tenmh` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `tenmh`) VALUES
(1, 'PHP'),
(2, 'Văn 12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `pl` int(11) NOT NULL,
  `loaiTK` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`pl`, `loaiTK`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `TenTK` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Pass` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenUser` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GioiTinh` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `TenTK`, `Pass`, `TenUser`, `GioiTinh`, `Phone`, `Email`, `pl`) VALUES
(1, 'user1', '123456', 'user1', 'nam', '12345678910', NULL, 2),
(2, 'user2', '123456', 'user2', 'nu', NULL, NULL, 2),
(6, 'daoleduyhung', 'hung0403', 'daoleduyhung', 'nam', '0345599064', 'daoleduyhung', 1),
(8, 'admin', 'hung0403', NULL, NULL, NULL, NULL, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MaCH`),
  ADD KEY `MaDe` (`MaDe`),
  ADD KEY `mamh` (`mamh`);

--
-- Chỉ mục cho bảng `de`
--
ALTER TABLE `de`
  ADD PRIMARY KEY (`MaDe`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`pl`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `pl` (`pl`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_ibfk_1` FOREIGN KEY (`MaDe`) REFERENCES `de` (`MaDe`),
  ADD CONSTRAINT `cauhoi_ibfk_2` FOREIGN KEY (`mamh`) REFERENCES `monhoc` (`mamh`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`pl`) REFERENCES `taikhoan` (`pl`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
