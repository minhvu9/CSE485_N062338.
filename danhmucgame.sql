-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2018 lúc 09:53 AM
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
(1, 'PillBall', '2016-12-06', 54324343, 'https://gamevui.vn/choc-pha-co-hang-xom/game', ''),
(2, 'Thổ dân', '2017-03-12', 219278, 'https://gamevui.vn/tho-dan-ne-tranh/game', ''),
(3, 'Đại chiến RoBot', '2018-04-28', 3425432, 'https://gamevui.vn/dai-chien-robot/game', ''),
(4, 'Cuộc chiến sao anime', '2018-06-28', 4564564, 'https://gamevui.vn/dai-chien-sao-anime/game', ''),
(5, 'Chú hề nấu ăn', '2017-11-05', 45335435, 'https://gamevui.vn/nau-an-ngay-tet/game', ''),
(6, 'Shin', '2017-12-20', 4343243, 'https://gamevui.vn/cau-be-but-chi-phieu-luu/game', ''),
(7, 'Chăm sóc vợ', '2017-12-04', 2344324, 'https://gamevui.vn/cham-soc-be-cung/game', ''),
(8, 'Bắn ếch', '2015-05-06', 543234, 'https://gamevui.vn/ban-ca-dai-duong/game', ''),
(9, 'Bắn cá', '2015-12-27', 4343423, 'https://gamevui.vn/ban-ca/game', ''),
(10, 'Nuôi quái vật', '2017-04-03', 432342, 'https://gamevui.vn/nuoi-quai-thu/game', ''),
(12, 'Tranformer', '2012-10-22', 342432, 'https://gamevui.vn/robot-ban-sung/game', ''),
(13, 'Phi tiêu', '2016-05-03', 4323242, 'https://gamevui.vn/nem-phi-tieu/game', ''),
(14, 'Làm kem', '2017-02-24', 3442234, 'https://gamevui.vn/lam-kem/game', ''),
(15, 'Temprun2', '2012-10-22', 4322423, 'https://gamevui.vn/temple-run-2/game', ''),
(16, 'Bắn chim', '2015-02-24', 32112321, 'https://gamevui.vn/ban-chim2/game', ''),
(17, 'Đột kích 3', '2015-12-20', 54334, 'https://gamevui.vn/dot-kich-3/game', ''),
(18, 'Chiến đấu nào', '2012-10-22', 4323432, 'https://gamevui.vn/truong-hoc-dai-chien/game', ''),
(19, 'Điệp vụ perry', '2018-05-04', 432424, 'https://gamevui.vn/perry-tro-lai/game', ''),
(20, 'Rambo lùn', '2012-10-22', 3213213, 'https://gamevui.vn/rambo-dot-kich/game', ''),
(21, 'Anh hùng chiến loạn', '2012-10-22', 564456, 'https://gamevui.vn/anh-hung-chien-loan/game', ''),
(22, 'Điệp vụ perry 2', '2014-04-25', 76486, 'https://gamevui.vn/diep-vu-perry/game', ''),
(23, 'Songoku4', '2014-02-19', 74275, 'https://gamevui.vn/songoku-4/game', ''),
(24, 'Rồng đen', '2014-07-09', 264724, 'https://gamevui.vn/rong-den3/game', ''),
(25, 'Naruto', '2015-05-30', 5406398, 'https://gamevui.vn/naruto-chien-dau/game', ''),
(26, 'Pokemon đại chiến', '2012-10-22', 32543, 'https://gamevui.vn/pokemon-dai-chien-3/game', ''),
(27, 'Rồng đen 3', '2012-10-22', 76476, 'https://gamevui.vn/rong-den/game', ''),
(28, 'Songoku5', '2012-10-22', 5438, 'https://gamevui.vn/songoku-4/game', ''),
(29, 'Anh hùng chiến loạn 3', '2012-10-22', 6434746, 'https://gamevui.vn/anh-hung-chien-loan/game', ''),
(30, 'Đại chiến siêu nhân', '2012-10-22', 645645, 'https://gamevui.vn/tan-sieu-hung-dai-chien/game', ''),
(31, 'Võ sĩ giác đấu', '2012-10-22', 765755, 'https://gamevui.vn/duong-den-hoang-cung/game', ''),
(32, 'Chỉ huy thiên hà', '2012-10-22', 43895, 'https://gamevui.vn/chi-huy-khong-gian/game', ''),
(33, 'Bé kẹo ngọt', '2016-12-05', 523546, 'https://gamevui.vn/vuong-quoc-keo-ngot/game', ''),
(34, 'Cờ caro', '2016-12-05', 64574, 'https://gamevui.vn/choi-co-caro/game', ''),
(35, 'Công nhân chở hàng', '2016-12-05', 1019, 'https://gamevui.vn/xe-keo-cho-hang/game', ''),
(36, 'Gren ôm trụ', '2016-12-05', 549863, 'https://gamevui.vn/lien-quan-dai-chien/game', ''),
(37, 'Gấu bông diệt zombie', '2016-12-05', 647482, 'https://gamevui.vn/gau-teddy-diet-zombie/game', ''),
(38, 'Hoa quả nổi giận 2', '2016-12-05', 5745, 'https://gamevui.vn/hoa-qua-noi-gian/game', ''),
(39, 'Người que đại chiến', '2016-12-05', 8564435, 'https://gamevui.vn/nguoi-que-dai-chien/game', ''),
(40, 'Lego tìm sao', '2016-12-05', 64589, 'https://gamevui.vn/tim-sao/game', ''),
(41, 'Liên quân mobile online', '2016-12-05', 86940, 'https://gamevui.vn/lien-quan-dai-chien/game', ''),
(42, 'Game AngryBird', '2016-12-05', 754906, 'https://gamevui.vn/angry-birds-tran-chien-cuoi-cung/game', ''),
(43, 'Điều khiển máy bay', '2016-12-05', 5890363, 'https://gamevui.vn/dau-may-bay/game', ''),
(44, 'Gunny', '2016-12-05', 58306, 'https://gamevui.vn/gunny-mini/game', ''),
(45, 'Robot bắn súng', '2016-12-05', 796, 'https://gamevui.vn/robot-ban-sung/game', ''),
(46, 'Robot khủng long khủng lồ ', '2016-12-05', 6834, 'https://gamevui.vn/robot-khung-long-khong-lo/game', '');

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
