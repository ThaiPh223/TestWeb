-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2020 lúc 08:38 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `projectweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class`
--

CREATE TABLE `class` (
  `classid` smallint(5) UNSIGNED NOT NULL,
  `className` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classYear` year(4) NOT NULL,
  `classSemester` tinyint(4) NOT NULL,
  `classStage` tinyint(4) NOT NULL,
  `classDateStart` date NOT NULL,
  `classDateEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `class`
--

INSERT INTO `class` (`classid`, `className`, `classYear`, `classSemester`, `classStage`, `classDateStart`, `classDateEnd`) VALUES
(1, 'CNW1', 2019, 1, 1, '0000-00-00', '0000-00-00'),
(2, 'CSDL2', 2019, 1, 1, '0000-00-00', '0000-00-00'),
(4, 'CSDL1', 2019, 1, 1, '2020-01-09', '2020-01-31'),
(5, 'HM1', 2019, 1, 1, '2020-01-09', '2020-01-31'),
(6, 'CNW3', 2019, 1, 1, '2020-10-01', '2020-10-31'),
(9, 'CSDL3', 2020, 1, 1, '2020-10-10', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `major`
--

CREATE TABLE `major` (
  `majorid` smallint(5) UNSIGNED NOT NULL,
  `majorName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `majorDes` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `major`
--

INSERT INTO `major` (`majorid`, `majorName`, `majorDes`) VALUES
(1, 'Công nghệ thông tin', 'Công nghệ thông tin'),
(2, 'Công trình', 'Công trình xây dựng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `postid` mediumint(8) UNSIGNED NOT NULL,
  `postTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postDes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `postCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `postBy` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`postid`, `postTitle`, `postDes`, `postContent`, `postCreated`, `postBy`) VALUES
(1, 'Chú mèo robot biết cáu gắt nếu bị sờ tai quá nhiều', 'Chú mèo máy của PuduTech có thể mang bốn khay đồ cùng lúc và biểu lộ nhiều cảm xúc.', 'CES (Consumer Electronics Show) - triển lãm điện tử tiêu dùng diễn ra hàng năm vào đầu tháng 1 là sự kiện lớn của giới công nghệ toàn cầu, diễn ra tại Trung tâm Hội nghị Las Vegas. Những năm gần đây, các mẫu robot phục vụ cuộc sống hàng ngày liên tục xuất hiện.\r\n\r\nNổi bật tại CES 2020 là 2 người máy phục vụ đến từ công ty PuduTech là BellaBot và HollaBot. Điều đáng chú ý cho chúng ta là BellaBot được thiết kế trông giống như một chú mèo có 4 khay đựng đồ.', '2019-12-26 21:34:21', 2),
(2, 'Tủ lạnh Family Hub mới - camera AI, màn hình 21 inch phát được video', 'Samsung Family Hub thế hệ mới được trang bị AI giúp người dùng tiết kiệm thời gian trong quá trình chuẩn bị các bữa ăn.', 'Trong khuôn khổ sự kiện CES 2020, Samsung mang đến mẫu tủ lạnh Family Hub mới với nhiều tính năng cao cấp. Sản phẩm có thiết kế không quá khác biệt so với những mẫu tủ lạnh bình thường nhưng được trang bị một màn hình cảm ứng 21,5 inch.\r\n\r\nĐiểm khác biệt của sản phẩm so với phiên bản tiền nhiệm đến từ camera AI bên trong. Nó có thể tự động quét các sản phẩm bên trong tủ lạnh, nhận dạng và gửi danh sách thông tin về những thứ mà bạn cần bổ sung hoặc đã hết.', '2019-12-26 09:41:28', 2),
(3, 'Loạt di động về Việt Nam đầu năm 2020', 'Những chiếc smartphone này trải dài từ phân khúc tầm trung đến cận cao cấp.', 'Oppo Reno 3 Pro sử dụng thiết kế đục lỗ dưới màn hình, loại bỏ phần camera thò thụt hình vây cá mập trên 2 thế hệ đầu. Máy được trang bị màn hình OLED kích thước 6,5 inch, độ phân giải Full HD+ với tần số quét 90 Hz. Máy sử dụng con chip Snapdragon 765G, dung lượng RAM tùy chọn 8/12 GB, tương ứng với bộ nhớ trong 128/256 GB. Viên pin đi kèm theo máy có dung lượng 4.025 mAh, hỗ trợ sạc nhanh VOOC 4.0 với công suất 30 W. Ngoài ra, Reno 3 Pro cũng hỗ trợ công nghệ 5G và vân tay dưới màn hình. Chiếc máy này được bán xách tay với giá 12,5 triệu đồng.', '2019-12-26 09:42:01', 2),
(4, 'Samsung vừa trình làng diện mạo khác trong thập kỷ mới', 'Tại CES đầu tiên của thập kỷ mới, Samsung cho rằng đã đến lúc những công nghệ như 5G đem lại trải nghiệm hoàn chỉnh cho thiết bị thông minh và tự mình đưa ra những ví dụ mới.', 'Samsung được biết đến như nhà sản xuất smartphone hàng đầu thế giới. Tuy nhiên, hãng điện tử Hàn Quốc cũng có nhiều sản phẩm đáng chú ý trong lĩnh vực gia dụng, chăm sóc sức khỏe.\r\n\r\nXu hướng mới nhất, được Samsung trình diễn tại CES 2020, chính là tận dụng những công nghệ như trí tuệ nhân tạo và 5G để đem lại trải nghiệm hoàn chỉnh cho các thiết bị thông minh.', '2019-12-26 09:42:01', 2),
(5, 'Kết quả nghiên cứu khoa học sinh viên lần thứ 32', 'Kết quả nghiên cứu khoa học sinh viên lần thứ 32', 'Kết quả nghiên cứu khoa học sinh viên lần thứ 32', '2019-12-26 09:41:28', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `subjectid` smallint(5) UNSIGNED NOT NULL,
  `subjectName` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectDes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `majorid` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`subjectid`, `subjectName`, `subjectDes`, `majorid`) VALUES
(1, 'Công nghệ Web ', 'Công nghệ Web ', 1),
(2, 'Cơ sở dữ liệu', 'Cơ sở dữ liệu', 1),
(3, 'Học máy', 'Học máy', 1),
(4, 'Thủy lực', 'Thủy lực', 2),
(7, 'Lập trình Game', 'Lập trình Game', 1),
(8, 'Lập trình di động', 'Lập trình di động', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachassigned`
--

CREATE TABLE `teachassigned` (
  `teachAssignedId` smallint(5) UNSIGNED NOT NULL,
  `teacherid` smallint(5) UNSIGNED NOT NULL,
  `classid` smallint(5) UNSIGNED NOT NULL,
  `subjectid` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teachassigned`
--

INSERT INTO `teachassigned` (`teachAssignedId`, `teacherid`, `classid`, `subjectid`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 1, 4, 2),
(4, 1, 5, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `teacherid` smallint(6) UNSIGNED NOT NULL,
  `teacherLastName` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherFirstName` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherBirth` date NOT NULL,
  `teacherPhone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherMail` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacherAddress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`teacherid`, `teacherLastName`, `teacherFirstName`, `teacherBirth`, `teacherPhone`, `teacherMail`, `teacherAddress`) VALUES
(1, 'Thai', 'Pham', '1997-03-22', '0396595569', 'zangaga197@gmail.com', '383D Giai Phong'),
(2, 'Minh', 'Pham', '1997-03-21', '0396595569', 'thaiph52@wru.vn', '383B Giai Phong'),
(5, 'Mai', 'Nguyen', '1997-02-21', '0396595569', 'mainh52@wru.vn', '383D Giai Phong'),
(6, 'Huyền', 'Nguyen', '1997-02-19', '0396595569', 'huyennh52@wru.vn', '383D Giai Phong'),
(7, 'Nam', 'Nguyen', '1997-02-18', '0396595569', 'namnh52@wru.vn', '383D Giai Phong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachingnow`
--

CREATE TABLE `teachingnow` (
  `teachingNowId` smallint(5) UNSIGNED NOT NULL,
  `Lesson` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `teachAssignedId` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teachingnow`
--

INSERT INTO `teachingnow` (`teachingNowId`, `Lesson`, `Place`, `Date`, `teachAssignedId`) VALUES
(1, 'Học Ajax', 'Lab Samsung C5', '2019-12-27 15:40:00', 3),
(2, 'Học Ajax', 'Lab Samsung C5', '2019-12-27 15:40:00', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachingplan`
--

CREATE TABLE `teachingplan` (
  `teachingPlanId` smallint(5) UNSIGNED NOT NULL,
  `Lesson` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `teachAssignedId` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teachingplan`
--

INSERT INTO `teachingplan` (`teachingPlanId`, `Lesson`, `Place`, `Date`, `teachAssignedId`) VALUES
(1, 'Học Ajax', 'Lab Samsung C5', '2019-12-27 15:40:00', 1),
(2, 'Học Ajax', 'Lab Samsung C5', '2019-12-27 15:40:00', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` mediumint(8) UNSIGNED NOT NULL,
  `first_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`) VALUES
(2, 'Thai', 'Pham', 'zangaga197@gmail.com', '$2y$10$GHcZN9/yAZ8YI7nARjz5U..IZpFM25FUnXvi8FDo1rbtNKUSWJ3Da', '2019-12-26 09:35:03', 1),
(3, 'Thu', 'Pham', 'jsmith@myisp.co.uk', '$2y$10$GHcZN9/yAZ8YI7nARjz5U..IZpFM25FUnXvi8FDo1rbtNKUSWJ3Da', '2019-12-26 09:35:03', 0),
(4, 'Minh', 'Pham', 'thaiph52@wru.vn', '$2y$10$GHcZN9/yAZ8YI7nARjz5U..IZpFM25FUnXvi8FDo1rbtNKUSWJ3Da', '2019-12-26 09:35:03', 0),
(6, 'Thai', 'Nguyen', 'thaipn52@wru.vn', '$2y$10$mNAfpkMrbvSqKzAuYic5juRoQEJ7oUMPMCWLJIODDcYFBiMyvMKJK', '2020-01-09 21:11:04', 0),
(7, 'Thai', 'Nguyen', 'thaipn52@wru.vn', '$2y$10$785WMbivAYChAPDquREXgu7NUrD2ZWkcCwzk6Kk7gq/t3nuK8ZhBm', '2020-01-09 21:11:48', 0),
(8, 'Thai', 'Nguyen', 'thainh52@wru.vn', '$2y$10$isXOv3bItRxvKhzq9AmM4eZkPKENZ0NLvoYjXndOx1yy07emenCjC', '2020-01-09 21:13:57', 0),
(9, 'Mai', 'Nguyen', 'mainh52@wru.vn', '$2y$10$Vt9lEi7cRKUysKU54AufouGXQz/8ExhcMp2IXIxWC0o0hk0uEunAK', '2020-01-09 21:16:25', 1),
(10, 'Thai', 'Pham', 'thaiph521@wru.vn', '$2y$10$eAuDSxpM5E0n8X.4uDWYEOJtkhAtjqXzvhHvGDjx8tqQ.YZGtAx8a', '2020-01-09 21:27:56', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`);

--
-- Chỉ mục cho bảng `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`majorid`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `posts_ibfk_1` (`postBy`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`),
  ADD KEY `majorid` (`majorid`);

--
-- Chỉ mục cho bảng `teachassigned`
--
ALTER TABLE `teachassigned`
  ADD PRIMARY KEY (`teachAssignedId`),
  ADD KEY `teachassigned_ibfk_1` (`teacherid`),
  ADD KEY `teachassigned_ibfk_2` (`subjectid`),
  ADD KEY `teachassigned_ibfk_3` (`classid`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`);

--
-- Chỉ mục cho bảng `teachingnow`
--
ALTER TABLE `teachingnow`
  ADD PRIMARY KEY (`teachingNowId`),
  ADD KEY `teachAssignedId` (`teachAssignedId`);

--
-- Chỉ mục cho bảng `teachingplan`
--
ALTER TABLE `teachingplan`
  ADD PRIMARY KEY (`teachingPlanId`),
  ADD KEY `teachAssignedId` (`teachAssignedId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `class`
--
ALTER TABLE `class`
  MODIFY `classid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `major`
--
ALTER TABLE `major`
  MODIFY `majorid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `teachassigned`
--
ALTER TABLE `teachassigned`
  MODIFY `teachAssignedId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherid` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `teachingnow`
--
ALTER TABLE `teachingnow`
  MODIFY `teachingNowId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `teachingplan`
--
ALTER TABLE `teachingplan`
  MODIFY `teachingPlanId` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`postBy`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`majorid`) REFERENCES `major` (`majorid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `teachassigned`
--
ALTER TABLE `teachassigned`
  ADD CONSTRAINT `teachassigned_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`teacherid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachassigned_ibfk_2` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachassigned_ibfk_3` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `teachingnow`
--
ALTER TABLE `teachingnow`
  ADD CONSTRAINT `teachingnow_ibfk_1` FOREIGN KEY (`teachAssignedId`) REFERENCES `teachassigned` (`teachAssignedId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `teachingplan`
--
ALTER TABLE `teachingplan`
  ADD CONSTRAINT `teachingplan_ibfk_1` FOREIGN KEY (`teachAssignedId`) REFERENCES `teachassigned` (`teachAssignedId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
