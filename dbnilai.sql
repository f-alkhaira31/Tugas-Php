/*
SQLyog Enterprise v10.42 
MySQL - 5.5.5-10.1.19-MariaDB : Database - nilai
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nilai` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nilai`;

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

insert  into `dosen`(`id`,`nama`,`jenis_kelamin`,`no_hp`) values ('121212','maksum','L','08123456789');

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `jurusan` enum('Administrasi Bisnis','Komputerisasi Akuntansi','Hubungan Masyarakat','Manajemen Informatika') NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`nim`,`nama`,`jenis_kelamin`,`jurusan`,`kelas`,`no_hp`) values ('2018202005','fathiya al khaira','P','Manajemen Informatika','MI2S','081268034723'),('2018202007','hendrik ari purna irawan','L','Komputerisasi Akuntansi','AK3','082296999166');

/*Table structure for table `matkul` */

DROP TABLE IF EXISTS `matkul`;

CREATE TABLE `matkul` (
  `id_matkul` varchar(10) NOT NULL,
  `nama_matkul` text,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `matkul` */

insert  into `matkul`(`id_matkul`,`nama_matkul`) values ('12343','database');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `nim` varchar(10) NOT NULL,
  `id_matkul` varchar(100) NOT NULL,
  `semester` enum('1','2','3','4') DEFAULT NULL,
  `nilai_tugas` float DEFAULT NULL,
  `nilai_quiz` float DEFAULT NULL,
  `nilai_uts` float DEFAULT NULL,
  `nilai_uas` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`nim`,`id_matkul`,`semester`,`nilai_tugas`,`nilai_quiz`,`nilai_uts`,`nilai_uas`) values ('20202009','11111','1',80,70,80,80),('2018202002','11111','4',12,14,21,56),('2018202002','11111','4',12,14,21,56),('2018202002','11111','4',12,14,21,56);

/*Table structure for table `pengajar` */

DROP TABLE IF EXISTS `pengajar`;

CREATE TABLE `pengajar` (
  `id` varchar(10) NOT NULL,
  `id_matkul` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengajar` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `nama` text NOT NULL,
  `tingkatan_user` enum('Admin','Operator') NOT NULL,
  `password` text NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`user_name`,`nama`,`tingkatan_user`,`password`,`no_hp`) values ('1122','1122','Ari Hidayatullah','Operator','12345','082298990182'),('12345','12345','Hendrik Ari Purna Irawan','Admin','123456','082296999166');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
