-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 07:20 PM
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
  `announcement_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(11) NOT NULL,
  `parent_comment_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_topic`, `announcement_detail`, `announcement_date`, `admin_id`, `parent_comment_id`) VALUES
(1, 'Notify the following students ', '<ul>\r\n	<li>submit full Proposal on 19/12/62</li>\r\n	<li>proposal contents as in attachment files in this group.</li>\r\n	<li>Proposal Presentation will be on 25/12/19.</li>\r\n	<li>Proposal should be approve by your advisor before submit on this 19/12/62</li>\r', '2020-01-01 17:00:00', 1, 0),
(2, 'Assalamulaikum Warahmatullah Wabarakatuh', '<p>Dear students who are register for subject IT2301-321 and IT2301-322 with Aj.Sureeluk Ma require to students submit P01 in this coming Sunday 15/12/62, a form in attachment file below</p>\r\n\r\n<p><img alt=\"ไม่มีคำอธิบายรูปภาพ\" src=\"https://scontent.fhdy2', '2020-01-03 17:00:00', 1, 0),
(3, 'Re-announce', '<p>DateLine for Proposal (Softcopy) and Slide Presentation (Softcopy) submit today until 20.00 pm, if not No presentation.&nbsp;</p>\r\n', '2020-01-22 17:00:00', 1, 0);

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
  `chat_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `advisergroup_id` int(20) NOT NULL,
  `member_id` int(20) NOT NULL,
  `committeegroup_id` int(20) NOT NULL,
  `parent_comment_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_content` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `member_id` varchar(200) NOT NULL,
  `group_id` int(20) NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `committeegroup_id` int(20) NOT NULL,
  `form_pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `date`, `member_id`, `group_id`, `advisergroup_id`, `committeegroup_id`, `form_pf`) VALUES
(1, 'Assalamualaikum ', '2020-03-13 17:13:14', 'Nik-Husnee Nik-Uma', 1, 1, 0, '1'),
(2, 'Waalaikummussalm', '2020-03-13 17:13:43', 'Mout  Tylas', 1, 1, 0, '1'),
(6, 'W.slam', '2020-03-13 17:31:17', 'Kholed Langsaree', 0, 1, 0, '1'),
(7, 'tttttttttt', '2020-03-13 17:33:01', 'Kholed Langsaree', 0, 1, 0, '1'),
(8, 'hi i am hunafah', '2020-03-13 17:35:50', 'Hunafah', 2, 2, 0, '1'),
(9, 'i am advisor', '2020-03-13 17:36:13', 'Kholed Langsaree', 0, 2, 0, '1'),
(10, 'i am nureeta', '2020-03-13 17:37:54', 'Nureeta Yayo', 2, 2, 0, '1'),
(11, 'Are u ok', '2020-03-13 17:46:50', 'Nureeta Yayo', 2, 2, 0, '1'),
(15, 'I stay at taba', '2020-03-13 17:56:08', 'Nureeta Yayo', 2, 2, 0, '2'),
(16, 'nik', '2020-03-13 17:57:37', 'Nik-Husnee Nik-Uma', 1, 1, 0, '2'),
(18, 'i am nani', '2020-03-13 18:13:02', 'Rusnanee Utea', 0, 2, 0, '2'),
(19, 'Are u ok', '2020-03-13 18:14:18', 'Rusnanee Utea', 0, 1, 0, '2'),
(20, 'test1', '2020-03-13 18:17:47', 'Nik-Husnee Nik-Uma', 1, 1, 0, '3'),
(21, 'jaaaaaaaaaaa', '2020-03-13 18:18:30', 'Mout  Tylas', 1, 1, 0, '3');

-- --------------------------------------------------------

--
-- Table structure for table `committeegroup`
--

CREATE TABLE `committeegroup` (
  `committeegroup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `group_id` int(11) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `status_presentation` enum('','Pass','No') NOT NULL,
  `comment_project` varchar(5000) NOT NULL,
  `status_project` enum('','Pass','No') NOT NULL,
  `comment_file` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `advisergroup_id`, `group_id`, `comment`, `status_presentation`, `comment_project`, `status_project`, `comment_file`) VALUES
(1, 14, 1, 1, 'Congra..', 'Pass', 'ttt', 'Pass', ''),
(10, 33, 1, 1, 'pass', 'Pass', 'pass', 'Pass', ''),
(11, 8, 6, 6, 'Done', 'Pass', '', '', ''),
(12, 18, 6, 6, 'finish', 'Pass', '', '', ''),
(13, 19, 4, 4, 'great', 'Pass', 'pass', 'Pass', ''),
(14, 29, 4, 4, 'good', 'Pass', 'well', 'Pass', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `files_status` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor01',
  `by_officer` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_officer02',
  `status_advisor` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor03',
  `by_advisor04` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer05` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor06` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor07` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor08` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer09` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor10` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor11` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor12` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer13` enum('','Pass','No') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`files_id`, `Owner`, `files_filename_proposal`, `files_filename_project`, `advisergroup_id`, `files_status`, `by_officer`, `status_advisor`, `by_advisor04`, `pf`, `by_officer05`, `by_advisor06`, `by_advisor07`, `by_advisor08`, `by_officer09`, `by_advisor10`, `by_advisor11`, `by_advisor12`, `by_officer13`) VALUES
(1, '572431003 Nik-Husnee Nik-Uma572431029 Mout  Tylas', '1580195519-1579015325-Proposal (1).pdf', 'PF08 - IT Project - Adviser Project Approval Letter.pdf', '1', 'Approve', 'Approve', 'Pass', 'Pass', '10', 'Pass', 'Pass', 'Pass', 'Pass', 'Approve', 'Pass', '', '', ''),
(2, '571386628 Anur Smile571431031 Asri Yaee', 'PF02 - IT Project - Officer recieve copy of Project Proposal.pdf', 'ฟิกฮอัลอิบาดัค-1.pdf', '6', 'Approve', 'Approve', 'Pass', 'Pass', '9', 'Pass', 'Pass', 'Pass', 'Pass', 'Approve', '', '', '', ''),
(3, '572431011 Miskah Kasengteuba572431021 Afifah mamat', 'last use case.pdf', 'ฟิกฮอัลอิบาดัค-1.pdf', '4', 'Approve', 'Approve', 'Pass', 'Pass', '10', 'Pass', 'Pass', 'Pass', 'Pass', 'Approve', 'Pass', '', '', ''),
(4, '66 Hunafah', 'PF06 - IT Project - Consultation Log Book.pdf', '', '2', 'Approve', '', '', '', '1', '', '', '', '', '', '', '', '', '');

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
  `member_firstname` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_lastname` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_birthday` int(20) NOT NULL,
  `member_years` int(20) NOT NULL,
  `member_address` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_major` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_faculty` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_name_prefix` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `admin_id` int(20) NOT NULL COMMENT 'Foreign Key to tb_admin',
  `group_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_idcard`, `member_username`, `member_fullname`, `member_password`, `member_pos`, `member_phone`, `member_email`, `member_gender`, `member_firstname`, `member_lastname`, `member_birthday`, `member_years`, `member_address`, `member_major`, `member_faculty`, `member_name_prefix`, `admin_id`, `group_id`) VALUES
(3, 572431009, 'Han', 'Norihan Ha', '1234', 'Student', '0747346826', 'han@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 5),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '075683633', 'misk@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 4),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '0856658897', 'win@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 5),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '245764', 'sunee@gmailcom', 'Female', '', '', 0, 0, '', '', '', '', 1, 3),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '33442233', 'ni@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', 'Lecturer', '0857638634', 'kholed@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Lecturer', '0856375367', 'husna@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '1234', 'Officer', '08567637858', 'nani@gmail.com', 'Female', 'Rusnanee', 'lead', 30, 0, 'kkk66', 'ff', 'ff', 'Mr.', 1, NULL),
(13, 57378, 'Anas', 'Busree Hasa', '1234', 'Student', '0986382', 'anas@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(14, 462444, 'fatah', 'Abdulfatah Masamae', '123', 'Lecturer', '35664', 'male@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', 'Student', '22', 's@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 2),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', 'Student', '083171632', 'yah@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 4),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '0842148244', 'murni@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 3),
(18, 572294, 'da', 'suaida', '1234', 'Lecturer', '058679875', 'gg@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(19, 57231002, 'Mafaisu', '', '1234', 'Lecturer', '083186321', 'Hafizah@gnail.com', 'Female', 'Mafaisu', 'chema', 30, 6, '11 m.1', 'it', 'scient', 'Mr.', 1, NULL),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '07436847', 'wa@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, 6),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '098462734', 'bah@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(23, 574398, 'siti', 'Sitisulaiko', '1234', 'Student', '0496353', 'ti@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(25, 345565, 'Hanani', 'Hanani Dalor', '1234', 'Student', '0876793', 'advisorfst123@gmail.com\r\n', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(29, 12345678, 'Ib', 'Ibtisam', '1234', 'Lecturer', '0974356678', 'ib@gmail.com', 'Female', 'Ibtisam', 'Mahama', 30, 4, '111/2 m.1 Narathiwat', 'it', 'sci', 'mr', 1, NULL),
(30, 572431021, 'ta', 'Nureeta Yayo', '1234', 'Student', '0487759', 'bee@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 2),
(33, 332, 'huda', 'Norhuda', '1234', 'Lecturer', '87467', 'da@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '0833749', 'ri@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, 6),
(41, 2018384565, 'Anas', 'Anas tawallbh', 'Anas', 'Lecturer', '0984712884', 'Anas123@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(43, 572431003, 'husnee', 'Nik-Husnee Nik-Uma', '1234', 'Student', '0831863523', 'itpromo123@gmail.com', 'Female', 'Nik', 'uma', 30, 5, 'sss2', 'gg', 'gg', 'Ms.', 1, 1),
(44, 572431029, 'Tylas', 'Mout  Tylas', '1234', 'Student', '0824764593', 'tylasmoeut143@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 1),
(45, 2147483647, 'Maroning', 'Maroning ftu', '123', 'Lecturer', '0867433784', 'maroning@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(46, 75639890, 'fausan', 'Fausan Mapa', '123', 'Lecturer', '086372691', 'fausan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(47, 572424030, 'Sanas ', 'San Sanas ', '1234', 'Student', '0937161092', 'sanas@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, NULL),
(48, 572424030, 'Sanas ', 'San Sanas ', '1234', 'Student', '0937161092', 'sanas@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, NULL),
(49, 555555555, 'ty', 'tyty', '1234', 'Student', '0999999999', 'tyty@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, NULL),
(50, 555555555, 'vvv', 'vvvvvv', '1234', 'Student', '0987463728', 'vyvy@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, NULL),
(51, 5555555, 'dggfgg', 'asgdgdh', '12334', 'Student', '0984377214', 'asfg@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, NULL),
(52, 4536437, 'dsgf', 'hhhgs', '12345', 'Student', '1298784126', 'tyty@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_topic`
--

CREATE TABLE `news_topic` (
  `news_id` int(11) NOT NULL,
  `news_topic` varchar(255) NOT NULL,
  `news_detail` varchar(255) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `member_id` int(11) NOT NULL,
  `parent_comment_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_topic`
--

INSERT INTO `news_topic` (`news_id`, `news_topic`, `news_detail`, `news_date`, `member_id`, `parent_comment_id`) VALUES
(1, 'PROPOSAL P', '<p>Proposal Report and P02 submit dateline: Monday 6 Jan 2020</p>\r\n\r\n<p>Proposal Presentation will be on Wednesday 8 Jan 2020</p>\r\n', '2020-01-15 17:00:00', 8, 0),
(2, 'Topic  of ', '<p>Moc project</p>\r\n\r\n<p>Smart pay</p>\r\n\r\n<p>Who interes can contact me</p>\r\n\r\n<p>tel:0818515312</p>\r\n', '2020-01-14 17:00:00', 8, 0),
(3, 'Topic of  ', '<p>The teacher has a final project about transportation. Contact us at the office.</p>\r\n', '2020-01-15 17:00:00', 11, 0),
(9, 'hhhhh', ' hhhhhh', '2020-03-12 10:52:56', 43, 1),
(10, 'hed', ' red', '2020-03-12 10:56:30', 43, 2),
(11, 'uuuu', ' uuuuuuuuu', '2020-03-12 10:58:41', 43, 1),
(12, 'whay', 'kkkk ', '2020-03-12 11:01:01', 4, 1),
(13, 'gg', ' gg', '2020-03-12 11:15:57', 43, 1),
(14, 'yy', ' yy', '2020-03-12 11:18:47', 43, 1),
(15, 'how are u', 'i am ok ', '2020-03-12 11:59:44', 44, 1),
(16, 'oooo', 'oooo ', '2020-03-12 12:05:59', 16, 1),
(17, 'deddd', ' ddd', '2020-03-13 07:42:44', 43, 2),
(20, 'yyyyy', ' yyyyyyy', '2020-03-13 09:12:41', 8, 3),
(21, 'no', ' nooo', '2020-03-13 09:14:32', 43, 3),
(22, 'ok', 'ok ', '2020-03-13 09:25:54', 11, 3),
(24, 'test', ' tesrrrrrrr', '2020-03-13 14:31:05', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `subject` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `comment`, `status`, `subject`, `date`) VALUES
(17, 'tttttttttttttttttttttt', 1, 'tttttt', '2020-03-04 18:56:12'),
(18, 'eafeeeeeeeeee', 1, 'dsfsfr', '2020-03-04 18:56:12'),
(19, 'koko', 1, 'Hi', '2020-03-04 18:56:12'),
(20, 'how ae you', 1, 'hi', '2020-03-04 18:59:13'),
(21, 'xxxxxxxxxxxx', 1, 'xxxxxxxx', '2020-03-04 19:00:03'),
(22, 'travrl', 1, 'go', '2020-03-04 19:01:27');

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
(1, 'present', '1', '  it-221', '00:00:00', '2020-03-19', '30%', 12, 1),
(2, 'pre', '2', 'it-33', '02:01:00', '2020-11-02', '100%', 12, 1),
(3, 'pre', '1', 'it-22', '03:01:00', '2020-03-25', '50%', 1, 6),
(4, 'present', '2', 'it-333', '14:01:00', '2020-03-19', '100%', 12, 6),
(5, 'pre', '1', 'it-022', '00:00:00', '2020-03-18', '30%', 1, 4),
(6, 'pre', '2', '    it-221', '11:01:00', '2020-03-17', '90%', 12, 4);

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
(1, 'PS10001', '<p>572431003 &nbsp&nbsp&nbsp&nbsp Nik-Husnee Nik-Uma</p><p>572431029 &nbsp&nbsp&nbsp&nbsp Mout  Tylas</p>', 'It project monitoring and tracking', '  In most of the curriculum in information technology (IT) undergraduate program, it is common that students are expected to complete the Information Technology Project Course (IT Project) in their final year studies. That is also why it is usually known as a final year project (FYP). The Information Technology project course (IT Project), is a kind of activity course that gives opportunities to students. This course-based study aims to provide integrated training on their team working skills, technical knowledge learned from different courses, and project management skills. The students studied, researched and practiced by themselves according to their abilities, aptitudes, and interests.   ', 'Tracking ,Monitor', 'Software Engineering', '2020-03-06', 1, 'Kholed Langsaree', 'Student', '3'),
(2, 'PS10006', '<p>571386628 &nbsp&nbsp&nbsp&nbsp Anur Smile</p><p>571431031 &nbsp&nbsp&nbsp&nbsp Asri Yaee</p>', 'FTU Cooperative Education,Industrial Training', 'The self-study lessons in this section are written and organised according to the levels of the Common European Framework of Reference for languages (CEFR). The videos and interactive exercises help you to practise your speaking skills.', 'section', 'Computer Networking', '2020-03-17', 6, 'Fausan Mapa', 'Student', '1'),
(3, 'PS10004', '<p>572431011 &nbsp&nbsp&nbsp&nbsp Miskah Kasengteuba</p><p>572431021 &nbsp&nbsp&nbsp&nbsp Afifah mamat</p>', 'Math Game', '  An abstract is a brief summary of a research article, thesis, review, conference proceeding, or any in-depth analysis ', 'Application', 'Computer Multimedia', '2020-03-25', 4, 'suaida', 'Student', '1'),
(5, 'PS10002', '<h6>66 &nbsp&nbsp&nbsp&nbsp Hunafah</h6>', 'Smart Rang Hood', '  Kitchen range hoods are important for ventilation, removal of odor and air impurities, and keeping your kitchen clean and free from lousy smoke. You can upscale designer ', 'Sensory', 'Computer Networking', '2020-03-10', 2, 'Kholed Langsaree', 'Student', '1');

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
  ADD PRIMARY KEY (`announcement_id`);

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
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
