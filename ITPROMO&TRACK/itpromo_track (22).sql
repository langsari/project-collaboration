-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 06:10 PM
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
(1, 'IT Project Monitoring and Tracking', 'Approve', 8, 1, '1'),
(2, 'Smart Range Hood', 'Approve', 8, 2, '1'),
(3, 'Sensory evaluation application', 'Approve', 8, 3, '1'),
(4, 'Houseware repairing', 'Approve', 33, 4, '1'),
(5, 'Math Game', 'Approve', 18, 5, '1'),
(6, 'Personal Assesment For Faculty of Science and Technology, Fatoni University.Mobile Application', 'Approve', 41, 6, '1'),
(7, 'Provision in Islam', 'Approve', 11, 7, '1'),
(8, 'Your Coffee', 'Approve', 29, 8, '1'),
(9, 'Design of Mobile Computer Learning', 'Approve', 18, 10, '1');

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
(2, 'Assalamulaikum Warahmatullah Wabarakatuh', '<p>Dear students who are register for subject IT2301-321 and IT2301-322 with Aj.Sureeluk Ma require to students submit P01 in this coming Sunday 15/12/62, a form in attachment file below</p>\r\n\r\n<p><img alt=\"ไม่มีคำอธิบายรูปภาพ\" src=\"https://scontent.fhdy2', '2020-01-04', 1);

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

--
-- Dumping data for table `committeegroup`
--

INSERT INTO `committeegroup` (`committeegroup_id`, `member_id`, `group_id`) VALUES
(1, 33, 1),
(2, 14, 1),
(3, 41, 2),
(4, 29, 4),
(5, 11, 4),
(6, 18, 4),
(7, 14, 4),
(8, 11, 5),
(9, 18, 5),
(10, 29, 5);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `files_status` enum('Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `member_id` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL,
  `Owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pf` enum('1','2','3','4','5','6','7') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`files_id`, `files_filename_proposal`, `files_filename_project`, `advisergroup_id`, `files_status`, `member_id`, `Owner`, `pf`) VALUES
(1, '1579015325-Proposal.pdf', '', 1, 'Approve', 'Approve', '572431003 Nik-Hunsee Nik-Uma572431029 Mouet Tylas', '2'),
(2, '1579015485-CHAPTERIV11-10-62(เจออ.).pdf', '', 2, 'Approve', 'Approve', '572431005 Nur-ida Che-loh66 Hunafah', '2'),
(3, '1579016020-SensoryEvaluationapplication.pdf', '', 3, 'Approve', 'Approve', '572431001 Sarawut Rakchat57378 Busree Hasa', '2'),
(4, '1579016338-21funmathgames.pdf', '', 5, 'Approve', 'Approve', '572431011 Miskah Kasengteuba572431021 Afifah mamat', '2'),
(5, '1579016495-manualmnreapp.pdf', '', 7, 'Waiting', '', '572431009 Norihan Ha572431014 Wilada Yalaphanee', '1'),
(6, '1579016873-PF02-ITProject-OfficerrecievecopyofProjectProposal.pdf', '', 6, 'Waiting', '', '572431021 Nureeta Yayo', '1'),
(7, '1579018751-HousewaresRepairingWebapp.pdf', '', 4, 'Approve', 'Approve', '572431016 Sunee Kasem572431923 ilham', '2'),
(8, '1579020786-Narong-Lumdee2556-1.pdf', '', 9, 'Approve', 'Approve', '572431018 Husni Munoh', '2');

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
(4, 572431011, 'Misk', 'Miskah Kasengteuba', '1234', 'Student', '075683633', 'misk@gmail.com', 'Female', 1, 5),
(5, 572431014, 'Win', 'Wilada Yalaphanee', '1234', 'Student', '0856658897', 'win@gmail.com', 'Female', 1, 7),
(6, 572431016, 'Sunee', 'Sunee Kasem', '1234', 'Student', '245764', 'sunee@gmailcom', 'Female', 1, 4),
(7, 572431018, 'husni', 'Husni Munoh', '1234', 'Student', '33442233', 'ni@gmail.com', 'Female', 1, 10),
(8, 503253762, 'Kholed', 'Kholed Langsaree', '1234', 'Lecturer', '0857638634', 'kholed@gmail.com', 'Male', 1, NULL),
(9, 572431001, 'Adam', 'Sarawut Rakchat', '1234', 'Student', '0847183624', 'husna@gmail.com', 'Male', 1, 3),
(11, 1001, 'husna', 'Nurulhusna', '1234', 'Lecturer', '0856375367', 'husna@gmail.com', 'Female', 1, NULL),
(12, 57329877, 'nani', 'Rusnanee Utea', '123', 'Officer', '08567637858', 'nani@gmail.com', 'Female', 1, NULL),
(13, 57378, 'Anas', 'Busree Hasa', '1234', 'Student', '0986382', 'anas@gmail.com', 'Male', 1, 3),
(14, 462444, 'fatah', 'Abdulfatah Masamae', '123', 'Lecturer', '35664', 'male@gmail.com', 'Male', 1, NULL),
(15, 66, 'Hunafah', 'Hunafah', '1234', 'Student', '22', 's@gmail.com', 'Female', 1, 2),
(16, 572431021, 'Afifah', 'Afifah mamat', '1234', 'Student', '083171632', 'yah@gmail.com', 'Female', 1, 5),
(17, 572431923, 'ilham', 'ilham', '1234', 'Student', '0842148244', 'murni@gmail.com', 'Female', 1, 4),
(18, 572294, 'da', 'suaida', '1234', 'Lecturer', '058679875', 'gg@gmail.com', 'Female', 1, NULL),
(19, 57231002, 'Hafizah', 'Hafizah uma', '1234', 'Student', '083186321', 'Hafizah@gnail.com', 'Female', 0, NULL),
(20, 572431029, 'tylas', 'Mouet Tylas', '1234', 'Student', '0847538593', 'tylas@gmail.com', 'Female', 1, 1),
(21, 571386628, 'Wa', 'Anur Smile', '1234', 'Student', '07436847', 'wa@gmail.com', 'Male', 0, NULL),
(22, 57328470, 'bah', 'Misbah ', '1234', 'Student', '098462734', 'bah@gmail.com', 'Female', 0, NULL),
(23, 574398, 'siti', 'Sitisulaiko', '1234', 'Student', '0496353', 'ti@gmail.com', 'Female', 0, NULL),
(24, 608565, 'Ya', 'Nadia', '1234', 'Student', '08762743', 'ya@gmail.com', 'Female', 0, NULL),
(25, 345565, 'Hanani', 'Hanani Dalor', '1234', 'Student', '0876793', 'advisorfst123@gmail.com\r\n', 'Female', 1, 8),
(27, 649700, 'la', 'nuzula', '1234', 'Student', '09864899', 'itpromo123@gmail.com\r\n', 'Female', 0, NULL),
(28, 32435, 'lah', 'Kiflah', '1234', 'Student', '0974624', 'lah@gmail.com', 'Female', 0, NULL),
(29, 12345678, 'Ib', 'Ibtisam', '1234', 'Lecturer', '0974356678', 'ib@gmail.com', 'Female', 1, NULL),
(30, 572431021, 'ta', 'Nureeta Yayo', '1234', 'Student', '0487759', 'bee@gmail.com', 'Female', 1, 6),
(33, 332, 'huda', 'Norhuda', '1234', 'Lecturer', '87467', 'da@gmail.com', 'Female', 1, NULL),
(34, 571431031, 'Asri', 'Asri Yaee', '1234', 'Student', '0833749', 'ri@gmail.com', 'Male', 0, NULL),
(41, 2018384565, 'Anas', 'Anas tawallbh', 'Anas', 'Lecturer', '0984712884', 'Anas123@gmail.com', 'Male', 1, NULL);

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
(3, 'PS10001'),
(4, 'PS10002'),
(5, 'PS10003'),
(6, 'PS10004'),
(7, 'PS10005'),
(8, 'PS10006'),
(10, 'PS10007'),
(1, 'PS1234'),
(2, 'PS1235');

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
  `advisergroup_id` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `schedule_topic`, `schedule_type`, `schedule_room`, `schedule_time`, `schedule_date`, `schedule_status`, `writer`, `group_id`, `advisergroup_id`, `admin_id`) VALUES
(1, 'Presentation', '1', '123-IT', '12:01:00', '2020-01-22', 'Proposal', 12, 1, 0, 0),
(2, 'Presentation', '1', '124-IT', '21:00:00', '2020-01-23', 'Porposal', 12, 2, 0, 0);

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
(1, 'PS1234', '<p>572431003 &nbsp&nbsp&nbsp&nbsp Nik-Hunsee Nik-Uma</p><p>572431029 &nbsp&nbsp&nbsp&nbsp Mouet Tylas</p>', 'IT Project Monitoring and Tracking', 'In most of the curriculums in information technology (IT) undergraduate program, it is common that students are expected to complete the Information Technology Project Course (IT Project) in their final year studies. That is also why it is usually known as a final year project (FYP). The Information Technology project course (IT Project), is a kind of activity course that gives opportunities to students. This course-based study aims to provide integrated training on their team working skill, technical knowledge learned from different courses, and project management skills. The students studied, researched and practiced by themselves according to their abilities, aptitudes, and interests.', 'Tracking ,Monitor', 'Software Engineering', '2020-01-03', 1, 'Kholed Langsaree', 'Student', '1'),
(3, 'PS1235', '<p>572431005 &nbsp&nbsp&nbsp&nbsp Nur-ida Che-loh</p><p>66 &nbsp&nbsp&nbsp&nbsp Hunafah</p>', 'Smart Range Hood', 'In the past, all houses will have clearly separate various parts. Whether it is a bedroom, bathroom, kitchen, living room, etc. But at present, the house that has the proportion like that must be as a relatively wealthy house or a house in a different province. But for those who have accommodation in the city which will has limited space, it makes the bedroom, bathroom, and kitchen are all within the same area.', 'Application,Automatic.', 'Computer Networking', '2020-01-02', 2, 'Kholed Langsaree', 'Student', '1'),
(4, 'PS10001', '<p>572431001 &nbsp&nbsp&nbsp&nbsp Sarawut Rakchat</p><p>57378 &nbsp&nbsp&nbsp&nbsp Busree Hasa</p>', 'Sensory evaluation application', 'Apparel or clothing was the thing that used for cover the body of a human for a long time. In some societies, it’s characteristic of region or nationality. Thobe is one of these and popular wear in Islamic country especially The Middle East and the ASEAN Community. Evolution of thobe has for beautiful colors, and design to be more modern. However, the need of consumer was one point that hard to find and respond. The sensory analysis is the one method that using for checking quality by using sensory of consumer and interpret the results with the criteria and sensory quality.', 'Sensory', 'Computer Networking', '2019-12-19', 3, 'Kholed Langsaree', 'Student', '1'),
(5, 'PS10003', '<p>572431011 &nbsp&nbsp&nbsp&nbsp Miskah Kasengteuba</p><p>572431021 &nbsp&nbsp&nbsp&nbsp Afifah mamat</p>', 'Math Game', 'All tiles are placed face down beside the board. Players take turns to choose a tile and cover two spaces on the board that add to the total on the tile. The tile can be laid vertically or horizontally.  A tile card cannot be placed on top of another tile. When a player picks up a tile and can’t find a place to lay the tile, the other player is the winner.  ', 'Game', 'Computer Multimedia', '2019-12-28', 5, 'suaida', 'Student', '1'),
(6, 'PS10005', '<p>572431009 &nbsp&nbsp&nbsp&nbsp Norihan Ha</p><p>572431014 &nbsp&nbsp&nbsp&nbsp Wilada Yalaphanee</p>', 'Provision in Islam', 'So those who have taqwa are the friends of Allah. Allah has promised them success at the time of death and deliverance from Hell on the Day of Judgement. They will abide forever in Paradise next to their Gracious Lord.', 'Androin', 'Computer Multimedia', '2019-12-02', 7, 'Nurulhusna', 'Student', '1'),
(7, 'PS10004', '<p>572431021 &nbsp&nbsp&nbsp&nbsp Nureeta Yayo</p>', 'Personal Assesment For Faculty of Science and Technology, Fatoni University.Mobile Application', 'This free personality test is fast and reliable. It is also used commercially by psychologists, career', 'Paper', 'Computer Multimedia', '2020-01-15', 6, 'Anas tawallbh', 'Student', '1'),
(8, 'PS10002', '<p>572431016 &nbsp&nbsp&nbsp&nbsp Sunee Kasem</p><p>572431923 &nbsp&nbsp&nbsp&nbsp ilham</p>', 'Houseware repairing', 'Houseware repairing is a one web application to use for repairing home equipment, and               communication between technicians and customers. This web application service for people in             three southern border provinces area. This web application used to inform repair when a               customer has some devices broken and can be entered online to the repair service. Especially,                customers can track their repair inform. ', 'repairing ', 'Software Engineering', '2020-01-15', 4, 'Norhuda', 'Student', '1'),
(9, 'PS10007', '<p>572431018 &nbsp&nbsp&nbsp&nbsp Husni Munoh</p>', 'Design of Mobile Computer Learning', 'Rancang Bangun Sistem Pengamatan Lingkungan Menggunakan Wireless Sensor Network berbasis nRF24L01 Terdistribusi dengan Layanan Dashboard untuk Visualisasi Data Pengamatan Secara Real Time', 'Learning Device', 'Computer Multimedia', '2020-01-15', 9, 'suaida', 'Student', '1');

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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `committeegroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `news_topic`
--
ALTER TABLE `news_topic`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `partnergroup`
--
ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
