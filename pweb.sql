/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.23-log : Database - pwb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pwb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pwb`;

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `filename` varchar(200) NOT NULL,
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `tanggal_kegiatan` date DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `dana` tinyint(1) DEFAULT NULL,
  `acc` tinyint(1) DEFAULT '1',
  `email` varchar(20) DEFAULT NULL,
  `nama_kegiatan` varchar(50) DEFAULT NULL,
  `catatan1` varchar(160) DEFAULT 'Tidak ada catatan',
  `catatan2` varchar(160) DEFAULT 'Tidak ada catatan',
  `catatan3` varchar(160) DEFAULT 'Tidak ada catatan',
  UNIQUE KEY `id` (`id`),
  KEY `FK_files` (`email`),
  CONSTRAINT `FK_files` FOREIGN KEY (`email`) REFERENCES `member` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `files` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `email` varchar(100) NOT NULL,
  `password` text,
  `category` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(`email`,`password`,`category`,`nama`,`alamat`,`no_telp`) values ('a@a.a','74b87337454200d4d33f80c4663dc5e5','Dosen','umy','apa','083862761541'),('coba@coba.coba','c3ec0f7b054e729c5a716c8125839829','Dosen','Umy Chasanah Noor Rizqi','Kudus','083862761541'),('coba@yahoo.com','c3ec0f7b054e729c5a716c8125839829',NULL,'Bagas','Perumdos','085740389330'),('dwis@gmail.com','f17916ae60bfcdcca73f8dc45a8e78fb',NULL,'Dwi Sunaryono','Surabaya','08123123'),('naniks@gmail.com','cd6c50ff8dab1991918a88b90e1ac87d',NULL,'Nanik Suciati','Surabaya','089764'),('raditiyo@gmail.com','c57617b68ec5be98dae84add18999ac7',NULL,'Raditiyo Anggoro','Surabaya','0987'),('radityo@gmail.com','c57617b68ec5be98dae84add18999ac7',NULL,'Radityo Anggoro','Surabaya','0987'),('umy.rizqi@gmail.com','b7615422f5a2bd53e513d8067e7b41a9','Dosen','Umy Chasanah Noor Rizqi','Kudus','083862761541');

/*Table structure for table `membership` */

DROP TABLE IF EXISTS `membership`;

CREATE TABLE `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(25) NOT NULL,
  `nama_belakang` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `membership` */

insert  into `membership`(`id`,`nama_depan`,`nama_belakang`,`username`,`password`,`email_address`) values (1,'darul','abror','darul','ea403335569bdb5a7be022857083d3a5','bapakdarul@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
