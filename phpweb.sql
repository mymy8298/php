-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2020 lúc 02:28 PM
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
(1, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì?', '74 ', '154', '26 ', '130', '1', 1, 'img/cau1.jpg', 1),
(2, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ?', 'false', 'true', 'Có lỗi xảy ra ', 'true false', '2', 1, 'img/cau2.jpg', 1),
(3, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '4', '0', '20', '5', '2', 1, 'img/cau3.jpg', 1),
(4, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '154', '74', '130', '26', '2', 1, 'img/cau4.jpg', 1),
(5, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '10 ', '25', '0', 'Có lỗi xảy ra ', '2', 1, 'img/cau5.jpg', 1),
(6, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', 'Book Details ', 'Book Author ', 'Missing Book ', 'Book DetailsBook Author Missing Book ', '4', 1, 'img/cau6.jpg', 1),
(7, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ?', '5', '10', '2', 'Có lỗi xảy ra ', '2', 1, 'img/cau7.jpg', 1),
(8, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '12345', '56789', '123456789', '12346789', '4', 1, 'img/cau8.jpg', 1),
(9, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', '1235', 'Có lỗi xảy ra ', '0', '1235Jason ', '1', 1, 'img/cau9.jpg', 1),
(10, 'Chức năng \"Tính tổng các phần tử trong mảng\" là chức năng của hàm nào trong các hàm sau đây?', 'sum ', 'array_sum ', 'sum_array ', 'Cả 3 đáp án trên', '2', 1, '', 1),
(11, 'Chức năng \"Loại bỏ phần tử cuối cùng của mảng và trả về phần tử cuối cùng đã được loại bỏ\" là chức năng của hàm nào trong các hàm sau đây ', 'array_pop ', 'array_shift', 'array_unique ', 'unset', '1', 2, '', 1),
(12, 'Chức năng \" Chuyển một chuỗi thành một mảng\" là chức năng của hàm nào trong các hàm sau đây?', 'str_to_array ', 'str_array ', 'implode', 'explode', '4', 2, '', 1),
(13, 'Chức năng \" Chuyển một mảng thành một chuỗi\" là chức năng của hàm nào trong các hàm sau đây?', 'array_to_str', 'array_str ', 'implode', 'explode ', '3', 2, '', 1),
(14, 'Chức năng \"Làm tròn số\" là chức năng của hàm nào trong các hàm sau đây?', 'round', 'ceil ', 'floor', 'Cả 3 đáp án trên', '4', 2, '', 1),
(15, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', 'a2 = e a1 = x a3 = z ', 'a1 = e a2 = x a3 = z ', '0 = e 1 =x 2 = z ', 'Có lỗi xảy ra', '1', 2, 'img/cau15.jpg', 1),
(16, 'Đây là thông tin mảng ban đầu chúng ta có<br>Array ( [0] => book1.pdf [1] => book11.pdf [2] => book12.pdf [3] => book2.pdf )<br>Tuy nhiên chúng ta cần xuất ra một mảng mới theo thứ tự như sau: <br>Array ( [0] => book1.pdf [1] => book2.pdf [2] => book11pdf [3] => book12.pdf )<br>Để thực hiện được yêu cầu trên thì chúng ta cần sử dụng hàm nào? ', 'natsort() ', 'ksort() ', 'sort() ', 'asort() ', '1', 2, '', 1),
(17, 'Sau khi thực hiện đoạn mã trên kết quả hiển thị sẽ là gì ? ', 'b c d ', 'a b c ', 'd e f ', 'c d e ', '3', 2, 'img/cau17.jpg', 1),
(18, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', 'cdabcab ', 'abc ', 'cdabc', 'abcdabc ', '4', 2, 'img/cau18.jpg', 1),
(19, 'Chức năng \"Kiểm tra sự tồn tại của tập tin, thư mục\" là chức năng của hàm nào trong các hàm sau đây? ', 'file_exist ', 'filetype', 'filesize ', 'is_executable ', '1', 2, NULL, 1),
(20, 'Một tập tin được cấu hình với quyền 754, như vậy phát biểu nào sau đây là phát biểu đúng ? ', 'Owner/User có quyền đọc và thực thi ', 'Owner/User chỉ có quyền đọc tập tin ', 'Owner/User có toàn quyền ', 'Owner/User chỉ có quyền ghi tập tin ', '3', 2, NULL, 1),
(21, 'Đoạn mã HTML nào sau đây được sử dụng cho việc upload tập tin trong form?', 'form enctype=\"text/plain\" action=\"index.php\" method=\"post\"', 'form enctype=\"plain\" action=\"index.php\" method=\"post\"', 'form enctype=\"multipart/form-data\" action=\"index.php\" method=\"post\"', 'form enctype=\"application/upload-file\" action=\"index.php\" method=\"post\"', '3', 3, NULL, 1),
(22, 'Làm cách nào để lưu trữ một biến age có giá trị 25 vào trong session ', '$age = 25; session_regiser(\'age\'); ', '$_SESSION[\'age\'] = 25; ', 'session_register(\'age\', 25); ', '$HTTP_SESSION_VARS[\'age\'] = 25;', '3', 3, NULL, 1),
(23, 'Sau khi thực hiện đoạn mã kết quả hiển thị sẽ là gì ? ', 'Có lỗi xảy ra ', '13149 ', '13179', '0', '3', 3, 'img/cau23.jpg\r\n', 1),
(24, 'Làm thế nào để bạn bắt đầu sử dụng Session trong PHP?', 'Luôn luôn được tự động gọi ', 'Gọi hàm start_session() ', 'Thiết lập session.auto_start trong phần cấu hình ', 'Gọi hàm session_register() ', '4', 3, NULL, 1),
(25, 'Trong các cách sau đây, cách nào giúp bạn nhận được dữ liệu gửi đi từ Form mà không chắc chắn cơ chế nó được gửi đi như thế nào ? ', '$_REQUEST[] ', '$_GET[] ', '$_POST[] ', '$_SEND[] ', '1', 3, NULL, 1),
(26, 'Phát biểu nào sao đây sai về XML', 'XML quy định người dùng phải tuân theo các thẻ riêng mà XML đã định nghĩa sẵn ', 'Các thẻ XML khá giống với HTML: tag, data, attribute ', 'XML được xây dựng theo dạng cây, phải có tối thiểu một nút gốc ', 'XML được hỗ trợ trên các trình duyệt phổ biến hiện ', '1', 3, NULL, 1),
(27, 'Phát biểu nào sao đây đúng về công dụng của XML? ', 'Lưu trữ thông tin nhỏ ', 'Tạo phần tóm tắt nội dung cho website (RSS) ', 'Tạo sơ đồ cho website (sitemap) ', 'Là cầu nối trao đổi dữ liệu giữa các ứng dụng web (web service) ', '3', 3, NULL, 1),
(28, 'Trong Xpath để lấy ra thông tin phần tử ở vị trí cuối cùng, chúng ta sử dụng ', 'last() ', 'last()-1 ', 'end() ', 'end()-1 ', '3', 3, NULL, 1),
(29, 'Phương thức nào sau đây được sử dụng để lấy các không gian tên được sử dụng trong một tài liệu XML từ một đối tượng SimpleXMLElement? ', 'getName() ', 'getNamespaces()', 'getElement() ', 'getDefined() ', '2', 3, NULL, 1),
(30, 'Phương thức nào sau đây được sử dụng để lấy tên của phần tử XML từ một đối tượng SimpleXMLElement? ', 'getDefined() ', 'getNamespaces() ', 'getName() ', 'getCall() ', '3', 3, NULL, 1),
(31, 'Sáng tác của Nguyễn Ái Quốc, Hồ Chí Minh không bao gồm những thể loại nào trong các thể loại sau đây:', 'Văn chính luận', 'Truyện kí', 'Thơ ca', 'Hò vè', '4', 1, NULL, 2),
(32, 'Tuyên ngôn độc lập của Hồ Chí Minh được viết theo thể loại nào sau đây:', 'Văn chính luận', 'Truyện', 'Kí', 'Thơ', '1', 1, NULL, 2),
(33, 'Thể loại nào trong các thể loại văn học sau đây ra đời trong giai đoạn kháng chiến chống Pháp (1946 - 1954)?', 'Truyện ngắn', 'Kí', 'Thơ', 'Truyện dài', '2', 1, NULL, 2),
(35, 'Quê hương của Quang Dũng ở:', 'Hà Nội', 'Hà Tây', 'Nam Hà', 'Hải Dương', '2', 1, NULL, 2),
(36, 'Quang Dũng sinh năm nào?', '1915', '1921', '1922', '1925', '2', 1, NULL, 2),
(37, 'Đoàn quân Tây tiến được thành lập năm nào sau đây:', '1946', '1945', '1947', '1948', '3', 1, NULL, 2),
(38, 'Bút pháp tiêu biểu của bài thơ Tây Tiến là:', 'Lãng mạn', 'Hiện thực', 'Hiện thực XHCN', 'Trào lộng', '1', 1, NULL, 2),
(39, 'Hoạt động nghệ thuật của Nguyễn Đình Thi nổi bật nhất ở lĩnh vực nào?', 'Viết phê bình', 'Viết văn', 'Soạn nhạc', 'Làm thơ', '4', 1, NULL, 2),
(40, 'Bài thơ Đất nước được in ở tập thơ nào?', 'Bài thơ Hắc Hải.', 'Dòng sông trong xanh.', 'Tia nắng.', 'Người chiến sỹ.', '4', 1, NULL, 2),
(41, 'Trong thơ Đất nước khi nói về mùa “thu nay” chủ thể trữ tình đứng ở đâu để bộc lộ cảm xúc?', 'Phố phường Hà Nội.', 'Miền đồi núi xa xôi.', 'Núi đồi chiến khu Việt Bắc.', 'Ở một nơi không xác định.', '3', 1, NULL, 2),
(42, 'Hình ảnh nào sau đây có trong bài đất nước thể hiện điểm khác biệt khi cảm nhận về mùa thu của Nguyễn Đình Thi so với các những thơ khác?', 'Thềm nắng lá rơi đầy', 'Xao xác hơi may', 'Nói cười thiết tha', 'Phố dài xao xác', '4', 2, NULL, 2),
(43, 'Chọn từ mà tác giả Nguyễn Đình Thi đã dùng để điền vào chỗ trống trong câu thơ sau:<br>Từ những năm đau thương chiến đấu<br>Đã….lên nét mặt quê hương', 'Ngời.', 'Bừng.', 'Sáng.', 'Ánh.', '1', 2, NULL, 2),
(44, ' Năm sinh, năm mất của nhà thơ Chế Lan Viên là năm nào sau đây:', '1920 – 1985', '1920 – 1989', '1925 – 1989', '1925 – 1985', '2', 2, NULL, 2),
(45, 'Quê của nhà thơ Chế Lan Viên ở:', 'Nghệ An', 'Thanh Hoá', 'Quảng Trị', 'Bình Định', '3', 2, NULL, 2),
(46, 'Trong những tập thơ tiêu biểu của các nhà thơ mới sau đây, tập thơ nào là của Chế Lan Viên?', 'Đau thương', 'Thơ thơ', 'Lửa thiêng', 'Điêu tàn', '4', 2, NULL, 2),
(47, 'Tập thơ nào sau đây không phải là của Chế Lan Viên?', 'Trời mỗi ngày lại sáng', 'Những bài thơ đánh giặc', 'Hoa ngày thường chim báo bão', 'Ánh sáng và phù sa', '1', 2, NULL, 2),
(48, 'Hiểu như thế nào về hình ảnh “mẹ yêu thương” trong bài thơ Tiếng hát con tàu của Chế Lan Viên?', 'Đó là mẹ của nhà thơ', 'Một người mẹ Tây Bắc nào đó', 'Đó là nhân dân, đất nước', 'Cả ba hình ảnh trên', '3', 2, NULL, 2),
(49, 'Trong nỗi nhớ của Chế Lan Viên không có hình ảnh nào sau đây?', 'Anh du kích', 'Em liên lạc', 'Mẹ chiến nuôi quân', 'Em gái Tây Bắc.', '4', 2, NULL, 2),
(50, '“Chùa tây Phương” trong bài thơ Các vị La Hán chùa Tây Phương của Huy Cận ở nơi nào được nói đến sau đây:', 'Tỉnh Hà Tây', 'Thủ đô Hà Nội', 'Bắc Ninh', 'Thái Bình', '1', 2, NULL, 2),
(51, 'Năm sinh của nhà thơ Tố Hữu chính xác là năm nào?', '1915', '1920', '1922', '1923\r\n', '2', 2, NULL, 2);

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
(1, 'daoleduyhung', 'hung0403', 'Buffalo', NULL, NULL, NULL, 1),
(2, 'user2', '123456', 'user2', 'nu', NULL, NULL, 2),
(3, 'user1', '123456', 'user1', 'nam', '12345678910', NULL, 2),
(4, 'nguoidung1', '123456', 'texter1', NULL, NULL, NULL, 2),
(5, 'nguoidung2', '123456', 'texter2', NULL, NULL, NULL, 2),
(6, 'nam1', '123456', 'tranducnam', 'nam', NULL, NULL, 2),
(7, 'lungthilinh', '123456', 'tranducviet', 'nu', NULL, NULL, 2),
(8, 'admin', 'hung0403', NULL, NULL, NULL, NULL, 1),
(9, 'nguyenthitramy', '123456', 'mymy', 'nu', '0345599064', 'mymy', 2),
(10, 'mymy8298', '0868667705mymy', 'mymy8298', 'nu', '125968473', 'mymy8298', 2);

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
  MODIFY `MaCH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
