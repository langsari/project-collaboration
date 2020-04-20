-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 04:42 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
(3, 'Provide in Islam', 'Waiting', 11, 7, '1'),
(4, 'Houseware repair', 'Approve', 33, 4, '1'),
(5, 'Testing ', 'Approve', 8, 8, '1');

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
(1, '  Notify the following students    ', ' <ul>\r\n	<li>submit full Proposal on 19/12/63</li>\r\n	<li>proposal contents as in attachment files in this group.</li>\r\n	<li>Proposal Presentation will be on 25/12/19.</li>\r\n	<li>Proposal should be approve by your advisor before submit on this 19/12/62</li>', '2020-01-01 17:00:00', 1, 0),
(2, 'Assalamulaikum Warahmatullah Wabarakatuh', '<p>Dear students who are register for subject IT2301-321 and IT2301-322 with Aj.Sureeluk Ma require to students submit P01 in this coming Sunday 15/12/62, a form in attachment file below</p>\r\n\r\n', '2020-04-15 06:32:23', 1, 0),
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
  `form_pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `date`, `member_id`, `group_id`, `advisergroup_id`, `form_pf`) VALUES
(1, 'Assalamualaikum', '2020-03-15 08:38:55', 'Nik-Husnee Nik-Uma', 1, 1, '1'),
(2, 'Waalaikummusalm', '2020-03-15 08:39:20', 'Kholed Langsaree', 0, 1, '1'),
(3, 'Hi', '2020-03-15 15:44:21', 'Kholed Langsaree', 0, 1, '3'),
(4, 'Hellow', '2020-03-15 15:44:37', 'Nik-Husnee Nik-Uma', 1, 1, '3'),
(6, '	\r\nI am a comittee', '2020-03-15 16:13:45', 'Abdulfatah Masamae', 0, 1, '3'),
(7, 'oooooo', '2020-03-15 16:15:41', 'Abdulfatah Masamae', 0, 1, '3'),
(8, 'I am too', '2020-03-15 16:48:20', 'Norhuda', 0, 1, '3'),
(9, 'yes', '2020-03-15 16:52:58', 'Kholed Langsaree', 0, 1, '3'),
(11, 'hi i am nani', '2020-03-15 17:47:27', 'Rusnanee Utea', 0, 4, '2'),
(12, 'hellow', '2020-03-15 18:07:20', 'Rusnanee Utea', 0, 1, '2'),
(13, 'hi', '2020-03-15 18:07:41', 'Nik-Husnee Nik-Uma', 1, 1, '2'),
(14, 'Hi i am officer', '2020-03-15 18:15:39', 'Rusnanee Utea', 0, 1, '5'),
(15, 'yes i khow ชันรู้จักคุณ', '2020-03-15 18:16:00', 'Nik-Husnee Nik-Uma', 1, 1, '5'),
(16, 'ok', '2020-03-15 18:28:42', 'Nik-Husnee Nik-Uma', 1, 1, '6'),
(17, 'i am a advisor', '2020-03-15 18:32:06', 'Kholed Langsaree', 0, 1, '7'),
(18, 'i alread submit', '2020-03-15 18:33:38', 'Nik-Husnee Nik-Uma', 1, 1, '8'),
(19, 'ok i alread get it', '2020-03-15 18:41:29', 'Kholed Langsaree', 0, 1, '8'),
(20, 'thank', '2020-03-15 19:00:39', 'Nik-Husnee Nik-Uma', 1, 1, '9'),
(21, 'nvm', '2020-03-15 19:03:41', 'Rusnanee Utea', 0, 1, '9'),
(22, 'hi pf10', '2020-03-15 19:31:19', 'Abdulfatah Masamae', 0, 1, '10'),
(23, 'yes 10', '2020-03-15 19:32:29', 'Kholed Langsaree', 0, 1, '10'),
(24, 'good', '2020-03-15 19:44:12', 'Kholed Langsaree', 0, 1, '10'),
(25, '*_*', '2020-03-15 19:44:52', 'Mout  Tylas', 1, 1, '10'),
(26, 'ok', '2020-03-15 19:45:15', 'Norhuda', 0, 1, '10');

-- --------------------------------------------------------

--
-- Table structure for table `committeegroup`
--

CREATE TABLE `committeegroup` (
  `committeegroup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status_presentation` enum('0','Waiting','Pass','No') NOT NULL,
  `status_project` enum('0','Waiting','Pass','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `group_id`, `status_presentation`, `status_project`) VALUES
(2, 14, 1, '', 'Pass'),
(3, 46, 2, '', ''),
(4, 41, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complete_project` varchar(255) CHARACTER SET utf8 NOT NULL,
  `advisergroup_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `head_of_depart` enum('','Pass') CHARACTER SET utf8 NOT NULL,
  `dean` enum('','Pass') CHARACTER SET utf8 NOT NULL,
  `files_status` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor01',
  `by_officer` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_officer02',
  `status_advisor` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor03',
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

INSERT INTO `files` (`files_id`, `Owner`, `files_filename_proposal`, `files_filename_project`, `complete_project`, `advisergroup_id`, `head_of_depart`, `dean`, `files_status`, `by_officer`, `status_advisor`, `by_advisor04`, `pf`, `by_officer05`, `by_advisor06`, `by_advisor07`, `by_advisor08`, `by_officer09`, `by_advisor10`, `by_advisor11`, `by_advisor12`, `by_officer13`) VALUES
(1, '572431003 Nik-Husnee Nik-Uma572431029 Mout  Tylas', 'โครงสร้างรายวิชา-หน่วยย่อยและแผน.pdf', 'Mardiyah-Mamat.pdf', '', '1', '', '', 'Approve', 'Approve', 'Pass', 'Pass', '5', 'Pass', 'Pass', 'Pass', 'Pass', 'Approve', 'Pass', '', '', ''),
(2, '572431019 Hunafah572431005 Nur-ida', 'last use case (1).pdf', '', '', '2', '', '', 'Approve', 'Approve', 'Waiting', '', '2', '', '', '', '', '', '', '', '', ''),
(3, '572431016 Sunee Kasem572431923 ilham', 'Housewares Repairing Webapp.pdf', '', '', '4', '', '', 'Approve', 'Approve', '', '', '2', '', '', '', '', '', '', '', '', ''),
(4, '581412060 Naseat', 'ITPromot 3chapter.pdf', '', '', '5', '', '', 'Approve', '', '', '', '1', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL,
  `pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') NOT NULL,
  `form_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `pf`, `form_mark`) VALUES
(1, '1', 5),
(2, '2', 5),
(3, '3', 10),
(4, '4', 5),
(5, '5', 7),
(6, '6', 8),
(7, '7', 10),
(8, '8', 10),
(9, '9', 10),
(10, '10', 8),
(11, '11', 7),
(12, '12', 10),
(13, '13', 5);

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
(3, 572431009, 'Han', 'Norihan Ha', '1234', 'Student', '0747346826', 'han@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, 7),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '075683633', 'misk@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 0, 3),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '0856658897', 'win@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 7),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '0995026587', 'sunee@gmailcom', 'Female', '', '', 0, 0, '', '', '', '', 1, 4),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '0980725640', 'ni@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 5),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', 'Lecturer', '0857638634', 'kholed@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Lecturer', '0856375367', 'husna@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '1234', 'Officer', '08567637858', 'nani@gmail.com', 'Female', 'Rusnanee', 'lead', 30, 0, 'Thailand', 'ff', 'ff', 'Ms.', 1, NULL),
(14, 462444, 'fatah', 'Abdulfatah Masamae', '123', 'Lecturer', '0891120118', 'male@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '0842148244', 'murni@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 4),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '07436847', 'wa@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '098462734', 'bah@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(25, 345565, 'Hanani', 'Hanani Dalor', '1234', 'Student', '0876793', 'advisorfst123@gmail.com\r\n', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(29, 12345678, 'Ib', 'Ibtisam', '1234', 'Lecturer', '0974356678', 'ib@gmail.com', 'Female', 'Ibtisam', 'Mahama', 30, 4, '111/2 m.1 Narathiwat', 'it', 'sci', 'mr', 1, NULL),
(30, 572431021, 'ta', 'Nureeta Yayo', '1234', 'Student', '0487759', 'bee@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 6),
(33, 332, 'huda', 'Norhuda', '1234', 'Lecturer', '87467', 'da@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '0833749', 'ri@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(41, 2018384565, 'Anas', 'Anas tawallbh', 'Anas', 'Lecturer', '0984712884', 'Anas123@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(43, 572431003, 'husnee', 'Nik-Husnee Nik-Uma', '1234', 'Student', '0831863523', 'itpromo123@gmail.com', 'Female', 'Nik', 'uma', 30, 5, 'sss2', 'gg', 'gg', 'Ms.', 1, 1),
(44, 572431029, 'Tylas', 'Mout  Tylas', '1234', 'Student', '0824764593', 'tylasmoeut143@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 1),
(45, 2147483647, 'Maroning', 'Maroning ftu', '123', 'Lecturer', '0867433784', 'maroning@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(46, 75639890, 'fausan', 'Fausan Mapa', '123', 'Lecturer', '086372691', 'fausan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(53, 572431005, 'ida', 'Nur-ida', '1234', 'Student', '', 'ida@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 2),
(54, 581412060, 'seat', 'Naseat', '1234', 'Student', '0937161092', 'seat@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `news_topic`
--

CREATE TABLE `news_topic` (
  `news_id` int(11) NOT NULL,
  `news_topic` varchar(255) NOT NULL,
  `news_detail` varchar(5000) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `member_id` int(11) NOT NULL,
  `parent_comment_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_topic`
--

INSERT INTO `news_topic` (`news_id`, `news_topic`, `news_detail`, `news_date`, `member_id`, `parent_comment_id`) VALUES
(25, 'Assalamulaikum Warahmatullah Wabarakatuh', ' To my dear students who are going to do the final project. \r\nI have some topics for who are interesting to do in filed of programming.These topics may become the closest as you are a student. \r\ncontact me for more information. ', '2020-04-15 06:45:50', 8, 0),
(29, 'Assalamoalaikum', ' I am Tylas \r\nI want this topic', '2020-04-15 07:10:47', 44, 25),
(30, 'Waalaikumosalam', ' Aj \r\nI am Nik Husnee \r\nHow can you brief us the detail?\r\nWhat is about? ', '2020-04-15 07:17:41', 43, 25);

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
(22, 'travrl', 1, 'go', '2020-03-04 19:01:27'),
(25, '\r\n          asvdfbdfd', 1, 'sdafaeg', '2020-03-21 15:13:33'),
(26, 'All students please submit 3 chapters within this week \r\n          ', 0, 'Submit 3 chpater', '2020-03-21 15:37:26');

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
(6, 'PS10006'),
(7, 'PS10007'),
(8, 'SH001');

-- --------------------------------------------------------

--
-- Table structure for table `pf_mark`
--

CREATE TABLE `pf_mark` (
  `id` int(11) NOT NULL,
  `pf1` int(11) NOT NULL,
  `pf2` int(11) NOT NULL,
  `pf3` int(11) NOT NULL,
  `pf4` int(11) NOT NULL,
  `pf5` int(11) NOT NULL,
  `pf6` int(11) NOT NULL,
  `pf7` int(11) NOT NULL,
  `pf8` int(11) NOT NULL,
  `pf9` int(11) NOT NULL,
  `pf10` int(11) NOT NULL,
  `pf11` int(11) NOT NULL,
  `pf12` int(11) NOT NULL,
  `pf13` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pf_mark`
--

INSERT INTO `pf_mark` (`id`, `pf1`, `pf2`, `pf3`, `pf4`, `pf5`, `pf6`, `pf7`, `pf8`, `pf9`, `pf10`, `pf11`, `pf12`, `pf13`) VALUES
(1, 5, 5, 10, 5, 7, 8, 10, 10, 10, 8, 7, 10, 5);

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
  `group_id` int(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_topic`, `schedule_type`, `schedule_room`, `schedule_time`, `schedule_date`, `schedule_status`, `writer`, `group_id`, `status`) VALUES
(1, 'present', '1', '  IT-303', '02:00:00', '2020-03-18', 'Proposal', 1, 1, 0),
(3, 'present', '2', '    IT-303', '02:01:00', '2020-03-10', 'project', 12, 1, 0);

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
(1, 'PS10001', '<h7> <div>572431003 &nbsp&nbsp&nbsp&nbsp Nik-Husnee Nik-Uma</h7></div><h7> <div>572431029 &nbsp&nbsp&nbsp&nbsp Mout  Tylas</h7></div>', 'It project monitoring and tracking', 'In most of the curriculum in information technology (IT) undergraduate program, it is common that students are expected to complete the Information Technology Project Course (IT Project) in their final year studies. That is also why it is usually known as a final year project (FYP). ', 'Tracking ,Monitor', 'Software Engineering', '2020-03-21', 1, 'Kholed Langsaree', 'Student', '3'),
(2, 'PS10002', '<h7> <div>572431019 &nbsp&nbsp&nbsp&nbsp Hunafah</h7></div><h7> <div>572431005 &nbsp&nbsp&nbsp&nbsp Nur-ida</h7></div>', 'Smart Rang Hood', '  In the IT degree program offered in the Faculty of Science and Technology of Fatoni University, the IT project course is delivered throughout 2 semesters in the fourth year of the study. ', 'Application,Automatic.', 'Computer Networking', '2020-04-01', 2, 'Kholed Langsaree', 'Student', '3'),
(3, 'PS10004', '<h7> <div>572431016 &nbsp&nbsp&nbsp&nbsp Sunee Kasem</h7></div><h7> <div>572431923 &nbsp&nbsp&nbsp&nbsp ilham</h7></div>', 'Houseware repair', '  Houseware Hardware Adhesive from Huzhou Guoneng New Material Co., Ltd.. Search High Quality Houseware Hardware Adhesive Manufacturing and Exporting supplier on Alibaba.', 'Repair', 'Computer Multimedia', '2020-03-20', 4, 'Norhuda', 'Student', '3'),
(8, 'SH001', '<h7> <div>581412060 &nbsp&nbsp&nbsp&nbsp Naseat</h7></div>', 'Testing ', ' I want to test ', 'ttttttttttt', 'Software Engineering', '2020-04-01', 5, 'Kholed Langsaree', 'Student', '1');

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
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

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
-- Indexes for table `pf_mark`
--
ALTER TABLE `pf_mark`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pf_mark`
--
ALTER TABLE `pf_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
