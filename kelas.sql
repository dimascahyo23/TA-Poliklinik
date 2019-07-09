/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - kelas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kelas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `kelas`;

/*Table structure for table `tbl_inventori` */

DROP TABLE IF EXISTS `tbl_inventori`;

CREATE TABLE `tbl_inventori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(20) DEFAULT NULL,
  `total_barang` int(11) DEFAULT NULL,
  `kondisi_barang` enum('Bagus','Rusak') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_inventori` */

insert  into `tbl_inventori`(`id`,`nama_barang`,`total_barang`,`kondisi_barang`) values 
(1,'Kursi',26,'Bagus'),
(3,'Meja',13,'Bagus');

/*Table structure for table `tbl_master_kelas` */

DROP TABLE IF EXISTS `tbl_master_kelas`;

CREATE TABLE `tbl_master_kelas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(20) DEFAULT NULL,
  `nama_sekolah` varchar(30) DEFAULT NULL,
  `alamat_sekolah` varchar(255) DEFAULT NULL,
  `website_sekolah` varchar(100) DEFAULT NULL,
  `email_sekolah` varchar(30) DEFAULT NULL,
  `total_siswa` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(9) DEFAULT NULL,
  `semester` enum('I','II') DEFAULT NULL,
  `wali_kelas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_master_kelas` */

insert  into `tbl_master_kelas`(`id`,`nama_kelas`,`nama_sekolah`,`alamat_sekolah`,`website_sekolah`,`email_sekolah`,`total_siswa`,`tahun_ajaran`,`semester`,`wali_kelas`) values 
(1,'11 TKI A','SMK N 1 Wanareja','JL. SRIKAYA WANAREJA, Wanareja, Kec. Wanareja, Kab. Cilacap Prov. Jawa Tengah','http://smkn1wanareja.sch.id','email@email.com',2,'2018/2019','II','Galan Kiswanto');

/*Table structure for table `tbl_siswa` */

DROP TABLE IF EXISTS `tbl_siswa`;

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(30) DEFAULT NULL,
  `alamat_siswa` varchar(100) DEFAULT NULL,
  `nis_siswa` int(11) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_siswa` */

insert  into `tbl_siswa`(`id`,`nama_siswa`,`alamat_siswa`,`nis_siswa`,`jenis_kelamin`,`tanggal_lahir`,`tempat_lahir`) values 
(1,'Fakhrul Fanani Nugroho','Indonesia, Jawa Tengah, Cilacap',6315,'L','2002-07-15','Cilacap'),
(3,'Fakhrul Fanani N','Sidareja, Cilacap',1234,'L','2019-02-02','Cilacap');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`username`,`password`) values 
(1,'admin123','$2y$10$fE9etyNPfnTkq29YHOacZeRXmV63Bh/FBEjJar5xBx/8yxBcnQ4GK');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
