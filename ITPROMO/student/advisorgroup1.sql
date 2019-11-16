CREATE TABLE `advisergroup` (
  `advisergroup_id` int(11) NOT NULL,
  `advisergroup_topic` varchar(255) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `advisergroup_status` enum('0','w','1') NOT NULL DEFAULT 'w',
  `project_abstrack` varchar(255) DEFAULT NULL,
  `project_keyword` varchar(255) DEFAULT NULL,
  `project_fieldstudy` enum('1','2','3') DEFAULT NULL COMMENT '''1=Software Engineering, 2=Computer Multimedia, 3=Computer Networking''',
  `project_years` date DEFAULT NULL COMMENT ' ''1=Approve,2=Not Approve'',3=Done''',
  `project_status` enum('1','2','3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




ALTER TABLE `advisergroup`
  ADD PRIMARY KEY (`advisergroup_id`);


  ALTER TABLE `advisergroup`
  MODIFY `advisergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  

INSERT INTO `advisergroup` (`advisergroup_id`, `advisergroup_topic`, `member_id`, `group_id`, `advisergroup_status`, `project_abstrack`, `project_keyword`, `project_fieldstudy`, `project_years`, `project_status`) VALUES
(1, 'Car Rental', 14, 17, '1', 'In most of the curriculum in information technology (IT)', 'Car', '1', '2019-11-10', '1'),
(2, 'Information Technology Project ', 8, 20, '1', ' This course-based study aims to provide integrated training on their team working skills, technical knowledge learned from different courses, and project management skills. The students studied, researched and practiced by themselves according to their a', 'TRACKiNG', '2', '2019-11-24', '1'),
(3, 'Math Game', 18, 4, '1', ' In addition, The IT project course examination is divided into three times: (1). Project Topic selection. (2). Examination of Project proposal. ', 'Game online', '3', '2019-11-21', '1'),
(4, 'MOC', 8, 2, '1', 'In Faculty of Science and Technology of Fatoni University, the Information Technology department is still use the traditional way', 'Moc app', '3', '2019-11-21', '1');
