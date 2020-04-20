CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `seen_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `seen_status`) VALUES
(1, 'nikhusnee', 'uma', 1),
(13, 'neovic', 'devierte', 1),
(14, 'lee', 'ann', 1),
(15, 'julyn', 'divinagrac', 1),
(16, 'koko', 'koko', 1),
(17, 'koko', 'uma', 1),
(18, 'tt', 'uma', 1),
(19, 'hhh', 'lll', 1);

ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

  ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;