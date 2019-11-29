-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 06:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itpromo_track`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_fullname` varchar(255) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_pos` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_fullname`, `admin_email`, `admin_pos`) VALUES
(1, 'admin', '1234', 'Administrator', 'nikhusnee1003@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `advisergroup`
--

CREATE TABLE `advisergroup` (
  `advisergroup_id` int(11) NOT NULL,
  `advisergroup_topic` varchar(255) DEFAULT NULL,
  `advisergroup_status` enum('0','w','1') NOT NULL DEFAULT 'w',
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advisergroup`
--

INSERT INTO `advisergroup` (`advisergroup_id`, `advisergroup_topic`, `advisergroup_status`, `member_id`, `group_id`) VALUES
(1, 'ITPROMO &TRACK', '1', 8, 1),
(2, 'Rerairing ', '1', 14, 2),
(3, 'MOC', '1', 8, 3),
(4, 'Application Game ', '1', 18, 4),
(5, 'Alquran Application', '1', 14, 5),
(6, 'Carton', '1', 18, 6),
(14, 'Baised ecommerce', '1', 8, 7),
(15, 'xxxxxxx', '1', 11, 8),
(16, 'ooooooo', '1', 18, 9),
(17, 'bbbbb', '1', 14, 10);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(10) NOT NULL,
  `announcement_topic` varchar(255) NOT NULL,
  `announcement_detail` varchar(255) NOT NULL,
  `announcement_date` date NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_topic`, `announcement_detail`, `announcement_date`, `admin_id`) VALUES
(7, 'Update schedule for submitting the Thesis Proposal for the March 2020 graduation period', '<p>The deadline for submitting the Thesis Proposal Draft for the March 2020 graduation period is Thursday, September 5, 2019.</p>\r\n\r\n<p>Thank you</p>\r\n', '2019-10-05', 1),
(9, 'The project and proposal round 1', '<p>Go to meet me&nbsp;</p>\r\n', '2019-10-06', 1),
(10, 'dd', '<p>ddd</p>\r\n', '2019-10-06', 1),
(11, 'dd', '<p>ddd</p>\r\n', '2019-10-18', 1),
(12, 'gg', '<p>ggg</p>\r\n', '2019-10-09', 1),
(13, 'kokookoo', '<p>fffffffffffffffff</p>\r\n', '2019-10-23', 1),
(14, 'ttttttttttttttttttttttttttttttttttt', '<p>ttttttttttttttttttttt</p>\r\n', '2019-10-03', 1),
(15, 'nikkkk', '<p>nikkkknikkkknikkkknikkkknikkkknikkkknikkkknikkkk</p>\r\n', '2019-10-16', 1),
(16, 'rrrrrrrrrr', '<p>rrrrrrrr</p>\r\n', '2019-10-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `committeegroup`
--

CREATE TABLE `committeegroup` (
  `committeegroup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `group_id`) VALUES
(1, 14, 1),
(2, 18, 1),
(3, 8, 2),
(4, 11, 2),
(5, 8, 3),
(6, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `files_status` enum('w','1') COLLATE utf8_unicode_ci NOT NULL COMMENT 'w: wait to accept,1: pass,4:officer approved',
  `member_id` enum('w','4') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_idcard` int(30) NOT NULL,
  `member_username` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_fullname` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_password` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_pos` enum('1','2','3','4') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Advisor, 2=Committee, 3=Student, 4=Officer',
  `member_phone` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_email` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_gender` enum('m','f') COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'm=Male, f=female',
  `admin_id` int(20) NOT NULL COMMENT 'Foreign Key to tb_admin',
  `group_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_idcard`, `member_username`, `member_fullname`, `member_password`, `member_pos`, `member_phone`, `member_email`, `member_gender`, `admin_id`, `group_id`) VALUES
(1, 572431003, 'Husnee', 'Nik-Hunsee Nik-Uma', '1234', '3', '08343243455', 'nikhusne1003@gmail.com', 'f', 1, 1),
(2, 572431005, 'Ida', 'Nur-ida Che-loh', '1234', '3', '0852758463', 'ida@gmail.com', 'f', 1, 3),
(3, 572431009, 'Han', 'Norihan Ha', '1234', '3', '0747346826', 'han@gmail.com', 'f', 1, 6),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', '3', '075683633', 'misk@gmail.com', 'f', 1, 4),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', '3', '0856658897', 'win@gmail.com', 'f', 1, 6),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', '3', '245764', 'sunee@gmailcom', 'f', 1, 2),
(7, 572431018, 'husni', 'Husni Munoh', '1234', '3', '33442233', 'ni@gmail.com', 'f', 1, 7),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', '1', '0857638634', 'kholed@gmail.com', 'm', 1, NULL),
(9, 572431001, 'Adam', 'Adam Wokbah', '1234', '3', '0847183624', 'husna@gmail.com', 'm', 1, 5),
(11, 1001, 'husna', 'Nurulhusna', '1234', '1', '0856375367', 'husna@gmail.com', 'f', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '1234', '4', '08567637858', 'nani@gmail.com', 'f', 1, NULL),
(13, 57378, 'Anas', 'Anas watih', '1234', '3', '0986382', 'anas@gmail.com', 'm', 1, 5),
(14, 462444, 'fatah', 'fatah', '1234', '1', '35664', 'male@gmail.com', 'm', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', '3', '22', 's@gmail.com', 'f', 1, 3),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', '3', '083171632', 'yah@gmail.com', 'f', 1, 4),
(17, 572431923, 'ilham', 'ilham', '1234', '3', '0842148244', 'murni@gmail.com', 'f', 1, 2),
(18, 572294, 'da', 'suaida', '1234', '1', '058679875', 'gg@gmail.com', 'f', 1, NULL),
(19, 57231002, 'Hafizah', 'Hafizah uma', '1234', '3', '083186321', 'Hafizah@gnail.com', 'f', 1, 7),
(20, 572431029, 'tylas', 'Mouet Tylas', '1234', '3', '0847538593', 'tylas@gmail.com', 'f', 1, 1),
(21, 571386628, 'Wa', 'Anur Smile', '1234', '3', '07436847', 'wa@gmail.com', 'm', 1, NULL),
(22, 57328470, 'bah', 'Misbah ', '1234', '3', '098462734', 'bah@gmail.com', 'f', 1, 8),
(23, 574398, 'siti', 'Sitisulaiko', '1234', '3', '0496353', 'ti@gmail.com', 'f', 1, 8),
(24, 608565, 'Ya', 'Nadia', '1234', '3', '08762743', 'ya@gmail.com', 'f', 1, 9),
(25, 345565, 'mah', 'Marhamah', '1234', '3', '0876793', 'mah', 'f', 1, 9),
(27, 649700, 'la', 'nuzula', '1234', '3', '09864899', 'la@gmail.com', 'f', 1, 10),
(28, 32435, 'lah', 'Kiflah', '1234', '3', '0974624', 'lah@gmail.com', 'f', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `news_topic`
--

CREATE TABLE `news_topic` (
  `news_id` int(11) NOT NULL,
  `news_topic` varchar(10) NOT NULL,
  `news_detail` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_topic`
--

INSERT INTO `news_topic` (`news_id`, `news_topic`, `news_detail`, `news_date`, `member_id`) VALUES
(1, 'Lecturer h', '<p><strong>If student interesting u can meet me at officer</strong></p>\r\n', '2019-09-22', 8),
(2, 'วันนี้ อ ม', '<p>มาติดต่อ อ ได้ ที่ ห้อง 403</p>\r\n', '2019-09-23', 8),
(3, 'Today we h', 'At Scient of Technology ', '2019-09-18', 8),
(4, 'mmmmmmm', '<p>ddddddddddddddddd</p>\r\n', '2019-09-12', 14),
(5, 'ttt', '<p>tttttttttttttt</p>\r\n', '2019-10-11', 8),
(6, 'Add more t', '<p>moreeeeeeeeeeeeee</p>\r\n', '2019-10-13', 14);

-- --------------------------------------------------------

--
-- Table structure for table `partnergroup`
--

CREATE TABLE `partnergroup` (
  `group_id` int(11) NOT NULL,
  `group_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partnergroup`
--

INSERT INTO `partnergroup` (`group_id`, `group_number`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_round` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=round 1,2= round 2',
  `schedule_type` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Proposal,2=Project',
  `schedule_years` year(4) NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `member_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `advisergroup_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_round`, `schedule_type`, `schedule_years`, `schedule_time`, `schedule_date`, `member_id`, `admin_id`, `advisergroup_id`) VALUES
(3, '1', '1', 2019, '02:04:00', '2019-09-08', 6, 1, 2),
(4, '2', '2', 2018, '19:00:00', '2019-09-07', 1, 1, 1),
(5, '2', '2', 2017, '00:00:12', '2019-09-14', 2, 1, 5),
(6, '1', '1', 0000, '00:00:22', '2019-09-13', 5, 1, 3),
(7, '1', '1', 2044, '00:00:22', '2019-09-21', 6, 12, 7),
(8, '1', '1', 0000, '00:00:03', '2019-10-05', 1, 12, 0),
(9, '1', '1', 0000, '00:00:22', '2019-10-12', 4, 12, 0),
(10, '1', '1', 0000, '00:00:00', '2019-10-01', 1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic_project`
--

CREATE TABLE `topic_project` (
  `topic_id` int(11) NOT NULL,
  `topic_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_abstrack` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_keyword` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_fieldstudy` enum('1','2','3') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Software Engineering, 2=Computer Multimedia, 3=Computer Networking',
  `topic_years` date NOT NULL,
  `status` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Approve,2=Not Approve',
  `advisergroup_id` int(20) NOT NULL,
  `Student_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_idcard` int(20) NOT NULL,
  `adviser` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `position` enum('Admin','Student') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Admin,2=Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `topic_project`
--

INSERT INTO `topic_project` (`topic_id`, `topic_topic`, `topic_abstrack`, `topic_keyword`, `topic_fieldstudy`, `topic_years`, `status`, `advisergroup_id`, `Student_name`, `member_idcard`, `adviser`, `position`) VALUES
(1, 'ITPROMO &TRACK', 'Information and Technology', 'track', '1', '2019-11-09', '1', 1, 'Nik-Hunsee Nik-Uma', 572431003, 'Kholed Langsaree', 'Student'),
(2, 'Rerairing ', 'Getting pulled over by the police is almost never', 'Rerairing  general', '2', '2019-11-14', '1', 2, 'Sunee Kasem', 572431016, 'fatah', 'Student'),
(3, 'MOC', 'A very creative and refreshing approach to dealing with crime', 'Moc Project', '3', '2019-11-15', '1', 3, 'Hunafah', 66, 'Kholed Langsaree', 'Student'),
(4, 'Application Game ', 'hhhhh', 'hhhhh', '1', '2019-11-10', '1', 4, 'Miskah Kasengteuba', 572431011, 'suaida', 'Student'),
(5, 'Alquran Application', 'nikikij', 'xgdv', '3', '2019-11-21', '1', 5, 'Anas watih', 57378, 'fatah', 'Student'),
(17, 'Baised ecommerce', 'Ecom', 'sell', '1', '2018-11-29', '1', 14, 'Husni Munoh', 572431018, 'Kholed Langsaree', 'Student'),
(18, 'xxxxxxx', 'zzzzzzz', 'ccccccccc', '2', '2019-11-23', '1', 15, 'Sitisulaiko', 574398, 'Nurulhusna', 'Student'),
(20, 'bbbbb', 'phpphp', 'vfllgldgf', '1', '2019-11-16', '1', 17, 'Kiflah', 32435, 'fatah', 'Student'),
(21, 'ooooooo', 'xxxxx', 'xxxxxxxx', '2', '2019-11-30', '1', 16, 'Marhamah', 345565, 'suaida', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `advisergroup`
--
ALTER TABLE `advisergroup`
  ADD PRIMARY KEY (`advisergroup_id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `committeegroup`
--
ALTER TABLE `committeegroup`
  ADD PRIMARY KEY (`committeegroup_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`files_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `am_id` (`admin_id`);

--
-- Indexes for table `news_topic`
--
ALTER TABLE `news_topic`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `partnergroup`
--
ALTER TABLE `partnergroup`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_number` (`group_number`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `topic_project`
--
ALTER TABLE `topic_project`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisergroup`
--
ALTER TABLE `advisergroup`
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
