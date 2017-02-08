-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2017 at 03:27 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bukuinduktamansiswa`
--
CREATE DATABASE IF NOT EXISTS `bukuinduktamansiswa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bukuinduktamansiswa`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE IF NOT EXISTS `tbl_agama` (
  `kd_agama` char(3) NOT NULL,
  `agama` varchar(15) NOT NULL,
  PRIMARY KEY (`kd_agama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`kd_agama`, `agama`) VALUES
('AG1', 'Islam'),
('AG2', 'Kristen'),
('AG3', 'Katholik'),
('AG4', 'Hindu'),
('AG5', 'Budha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asal_sekolah`
--

CREATE TABLE IF NOT EXISTS `tbl_asal_sekolah` (
  `kd_sekolah` int(4) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  PRIMARY KEY (`kd_sekolah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_asal_sekolah`
--

INSERT INTO `tbl_asal_sekolah` (`kd_sekolah`, `nama_sekolah`, `alamat`) VALUES
(1, 'SMP Negeri 1 Yogyakarta', 'Yogyakarta'),
(2, 'SMP Negeri 2 Yogyakarta', 'Yogyakarta'),
(3, 'SMP Negeri 3 Yogyakarta', 'Yogyakarta'),
(4, 'SMP Negeri 4 Yogyakarta', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ibu`
--

CREATE TABLE IF NOT EXISTS `tbl_ibu` (
  `kd_ibu` char(5) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `kd_agama_i` char(3) NOT NULL,
  `kewarganegaraan_i` enum('WNI','WNA') NOT NULL,
  `tingkat_pendidikan_i` enum('SD','SMP','SMA','Sarjana') NOT NULL,
  `kd_pekerjaan_i` char(3) NOT NULL,
  `alamat_i` varchar(150) NOT NULL,
  `telepon_i` char(12) NOT NULL,
  `penghasilan_i` int(21) NOT NULL,
  `ttl_i` varchar(50) NOT NULL,
  `NIP` int(5) NOT NULL,
  PRIMARY KEY (`kd_ibu`),
  KEY `kd_pekerjaan` (`kd_pekerjaan_i`),
  KEY `kd_agama` (`kd_agama_i`),
  KEY `no_induk` (`kd_ibu`),
  KEY `kd_pendidikan` (`tingkat_pendidikan_i`),
  KEY `kd_pekerjaan_2` (`kd_pekerjaan_i`),
  KEY `no_induk_2` (`kd_ibu`),
  KEY `kd_pendidikan_2` (`tingkat_pendidikan_i`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ibu`
--

INSERT INTO `tbl_ibu` (`kd_ibu`, `nama_ibu`, `kd_agama_i`, `kewarganegaraan_i`, `tingkat_pendidikan_i`, `kd_pekerjaan_i`, `alamat_i`, `telepon_i`, `penghasilan_i`, `ttl_i`, `NIP`) VALUES
('0101', 'ibu', 'AG1', 'WNI', 'SD', 'P03', '2', '2', 899, 'ibu', 0),
('0102', 'tm', 'AG1', 'WNI', 'SMA', 'P04', 'Condong Catur', '08512345677', 0, '', 0),
('0103', 'tm', 'AG5', 'WNI', 'SD', 'P01', 'gf', '12', 0, '', 0),
('0104', '2', 'AG4', 'WNI', 'SD', 'P03', '2', '2', 0, '', 0),
('0304', '2', 'AG5', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0),
('0305', 'ibu', 'AG5', 'WNI', 'SD', 'P03', 'jogja', '098', 0, '', 0),
('03078', '2', 'AG5', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0),
('0309', '2', 'AG5', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0),
('0404', '33', 'AG5', 'WNI', 'SD', 'P03', '3', '3', 0, '', 0),
('0405', 'ibu', 'AG4', 'WNI', 'SD', 'P03', '3', '3', 0, '', 0),
('0501', 'ibu', 'AG4', 'WNA', 'SMP', 'P01', 'ibu', 'ibu', 0, '', 0),
('0502', '2', 'AG4', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0),
('0503', '2', 'AG4', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0),
('0504', '2', 'AG4', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0),
('0505', 'ada', 'AG4', 'WNI', 'SD', 'P01', 'asd', 'asd', 0, '', 0),
('1721', '2', 'AG2', 'WNI', 'SD', 'P01', '2', '2', 2, '2', 0),
('1893', '2', 'AG2', 'WNI', 'SD', 'P01', '2', '2', 2, '2', 0),
('1894', '2', 'AG2', 'WNI', 'SD', 'P01', '2', '2', 2, '2', 0),
('6546', '2', 'AG5', 'WNI', 'SD', 'P04', '2', '2', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonformal`
--

CREATE TABLE IF NOT EXISTS `tbl_nonformal` (
  `kd_non_formal` int(30) NOT NULL,
  `nm_lembaga` text NOT NULL,
  `jurusan_nf` text NOT NULL,
  `NIP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `NIP` char(5) NOT NULL,
  `NPSN` int(10) NOT NULL,
  `NIK` int(21) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kd_pegawai` int(4) NOT NULL,
  `kd_agama` char(3) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `kd_sekolah` int(4) NOT NULL,
  `jumlah_saudara` int(1) NOT NULL,
  `anak_ke` int(1) NOT NULL,
  `tahun_masuk` varchar(9) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `panggilan` varchar(20) NOT NULL,
  `kewarganegaraan_pegawai` varchar(21) NOT NULL,
  `saudara_tiri` varchar(21) NOT NULL,
  `saudara_angkat` varchar(21) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `tinggal_dengan` varchar(21) NOT NULL,
  `jarak` varchar(21) NOT NULL,
  `transportasi` varchar(21) NOT NULL,
  `gol_darah` varchar(21) NOT NULL,
  `penyakit` varchar(21) NOT NULL,
  `kelainan_jasmani` varchar(21) NOT NULL,
  `tinggi` int(21) NOT NULL,
  `berat` int(3) NOT NULL,
  `kd_pendidikan` int(11) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `kd_ibu` int(5) NOT NULL,
  PRIMARY KEY (`NIP`),
  UNIQUE KEY `NIP` (`NIP`),
  KEY `alamat` (`alamat`),
  KEY `kd_agama` (`kd_agama`),
  KEY `kd_sekolah` (`kd_sekolah`),
  KEY `alamat_2` (`alamat`),
  KEY `kd_tahun_ajar` (`kd_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`NIP`, `NPSN`, `NIK`, `nama`, `gender`, `tempat_lahir`, `tgl_lahir`, `kd_pegawai`, `kd_agama`, `alamat`, `kd_sekolah`, `jumlah_saudara`, `anak_ke`, `tahun_masuk`, `gambar`, `panggilan`, `kewarganegaraan_pegawai`, `saudara_tiri`, `saudara_angkat`, `bahasa`, `tinggal_dengan`, `jarak`, `transportasi`, `gol_darah`, `penyakit`, `kelainan_jasmani`, `tinggi`, `berat`, `kd_pendidikan`, `no_telp`, `kd_ibu`) VALUES
('0111', 1111, 0, 'tr', 'L', 't', '2015-09-09', 1, 'AG5', '22', 2, 2, 2, '2012/2013', '', 'tt', 'kewarganegaraan', '2', '2', '', '2', '2', '2', 'O', '2', '2', 2, 0, 0, 0, 0),
('0112', 112, 0, '32', 'L', '3', '2015-09-03', 2, 'AG5', '3', 2, 3, 3, '2013/2014', '', '3', '', '3', '3', '', '3', '3', '3', 'B', '3', '3', 3, 0, 0, 0, 0),
('0201', 123, 0, 'tm', 'L', '22', '2015-09-10', 2, 'AG4', '2', 3, 2, 2, '2013/2014', '', '2', '2', '2', '2', '', '2', '2', '2', 'B', '2', '2', 2, 0, 0, 0, 0),
('0202', 123, 0, '2', 'L', '2', '2015-09-02', 1, 'AG4', '2', 2, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '22', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0203', 123, 0, '2', 'L', '2', '2015-09-02', 1, 'AG4', '2', 2, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '22', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0204', 124, 0, '2', 'L', '2', '2015-09-02', 1, 'AG4', '2', 2, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '22', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0301', 3011, 0, 'tm', 'L', 't', '2015-09-09', 1, 'AG1', '22', 3, 2, 2, '2012/2013', '', 'tm', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0304', 3041, 0, 'rrrr', 'L', 't', '2015-09-09', 1, 'AG1', '22', 3, 2, 2, '2012/2013', '', 'tm', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0305', 3051, 0, 'matiuis', 'L', 'joga', '2015-09-02', 3, 'AG5', 'jogja', 1, 2, 2, '2014/2015', '4.png', 'tomy', 'ina', '2', '2', '', 'ortu', '10 km', 'bus', 'A', 'ayan', 'ayan', 1990, 0, 0, 0, 0),
('0309', 3041, 0, 'rrrr', 'L', 't', '2015-09-09', 1, 'AG1', '22', 3, 2, 2, '2012/2013', '', 'tm', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0404', 909, 0, 'tm', 'L', '2', '2015-09-11', 3, 'AG5', '3', 1, 3, 3, '2014/2015', '', 'tm', '3', '3', '3', '', '3', '3', '3', 'A', '3', '3', 3, 0, 0, 0, 0),
('0405', 909, 0, 'tm', 'L', '2', '2015-09-11', 3, 'AG5', '3', 1, 3, 3, '2014/2015', '', 'tm', '3', '3', '3', '', '3', '3', '3', 'A', '3', '3', 3, 0, 0, 0, 0),
('0501', 5011, 0, 'matius', 'L', 'jogja', '2015-09-03', 1, 'AG4', 'jogja', 1, 2, 2, '2012/2013', '', 'tomy', 'WNI', '2', '2', '', 'ortu', '10 km', 'bus', 'O', 'tidak', 'tidak', 190, 0, 0, 0, 0),
('0502', 5021, 0, 'ada', 'L', '2', '2015-09-03', 1, 'AG4', '2', 2, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0503', 5021, 0, 'ada', 'L', '2', '2015-09-03', 1, 'AG4', '2', 2, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0504', 5021, 0, 'ada', 'L', '2', '2015-09-03', 1, 'AG4', '2', 2, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('0505', 5051, 0, 'DAND', 'L', '2', '2015-09-08', 1, 'AG5', 'd', 1, 0, 0, '2012/2013', '', 'ADad', 'adsd', 'd', 'd', '', 'd', 'dad', 'dad', 'A', 'dawd', 'd', 0, 0, 0, 0, 0),
('0601', 6011, 6012, 'tm', 'L', '2', '2015-09-09', 1, 'AG5', '2', 2, 2, 2, '2012/2013', '', 'tm', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1710', 17111, 17112, 'tm', 'L', '2', '2015-09-08', 1, 'AG4', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1711', 17111, 17112, 'tm', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1721', 17111, 17112, 'tm edit', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1890', 17111, 17112, 'tm', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1891', 17111, 17112, 'tm', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1892', 17111, 17112, 'tm', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1893', 17111, 17112, 'tm', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0),
('1894', 17111, 17112, 'tm', 'L', '2', '2015-09-02', 1, 'AG5', '2', 1, 2, 2, '2012/2013', '', '2', '2', '2', '2', '', '2', '2', '2', 'A', '2', '2', 2, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `kd_pekerjaan` char(3) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_pekerjaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`kd_pekerjaan`, `pekerjaan`) VALUES
('P01', 'Pegawai Negeri'),
('P02', 'Wira Swasta'),
('P03', 'Lain-lain'),
('P04', 'Pegawai Swasta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendidikan`
--

CREATE TABLE IF NOT EXISTS `tbl_pendidikan` (
  `kd_pendidikan` char(3) NOT NULL,
  `sd_nama` varchar(11) NOT NULL,
  `sd_tahun_mulai` int(4) NOT NULL,
  `sd_tahun_akhir` int(4) NOT NULL,
  `smp_nama` varchar(30) NOT NULL,
  `smp_tahun_mulai` int(4) NOT NULL,
  `smp_tahun_akhir` int(4) NOT NULL,
  `sma_nama` varchar(30) NOT NULL,
  `sma_tahun_mulai` int(4) NOT NULL,
  `sma_tahun_akhir` int(4) NOT NULL,
  `sma_jurusan` varchar(25) NOT NULL,
  `sj_nama` varchar(25) NOT NULL,
  `sj_tahun_mulai` int(4) NOT NULL,
  `sj_tahun_akhir` int(4) NOT NULL,
  `sj_jurusan` varchar(25) NOT NULL,
  `pc_nama` varchar(30) NOT NULL,
  `pc_tahun_mulai` int(11) NOT NULL,
  `pc_tahun_akhir` int(11) NOT NULL,
  `pc_jurusan` varchar(25) NOT NULL,
  `dk_nama` varchar(11) NOT NULL,
  `dk_tahun_mulai` int(11) NOT NULL,
  `dk_tahun_akhir` int(11) NOT NULL,
  `dk_jurusan` varchar(25) NOT NULL,
  PRIMARY KEY (`kd_pendidikan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_ajar`
--

CREATE TABLE IF NOT EXISTS `tbl_tahun_ajar` (
  `kd_tahun_ajar` int(4) NOT NULL AUTO_INCREMENT,
  `tahun_ajar` varchar(9) NOT NULL,
  PRIMARY KEY (`kd_tahun_ajar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_tahun_ajar`
--

INSERT INTO `tbl_tahun_ajar` (`kd_tahun_ajar`, `tahun_ajar`) VALUES
(1, '2012/2013'),
(2, '2013/2014'),
(3, '2014/2015'),
(4, '2015/2016'),
(5, '2016/2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_name` varchar(35) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('admin','petugas') NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_name`, `pass`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('petugas', '827ccb0eea8a706c4c34a16891f84e7b', 'petugas');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD CONSTRAINT `tbl_pegawai_ibfk_2` FOREIGN KEY (`kd_agama`) REFERENCES `tbl_agama` (`kd_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pegawai_ibfk_3` FOREIGN KEY (`kd_sekolah`) REFERENCES `tbl_asal_sekolah` (`kd_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pegawai_ibfk_4` FOREIGN KEY (`kd_pegawai`) REFERENCES `tbl_tahun_ajar` (`kd_tahun_ajar`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
