-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 30, 2019 lúc 04:09 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `equipmentmagane`
--
DROP DATABASE equipmentmagane;
CREATE DATABASE equipmentmagane;
USE equipmentmagane;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` int(10) NOT NULL,
  `Name_Category` varchar(224) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `Name_Category`, `Quantity`) VALUES
(1, 'Teacher', 1000),
(2, 'Student', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `damaged_device`
--

CREATE TABLE `damaged_device` (
  `ID` int(10) NOT NULL,
  `VerificationCode` varchar(224) DEFAULT NULL,
  `Date_Check` date DEFAULT NULL,
  `Status` varchar(224) DEFAULT NULL,
  `User_ID` int(10) DEFAULT NULL,
  `Room_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `equipment`
--

CREATE TABLE `equipment` (
  `ID` int(10) NOT NULL,
  `Trademark_ID` int(10) DEFAULT NULL,
  `User_ID` int(10) DEFAULT NULL,
  `Cate_ID` int(10) DEFAULT NULL,
  `VerificationCode` varchar(224) DEFAULT NULL,
  `Date_Equip` date DEFAULT NULL,
  `Status` varchar(224) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fixrequest`
--

CREATE TABLE `fixrequest` (
  `ID` int(10) NOT NULL,
  `Date_request` date DEFAULT NULL,
  `Content` varchar(224) DEFAULT NULL,
  `Status` varchar(224) DEFAULT NULL,
  `User_ID` int(10) DEFAULT NULL,
  `Room_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `ID` int(10) NOT NULL,
  `NameRoom` varchar(224) DEFAULT NULL,
  `Computer_quantity` varchar(224) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`ID`, `NameRoom`, `Computer_quantity`) VALUES
(1, 'PNV21A', '30'),
(2, 'PNV21B', '30'),
(3, 'PNV20A', '30'),
(4, 'PNV20B', '30');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `ID` int(10) NOT NULL,
  `Image` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`ID`, `Image`) VALUES
(6, 'slide1.jpg'),
(7, 'slide2.jpg'),
(8, 'slide3.jpg'),
(9, 'slide4.jpg'),
(10, 'slide.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademark`
--

CREATE TABLE `trademark` (
  `ID` int(10) NOT NULL,
  `Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `trademark`
--

INSERT INTO `trademark` (`ID`, `Name`) VALUES
(1, 'Logitech'),
(2, 'Acer'),
(3, 'Sam Sung'),
(4, 'BenQ'),
(5, 'Genius'),
(6, 'Dell');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `UserName` varchar(224) DEFAULT NULL,
  `Class` varchar(224) DEFAULT NULL,
  `Email` varchar(224) DEFAULT NULL,
  `Password` varchar(224) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `admin` (
  `UserName` varchar(224) DEFAULT NULL,
  `Password` varchar(224) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `admin` (`UserName`,`Password`) VALUES
('admin', 'admin');
--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `UserName`, `Class`, `Email`, `Password`) VALUES
(1, 'Tan', 'PNV20B', 'tan461999@gmail.com', '$2y$10$HKDCsC49uFrLqTi6Q.ebDOSSsWPTCORhuyac10kpOLPrdq59j7rt2'),
(2, 'Cuong', 'PNV20B', 'cuong1999@gmail.com', '0169525qq4az'),
(3, 'Hung', 'PNV20B', 'hung1999@gmail.com', '123456789'),
(4, 'Cam', 'PNV20B', 'cam1999@gmail.com', '01695254azas');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `damaged_device`
--
ALTER TABLE `damaged_device`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Room_ID` (`Room_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Chỉ mục cho bảng `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Cate_ID` (`Cate_ID`),
  ADD KEY `Trademark_ID` (`Trademark_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Chỉ mục cho bảng `fixrequest`
--
ALTER TABLE `fixrequest`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `Room_ID` (`Room_ID`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `damaged_device`
--
ALTER TABLE `damaged_device`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `equipment`
--
ALTER TABLE `equipment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `fixrequest`
--
ALTER TABLE `fixrequest`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `damaged_device`
--
ALTER TABLE `damaged_device`
  ADD CONSTRAINT `damaged_device_ibfk_1` FOREIGN KEY (`Room_ID`) REFERENCES `room` (`ID`),
  ADD CONSTRAINT `damaged_device_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`);

--
-- Các ràng buộc cho bảng `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`Cate_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `equipment_ibfk_2` FOREIGN KEY (`Trademark_ID`) REFERENCES `trademark` (`ID`),
  ADD CONSTRAINT `equipment_ibfk_3` FOREIGN KEY (`User_ID`) REFERENCES `category` (`ID`);

--
-- Các ràng buộc cho bảng `fixrequest`
--
ALTER TABLE `fixrequest`
  ADD CONSTRAINT `fixrequest_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `fixrequest_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `room` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
