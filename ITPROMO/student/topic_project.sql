CREATE TABLE `topic_project` (
  `topic_id` int(11) NOT NULL,
  `topic_topic` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_abstrack` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_keyword` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `topic_fieldstudy` enum('1','2','3') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Software Engineering, 2=Computer Multimedia, 3=Computer Networking',
  `topic_years` date NOT NULL,
  `status` enum('1','2') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Approve,2=Not Approve',
  `Student_name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `member_idcard` int(20) NOT NULL,
  `group_id` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `position` enum('Admin','Student') COLLATE utf8_unicode_520_ci NOT NULL COMMENT '1=Admin,2=Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;


INSERT INTO `topic_project` (`topic_id`, `topic_topic`, `topic_abstrack`, `topic_keyword`, `topic_fieldstudy`, `topic_years`, `status`, `Student_name`, `member_idcard`, `group_id`, `position`) VALUES
(1, 'ITPROMO', 'Information Technology Project  and Tracking', 'track', '1', '2019-10-11', '1', 'Nik-Hunsee Nik-Uma', 572431003, 'Kholed Langsaree', 'Student'),
(2, 'GAME', 'Applications', 'game online', '2', '2019-10-16', '1', 'Miskah Kasengteuba', 572431011, 'Kholed Langsaree', 'Student'),
(3, 'kkk', 'kkkk', 'xs', '1', '2019-10-06', '1', 'ikk', 572431, '11', 'Admin'),
(4, 'g', 'r', 'y', '2', '2019-10-17', '1', 'rg', 5, '11', 'Admin');


ALTER TABLE `topic_project`
  ADD PRIMARY KEY (`topic_id`);

ALTER TABLE `topic_project`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;