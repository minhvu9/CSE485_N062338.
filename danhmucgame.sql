-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2018 lúc 08:19 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlgame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucgame`
--

CREATE TABLE `danhmucgame` (
  `idgame` int(10) NOT NULL,
  `tengame` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngayup` date NOT NULL,
  `soluottai` int(250) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgGame` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucgame`
--

INSERT INTO `danhmucgame` (`idgame`, `tengame`, `ngayup`, `soluottai`, `link`, `imgGame`) VALUES
(1, 'PillBall', '2016-12-06', 54324343, NULL, ''),
(2, 'Thổ dân', '2017-03-12', 219278, NULL, ''),
(3, 'Đại chiến RoBot', '2018-04-28', 3425432, NULL, ''),
(4, 'Cuộc chiến sao anime', '2018-06-28', 4564564, NULL, ''),
(5, 'Chú hề nấu ăn', '2017-11-05', 45335435, NULL, ''),
(6, 'Shin', '2017-12-20', 4343243, NULL, ''),
(7, 'Chăm sóc vợ', '2017-12-04', 2344324, NULL, ''),
(8, 'Bắn ếch', '2015-05-06', 543234, NULL, ''),
(9, 'Bắn cá', '2015-12-27', 4343423, NULL, ''),
(10, 'Nuôi quái vật', '2017-04-03', 432342, NULL, ''),
(12, 'Tranformer', '2012-10-22', 342432, NULL, ''),
(13, 'Phi tiêu', '2016-05-03', 4323242, NULL, ''),
(14, 'Làm kem', '2017-02-24', 3442234, NULL, ''),
(15, 'Temprun2', '2012-10-22', 4322423, NULL, ''),
(16, 'Bắn chim', '2015-02-24', 32112321, NULL, ''),
(17, 'Đột kích 3', '2015-12-20', 54334, NULL, ''),
(18, 'Chiến đấu nào', '2012-10-22', 4323432, NULL, ''),
(19, 'Điệp vụ cherry', '2018-05-04', 432424, NULL, ''),
(20, 'Rambo lùn', '2012-10-22', 3213213, NULL, ''),
(21, 'Anh hùng chiến loạn', '2012-10-22', 564456, NULL, ''),
(22, 'Điệp vụ cherry 2', '2014-04-25', 76486, NULL, ''),
(23, 'Songoku4', '2014-02-19', 74275, NULL, ''),
(24, 'Rồng đen', '2014-07-09', 264724, NULL, ''),
(25, 'Naruto', '2015-05-30', 5406398, NULL, ''),
(26, 'Pokemon đại chiến', '2012-10-22', 32543, NULL, ''),
(27, 'Rồng đen 3', '2012-10-22', 76476, NULL, ''),
(28, 'Songoku5', '2012-10-22', 5438, NULL, ''),
(29, 'Anh hùng chiến loạn 3', '2012-10-22', 6434746, NULL, ''),
(30, 'Đại chiến siêu nhân', '2012-10-22', 645645, NULL, ''),
(31, 'Võ sĩ giác đấu', '2012-10-22', 765755, NULL, ''),
(32, 'Chỉ huy thiên hà', '2012-10-22', 43895, NULL, ''),
(33, 'Bé kẹo ngọt', '2016-12-05', 523546, NULL, ''),
(34, 'Cờ caro', '2016-12-05', 64574, NULL, ''),
(35, 'Công nhân chở hàng', '2016-12-05', 0, NULL, ''),
(36, 'Gren ôm trụ', '2016-12-05', 549863, NULL, ''),
(37, 'Gấu bông diệt zombie', '2016-12-05', 647482, NULL, ''),
(38, 'Hoa quả nổi giận 2', '2016-12-05', 5745, NULL, ''),
(39, 'Người que đại chiến', '2016-12-05', 8564435, NULL, ''),
(40, 'Lego tìm sao', '2016-12-05', 64589, NULL, ''),
(41, 'Liên quân mobile online', '2016-12-05', 86940, NULL, ''),
(42, 'Game AngryBird', '2016-12-05', 754906, NULL, ''),
(43, 'Điều khiển máy bay', '2016-12-05', 5890363, NULL, ''),
(44, 'Gunny', '2016-12-05', 58306, NULL, ''),
(45, 'Robot bắn súng', '2016-12-05', 796, NULL, ''),
(46, 'Robot khủng long khủng lồ ', '2016-12-05', 6834, NULL, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucgame`
--
ALTER TABLE `danhmucgame`
  ADD PRIMARY KEY (`idgame`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucgame`
--
ALTER TABLE `danhmucgame`
  MODIFY `idgame` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
