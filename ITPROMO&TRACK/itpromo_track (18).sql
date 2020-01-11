-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 08:21 PM
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

--
-- Dumping data for table `advisergroup`
--

INSERT INTO `advisergroup` (`advisergroup_id`, `advisergroup_topic`, `advisergroup_status`, `member_id`, `group_id`, `admin_id`) VALUES
(1, 'IT Promo and Track System', 'Approve', 8, 1, '1'),
(16, 'gg', 'Approve', 29, 3, '2'),
(17, 'xxxxxxxxxxxx', 'Approve', 33, 4, '1'),
(18, 'Repairing System', 'Approve', 8, 5, '1'),
(20, 'Smart Rang Hood', 'Approve', 8, 2, '1');

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
(1, 'Notify the following students ', '<ul>\r\n	<li>submit full Proposal on 19/12/62</li>\r\n	<li>proposal contents as in attachment files in this group.</li>\r\n	<li>Proposal Presentation will be on 25/12/19.</li>\r\n	<li>Proposal should be approve by your advisor before submit on this 19/12/62</li>\r', '2020-01-02', 1),
(2, 'Assalamulaikum Warahmatullah Wabarakatuh', '<p>Dear students who are register for subject IT2301-321 and IT2301-322 with Aj.Sureeluk Ma require to students submit P01 in this coming Sunday 15/12/62, a form in attachment file below</p>\r\n\r\n<p><img alt=\"ไม่มีคำอธิบายรูปภาพ\" src=\"https://scontent.fhdy2', '2020-01-04', 1),
(5, 'xx', '<p>xxxx</p>\r\n\r\n<p>xxxxx</p>\r\n\r\n<p>xx</p>\r\n', '2020-01-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `apps_notification`
--

CREATE TABLE `apps_notification` (
  `msg_id` int(11) NOT NULL,
  `member_token` varchar(255) NOT NULL,
  `msg_text` varchar(255) NOT NULL,
  `topic_text` varchar(255) NOT NULL,
  `msg_status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_massage`, `chat_date_time`, `advisergroup_id`, `member_id`) VALUES
(1, 'jjjj', '0000-00-00 00:00:00', 1, 1),
(2, 'kkkkk', '0000-00-00 00:00:00', 1, 20),
(3, 'ooo', '0000-00-00 00:00:00', 0, 8),
(4, 'ggg', '0000-00-00 00:00:00', 0, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'hi', 'koko', '2019-12-04 06:12:26'),
(2, 0, 'ddd', 'dd', '2019-12-04 06:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `committeegroup`
--

CREATE TABLE `committeegroup` (
  `committeegroup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `files_status` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_ci NOT NULL,
  `member_id` enum('Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`files_id`, `files_filename_proposal`, `files_filename_project`, `advisergroup_id`, `files_status`, `member_id`, `Owner`) VALUES
(1, '1578594145-1577973082-lastusecase(1).pdf', '', 1, '1', 'Waiting', '572431003 Nik-Hunsee Nik-Uma572431029 Mouet Tylas'),
(2, '1578597486-1577973082-lastusecase(1).pdf', '', 20, '3', 'Waiting', '572431005 Nur-ida Che-loh66 Hunafah');

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
  `member_pos` enum('Lecturer','Student','Officer') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Lecturer, 3=Student, 4=Officer',
  `member_phone` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_email` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_gender` enum('Male','Female') COLLATE utf8_unicode_520_ci NOT NULL COMMENT 'm=Male, f=female',
  `admin_id` int(20) NOT NULL COMMENT 'Foreign Key to tb_admin',
  `group_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_idcard`, `member_username`, `member_fullname`, `member_password`, `member_pos`, `member_phone`, `member_email`, `member_gender`, `admin_id`, `group_id`) VALUES
(1, 572431003, 'Husnee', 'Nik-Hunsee Nik-Uma', '1234', 'Student', '08343243455', 'nikhusne1003@gmail.com', 'Female', 1, 1),
(2, 572431005, 'Ida', 'Nur-ida Che-loh', '1234', 'Student', '08535935', 'ida@gmail.com', 'Female', 1, 2),
(3, 572431009, 'Han', 'Norihan Ha', '1234', 'Student', '0747346826', 'han@gmail.com', 'Female', 1, 7),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '075683633', 'misk@gmail.com', 'Female', 1, NULL),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '0856658897', 'win@gmail.com', 'Female', 1, NULL),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '245764', 'sunee@gmailcom', 'Female', 1, 5),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '33442233', 'ni@gmail.com', 'Female', 1, NULL),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', 'Lecturer', '0857638634', 'kholed@gmail.com', 'Male', 1, NULL),
(9, 572431001, 'Adam', 'Adam Wokbah', '1234', 'Student', '0847183624', 'husna@gmail.com', 'Male', 1, NULL),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Lecturer', '0856375367', 'husna@gmail.com', 'Female', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '123', 'Officer', '08567637858', 'nani@gmail.com', 'Female', 1, NULL),
(13, 57378, 'Anas', 'Anas watih', '1234', 'Student', '0986382', 'anas@gmail.com', 'Male', 1, NULL),
(14, 462444, 'fatah', 'fatah', '123', 'Lecturer', '35664', 'male@gmail.com', 'Male', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', 'Student', '22', 's@gmail.com', 'Female', 1, 2),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', 'Student', '083171632', 'yah@gmail.com', 'Female', 1, NULL),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '0842148244', 'murni@gmail.com', 'Female', 1, 5),
(18, 572294, 'da', 'suaida', '1234', 'Lecturer', '058679875', 'gg@gmail.com', 'Female', 1, NULL),
(19, 57231002, 'Hafizah', 'Hafizah uma', '1234', 'Student', '083186321', 'Hafizah@gnail.com', 'Female', 1, NULL),
(20, 572431029, 'tylas', 'Mouet Tylas', '1234', 'Student', '0847538593', 'tylas@gmail.com', 'Female', 1, 1),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '07436847', 'wa@gmail.com', 'Male', 1, NULL),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '098462734', 'bah@gmail.com', 'Female', 2, 3),
(23, 574398, 'siti', 'Sitisulaiko', '1234', 'Student', '0496353', 'ti@gmail.com', 'Female', 1, 4),
(24, 608565, 'Ya', 'Nadia', '1234', 'Student', '08762743', 'ya@gmail.com', 'Female', 1, 4),
(25, 345565, 'mah', 'Marhamah', '1234', 'Student', '0876793', 'advisorfst123@gmail.com\r\n', 'Female', 1, NULL),
(27, 649700, 'la', 'nuzula', '1234', 'Student', '09864899', 'itpromo123@gmail.com\r\n', 'Female', 2, 3),
(28, 32435, 'lah', 'Kiflah', '1234', 'Student', '0974624', 'lah@gmail.com', 'Female', 1, 10),
(29, 12345678, 'Ib', 'Ibtisam', '1234', 'Lecturer', '0974356678', 'ib@gmail.com', 'Female', 2, NULL),
(30, 46577, 'bee', 'Hasbee', '1234', 'Student', '0487759', 'bee@gmail.com', 'Female', 1, 6),
(33, 332, 'huda', 'Norhuda', '1234', 'Lecturer', '87467', 'da@gmail.com', 'Female', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '0833749', 'ri@gmail.com', 'Male', 1, 6),
(35, 54, 'ff', 'ff', '1234', 'Student', '0853534', 'nn@gmail.com', 'Female', 1, NULL),
(38, 444, 'ee', 'ee', '111', 'Student', '45344', 'nn@gmail.com', 'Female', 1, NULL),
(39, 4443, 'dd', 'ss', '111', 'Student', '232222', 'kk@gmail.com', 'Male', 1, NULL);

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
(1, 'PROPOSAL P', '<p>Proposal Report and P02 submit dateline: Monday 6 Jan 2020</p>\r\n\r\n<p>Proposal Presentation will be on Wednesday 8 Jan 2020</p>\r\n', '2020-01-16', 8),
(2, 'Topic  of ', '<p>Moc project</p>\r\n\r\n<p>Smart pay</p>\r\n\r\n<p>Who interes can contact me</p>\r\n\r\n<p>tel:0818515312</p>\r\n', '2020-01-15', 8);

-- --------------------------------------------------------

--
-- Table structure for table `partnergroup`
--

CREATE TABLE `partnergroup` (
  `group_id` int(11) NOT NULL,
  `group_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partnergroup`
--

INSERT INTO `partnergroup` (`group_id`, `group_number`) VALUES
(6, '22'),
(7, '444444'),
(1, 'PS10001'),
(2, 'PS10002'),
(3, 'PS10003'),
(4, 'PS10004'),
(5, 'PS10005');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `schedule_type` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Proposal,2=Project',
  `schedule_room` int(10) NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_status` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic_project`
--

CREATE TABLE `topic_project` (
  `topic_id` int(11) NOT NULL,
  `group_number` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_abstrack` varchar(5000) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_keyword` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_fieldstudy` enum('Software Engineering','Computer Multimedia','Computer Networking') COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_years` date NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `adviser` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `position` enum('Admin','Student') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Admin,2=Student',
  `status` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Wait for the proposal trail,2=Revision,3=OK,4=Reject,5=Cancel,6=Graduate,7=Not Pass'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `topic_project`
--

INSERT INTO `topic_project` (`topic_id`, `group_number`, `Owner`, `topic_topic`, `topic_abstrack`, `topic_keyword`, `topic_fieldstudy`, `topic_years`, `advisergroup_id`, `adviser`, `position`, `status`) VALUES
(1, 'PS10001', '<p>572431003 &nbsp&nbsp&nbsp&nbsp Nik-Hunsee Nik-Uma</p><p>572431029 &nbsp&nbsp&nbsp&nbsp Mouet Tylas</p>', 'IT Promo and Track System', 'IT Project Monito', '  IT Project, Tracking system', '', '2020-01-02', 1, 'Kholed Langsaree', 'Student', '1'),
(2, 'PS10032', '561431002 MR. LY HANAFY\r\n561431011 Anwa raka	', 'Activity Web Application', 'In the past, all houses will have clearly separate various parts. Whether it is a bedroom,\r\nbathroom, kitchen, living room, etc.', 'Activity,Application', 'Software Engineering', '2019-12-12', 0, '14', 'Admin', '2'),
(4, 'PS10004', '<p>574398 &nbsp&nbsp&nbsp&nbsp Sitisulaiko</p><p>608565 &nbsp&nbsp&nbsp&nbsp Nadia</p>', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxx', 'Computer Multimedia', '2020-01-15', 0, 'Norhuda', 'Student', '5'),
(5, 'PS10005', '<p>572431016 &nbsp&nbsp&nbsp&nbsp Sunee Kasem</p><p>572431923 &nbsp&nbsp&nbsp&nbsp ilham</p>', 'Repairing System', 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'Computer Networking', '2020-01-08', 18, 'Kholed Langsaree', 'Student', '2'),
(16, 'PS10003', '<p>57328470 &nbsp&nbsp&nbsp&nbsp Misbah </p><p>649700 &nbsp&nbsp&nbsp&nbsp nuzula</p>', 'gg', 'bb', 'bb', 'Software Engineering', '2020-01-02', 16, 'Ibtisam', 'Student', '2'),
(17, 'PS10002', '<p>572431005 &nbsp&nbsp&nbsp&nbsp Nur-ida Che-loh</p><p>66 &nbsp&nbsp&nbsp&nbsp Hunafah</p>', 'Smart Rang Hood', 'Rancang Bangun Sistem Pengamatan Lingkungan Menggunakan Wireless Sensor Network berbasis nRF24L01 Terdistribusi dengan Layanan Dashboard untuk Visualisasi Data Pengamatan Secara Real Time', 'Application', 'Computer Multimedia', '2020-01-01', 20, 'Kholed Langsaree', 'Student', '2');

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
  ADD PRIMARY KEY (`comment_id`);

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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `apps_notification`
--
ALTER TABLE `apps_notification`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
