CREATE TABLE `partnergroup` (
  `group_id` int(11) NOT NULL,
  `group_number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




ALTER TABLE `partnergroup`
  ADD PRIMARY KEY (`group_id`),
  ADD UNIQUE KEY `group_number` (`group_number`);


  ALTER TABLE `partnergroup`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  

INSERT INTO `partnergroup` (`group_id`, `group_number`) VALUES
(1, 1),
(2, 2),
(3, 3);
