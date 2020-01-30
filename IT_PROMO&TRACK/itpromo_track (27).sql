-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 06:17 PM
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
(1, 'It project monitoring and tracking', 'Approve', 8, 1, '1'),
(2, 'Smart Rang Hood', 'Approve', 8, 2, '1'),
(3, 'Houseware repair', 'Approve', 33, 3, '1'),
(4, 'Math Game', 'Approve', 18, 4, '1'),
(5, 'Provide in Islam', 'Approve', 11, 5, '1'),
(6, 'FTU Cooperative Education,Industrial Training', 'Approve', 46, 6, '1');

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
(3, 'Re-announce', '<p>DateLine for Proposal (Softcopy) and Slide Presentation (Softcopy) submit today until 20.00 pm, if not No presentation.&nbsp;</p>\r\n', '2020-01-23', 1);

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
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps_notification`
--

INSERT INTO `apps_notification` (`msg_id`, `member_token`, `msg_text`, `topic_text`, `msg_status`, `timestamp`, `member_id`) VALUES
(1, '', 'Hi My name is Nik-Husnee Nik-Uma\r\nMy partner is Tylas', '', 0, '2020-01-15 16:52:58', 11),
(2, '', 'kkkkkkkkkkk', '', 0, '2020-01-15 17:16:54', 1),
(3, '', '????????? ?????', '', 0, '2020-01-15 17:44:54', 1),
(4, '', 'Hi Everyone\r\nHow are u', '', 0, '2020-01-30 17:16:59', 1);

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
  `group_id` int(11) NOT NULL,
  `status_presentation` enum('','Pass','No') NOT NULL,
  `comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `group_id`, `status_presentation`, `comment`) VALUES
(1, 14, 1, 'Pass', 'Congratulation '),
(2, 33, 1, '', ''),
(3, 45, 1, 'Pass', 'Great You are the best'),
(4, 11, 3, '', ''),
(5, 29, 3, '', ''),
(6, 18, 3, '', ''),
(7, 41, 2, '', ''),
(8, 46, 2, '', ''),
(9, 11, 4, '', ''),
(10, 18, 4, '', ''),
(11, 19, 4, '', ''),
(12, 29, 4, '', ''),
(13, 18, 1, '', ''),
(14, 8, 6, '', ''),
(15, 45, 6, 'Pass', 'Greate ... Graduate'),
(16, 41, 6, '', ''),
(17, 19, 5, '', ''),
(18, 11, 5, '', ''),
(19, 18, 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `proposal_revision` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `files_status` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pf` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_ci NOT NULL,
  `status_advisor` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`files_id`, `files_filename_proposal`, `files_filename_project`, `proposal_revision`, `advisergroup_id`, `files_status`, `by_officer`, `Owner`, `pf`, `status_advisor`) VALUES
(1, '1580400891-personalassesment.pdf', '', '', '6', 'Approve', 'Approve', '571386628 Anur Smile571431031 Asri Yaee', '3', 'Pass'),
(2, '1580402049-1577846542-Project.pdf', '', '', '1', 'Approve', 'Approve', '572431003 Nik-Husnee Nik-Uma572431029 Mout  Tylas', '3', 'Pass'),
(3, '1580402092-HousewaresRepairingWebapp.pdf', '', '', '3', 'Approve', 'Approve', '572431016 Sunee Kasem572431923 ilham', '2', ''),
(4, '1580402186-บท1-3.pdf', '', '', '5', 'Approve', 'Approve', '572431009 Norihan Ha572431014 Wilada Yalaphanee', '2', ''),
(5, '1580403023-last2.pdf', '', '', '4', 'Approve', 'Approve', '572431011 Miskah Kasengteuba572431021 Afifah mamat', '2', '');

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
(2, 572431005, 'Ida', 'Nur-ida Che-loh', '1234', 'Student', '08535935', 'ida@gmail.com', 'Female', 1, 2),
(3, 572431009, 'Han', 'Norihan Ha', '1234', 'Student', '0747346826', 'han@gmail.com', 'Female', 1, 5),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '075683633', 'misk@gmail.com', 'Female', 1, 4),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '0856658897', 'win@gmail.com', 'Female', 1, 5),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '245764', 'sunee@gmailcom', 'Female', 1, 3),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '33442233', 'ni@gmail.com', 'Female', 1, NULL),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', 'Lecturer', '0857638634', 'kholed@gmail.com', 'Male', 1, NULL),
(9, 572431001, 'Adam', 'Sarawut Rakchat', '1234', 'Student', '0847183624', 'husna@gmail.com', 'Male', 1, NULL),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Lecturer', '0856375367', 'husna@gmail.com', 'Female', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '123', 'Officer', '08567637858', 'nani@gmail.com', 'Female', 1, NULL),
(13, 57378, 'Anas', 'Busree Hasa', '1234', 'Student', '0986382', 'anas@gmail.com', 'Male', 1, NULL),
(14, 462444, 'fatah', 'Abdulfatah Masamae', '123', 'Lecturer', '35664', 'male@gmail.com', 'Male', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', 'Student', '22', 's@gmail.com', 'Female', 1, 2),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', 'Student', '083171632', 'yah@gmail.com', 'Female', 1, 4),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '0842148244', 'murni@gmail.com', 'Female', 1, 3),
(18, 572294, 'da', 'suaida', '1234', 'Lecturer', '058679875', 'gg@gmail.com', 'Female', 1, NULL),
(19, 57231002, 'Mafaisu', 'Mafaisu', '1234', 'Lecturer', '083186321', 'Hafizah@gnail.com', 'Male', 1, NULL),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '07436847', 'wa@gmail.com', 'Male', 1, 6),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '098462734', 'bah@gmail.com', 'Female', 0, NULL),
(23, 574398, 'siti', 'Sitisulaiko', '1234', 'Student', '0496353', 'ti@gmail.com', 'Female', 0, NULL),
(24, 608565, 'Ya', 'Nadia', '1234', 'Student', '08762743', 'ya@gmail.com', 'Female', 0, NULL),
(25, 345565, 'Hanani', 'Hanani Dalor', '1234', 'Student', '0876793', 'advisorfst123@gmail.com\r\n', 'Female', 1, NULL),
(27, 649700, 'la', 'nuzula', '1234', 'Student', '09864899', 'itpromo123@gmail.com\r\n', 'Female', 1, NULL),
(28, 32435, 'lah', 'Kiflah', '1234', 'Student', '0974624', 'lah@gmail.com', 'Female', 1, NULL),
(29, 12345678, 'Ib', 'Ibtisam', '1234', 'Lecturer', '0974356678', 'ib@gmail.com', 'Female', 1, NULL),
(30, 572431021, 'ta', 'Nureeta Yayo', '1234', 'Student', '0487759', 'bee@gmail.com', 'Female', 1, NULL),
(33, 332, 'huda', 'Norhuda', '1234', 'Lecturer', '87467', 'da@gmail.com', 'Female', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '0833749', 'ri@gmail.com', 'Male', 1, 6),
(41, 2018384565, 'Anas', 'Anas tawallbh', 'Anas', 'Lecturer', '0984712884', 'Anas123@gmail.com', 'Male', 1, NULL),
(42, 44, 'vv', 'bb', '1234', 'Student', '086543333', 'nngmail.com', 'Female', 0, NULL),
(43, 572431003, 'husnee', 'Nik-Husnee Nik-Uma', '1234', 'Student', '0831863523', 'itpromo123@gmail.com', 'Female', 1, 1),
(44, 572431029, 'Tylas', 'Mout  Tylas', '1234', 'Student', '0824764593', 'tylasmoeut143@gmail.com', 'Female', 1, 1),
(45, 2147483647, 'Maroning', 'Maroning ftu', '123', 'Lecturer', '0867433784', 'maroning@gmail.com', 'Male', 1, NULL),
(46, 75639890, 'fausan', 'Fausan Mapa', '123', 'Lecturer', '086372691', 'fausan@gmail.com', 'Male', 1, NULL);

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

--
-- Dumping data for table `news_topic`
--

INSERT INTO `news_topic` (`news_id`, `news_topic`, `news_detail`, `news_date`, `member_id`) VALUES
(1, 'PROPOSAL P', '<p>Proposal Report and P02 submit dateline: Monday 6 Jan 2020</p>\r\n\r\n<p>Proposal Presentation will be on Wednesday 8 Jan 2020</p>\r\n', '2020-01-16', 8),
(2, 'Topic  of ', '<p>Moc project</p>\r\n\r\n<p>Smart pay</p>\r\n\r\n<p>Who interes can contact me</p>\r\n\r\n<p>tel:0818515312</p>\r\n', '2020-01-15', 8),
(3, 'Topic of  ', '<p>The teacher has a final project about transportation. Contact us at the office.</p>\r\n', '2020-01-16', 11);

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
(1, 'PS10001'),
(2, 'PS10002'),
(3, 'PS10003'),
(4, 'PS10004'),
(5, 'PS10005'),
(6, 'PS10006');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `schedule_type` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Proposal,2=Project',
  `schedule_room` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_status` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `writer` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_topic`, `schedule_type`, `schedule_room`, `schedule_time`, `schedule_date`, `schedule_status`, `writer`, `group_id`) VALUES
(1, 'Fisrt Presentation', '1', 'IT-123', '10:00:00', '2020-02-05', 'Proposal', 12, 1),
(2, 'Fisrt Presentation', '1', 'IT-121', '09:00:00', '2020-02-05', 'Proposal', 12, 2),
(3, 'Fisrt Presentation', '1', 'IT-324', '23:01:00', '2020-02-05', 'Proposal', 12, 3),
(4, 'Fisrt Presentation', '1', 'IT-432', '00:10:00', '2020-02-05', 'Proposal', 12, 4),
(5, 'Fisrt Presentation', '1', 'IT-235', '05:01:00', '2020-02-05', 'Proposal', 12, 6);

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
(1, 'PS10001', '<p>572431003 &nbsp&nbsp&nbsp&nbsp Nik-Husnee Nik-Uma</p><p>572431029 &nbsp&nbsp&nbsp&nbsp Mout  Tylas</p>', 'It project monitoring and tracking', 'IT Project Monitoring and Tracking System is developed for IT department of faculty Science and Technology to provide for student and lecturer to track', 'Tracking ,Monitor', 'Software Engineering', '2020-01-29', 1, 'Kholed Langsaree', 'Student', '1'),
(2, 'PS10003', '<p>572431016 &nbsp&nbsp&nbsp&nbsp Sunee Kasem</p><p>572431923 &nbsp&nbsp&nbsp&nbsp ilham</p>', 'Houseware repair', 'Rancang Bangun Sistem Pengamatan Lingkungan Menggunakan Wireless Sensor Network berbasis nRF24L01 Terdistribusi dengan Layanan Dashboard untuk Visualisasi Data Pengamatan Secara Real Time', 'Application,Smart', 'Computer Networking', '2020-01-24', 3, 'Norhuda', 'Student', '1'),
(3, 'PS10002', '<p>572431005 &nbsp&nbsp&nbsp&nbsp Nur-ida Che-loh</p><p>66 &nbsp&nbsp&nbsp&nbsp Hunafah</p>', 'Smart Rang Hood', 'Wireless Sensor Network berbasis nRF24L01 Terdistribusi dengan Layanan Dashboard untuk Visualisasi Data Pengamatan Secara Real Time', 'Network', 'Software Engineering', '2020-01-15', 2, 'Kholed Langsaree', 'Student', '1'),
(4, 'PS10004', '<p>572431011 &nbsp&nbsp&nbsp&nbsp Miskah Kasengteuba</p><p>572431021 &nbsp&nbsp&nbsp&nbsp Afifah mamat</p>', 'Math Game', 'Engage Elementary Kids with Fun, Team Based STEM Activities Free Download, Upload Score to See Local State National World Rankings Engage your Students Online Competition Low Cost Supplies Free Activity', 'Math,Calculator', 'Computer Multimedia', '2020-01-18', 4, 'suaida', 'Student', '2'),
(5, 'PS20010', '562431003 Awatif Mareh\r\n562431008 Sawana Mamu\r\n', 'Activity Application', 'Top and latest apps available! Millions have downloaded, have you? Reliable reviews Everything you need Recommended for you Android devices only Wide variety Types: Music Apps, Messaging Apps, Game Apps, Utility Apps, Lifestyle Apps', 'Application,Card', 'Software Engineering', '2018-01-28', 0, '19', 'Admin', '6'),
(6, 'PS10005', '<p>572431009 &nbsp&nbsp&nbsp&nbsp Norihan Ha</p><p>572431014 &nbsp&nbsp&nbsp&nbsp Wilada Yalaphanee</p>', 'Provide in Islam', 'Provide of islam Applications', 'App', 'Computer Multimedia', '2020-01-24', 5, 'Nurulhusna', 'Student', '1'),
(7, 'PS10006', '<p>571386628 &nbsp&nbsp&nbsp&nbsp Anur Smile</p><p>571431031 &nbsp&nbsp&nbsp&nbsp Asri Yaee</p>', 'FTU Cooperative Education,Industrial Training', 'Industrial Training refers to a program which aims to provide supervised practical training within a specified timeframe. This training can be carried out either', 'Industrial Training', 'Computer Multimedia', '2020-01-18', 6, 'Fausan Mapa', 'Student', '2');

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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apps_notification`
--
ALTER TABLE `apps_notification`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
