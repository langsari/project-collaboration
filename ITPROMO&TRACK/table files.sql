CREATE TABLE `files` (
  `files_id` int(11) NOT NULL,
  `files_filename_proposal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `files_filename_project` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advisergroup_id` int(20) NOT NULL,
  `member_id` enum('w','4') COLLATE utf8_unicode_ci NOT NULL,
  `files_status` enum('w','1') COLLATE utf8_unicode_ci NOT NULL COMMENT 'w: wait to accept,1: pass,4:officer approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `files` (`files_id`, `files_filename_proposal`, `files_filename_project`, `advisergroup_id`, `member_id`, `files_status`) VALUES
(1, 'Proposal.docx', '', 1, '4', '1'),
(2, 'last use case.pdf', '', 2, '', '1'),
(18, 'Diagram 1.pdf', '', 5, '', '1'),
(33, 'card.docx', '', 14, '', '1'),
(34, 'ER and DB.docx', '', 15, '', '1'),
(37, 'ER and DB.docx', '', 17, '', '1'),
(43, 'last use case.pdf', '', 16, '4', '1');


ALTER TABLE `files`
  ADD PRIMARY KEY (`files_id`);


  ALTER TABLE `files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;