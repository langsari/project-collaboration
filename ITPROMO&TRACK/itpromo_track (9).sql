-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 03:17 PM
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
(1, 'iTPROMO AND TRACK', '1', 8, 1),
(2, 'Moc', '1', 11, 2),
(3, 'Repair', '1', 8, 3),
(4, 'Math Game ', '1', 18, 4),
(5, 'Cartoon', '1', 18, 5),
(6, 'Monitor system', '1', 14, 6);

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

--
-- Dumping data for table `apps_notification`
--

INSERT INTO `apps_notification` (`msg_id`, `member_token`, `msg_text`, `topic_text`, `msg_status`, `timestamp`) VALUES
(1, '', '', '', 0, '2019-12-21 16:16:04'),
(2, '', 'gggggg', '', 0, '2019-12-21 16:16:39'),
(3, '', 'Assalamualaikum', '', 0, '2019-12-21 16:18:55'),
(4, '0', 'Good night', '', 0, '2019-12-21 16:19:51'),
(5, '', 'hi', 'nikhusnee@gmail.com', 0, '2019-12-22 23:52:24'),
(6, '', 'hi', 'nikhusnee@gmail.com', 0, '2019-12-22 23:53:08'),
(7, '', 'hi', '', 0, '2019-12-23 00:05:34'),
(8, '', 'kkkkkkk', 'nikhusnee1003@gmail.com', 0, '2019-12-25 05:42:43'),
(9, '', 'hi', 'nikhusnee1003@gmail.com', 0, '2019-12-25 05:47:32'),
(10, '', 'lll', 'nikhusnee1003@gmail.com', 0, '2019-12-25 08:26:58'),
(11, '', 'Sooo', 'nikhusnee1003@gmail.com', 0, '2019-12-25 08:28:32'),
(12, '', 'ppppppppp', 'nikhusnee1003@gmail.com', 0, '2019-12-25 08:32:14'),
(13, '', 'oooo', 'nikhusnee1003@gmail.com', 0, '2019-12-25 08:33:15'),
(14, '', 'uuuuuuuu', 'nikhusnee1003@gmail.com', 0, '2019-12-25 08:34:35'),
(15, '', '??????????????????????????', '?????????', 0, '2019-12-27 13:22:14'),
(16, '', '??????????????', '?????', 0, '2019-12-27 13:23:50'),
(17, '', '??????????????', '?????????', 0, '2019-12-27 13:24:25'),
(18, '', '??????????????', '???????', 0, '2019-12-27 13:24:56'),
(19, '', 'Everyone has to prepare for Present', 'On Sunday we have to presentation', 0, '2019-12-27 13:30:03'),
(20, '', 'Everyone has to prepare for Present', 'Present Proposal', 0, '2019-12-27 13:30:55'),
(21, '', 'Everyone has to prepare for Present', 'test', 0, '2019-12-27 13:32:39'),
(22, '', 'ff', 'ff', 0, '2019-12-27 13:33:53'),
(23, '', 'yyy', 'd', 0, '2019-12-27 13:35:07');

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
(11, 'Assalamualaikum', '0000-00-00 00:00:00', 1, 1),
(12, 'Waalaikummussalm', '0000-00-00 00:00:00', 1, 20),
(15, 'llllllll', '0000-00-00 00:00:00', 0, 11),
(16, 'How are u everyone', '0000-00-00 00:00:00', 0, 8),
(17, 'tttt', '0000-00-00 00:00:00', 0, 8),
(18, 'fffffffffffff', '0000-00-00 00:00:00', 0, 8),
(19, 'dd', '0000-00-00 00:00:00', 1, 8),
(20, 'Hi', '0000-00-00 00:00:00', 4, 18),
(21, 'how about?', '0000-00-00 00:00:00', 4, 4),
(22, 'SoS', '0000-00-00 00:00:00', 4, 16),
(23, 'fkfkfkf', '0000-00-00 00:00:00', 0, 8),
(24, 'ffff', '0000-00-00 00:00:00', 0, 8),
(25, 'hhhhhh', '0000-00-00 00:00:00', 0, 0),
(26, 'hi', '0000-00-00 00:00:00', 0, 0),
(27, 'hi', '0000-00-00 00:00:00', 0, 0),
(28, 'hi', '0000-00-00 00:00:00', 0, 0),
(29, 'Hiii', '0000-00-00 00:00:00', 0, 0),
(30, 'Assalamualaikum', '0000-00-00 00:00:00', 0, 0),
(31, 'Assalamualaikum', '0000-00-00 00:00:00', 0, 0),
(32, 'Assalamualaikum', '0000-00-00 00:00:00', 0, 0),
(33, 'Assalamualaikum', '0000-00-00 00:00:00', 0, 0),
(34, 'Tylas Did u see this Sentences', '0000-00-00 00:00:00', 0, 0),
(35, '????? ??????????????? ????????? ??????????? ?????????????? ??????????', '0000-00-00 00:00:00', 0, 0),
(36, 'jjj', '0000-00-00 00:00:00', 0, 0),
(37, 'jjj', '0000-00-00 00:00:00', 0, 0),
(38, 'How are u', '0000-00-00 00:00:00', 0, 0),
(39, 'How are ussss', '0000-00-00 00:00:00', 1, 0),
(40, 'Hi', '0000-00-00 00:00:00', 0, 0);

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

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `group_id`) VALUES
(1, 29, 1),
(2, 14, 1),
(3, 33, 1),
(4, 8, 2),
(5, 18, 2);

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

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`files_id`, `files_filename_proposal`, `files_filename_project`, `advisergroup_id`, `files_status`, `member_id`) VALUES
(1, 'Proposal.docx', '', 1, '1', '4'),
(2, 'ER and DB.docx', '', 2, '1', '4'),
(3, 'ER-and-DB.docx', '', 3, '1', 'w'),
(4, 'itpromo_track (6).sql', '', 4, '1', 'w'),
(5, 'ขั้นตอนการสร้าง-QR-code.pdf', '', 5, '1', 'w');

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
  `member_pos` enum('Advisor','Committee','Student','Officer') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Advisor, 2=Committee, 3=Student, 4=Officer',
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
(3, 572431009, 'Han', 'Norihan Ha', '1234', 'Student', '0747346826', 'han@gmail.com', 'Female', 1, 5),
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '075683633', 'misk@gmail.com', 'Female', 1, 4),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '0856658897', 'win@gmail.com', 'Female', 1, 5),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '245764', 'sunee@gmailcom', 'Female', 1, 3),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '33442233', 'ni@gmail.com', 'Female', 1, NULL),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', 'Advisor', '0857638634', 'kholed@gmail.com', 'Male', 1, NULL),
(9, 572431001, 'Adam', 'Adam Wokbah', '1234', 'Student', '0847183624', 'husna@gmail.com', 'Male', 1, NULL),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Advisor', '0856375367', 'husna@gmail.com', 'Female', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '123', 'Officer', '08567637858', 'nani@gmail.com', 'Female', 1, NULL),
(13, 57378, 'Anas', 'Anas watih', '1234', 'Student', '0986382', 'anas@gmail.com', 'Male', 1, NULL),
(14, 462444, 'fatah', 'fatah', '123', 'Advisor', '35664', 'male@gmail.com', 'Male', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', 'Student', '22', 's@gmail.com', 'Female', 1, 2),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', 'Student', '083171632', 'yah@gmail.com', 'Female', 1, 4),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '0842148244', 'murni@gmail.com', 'Female', 1, 3),
(18, 572294, 'da', 'suaida', '1234', 'Advisor', '058679875', 'gg@gmail.com', 'Female', 1, NULL),
(19, 57231002, 'Hafizah', 'Hafizah uma', '1234', 'Student', '083186321', 'Hafizah@gnail.com', 'Female', 1, NULL),
(20, 572431029, 'tylas', 'Mouet Tylas', '1234', 'Student', '0847538593', 'tylas@gmail.com', 'Female', 1, 1),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '07436847', 'wa@gmail.com', 'Male', 1, NULL),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '098462734', 'bah@gmail.com', 'Female', 1, NULL),
(23, 574398, 'siti', 'Sitisulaiko', '1234', 'Student', '0496353', 'ti@gmail.com', 'Female', 1, NULL),
(24, 608565, 'Ya', 'Nadia', '1234', 'Student', '08762743', 'ya@gmail.com', 'Female', 0, NULL),
(25, 345565, 'mah', 'Marhamah', '1234', 'Student', '0876793', 'advisorfst123@gmail.com\r\n', 'Female', 1, NULL),
(27, 649700, 'la', 'nuzula', '1234', 'Student', '09864899', 'itpromo123@gmail.com\r\n', 'Female', 1, NULL),
(28, 32435, 'lah', 'Kiflah', '1234', 'Student', '0974624', 'lah@gmail.com', 'Female', 1, 10),
(29, 12345678, 'Ib', 'Ibtisam', '1234', 'Committee', '0974356678', 'ib@gmail.com', 'Female', 1, NULL),
(30, 46577, 'bee', 'Hasbee', '1234', 'Student', '0487759', 'bee@gmail.com', 'Female', 1, 6),
(33, 332, 'huda', 'Norhuda', '1234', 'Committee', '87467', 'da@gmail.com', 'Female', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '0833749', 'ri@gmail.com', 'Male', 1, 6),
(35, 54, 'ff', 'ff', '1234', 'Student', '0853534', 'nn@gmail.com', 'Female', 1, NULL),
(38, 444, 'ee', 'ee', '111', 'Committee', '45344', 'nn@gmail.com', 'Female', 1, NULL),
(39, 4443, 'dd', 'ss', '111', 'Advisor', '232222', 'kk@gmail.com', 'Male', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `MessageID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `New` enum('Yes','No') NOT NULL DEFAULT 'Yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`MessageID`, `Subject`, `Description`, `New`) VALUES
(00001, 'Subject 1 Subject 1 Subject 1', 'Description 1 Description 1 Description 1 ', 'Yes'),
(00002, 'Subject 2 Subject 2 Subject 2', 'Description 2 Description 2 Description 2', 'No'),
(00003, 'Subject 3 Subject 3 Subject 3', 'Description 3 Description 3 Description 3', 'No'),
(00004, 'Subject 4 Subject 4 Subject 4', 'Description 4 Description 4 Description 4', 'No'),
(00005, 'dd', 'sdd', 'Yes'),
(00006, 'hi', 'kkkkkkk', 'Yes'),
(00007, 'tt', 'tt', 'Yes'),
(00008, 'kkkkkkkkkkkkkkkkkkkkkkk', 'oooooooooossssssssss', 'Yes');

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
(6, 6);

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

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_topic`, `schedule_type`, `schedule_room`, `schedule_time`, `schedule_date`, `schedule_status`, `member_id`, `group_id`) VALUES
(21, 'Presentation ', '1', 123, '22:58:00', '2019-10-30', 'Proposal', 12, 1),
(22, 'Presentation', '2', 145, '09:58:00', '2019-11-30', 'Project progress 100%', 12, 2),
(23, 'vv', '2', 88, '21:58:00', '2020-01-01', 'vvv', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `topic_project`
--

CREATE TABLE `topic_project` (
  `topic_id` int(11) NOT NULL,
  `topic_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_abstrack` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_keyword` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_fieldstudy` enum('Software Engineering','Computer Multimedia','Computer Networking') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Software Engineering, 2=Computer Multimedia, 3=Computer Networking',
  `topic_years` date NOT NULL,
  `status` enum('Proposal Approve','Proposal not Approve') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Approve,2=Not Approve',
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
(1, 'iTPROMO AND TRACK', 'In most of the curriculums in information technology (IT) undergraduate programmes, it is common that students are expected to complete the Information Technology  Project Course (IT Project) in their final year studies. ', 'TRACK', 'Computer Multimedia', '2019-11-15', 'Proposal Approve', 1, 'Mouet Tylas', 572431029, 'Kholed Langsaree', 'Student'),
(2, 'Moc', 'xxxxxx', 'xxxxxxx', 'Computer Networking', '2019-12-21', 'Proposal Approve', 2, 'Hunafah', 66, 'Nurulhusna', 'Student'),
(3, 'Repair', 'xxxxxxxxxxx', 'xxxxxx', 'Computer Networking', '2019-12-07', 'Proposal Approve', 3, 'Sunee Kasem', 572431016, 'Kholed Langsaree', 'Student'),
(4, 'Math Game ', 'xxxxxxxxxx', 'xx', 'Computer Multimedia', '2019-12-15', 'Proposal Approve', 4, 'Afifah mamat', 572431021, 'suaida', 'Student'),
(5, 'Cartoon', 'aaaaaaaaaa', 'aaa', 'Computer Multimedia', '2020-01-04', '', 5, 'Wilada Yalaphanee', 572431014, 'suaida', 'Student'),
(6, 'Monitor system', 'kkkkkkkkkkkkkk', 'kkkkkkkk', 'Computer Multimedia', '2017-11-30', 'Proposal Approve', 6, 'Asri Yaee', 571431031, 'fatah', 'Student'),
(7, 'ssss', 'sssssssssssssssssssss', 'ssssssssss', 'Computer Networking', '2019-12-11', 'Proposal Approve', 0, 'ssssss', 9999, '18', 'Admin'),
(8, 'ttt', 'tttttttt', 'tttt', 'Computer Multimedia', '2019-12-25', 'Proposal Approve', 0, 'tt', 66, '8', 'Admin');

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
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`MessageID`);

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
  MODIFY `announcement_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `apps_notification`
--
ALTER TABLE `apps_notification`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `committeegroup`
--
ALTER TABLE `committeegroup`
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `MessageID` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
