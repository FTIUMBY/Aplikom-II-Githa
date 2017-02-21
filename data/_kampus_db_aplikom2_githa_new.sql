/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.16-MariaDB : Database - _kampus_db_aplikom2_githa_new
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`_kampus_db_aplikom2_githa_new` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `_kampus_db_aplikom2_githa_new`;

/*Table structure for table `tbl_agama` */

DROP TABLE IF EXISTS `tbl_agama`;

CREATE TABLE `tbl_agama` (
  `agama_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `agama_code` char(3) CHARACTER SET latin1 NOT NULL,
  `agama_name` varchar(32) CHARACTER SET latin1 NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`agama_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_agama` */

insert  into `tbl_agama`(`agama_id`,`agama_code`,`agama_name`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,'AG1','Islam','2017-02-20 14:31:43',0,'0000-00-00 00:00:00',0),(2,'AG2','Kristen','2017-02-20 14:31:43',0,'0000-00-00 00:00:00',0),(3,'AG3','Katholik','2017-02-20 14:31:43',0,'0000-00-00 00:00:00',0),(4,'AG4','Hindu','2017-02-20 14:31:43',0,'0000-00-00 00:00:00',0),(5,'AG5','Budha','2017-02-20 14:31:43',0,'0000-00-00 00:00:00',1);

/*Table structure for table `tbl_asal_sekolah` */

DROP TABLE IF EXISTS `tbl_asal_sekolah`;

CREATE TABLE `tbl_asal_sekolah` (
  `sekolah_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sekolah_name` varchar(64) CHARACTER SET latin1 NOT NULL,
  `sekolah_address` text CHARACTER SET latin1 NOT NULL,
  `sekolah_phone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`sekolah_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_asal_sekolah` */

insert  into `tbl_asal_sekolah`(`sekolah_id`,`status`,`sekolah_name`,`sekolah_address`,`sekolah_phone`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,1,'SMP Negeri 1 Yogyakarta','Yogyakarta','','2017-02-21 06:46:58',0,'0000-00-00 00:00:00',0),(2,1,'SMP Negeri 2 Yogyakarta','Yogyakarta','','2017-02-21 06:46:58',0,'0000-00-00 00:00:00',0),(3,1,'SMP Negeri 3 Yogyakarta','Yogyakarta','','2017-02-21 06:46:58',0,'0000-00-00 00:00:00',0),(4,1,'SMP Negeri 4 Yogyakarta','Yogyakarta','','2017-02-21 06:46:58',0,'0000-00-00 00:00:00',0);

/*Table structure for table `tbl_ibu` */

DROP TABLE IF EXISTS `tbl_ibu`;

CREATE TABLE `tbl_ibu` (
  `ibu_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pegawai_id` smallint(5) unsigned DEFAULT NULL,
  `pekerjaan_id` smallint(5) unsigned NOT NULL,
  `agama_id` smallint(5) unsigned NOT NULL,
  `nama_ibu` varchar(64) CHARACTER SET latin1 NOT NULL,
  `kewarganegaraan_i` enum('WNI','WNA') CHARACTER SET latin1 NOT NULL,
  `tingkat_pendidikan_i` enum('SD','SMP','SMA','Sarjana') CHARACTER SET latin1 NOT NULL,
  `alamat_i` text CHARACTER SET latin1 NOT NULL,
  `telepon_i` char(15) CHARACTER SET latin1 NOT NULL,
  `penghasilan_i` int(21) NOT NULL,
  `ttl_i` varchar(50) CHARACTER SET latin1 NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`ibu_id`),
  KEY `kd_pendidikan` (`tingkat_pendidikan_i`),
  KEY `kd_pendidikan_2` (`tingkat_pendidikan_i`),
  KEY `pekerjaan_id` (`pekerjaan_id`),
  KEY `agama_id` (`agama_id`),
  KEY `pegawai_id` (`pegawai_id`),
  CONSTRAINT `tbl_ibu_ibfk_1` FOREIGN KEY (`pekerjaan_id`) REFERENCES `tbl_pekerjaan` (`pekerjaan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_ibu_ibfk_2` FOREIGN KEY (`agama_id`) REFERENCES `tbl_agama` (`agama_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_ibu_ibfk_3` FOREIGN KEY (`pegawai_id`) REFERENCES `tbl_pegawai` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_ibu` */

insert  into `tbl_ibu`(`ibu_id`,`status`,`pegawai_id`,`pekerjaan_id`,`agama_id`,`nama_ibu`,`kewarganegaraan_i`,`tingkat_pendidikan_i`,`alamat_i`,`telepon_i`,`penghasilan_i`,`ttl_i`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,1,NULL,3,1,'ibu','WNI','SD','2','2',899,'ibu','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(2,1,NULL,4,1,'tm','WNI','SMA','Condong Catur','08512345677',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(3,1,NULL,1,5,'tm','WNI','SD','gf','12',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(4,1,NULL,3,4,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(5,1,NULL,4,5,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(6,1,NULL,3,5,'ibu','WNI','SD','jogja','098',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(7,1,NULL,4,5,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(8,1,NULL,4,5,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(9,1,NULL,3,5,'33','WNI','SD','3','3',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(10,1,NULL,3,4,'ibu','WNI','SD','3','3',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(11,1,NULL,1,4,'ibu','WNA','SMP','ibu','ibu',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(12,1,NULL,4,4,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(13,1,NULL,4,4,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(14,1,NULL,4,4,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(15,1,NULL,1,4,'ada','WNI','SD','asd','asd',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(16,1,NULL,1,2,'2','WNI','SD','2','2',2,'2','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(17,1,NULL,1,2,'2','WNI','SD','2','2',2,'2','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(18,1,NULL,1,2,'2','WNI','SD','2','2',2,'2','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0),(19,1,NULL,4,5,'2','WNI','SD','2','2',0,'','2017-02-21 10:59:10',0,'0000-00-00 00:00:00',0);

/*Table structure for table `tbl_nonformal` */

DROP TABLE IF EXISTS `tbl_nonformal`;

CREATE TABLE `tbl_nonformal` (
  `nonformal_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pegawai_id` smallint(5) unsigned DEFAULT NULL,
  `nm_lembaga` varchar(64) NOT NULL,
  `jurusan_nf` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`nonformal_id`),
  KEY `pegawai_id` (`pegawai_id`),
  CONSTRAINT `tbl_nonformal_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `tbl_pegawai` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_nonformal` */

/*Table structure for table `tbl_pegawai` */

DROP TABLE IF EXISTS `tbl_pegawai`;

CREATE TABLE `tbl_pegawai` (
  `pegawai_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `NIP` char(5) CHARACTER SET latin1 NOT NULL,
  `NPSN` int(10) NOT NULL,
  `NIK` int(21) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tahun_ajar_id` smallint(5) unsigned NOT NULL,
  `sekolah_id` smallint(5) unsigned NOT NULL,
  `agama_id` smallint(5) unsigned NOT NULL,
  `nama` varchar(80) CHARACTER SET latin1 NOT NULL,
  `gender` enum('L','P') CHARACTER SET latin1 NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(120) CHARACTER SET latin1 NOT NULL,
  `jumlah_saudara` int(1) NOT NULL,
  `anak_ke` int(1) NOT NULL,
  `tahun_masuk` varchar(9) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(200) CHARACTER SET latin1 NOT NULL,
  `panggilan` varchar(20) CHARACTER SET latin1 NOT NULL,
  `kewarganegaraan_pegawai` varchar(21) CHARACTER SET latin1 NOT NULL,
  `saudara_tiri` varchar(21) CHARACTER SET latin1 NOT NULL,
  `saudara_angkat` varchar(21) CHARACTER SET latin1 NOT NULL,
  `bahasa` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tinggal_dengan` varchar(21) CHARACTER SET latin1 NOT NULL,
  `jarak` varchar(21) CHARACTER SET latin1 NOT NULL,
  `transportasi` varchar(21) CHARACTER SET latin1 NOT NULL,
  `gol_darah` varchar(21) CHARACTER SET latin1 NOT NULL,
  `penyakit` varchar(21) CHARACTER SET latin1 NOT NULL,
  `kelainan_jasmani` varchar(21) CHARACTER SET latin1 NOT NULL,
  `tinggi` int(21) NOT NULL,
  `berat` int(3) NOT NULL,
  `no_telp` int(20) NOT NULL,
  PRIMARY KEY (`pegawai_id`),
  UNIQUE KEY `NIP` (`NIP`),
  KEY `alamat` (`alamat`),
  KEY `alamat_2` (`alamat`),
  KEY `agama_id` (`agama_id`),
  KEY `tahun_ajar_id` (`tahun_ajar_id`),
  KEY `sekolah_id` (`sekolah_id`),
  CONSTRAINT `tbl_pegawai_ibfk_5` FOREIGN KEY (`agama_id`) REFERENCES `tbl_agama` (`agama_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_pegawai_ibfk_6` FOREIGN KEY (`tahun_ajar_id`) REFERENCES `tbl_tahun_ajar` (`tahun_ajar_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_pegawai_ibfk_7` FOREIGN KEY (`sekolah_id`) REFERENCES `tbl_asal_sekolah` (`sekolah_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pegawai` */

insert  into `tbl_pegawai`(`pegawai_id`,`NIP`,`NPSN`,`NIK`,`status`,`tahun_ajar_id`,`sekolah_id`,`agama_id`,`nama`,`gender`,`tempat_lahir`,`tgl_lahir`,`alamat`,`jumlah_saudara`,`anak_ke`,`tahun_masuk`,`gambar`,`panggilan`,`kewarganegaraan_pegawai`,`saudara_tiri`,`saudara_angkat`,`bahasa`,`tinggal_dengan`,`jarak`,`transportasi`,`gol_darah`,`penyakit`,`kelainan_jasmani`,`tinggi`,`berat`,`no_telp`) values (1,'0111',1111,0,1,1,2,5,'tr','L','t','2015-09-09','22',2,2,'2012/2013','','tt','kewarganegaraan','2','2','','2','2','2','O','2','2',2,0,0),(2,'0112',112,0,1,2,2,5,'32','L','3','2015-09-03','3',3,3,'2013/2014','','3','','3','3','','3','3','3','B','3','3',3,0,0),(3,'0201',123,0,1,2,3,4,'tm','L','22','2015-09-10','2',2,2,'2013/2014','','2','2','2','2','','2','2','2','B','2','2',2,0,0),(4,'0202',123,0,1,1,2,4,'2','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','22','2','2','A','2','2',2,0,0),(5,'0203',123,0,1,1,2,4,'2','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','22','2','2','A','2','2',2,0,0),(6,'0204',124,0,1,1,2,4,'2','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','22','2','2','A','2','2',2,0,0),(7,'0301',3011,0,1,1,3,1,'tm','L','t','2015-09-09','22',2,2,'2012/2013','','tm','2','2','2','','2','2','2','A','2','2',2,0,0),(8,'0304',3041,0,1,1,3,1,'rrrr','L','t','2015-09-09','22',2,2,'2012/2013','','tm','2','2','2','','2','2','2','A','2','2',2,0,0),(9,'0305',3051,0,1,3,1,5,'matiuis','L','joga','2015-09-02','jogja',2,2,'2014/2015','4.png','tomy','ina','2','2','','ortu','10 km','bus','A','ayan','ayan',1990,0,0),(10,'0309',3041,0,1,1,3,1,'rrrr','L','t','2015-09-09','22',2,2,'2012/2013','','tm','2','2','2','','2','2','2','A','2','2',2,0,0),(11,'0404',909,0,1,3,1,5,'tm','L','2','2015-09-11','3',3,3,'2014/2015','','tm','3','3','3','','3','3','3','A','3','3',3,0,0),(12,'0405',909,0,1,3,1,5,'tm','L','2','2015-09-11','3',3,3,'2014/2015','','tm','3','3','3','','3','3','3','A','3','3',3,0,0),(13,'0501',5011,0,1,1,1,4,'matius','L','jogja','2015-09-03','jogja',2,2,'2012/2013','','tomy','WNI','2','2','','ortu','10 km','bus','O','tidak','tidak',190,0,0),(14,'0502',5021,0,1,1,2,4,'ada','L','2','2015-09-03','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(15,'0503',5021,0,1,1,2,4,'ada','L','2','2015-09-03','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(16,'0504',5021,0,1,1,2,4,'ada','L','2','2015-09-03','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(17,'0505',5051,0,1,1,1,5,'DAND','L','2','2015-09-08','d',0,0,'2012/2013','','ADad','adsd','d','d','','d','dad','dad','A','dawd','d',0,0,0),(18,'0601',6011,6012,1,1,2,5,'tm','L','2','2015-09-09','2',2,2,'2012/2013','','tm','2','2','2','','2','2','2','A','2','2',2,0,0),(19,'1710',17111,17112,1,1,1,4,'tm','L','2','2015-09-08','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(20,'1711',17111,17112,1,1,1,5,'tm','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(21,'1721',17111,17112,1,1,1,5,'tm edit','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(22,'1890',17111,17112,1,1,1,5,'tm','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(23,'1891',17111,17112,1,1,1,5,'tm','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(24,'1892',17111,17112,1,1,1,5,'tm','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(25,'1893',17111,17112,1,1,1,5,'tm','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0),(26,'1894',17111,17112,1,1,1,5,'tm','L','2','2015-09-02','2',2,2,'2012/2013','','2','2','2','2','','2','2','2','A','2','2',2,0,0);

/*Table structure for table `tbl_pekerjaan` */

DROP TABLE IF EXISTS `tbl_pekerjaan`;

CREATE TABLE `tbl_pekerjaan` (
  `pekerjaan_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pekerjaan_code` char(3) NOT NULL,
  `pekerjaan_name` varchar(30) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`pekerjaan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pekerjaan` */

insert  into `tbl_pekerjaan`(`pekerjaan_id`,`status`,`pekerjaan_code`,`pekerjaan_name`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,1,'P01','Pegawai Negeri','2017-02-21 07:12:00',0,'0000-00-00 00:00:00',0),(2,1,'P02','Wira Swasta','2017-02-21 07:12:00',0,'0000-00-00 00:00:00',0),(3,1,'P03','Lain-lain','2017-02-21 07:12:00',0,'0000-00-00 00:00:00',0),(4,1,'P04','Pegawai Swasta','2017-02-21 07:12:00',0,'0000-00-00 00:00:00',0);

/*Table structure for table `tbl_pendidikan` */

DROP TABLE IF EXISTS `tbl_pendidikan`;

CREATE TABLE `tbl_pendidikan` (
  `pendidikan_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `pegawai_id` smallint(5) unsigned DEFAULT NULL,
  `sd_nama` varchar(11) CHARACTER SET latin1 NOT NULL,
  `sd_tahun_mulai` int(4) NOT NULL,
  `sd_tahun_akhir` int(4) NOT NULL,
  `smp_nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `smp_tahun_mulai` int(4) NOT NULL,
  `smp_tahun_akhir` int(4) NOT NULL,
  `sma_nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `sma_tahun_mulai` int(4) NOT NULL,
  `sma_tahun_akhir` int(4) NOT NULL,
  `sma_jurusan` varchar(25) CHARACTER SET latin1 NOT NULL,
  `sj_nama` varchar(25) CHARACTER SET latin1 NOT NULL,
  `sj_tahun_mulai` int(4) NOT NULL,
  `sj_tahun_akhir` int(4) NOT NULL,
  `sj_jurusan` varchar(25) CHARACTER SET latin1 NOT NULL,
  `pc_nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `pc_tahun_mulai` int(11) NOT NULL,
  `pc_tahun_akhir` int(11) NOT NULL,
  `pc_jurusan` varchar(25) CHARACTER SET latin1 NOT NULL,
  `dk_nama` varchar(11) CHARACTER SET latin1 NOT NULL,
  `dk_tahun_mulai` int(11) NOT NULL,
  `dk_tahun_akhir` int(11) NOT NULL,
  `dk_jurusan` varchar(25) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`pendidikan_id`),
  KEY `pegawai_id` (`pegawai_id`),
  CONSTRAINT `tbl_pendidikan_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `tbl_pegawai` (`pegawai_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_pendidikan` */

/*Table structure for table `tbl_tahun_ajar` */

DROP TABLE IF EXISTS `tbl_tahun_ajar`;

CREATE TABLE `tbl_tahun_ajar` (
  `tahun_ajar_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tahun_ajar` varchar(9) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`tahun_ajar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_tahun_ajar` */

insert  into `tbl_tahun_ajar`(`tahun_ajar_id`,`status`,`tahun_ajar`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,1,'2012/2013','2017-02-20 23:17:11',0,'0000-00-00 00:00:00',0),(2,1,'2013/2014','2017-02-20 23:17:11',0,'0000-00-00 00:00:00',0),(3,1,'2014/2015','2017-02-20 23:17:11',0,'0000-00-00 00:00:00',0),(4,1,'2015/2016','2017-02-20 23:17:11',0,'0000-00-00 00:00:00',0),(5,1,'2016/2017','2017-02-20 23:17:11',0,'0000-00-00 00:00:00',0);

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `level_id` smallint(5) unsigned NOT NULL,
  `username` varchar(32) CHARACTER SET latin1 NOT NULL,
  `user_password` varchar(32) CHARACTER SET latin1 NOT NULL,
  `displayname` varchar(64) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `level_id` (`level_id`),
  CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `tbl_user_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`user_id`,`status`,`level_id`,`username`,`user_password`,`displayname`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,1,1,'githa','8d1169d1e270203727cc8d61f9b40452','Githa Cantik','2017-02-20 13:42:25',0,'0000-00-00 00:00:00',0);

/*Table structure for table `tbl_user_level` */

DROP TABLE IF EXISTS `tbl_user_level`;

CREATE TABLE `tbl_user_level` (
  `level_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `level_name` varchar(32) NOT NULL,
  `level_desc` text NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'trigger',
  `creation_id` smallint(5) unsigned NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'trigger',
  `modified_id` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_user_level` */

insert  into `tbl_user_level`(`level_id`,`status`,`level_name`,`level_desc`,`creation_date`,`creation_id`,`modified_date`,`modified_id`) values (1,1,'Administrator','Administrator','2017-02-20 13:05:43',0,'0000-00-00 00:00:00',0),(2,1,'Petugas','Petugas','2017-02-20 13:11:59',0,'0000-00-00 00:00:00',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
