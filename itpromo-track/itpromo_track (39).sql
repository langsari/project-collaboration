-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 03:30 AM
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
(1, 'admin', '1234', 'Administrator', 'nikhusnee1003@gmail.com', 'Admin'),
(2, 'koko', '123', 'koko uma', 'itpromo123@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `advisergroup`
--

CREATE TABLE `advisergroup` (
  `advisergroup_id` int(11) NOT NULL,
  `advisergroup_topic` varchar(255) DEFAULT NULL,
  `advisergroup_status` enum('0','Waiting','Approve') NOT NULL DEFAULT 'Waiting',
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `admin_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `apps_notification`
--

CREATE TABLE `apps_notification` (
  `msg_id` int(11) NOT NULL,
  `member_token` varchar(255) CHARACTER SET utf8 NOT NULL,
  `msg_text` varchar(255) CHARACTER SET utf8 NOT NULL,
  `topic_text` varchar(255) CHARACTER SET utf8 NOT NULL,
  `msg_status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(10) NOT NULL,
  `chat_massage` varchar(255) NOT NULL,
  `chat_date_time` datetime NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `member_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `com_id` int(11) NOT NULL,
  `com_content` varchar(255) NOT NULL,
  `com_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `advisergroup_id` int(20) NOT NULL,
  `member_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `committeegroup`
--

CREATE TABLE `committeegroup` (
  `committeegroup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status_presentation` enum('','Pass','No') NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `status_project` enum('','Pass','No') NOT NULL,
  `comment_project` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_revisoin` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `files_status` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `status_advisor` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `pf` int(20) NOT NULL,
  `by_officer05` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor06` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor07` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor08` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer09` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor10` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_idcard` int(30) NOT NULL,
  `member_username` varchar(255) NOT NULL,
  `member_fullname` varchar(255) NOT NULL,
  `member_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `member_pos` enum('Lecturer','Student','Officer') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1=Lecturer, 3=Student, 4=Officer',
  `member_phone` varchar(10) NOT NULL,
  `member_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `member_gender` enum('Male','Female') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'm=Male, f=female',
  `member_firstname` varchar(255) NOT NULL,
  `member_lastname` varchar(255) NOT NULL,
  `member_years` int(11) NOT NULL,
  `member_birthday` int(30) NOT NULL,
  `admin_address` varchar(255) NOT NULL,
  `member_major` varchar(255) NOT NULL,
  `member_faculty` varchar(255) NOT NULL,
  `admin_id` int(20) NOT NULL COMMENT 'Foreign Key to tb_admin',
  `group_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_idcard`, `member_username`, `member_fullname`, `member_password`, `member_pos`, `member_phone`, `member_email`, `member_gender`, `member_firstname`, `member_lastname`, `member_years`, `member_birthday`, `admin_address`, `member_major`, `member_faculty`, `admin_id`, `group_id`) VALUES
(2, 572431005, 'ida', 'Nur-ida ', '1234', 'Student', '09576386', ' ida@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(3, 572431009, 'Han', '  Norihan Ha', '1234', 'Student', '0831851521', '  han@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '75683633', 'misk@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '856658897', 'win@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '245764', 'sunee@gmailcom', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '33442233', 'ni@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(8, 611111, 'Kholed', 'Kholed Langsari', '1234', 'Lecturer', '857638634', 'kholed@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Lecturer', '856375367', 'husna@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(12, 22222222, 'nani', 'Rusnanee Utea', '123', 'Officer', '2147483647', 'nani@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(13, 57378, 'Anas', 'Busree Hasa', '1234', 'Student', '986382', 'anas@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(14, 462444, 'Abdulfatah', 'Abdulfatah Masamae', '123', 'Lecturer', '35664', 'male@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', 'Student', '22', 's@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', 'Student', '83171632', 'yah@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '842148244', 'murni@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(18, 572294, 'da', 'suaida', '1234', 'Lecturer', '58679875', 'gg@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(19, 57231002, 'Mafaisu', 'Mafaisu', '1234', 'Lecturer', '83186321', 'Hafizah@gnail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '7436847', 'wa@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '98462734', 'bah@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(25, 345565, 'Hanani', 'Hanani Dalor', '1234', 'Student', '876793', 'advisorfst123@gmail.com\r\n', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(27, 649700, 'la', 'nuzula', '1234', 'Student', '9864899', 'itpromo123@gmail.com\r\n', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(29, 12345678, 'Ibtisam', 'Ibtisam', '1234', 'Lecturer', '974356678', 'ib@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(30, 572431021, 'ta', 'Nureeta Yayo', '1234', 'Student', '487759', 'bee@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(33, 332, 'huda', 'Norhuda', '1234', 'Lecturer', '87467', 'da@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '833749', 'ri@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(41, 2018384565, 'Anas', 'Anas tawallbh', 'Anas', 'Lecturer', '984712884', 'Anas123@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(45, 2147483647, 'Maroning', 'Maroning ftu', '123', 'Lecturer', '867433784', 'maroning@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(46, 75639890, 'fausan', 'Fausan Mapa', '123', 'Lecturer', '86372691', 'fausan@gmail.com', 'Male', '', '', 0, 0, '', '', '', 1, NULL),
(47, 7493874, 'Nae', 'Nik-Naemah Nik-Abdullah', '1234', 'Lecturer', '837749377', 'naemah123@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(49, 572431029, 'Tylas', 'Mout Tylas', '1234', 'Student', '861753444', 'tylasmoeut143@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(50, 572431003, 'Husnee', 'Nik-Husnee Nik-Uma', '123', 'Student', '0922918019', 'nikhusnee4560@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL),
(63, 571000000, 'test', 'testing', '1234', 'Student', '0831736282', 'tes123@gmail.com', 'Female', '', '', 0, 0, '', '', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_topic`
--

CREATE TABLE `news_topic` (
  `news_id` int(11) NOT NULL,
  `news_topic` varchar(255) NOT NULL,
  `news_detail` varchar(255) NOT NULL,
  `news_date` date NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `subject` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partnergroup`
--

CREATE TABLE `partnergroup` (
  `group_id` int(11) NOT NULL,
  `group_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `schedule_type` enum('1','2') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1=Proposal,2=Project',
  `schedule_room` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `writer` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topic_project`
--

CREATE TABLE `topic_project` (
  `topic_id` int(11) NOT NULL,
  `group_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Owner` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic_topic` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic_abstrack` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic_keyword` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic_fieldstudy` enum('Software Engineering','Computer Multimedia','Computer Networking') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic_years` date NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `adviser` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `position` enum('Admin','Student') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1=Admin,2=Student',
  `status` enum('1','2','3','4','5','6','7') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '1=Wait for the proposal trail,2=Revision,3=OK,4=Reject,5=Cancel,6=Graduate,7=Not Pass'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `apps_notification`
--
ALTER TABLE `apps_notification`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`com_id`);

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
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apps_notification`
--
ALTER TABLE `apps_notification`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
