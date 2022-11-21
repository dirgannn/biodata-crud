create database siswsrpl;

use siswsrpl;

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tgl_lahir` char(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `no_hp` CHAR(14) NOT NULL,  
  `kelas` varchar(5) NOT NULL,  
  PRIMARY KEY  (`id`)
);