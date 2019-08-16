DROP TABLE IF EXISTS `recovery_keys`;
CREATE TABLE `recovery_keys` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;