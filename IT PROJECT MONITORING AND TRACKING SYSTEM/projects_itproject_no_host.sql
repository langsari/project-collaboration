-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 01:03 AM
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
-- Database: `projects_itproject`
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
(1, 'IT Project Monitoring and Tracking', 'Approve', 30, 1, '1'),
(2, 'Smart Rang Hood', 'Approve', 30, 3, '1'),
(3, 'Sateng Repairing Center', 'Approve', 25, 2, '1'),
(4, 'Provide in Islam', 'Approve', 26, 5, '1');

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
(1, 'Assalamulaikum Warahmatullah Wabarakatuh', ' Dear students who are register for subject IT2301-321 and IT2301-322 with Aj.Sureeluk Ma require to students submit P01 in this coming Sunday 15/12/62, a form in attachment file below', '2020-04-18 10:28:57', 1, 0),
(2, ' Notify the following students ', 'submit full Proposal on 19/12/63\r\nproposal contents as in attachment files in this group.\r\nProposal The Presentation will be on 25/12/19.\r\nThe proposal should be approved by your advisor before submit on this 19/12/62', '2020-04-18 10:31:10', 1, 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'great', '2020-04-23 18:07:55', 'Rusnanee Uma', 0, 1, '2'),
(2, 'Thanks', '2020-04-23 18:08:29', 'Nik-Husnee Nik-Uma', 1, 1, '2'),
(3, 'wff', '2020-04-26 17:48:59', 'Nik-Husnee Nik-Uma', 1, 1, '3'),
(4, 'ffff', '2020-04-26 17:49:21', 'Norhuda Masamae', 0, 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `committeegroup`
--

CREATE TABLE `committeegroup` (
  `committeegroup_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status_presentation` enum('0','Waiting','Pass','No') NOT NULL,
  `status_project` enum('0','Waiting','Pass','No') NOT NULL,
  `status` int(20) NOT NULL,
  `status1` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `group_id`, `status_presentation`, `status_project`, `status`, `status1`) VALUES
(1, 31, 1, 'Pass', 'Waiting', 1, 2),
(2, 35, 1, 'Pass', 'Pass', 1, 2),
(3, 25, 1, 'Pass', 'Pass', 1, 2),
(4, 35, 3, 'Pass', 'Waiting', 1, 0),
(5, 34, 3, 'Pass', 'Waiting', 1, 0),
(6, 33, 2, 'Pass', 'Pass', 1, 2),
(7, 27, 2, 'Pass', 'Pass', 1, 2),
(8, 26, 2, 'Pass', 'Pass', 1, 2),
(9, 26, 5, 'Pass', 'Pass', 1, 2),
(10, 27, 5, 'Pass', 'Pass', 1, 2),
(11, 33, 5, 'Pass', 'Pass', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complete_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(20) NOT NULL,
  `head_of_depart` enum('','Pass') COLLATE utf8_unicode_ci NOT NULL,
  `dean` enum('','Pass') COLLATE utf8_unicode_ci NOT NULL,
  `pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') COLLATE utf8_unicode_ci NOT NULL,
  `files_status` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor01',
  `by_officer` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_officer02',
  `status_advisor` enum('0','','Waiting','Pass','No') COLLATE utf8_unicode_ci DEFAULT '0' COMMENT 'by_advisor03',
  `by_advisor04` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer05` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor06` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor07` enum('0','','Waiting','Pass','No') COLLATE utf8_unicode_ci DEFAULT '0',
  `by_advisor08` enum('0','','Waiting','Pass','No') COLLATE utf8_unicode_ci DEFAULT '0',
  `by_officer09` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor10` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor11` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor12` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer13` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`files_id`, `Owner`, `files_filename_proposal`, `files_filename_project`, `complete_project`, `advisergroup_id`, `group_id`, `head_of_depart`, `dean`, `pf`, `files_status`, `by_officer`, `status_advisor`, `by_advisor04`, `by_officer05`, `by_advisor06`, `by_advisor07`, `by_advisor08`, `by_officer09`, `by_advisor10`, `by_advisor11`, `by_advisor12`, `by_officer13`) VALUES
(2, '572431005 Nur-ida Che-loh572431019 Hunafah', 'PROGRESS PRESENTATION THE DAILY DOSE OF CAFFEINE APPLICATION.pptx', '', '', '2', 3, '', '', '3', 'Approve', 'Approve', 'Pass', 'Waiting', '', '', '', '', '', '', '', '', ''),
(42, '572431009 Norihan Ha572431014 Wilada Yalaphanee', 'CHAPTER IV 11-10-62 (เจอ อ.) (1) - Copy.pdf', 'Sensory Evaluation application.pdf', 'CHAPTER IV 11-10-62 (เจอ อ.) (3) - Copy.pdf', '4', 5, '', '', '13', 'Approve', 'Approve', 'Pass', 'Pass', 'Pass', 'Pass', 'Pass', 'Pass', 'Approve', 'Pass', 'Pass', 'Pass', 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL,
  `pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') NOT NULL,
  `form_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `member_idcard` int(30) NOT NULL,
  `member_username` varchar(255) NOT NULL,
  `member_fullname` varchar(255) NOT NULL,
  `member_password` varchar(255) NOT NULL,
  `member_pos` enum('Lecturer','Student','Officer') NOT NULL COMMENT '1=Lecturer, 3=Student, 4=Officer',
  `member_phone` varchar(255) NOT NULL,
  `member_email` varchar(255) NOT NULL,
  `member_gender` enum('Male','Female') NOT NULL COMMENT 'm=Male, f=female',
  `member_firstname` varchar(255) NOT NULL,
  `member_lastname` varchar(255) NOT NULL,
  `member_birthday` int(20) NOT NULL,
  `member_years` int(20) NOT NULL,
  `member_address` varchar(255) NOT NULL,
  `member_major` varchar(255) NOT NULL,
  `member_faculty` varchar(255) NOT NULL,
  `member_name_prefix` varchar(100) NOT NULL,
  `admin_id` int(20) NOT NULL COMMENT 'Foreign Key to tb_admin',
  `group_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_idcard`, `member_username`, `member_fullname`, `member_password`, `member_pos`, `member_phone`, `member_email`, `member_gender`, `member_firstname`, `member_lastname`, `member_birthday`, `member_years`, `member_address`, `member_major`, `member_faculty`, `member_name_prefix`, `admin_id`, `group_id`) VALUES
(1, 572431003, 'Husnee', 'Nik-Husnee Nik-Uma', '572431003', 'Student', '0831851521', 'nikhusnee1003@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 1),
(2, 572431005, 'ida', 'Nur-ida Che-loh', '572431005', 'Student', '0831972133', 'nurida1005@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 3),
(3, 572431009, 'Han', 'Norihan Ha', '572431009', 'Student', '0832719374', 'Norihan@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 5),
(4, 572431011, 'Miskah', 'Miskah Kasengtueba', '572431011', 'Student', '084664245', 'misk@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 8),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '572431014', 'Student', '0947387224', 'win@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 5),
(6, 572431016, 'Sunee', 'Sunee kasem', '572431016', 'Student', '0836552547', 'sunee@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 2),
(7, 572431018, 'Husni', 'Husni Munoh', '572431018', 'Student', '0875241345', 'husni@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 4),
(8, 572431019, 'Hunafah', 'Hunafah', '572431019', 'Student', '0845265242', 'hunafah@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 3),
(9, 572431020, 'Afifah', 'Afifah Hayitea', '572431020', 'Student', '084582184', 'Afifah@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 8),
(10, 572431024, 'ilham', 'Ilham Tuyong', '572431024', 'Student', '0974736523', 'ilham@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 2),
(11, 572431028, 'Nureeta', 'Nureeta Yayo', '572431028', 'Student', '0836176754', 'Nureeta@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 7),
(12, 572431029, 'Tylas', 'Moeut Tylas', '572431029', 'Student', '0853165467', 'Tylas@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 1),
(13, 571431011, 'Anuwa', 'Anuwa Chelong', '571431011', 'Student', '0868731873', 'Anuwa@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(14, 571431013, 'Iliyas', 'Iliyas Maroh', '571431013', 'Student', '0844717564', 'iliyas@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(15, 571431015, 'Akrom', 'Akrom Toleamah', '571431015', 'Student', '0835216745', 'Akrom@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(16, 571431016, 'Imron', 'Imron Madaree', '571431016', 'Student', '0846563585', 'nikhusnee1003@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(17, 571431022, 'Hadee', 'Abdulhadee Weahayee', '571431022', 'Student', '0846257465', 'hadee@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(18, 571431023, 'Muhamad', 'Muhamad Hayihama', '571431023', 'Student', '0647365955', 'Muhamad@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(19, 571431024, 'Asri', 'Asri Kama', '571431024', 'Student', '0648694694', 'Asri@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(20, 571431025, 'Baihakee', 'Baihakee Masapa', '571431025', 'Student', '0654813634', 'Baihakee@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(21, 571431028, 'Afwan', 'Afwan Yamae', '571431028', 'Student', '0608558397', 'Afwan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(22, 571431034, 'sofwan', 'Muhammadsofwan Mama', '571431034', 'Student', '0857302837', 'sofwan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(23, 571431036, 'Bukhory', 'Vokhory Man', '571431036', 'Student', '0825417434', 'Bukhory@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(24, 581431039, 'Afwan ', 'Afwan Doma', '581431039', 'Student', '0856357262', 'Afwan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(25, 61202526, 'Huda', 'Norhuda Masamae', '1234', 'Lecturer', '1234', 'Huda@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(26, 61202100, 'Husna', 'Nurulhusna Abdullatif', '1234', 'Lecturer', '0831664899', 'husna@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(27, 61202101, 'Suida', 'Suida Buesa', '1234', 'Lecturer', '0856679456', 'da@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(28, 61202102, 'Nani', 'Rusnanee Uma', '1234', 'Officer', '0932654775', 'nani@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(29, 61202103, 'Ibtisam', 'Ibtisam Mahama', '1234', 'Lecturer', '0975637565', 'Ibtisam@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
(30, 61202104, 'Kholed', 'Kholed langsaree', '1234', 'Lecturer', '0974574659', 'kholed@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(31, 61202105, 'Fatah', 'Abdulfatah Masamae', '1234', 'Lecturer', '0956375644', 'fatah@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(32, 61202106, 'Fauzan', 'Fauzan mapa', '1234', 'Lecturer', '0957631245', 'Fauzan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(33, 61202107, 'Mafaisu', 'Mafaisu Yosof', '1234', 'Lecturer', '0986262647', 'mafaisu@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(34, 61202109, 'Anas', 'Anas Tawalbeh', '1234', 'Lecturer', '0942847776', 'Anas@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(35, 61202108, 'Maroning', 'Maroning Useng', '1234', 'Lecturer', '0855i66865', 'Maroning@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, NULL),
(36, 562431073, 'Hananee', 'Hananee Dalor', '562431073', 'Student', '0958354453', 'Hananee@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, 6),
(37, 571431003, 'Sarawut', 'Sarawut Rakchat', '571431003', 'Student', '0974676454', 'Sarawut@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `news_topic`
--

CREATE TABLE `news_topic` (
  `news_id` int(11) NOT NULL,
  `news_topic` varchar(255) NOT NULL,
  `news_detail` varchar(255) NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(20) NOT NULL,
  `member_id` int(11) NOT NULL,
  `parent_comment_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `comment`, `status`, `subject`, `date`) VALUES
(1, 'test\r\n          ', 1, 'hi', '2020-04-24 15:01:28');

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
(1, 'SH001'),
(2, 'SH002'),
(3, 'SH003'),
(4, 'SH004'),
(5, 'SH005'),
(6, 'SH006'),
(7, 'SH007'),
(8, 'SH008'),
(9, 'SH009'),
(10, 'SH010');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_topic` varchar(255) NOT NULL,
  `schedule_type` enum('1','2') NOT NULL COMMENT '1=Proposal,2=Project',
  `schedule_room` varchar(10) NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_status` varchar(255) NOT NULL,
  `writer` int(20) NOT NULL,
  `group_id` int(20) NOT NULL COMMENT 'advisergroup_id	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_topic`, `schedule_type`, `schedule_room`, `schedule_time`, `schedule_date`, `schedule_status`, `writer`, `group_id`) VALUES
(1, 'Present', '2', 'Home', '10:13:00', '2020-04-26', 'Project', 1, 1),
(25, 'Present', '1', 'it-214', '21:40:00', '2018-10-28', 'Proposal', 1, 3),
(26, 'Present ', '1', 'it-857', '10:05:00', '2020-04-25', 'Proposal', 1, 1),
(29, 'Present', '1', 'it-234', '09:10:00', '2020-04-25', 'Proposal', 1, 2),
(30, 'Present', '2', 'it-324', '06:00:00', '2020-04-26', 'Project', 1, 2),
(31, 'Present', '1', 'it-324', '13:00:00', '2020-07-26', 'Proposal', 1, 5),
(32, 'Present', '2', 'it33', '21:57:00', '2020-04-02', 'Project', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `topic_project`
--

CREATE TABLE `topic_project` (
  `topic_id` int(11) NOT NULL,
  `group_number` varchar(30) DEFAULT NULL,
  `Owner` varchar(255) NOT NULL,
  `topic_topic` varchar(255) NOT NULL,
  `topic_abstrack` mediumtext NOT NULL,
  `topic_keyword` varchar(255) NOT NULL,
  `topic_fieldstudy` enum('Software Engineering','Computer Multimedia','Computer Networking') NOT NULL,
  `topic_years` date NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `adviser` varchar(255) NOT NULL,
  `position` enum('Admin','Student') NOT NULL COMMENT '1=Admin,2=Student',
  `status` enum('1','2','3','4','5','6','7') NOT NULL COMMENT '1=Wait for the proposal trail,2=Revision,3=OK,4=Reject,5=Cancel,6=Graduate,7=Not Pass'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic_project`
--

INSERT INTO `topic_project` (`topic_id`, `group_number`, `Owner`, `topic_topic`, `topic_abstrack`, `topic_keyword`, `topic_fieldstudy`, `topic_years`, `advisergroup_id`, `adviser`, `position`, `status`) VALUES
(1, 'SH001', '<h7> <div>572431003 &nbsp&nbsp&nbsp&nbsp Nik-Husnee Nik-Uma</h7></div><h7> <div>572431029 &nbsp&nbsp&nbsp&nbsp Moeut Tylas</h7></div>', 'IT Project Monitoring and Tracking', 'Currently, the various departments there are need to track and monitor the results of work operation to be correct, complete, convenient and fast. The work operation in the previous system used in the form of paper documents is quite complicated. Both in the handling and store the document. \r\nAnd now, it is known that information technology has become to play a rule in a lot of work. To help increases the work efficiently, facilitate convenient and fast for users. By these reasons, this project therefor used the information technology to develop the system of tracking and monitoring by developing in the form of web application. The topic of this project is IT Project Monitoring and Tracking system for IT department of Faculty Science and Technology. This system it’s convenient for user to be able to use easily, quickly, and can use in anywhere which can be connected to the internet. The user can perform, track, monitor, report, progress of the project operations and also can verify that what was the status of the operation now? ITPROMOT is developed to provide into four user subsystems; administrator, lecturer, officer and student. This system has developed by using the Appser as the web server, PHP, HTML, CSS and JavaScript to write the code and storage with MySQL. The result show that the system can help to reduce the problems from the old system.  ', 'Tracking ,Monitor', 'Software Engineering', '2019-01-01', 1, 'Kholed langsaree', 'Student', '1'),
(2, 'SH003', '<h7> <div>572431005 &nbsp&nbsp&nbsp&nbsp Nur-ida Che-loh</h7></div><h7> <div>572431019 &nbsp&nbsp&nbsp&nbsp Hunafah</h7></div>', 'Smart Rang Hood', '  This chapter consists of the results and discussion obtained from this project. The results will be\r\ndiscussed in this chapter. It will discuss how the implementation of hardware and software\r\ndesigned and wired. The functionality of Implementing Smart Range Hood using IoT and Node\r\nMCU will be tested and the result will be explained', 'Application,Automatic.', 'Computer Networking', '2020-04-25', 2, 'Kholed langsaree', 'Student', '1'),
(3, 'PS10001', 'Busree Hasa', 'Sensory evaluation application', ' Apparel or clothing was the thing that used to cover the body of a human for a long time. In some societies, it’s characteristic of region or nationality. Thobe is one of these and popular wear in Islamic country especially The Middle East and the ASEAN Community. The evolution of the thobe has beautiful colors, and design to be more modern. However, the need for the consumer was one point that hard to find and respond to. The sensory analysis is the one method that using for checking the quality by using sensory of consumer and interpret the results with the criteria and sensory quality. Sensory Analysis of Thobe to meet the needs of the market and to make the results of the evaluation are reliably referenced, The standard assessment process is required. The evaluators should have tools for supporting evaluations \r\nto make the assessment accurate and trustworthy. The main goal of this project is to design \r\nand develop software systems for evaluating sensory satisfaction of Thai consumers about \r\nThobe of SMEs group in Pattani to expand the market and meet the needs of the target group \r\nof consumers, increase competition And the potential for more distribution of products. ', 'Sensory ', 'Computer Multimedia', '2017-03-02', 0, 'Kholed langsaree', 'Admin', '6'),
(4, 'PS10002', '571431013 Ilyas Maroh', 'Kinraidee Food Delivery Application', 'Kinraidee \"What to eat?\" The catchy words we often ask when it\'s time to eat the Kinraidee app is to spend time thinking about what to eat?\nWhat can the Kinraidee app do?\n1. Order food / snacks Online displays a list of food menus from the store that can be sent to you.\n- Delivery food with delivery as soon as ordered within 1 hour\n- Pre Order food is to order in advance and arrange for the day to receive the product with the seller.\n- Food or snacks delivered via post from the store', 'What to eat?', 'Software Engineering', '2017-03-02', 0, 'Anas Muhammad Tawalbeh', 'Admin', '6'),
(5, 'PS10003', '581431039 Affan Doemah 571431022 Abdulhadee Waehayee', 'Defect Tracting Construction System', 'Defect management (DM) for quality inspection (QI) is a major strategy employed by general contractors to enhance construction management of building projects. However, there are significant issues in construction DM in standard practice that affects quality inspection, including protracted procedures, data entry redundancies, confusion, and inefficient information management. Recognition of these construction DM issues, this paper proposes a new and practical approach that applies Building Information Modeling (BIM) technology to quality inspection and defect management. Specifically, BIM digitally contains precise geometry and relevant data needed to support building structures to describe 3D object-oriented CAD.', 'Defect management (DM) for quality inspection (QI) ', 'Software Engineering', '2017-03-02', 0, 'Anas Muhammad Tawalbeh', 'Admin', '6'),
(6, 'PS10003', '581431039 Affan Doemah 571431022 Abdulhadee Waehayee', 'Defect Tracting Construction System', 'Defect management (DM) for quality inspection (QI) is a major strategy employed by general contractors to enhance construction management of building projects. However, there are significant issues in construction DM in standard practice that affects quality inspection, including protracted procedures, data entry redundancies, confusion, and inefficient information management. Recognition of these construction DM issues, this paper proposes a new and practical approach that applies Building Information Modeling (BIM) technology to quality inspection and defect management. Specifically, BIM digitally contains precise geometry and relevant data needed to support building structures to describe 3D object-oriented CAD.', 'Defect management (DM) for quality inspection (QI) ', 'Software Engineering', '2017-03-02', 0, 'Anas Muhammad Tawalbeh', 'Admin', '6'),
(7, 'PS10004', 'SARITA DUEREH 562431008 FADEELAH MASALAEH 562431036', 'MASSIVE OPEN ONLINE COURSE FOR FATONI UNIVERSITY (FTU MOOC)', 'Nowadays the form of teaching and learning has changed very much by using internet services to develop to be the media to broadcast the knowledge into the system or known as MOOC (Massive Open Online courses), the learning and teaching base on internet technologies. This way can expand the channels of communication between lecturers and students. Besides, students can choose the subject by their wants and learn with the proper time and their conveniences. The topic of this project is massive open online courses for Fatoni University. There is general information about the courses. User can read the general information about the courses through this MOOC. The users have to register to be student or lecturer before going to the next function. Student can learn and take examination after login to system and lecturer can manage course after login to system. And developers use Laravel Framework and Bootstrap framework for develop this system. The purpose of creating this FTU MOOC is to give an opportunity about learning and make convenience for students who interest any subject and give an opportunity for the student who has a low cost.', 'FTU MOOC', 'Software Engineering', '2043-12-00', 0, 'Kholed langsaree', 'Admin', '6'),
(8, 'PS10006', '572431018 Husni Munoh', 'Design of Mobile Computer Learning', 'Nowadays, education faces the challenge of rapid changes and varied as the impact of advances in science and technology that rapidly increasing. Lifestyle with human continuous mobility increase led to a shift in the use of electronic devices. Nowadays, people are more likely to uses of electronic devices. Such as smartphones to access information, particularly smartphones based on the android operating system.', ' Mobile Computer Learning', 'Software Engineering', '2043-12-00', 0, 'Suaida Buenae', 'Admin', '6'),
(9, 'PS10005', 'MUSLIMAH HAYIYAKOH 562431043 AWATIF TALEH 562431066', 'AL-QURAN FOR QUALITY LIFE DEVELOPMENT APPLICATION', 'This project is to develop application for improving learning the Quran for AlQuran life quality development subject. The project application?s name ?Quran Learning Application for Al-Quran life quality development subject?. The developments appreciate for learning Quran subject of student in Fatoni University. The function of this web application included the Quran e-book, Quran recitation, recording sound for sending and receiving from user and student. The developments collected the information of Quran subject 1st level and 2nd level. The developers developed by using the System Development Life Cycle (SDLC) method for developing the application, there are five of concept are Planning, Analysis, Design, Implementation, and Maintenance. The users enable to use Android operating system via mobile application for using application.', 'mobile application', 'Software Engineering', '2043-12-05', 0, 'Anas Muhammad Tawalbeh', 'Admin', '6'),
(10, 'PS10007', '572431009 Norihan Ha 572431014 Wilada Yalaphanee', 'Provision in Islam', 'Worshiping Allah is something that Muslims must practice from a young age. When children know, must be trained to salaah become familiar and near with Allah about the Provisions in Islam of Allah. When they menstrual period for women and the something in dream of men. They have to obeying the rules of Islam has been placed before and need to do IBADAH strictly continuous until the death from this world. So, devotion to Allah, it is important to us. Allah has provided a convenient, easily thread. For travelers and those who are sick for example allow to perform a short salaah. Include two salaah at the same time. In the case of complete physical, but cannot stand in case of illness. Then make a salaah sitting. If it cannot sit, it can sleep. If cannot sleep, can used twinkle to salaah. At present, various many technologies come into play a more everyday role. In the field of communication, study, teaching, and living the life. So, it resulted in a lot of people Turn to technology. So we used technology to support in application In addition to the five-time salaah of them should to learning. They have to learn the general salaah related to Islam. Include: of Eid Fittry /Eid Adha, Taakhir, Takdim, Sakit, Hujan, Janazah, the last Azan and Iqmah because it\'s important for all them will have to learn the basic salaah of Islamic.', 'Islam', 'Software Engineering', '2043-12-05', 0, 'Nurulhusna Abdullatif', 'Admin', '6'),
(11, 'PS10008', 'Miss. Nasrin Madeeyoh\nMiss. Sawna Mamu', 'Smart classroom system', 'This project aims to develop smart classroom system of Fatoni University. This project is developed from scratch to automate the process of student attendance in Fatoni University. Smart classroom System is consisted of three subsystems divided base on three of users namely administrator, lecturer and student of Fatoni University.\nThis system is developed by using PHP and java language as a programming language, Xampp as a web server, MySQL for database, phpMyAdmin as Administrator Tool control MySQL Database via interface, Sublime text as code editor of the system. \nWith smart classroom system, all student attendance processes in of Fatoni University, Fatoni University are performed electronically on a centralized database. The process of applying, checking, displaying or searching student attendance is effective and efficient. The system is also capable to generate student attendance report monthly. ', 'Smart classroom system', 'Software Engineering', '2043-12-00', 0, 'Nourhuda Masamae ', 'Admin', '6'),
(12, 'SH002', '<h7> <div>572431016 &nbsp&nbsp&nbsp&nbsp Sunee kasem</h7></div><h7> <div>572431024 &nbsp&nbsp&nbsp&nbsp Ilham Tuyong</h7></div>', 'Sateng Repairing Center', 'Houseware repairing is a one web application to use for repairing home equipment, and \r\ncommunication between technicians and customers. This web application service for people in \r\nthree southern border provinces area. This web application used to inform repair when a customer \r\nhas some devices broken and can be entered online to the repair service. Especially, customers can \r\ntrack their repair inform. Then technicians will come home to the customer to fix about home \r\nequipment. This web app has three users to use: admin, technicians, and customers. Admin is who \r\nmanages all information can add delete and update. Technicians those who want to be a member, \r\nthey have to percentage deduction first. Then admin will allow them to be members. The last, \r\ncustomer can inform repairing and tracking their inform. There are provide four types of \r\nTechnicians. There are four types of the technician. The first is an electrician. They will repair \r\nsuch a broken bulb, fan or air conditioner. The second is IT technicians. They will repair such a \r\nbroken computer, printer or CPU.', 'Repair', 'Software Engineering', '2020-04-10', 3, 'Norhuda Masamae', 'Student', '1'),
(13, 'SH005', '<h7> <div>572431009 &nbsp&nbsp&nbsp&nbsp Norihan Ha</h7></div><h7> <div>572431014 &nbsp&nbsp&nbsp&nbsp Wilada Yalaphanee</h7></div>', 'Provide in Islam', '  As we all know, caffeine drinks is a popular drinks for all consumers since long time \r\nago because in the past, most people will drink teas and coffee only, but now there are \r\nmany beverages that is a choices to drinking such as soda, sparkling, cocoa \r\n,milo,ovaltine and chocolate as well.', 'Tracking ,Monitor', 'Software Engineering', '2020-04-25', 4, 'Nurulhusna Abdullatif', 'Student', '1');

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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apps_notification`
--
ALTER TABLE `apps_notification`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
