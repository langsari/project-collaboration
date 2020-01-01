-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 07:26 PM
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

INSERT INTO `topic_project` (`topic_id`, `group_number`, `Owner`, `topic_topic`, `topic_abstrack`, `topic_keyword`, `topic_fieldstudy`, `topic_years`, `status`, `advisergroup_id`, `Student_name`, `member_idcard`, `adviser`, `position`) VALUES
(24, 'ITPMTS57', '572431029     Ana Tylas and572431003     nikhusnee and', 'IT Project Monitoring and Tracking System', 'IT Project Monitoring and Tracking System is developed for IT department of faculty Science and Technology to provide for student and lecturer to track and monitor of the final project operation . It’s the form of web application in a system.', 'IT Project, Tracking system, Monitoring system', 'Software Engineering', '2019-06-11', '', 1, 'Ana Tylas', 572431029, 'kholed Langsari', 'Student'),
(26, 'ITPMTS57', '<p>572431029 &nbsp&nbsp&nbsp&nbsp Ana Tylas</p><p>572431003 &nbsp&nbsp&nbsp&nbsp nikhusnee</p>', 'IT Project Monitoring and Tracking System', 'IT Project Monitoring and Tracking System is developed for IT department of faculty Science and Technology to provide for student and lecturer to track and monitor of the final project operation . It’s the form of web application in a system.', 'IT Project, Tracking system, Monitoring system', 'Software Engineering', '2019-06-11', '', 1, 'Ana Tylas', 572431029, 'kholed Langsari', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic_project`
--
ALTER TABLE `topic_project`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topic_project`
--
ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
