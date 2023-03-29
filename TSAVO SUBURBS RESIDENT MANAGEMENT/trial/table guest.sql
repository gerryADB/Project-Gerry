CREATE TABLE `guest` (
  `GUID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(100) NOT NULL,
  `APT_BLOCK` varchar(10) NOT NULL,
  `APT_NUM` varchar(5) NOT NULL,
  `REASON` text NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `DATE_OE` varchar(15) NOT NULL,
  `TIME_OE` varchar(15) NOT NULL,
  PRIMARY KEY (`GUID`)
);
