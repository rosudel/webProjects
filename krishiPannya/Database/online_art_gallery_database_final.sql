-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 05:43 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_art_gallery_database_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `art_work`
--

CREATE TABLE `art_work` (
  `ART_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_TITLE` varchar(50) NOT NULL,
  `ART_DESCRIPTION` longtext DEFAULT NULL,
  `ART_PRICE` int(11) NOT NULL,
  `ART_DATE` date NOT NULL,
  `ART_WIDTH` int(11) NOT NULL,
  `ART_HEIGHT` int(11) NOT NULL,
  `ART_THICKNESS` int(11) NOT NULL,
  `ART_CATEGORY` varchar(20) NOT NULL,
  `ART_MEDIA` varchar(20) NOT NULL,
  `ART_STATUS` varchar(20) NOT NULL,
  `art_stock` int(50) NOT NULL,
  `COMMENT_ID` int(11) DEFAULT NULL,
  `ART_IMAGEPATH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `art_work`
--

INSERT INTO `art_work` (`ART_ID`, `USER_ID`, `ART_TITLE`, `ART_DESCRIPTION`, `ART_PRICE`, `ART_DATE`, `ART_WIDTH`, `ART_HEIGHT`, `ART_THICKNESS`, `ART_CATEGORY`, `ART_MEDIA`, `ART_STATUS`, `art_stock`, `COMMENT_ID`, `ART_IMAGEPATH`) VALUES
(14, 20, 'স্ট্রবেরী', '১০০০কেজি', 400, '2019-10-19', 0, 0, 0, 'শাক-সবজি ও ফলমূল', 'Graphite', 'AVAILABLE', 980, NULL, 'images.jpg'),
(15, 21, 'ধান', '২০০০ কেজি', 1000, '2019-10-19', 0, 0, 0, 'শস্য ও ডাল জাত', 'Airbrush', 'AVAILABLE', 1900, NULL, 'download.jpg'),
(16, 23, 'মূরগী', '১', 200, '2019-10-19', 0, 0, 0, 'মৎস্য-পশু-পাখি', 'Glass', 'SOLD', 0, NULL, 'download.jpg'),
(17, 24, 'তরমুজ', '৫০০০ পিস', 300, '2019-10-19', 0, 0, 0, 'শাক-সবজি ও ফলমূল', 'Graphite', 'AVAILABLE', 4800, NULL, 'download (2).jpg'),
(18, 25, 'ডিম', '৬০০ পিস', 10, '2019-10-19', 0, 0, 0, 'মৎস্য-পশু-পাখি', 'Leather', 'AVAILABLE', 550, NULL, 'layers-poultry-egg-farming-business-plan-1-1024x682.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buy_transaction`
--

CREATE TABLE `buy_transaction` (
  `TRANSACTION_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_ID` int(11) NOT NULL,
  `Courier_Name` varchar(50) NOT NULL,
  `Courier_Contact` bigint(20) NOT NULL,
  `ordered_date` date NOT NULL,
  `DELIVERY_DATE` date DEFAULT NULL,
  `ordered_no` int(10) NOT NULL,
  `total_price` int(50) NOT NULL,
  `shipping_area` varchar(50) NOT NULL,
  `shipping_municipal` varchar(50) NOT NULL,
  `shipping_province` varchar(50) NOT NULL,
  `shipping_zipcode` varchar(10) NOT NULL,
  `shipping_brgy` varchar(50) NOT NULL,
  `shipping_street` varchar(50) NOT NULL,
  `shipping_house_num` varchar(50) NOT NULL,
  `SHIPPING_STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buy_transaction`
--

INSERT INTO `buy_transaction` (`TRANSACTION_ID`, `USER_ID`, `ART_ID`, `Courier_Name`, `Courier_Contact`, `ordered_date`, `DELIVERY_DATE`, `ordered_no`, `total_price`, `shipping_area`, `shipping_municipal`, `shipping_province`, `shipping_zipcode`, `shipping_brgy`, `shipping_street`, `shipping_house_num`, `SHIPPING_STATUS`) VALUES
(19, 19, 14, 'অংকন', 1783003593, '2019-10-19', '2019-10-21', 20, 8000, 'রাজশাহী', 'pabna sadar', 'pabna', '6600', 'hfd', 'klsj', '45', 'delivered'),
(20, 22, 15, 'Delowar', 1783003593, '2019-10-19', '2019-10-21', 100, 100000, 'রংপুর', 'Dinajpur', 'No State', '5230', 'pabna', 'pa', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', 'delivered'),
(21, 22, 16, 'Golam Rosul', 1783003593, '2019-10-19', '2019-10-22', 1, 200, 'ঢাকা', 'Dinajpur', 'No State', '5230', 'hb', 'pkn', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', 'Processing'),
(22, 22, 17, 'Golam Rosul', 1783003456, '2019-10-19', '2019-10-22', 200, 60000, 'ঢাকা', 'Dinajpur', 'No State', '5230', 'dgs', 'fghdf', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', 'Processing'),
(23, 22, 18, 'Golam Rosul', 1783003456, '2019-10-19', '2019-10-21', 50, 500, 'রংপুর', 'Dinajpur', 'No State', '5230', 'sfdh', 'fh', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `COMMENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_ID` int(11) NOT NULL,
  `COMMENT_DATE` date NOT NULL,
  `COMMENT_CONTENT` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RATING_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ART_ID` int(11) NOT NULL,
  `RATING_VALUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `USER_FNAME` varchar(30) NOT NULL,
  `USER_MNAME` varchar(30) DEFAULT NULL,
  `USER_LNAME` varchar(30) NOT NULL,
  `USER_GENDER` varchar(10) NOT NULL,
  `USER_AGE` int(11) NOT NULL,
  `USER_BDAY` date NOT NULL,
  `USER_CONTACT` bigint(11) NOT NULL,
  `USER_MUNICIPAL` varchar(50) DEFAULT NULL,
  `USER_PROVINCE` varchar(50) DEFAULT NULL,
  `USER_ZIPCODE` varchar(10) DEFAULT NULL,
  `USER_BRGY` varchar(50) DEFAULT NULL,
  `USER_STREET` varchar(50) DEFAULT NULL,
  `USER_HOUSE_NUMBER` varchar(10) DEFAULT NULL,
  `user_email` varchar(100) NOT NULL,
  `USER_TYPE` varchar(20) NOT NULL,
  `User_imagepath` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `username`, `password`, `USER_FNAME`, `USER_MNAME`, `USER_LNAME`, `USER_GENDER`, `USER_AGE`, `USER_BDAY`, `USER_CONTACT`, `USER_MUNICIPAL`, `USER_PROVINCE`, `USER_ZIPCODE`, `USER_BRGY`, `USER_STREET`, `USER_HOUSE_NUMBER`, `user_email`, `USER_TYPE`, `User_imagepath`) VALUES
(5, 'admin', 'admin', 'Admin', 'Ba', 'Ako', 'Male', 0, '1998-02-08', 9301959762, 'Bulan', 'Sorsogon', '102', 'Zone 6', 'loilo st', '99', 'austinzunigapogi@gmail.com', 'Admin', ''),
(19, 'onkon', 'onkon', 'সালেহ', '', ' অংকন', 'Male', 0, '0000-00-00', 1737910258, 'রংপুর সদর', 'রংপুর', '৬৬০০', 'রাজাপুর', 'বিএসএমআর হল', '4', 'dskj@gmail.com', 'Customer', '14352467_107532363040960_957209075751152179_o.jpg'),
(20, 'talha', 'talha', 'abu', '', 'talha', 'Male', 0, '0000-00-00', 1783003456, 'পাবনা সদর', 'পাবনা', '৬৬০০', 'রাজাপুর', 'রাজাপুর', '১২', 'dskj@gmail.com', 'Artist', '560902_308153335946762_1701506400_n.jpg'),
(21, 'sumon', 'sumon', 'সুমন', '', 'হোসেন', 'Male', 0, '0000-00-00', 1783003593, 'পাবনা সদর', 'পাবনা', '৬৬০০', 'রাজাপুর', 'বিএসএমআর হল', '১২', 'dskj@gmail.com', 'Artist', '72623458_778648545918599_1841879940157407232_n.jpg'),
(22, 'buyer', 'buyer', 'buyer', '', 'buyer', 'Male', 0, '0000-00-00', 1783003456, 'পাবনা সদর', 'No State', '5230', 'রাজাপুর', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', '১২', 'dskj@gmail.com', 'Customer', ''),
(23, 'nuramin', 'nuramin', 'নুর ', '', 'আমিন', 'Male', 0, '0000-00-00', 1737910258, 'পাবনা সদর', 'পাবনা', '৬৬০০', 'রাজাপুর', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', '45', 'dskj@gmail.com', 'Artist', 'download (1).jpg'),
(24, 'himon', 'himon', 'হিমোন', '', 'শেখ', 'Male', 0, '0000-00-00', 1737910258, 'পাবনা সদর', 'No State', '৬৬০০', 'রাজাপুর', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', '১২', 'dskj@gmail.com', 'Artist', '560902_308153335946762_1701506400_n.jpg'),
(25, 'milon', 'milon', 'মিলন', '', ' আলী', 'Male', 0, '0000-00-00', 1737910258, 'রংপুর সদর', 'No State', '5230', 'রাজাপুর', 'Tebaria(5230), Bherbheri,Khansama,Dinajpur', '45', 'dskj@gmail.com', 'Artist', '72623458_778648545918599_1841879940157407232_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art_work`
--
ALTER TABLE `art_work`
  ADD PRIMARY KEY (`ART_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `COMMENT_ID` (`COMMENT_ID`);

--
-- Indexes for table `buy_transaction`
--
ALTER TABLE `buy_transaction`
  ADD PRIMARY KEY (`TRANSACTION_ID`),
  ADD KEY `ART_ID` (`ART_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`COMMENT_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `ART_ID` (`ART_ID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RATING_ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `ART_ID` (`ART_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art_work`
--
ALTER TABLE `art_work`
  MODIFY `ART_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `buy_transaction`
--
ALTER TABLE `buy_transaction`
  MODIFY `TRANSACTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `COMMENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RATING_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `art_work`
--
ALTER TABLE `art_work`
  ADD CONSTRAINT `art_work_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `art_work_ibfk_2` FOREIGN KEY (`COMMENT_ID`) REFERENCES `comment` (`COMMENT_ID`) ON DELETE CASCADE;

--
-- Constraints for table `buy_transaction`
--
ALTER TABLE `buy_transaction`
  ADD CONSTRAINT `buy_transaction_ibfk_1` FOREIGN KEY (`ART_ID`) REFERENCES `art_work` (`ART_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `buy_transaction_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`ART_ID`) REFERENCES `art_work` (`ART_ID`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`ART_ID`) REFERENCES `art_work` (`ART_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
