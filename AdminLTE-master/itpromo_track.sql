-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2020 at 08:08 AM
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
  `announcement_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int(11) NOT NULL,
  `parent_comment_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `announcement_topic`, `announcement_detail`, `announcement_date`, `admin_id`, `parent_comment_id`) VALUES
(1, 'Assalamulaikum Warahmatullah Wabarakatuh', ' Dear students who are register for subject IT2301-321 and IT2301-322 with Aj.Sureeluk Ma require to students submit P01 in this coming Sunday 15/12/62, a form in attachment file below', '2020-04-18 17:28:57', 1, 0),
(2, ' Notify the following students ', 'submit full Proposal on 19/12/63\r\nproposal contents as in attachment files in this group.\r\nProposal The Presentation will be on 25/12/19.\r\nThe proposal should be approved by your advisor before submit on this 19/12/62', '2020-04-18 17:31:10', 1, 0);

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
(1, 'Assalamualaikum ', '2020-04-18 18:39:59', 'Nik-Husnee Nik-Uma', 1, 1, '1'),
(2, 'Good', '2020-04-18 18:41:49', 'Rusnanee Uma', 0, 1, '2'),
(3, 'thank you', '2020-04-18 18:42:41', 'Nik-Husnee Nik-Uma', 1, 1, '2');

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
  `head_of_depart` enum('','Pass') COLLATE utf8_unicode_ci NOT NULL,
  `dean` enum('','Pass') COLLATE utf8_unicode_ci NOT NULL,
  `pf` enum('1','2','3','4','5','6','7','8','9','10','11','12','13') COLLATE utf8_unicode_ci NOT NULL,
  `files_status` enum('','Waiting','Approve') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor01',
  `by_officer` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_officer02',
  `status_advisor` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL COMMENT 'by_advisor03',
  `by_advisor04` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer05` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor06` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor07` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor08` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer09` enum('','Waiting','Approve','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor10` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor11` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_advisor12` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL,
  `by_officer13` enum('','Waiting','Pass','No') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(13, 571431011, 'Anuwa', 'Anuwa Chelong', '571431011', 'Student', '0868731873', 'Anuwa@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(14, 571431013, 'Iliyas', 'Iliyas Maroh', '571431013', 'Student', '0844717564', 'iliyas@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(15, 571431015, 'Akrom', 'Akrom Toleamah', '571431015', 'Student', '0835216745', 'Akrom@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(16, 571431016, 'Imron', 'Imron Madaree', '571431016', 'Student', '0846563585', 'Imron@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(17, 571431022, 'Hadee', 'Abdulhadee Weahayee', '571431022', 'Student', '0846257465', 'hadee@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(18, 571431023, 'Muhamad', 'Muhamad Hayihama', '571431023', 'Student', '0647365955', 'Muhamad@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(19, 571431024, 'Asri', 'Asri Kama', '571431024', 'Student', '0648694694', 'Asri@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(20, 571431025, 'Baihakee', 'Baihakee Masapa', '571431025', 'Student', '0654813634', 'Baihakee@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(21, 571431028, 'Afwan', 'Afwan Yamae', '571431028', 'Student', '0608558397', 'Afwan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(22, 571431034, 'sofwan', 'Muhammadsofwan Mama', '571431034', 'Student', '0857302837', 'sofwan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(23, 571431036, 'Bukhory', 'Vokhory Man', '571431036', 'Student', '0825417434', 'Bukhory@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(24, 581431039, 'Afwan ', 'Afwan Doma', '581431039', 'Student', '0856357262', 'Afwan@gmail.com', 'Male', '', '', 0, 0, '', '', '', '', 0, NULL),
(25, 61202526, 'Huda', 'Norhuda Masamae', '61202526 ', 'Lecturer', '1234', 'Huda@gmail.com', 'Female', '', '', 0, 0, '', '', '', '', 1, NULL),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`id`, `comment`, `status`, `subject`, `date`) VALUES
(1, 'Welcome for Everyone for Register this system\r\n          ', 1, 'Welcome to IT Project Monitoring and Tracking', '2020-04-18 17:36:55');

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
  `schedule_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `schedule_type` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Proposal,2=Project',
  `schedule_room` varchar(10) COLLATE utf8_unicode_520_ci NOT NULL,
  `schedule_time` time NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_status` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `writer` int(20) NOT NULL,
  `group_id` int(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
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
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
