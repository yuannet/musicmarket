# Host: localhost  (Version 5.5.5-10.1.21-MariaDB)
# Date: 2019-06-28 15:38:04
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `nama` varchar(255) NOT NULL DEFAULT '',
  `alamat` varchar(255) NOT NULL DEFAULT '',
  `kodepos` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `jk` varchar(255) NOT NULL DEFAULT '',
  `telpon` varchar(255) NOT NULL DEFAULT '',
  `tmpt_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) NOT NULL DEFAULT '',
  `level` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (13,'brian48','brian','Griya Asgri Serpong','15315','perempuan','brianangga.p@gmail.com','085888279619','Jakarta','27 Feb 1993','user','827ccb0eea8a706c4c34a16891f84e7b'),(14,'brian48','rere','wdewrwer','wrwrw','perempuan','wrwr','wr','wrwer','wrwr','user','');
