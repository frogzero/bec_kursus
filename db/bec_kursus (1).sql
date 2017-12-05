-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 04:56 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bec_kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `email_admin` varchar(30) NOT NULL,
  `password_admin` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `password_admin`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE IF NOT EXISTS `instruktur` (
  `id_instruktur` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instruktur` varchar(50) NOT NULL,
  `password_instruktur` varchar(50) NOT NULL,
  `ttl_instruktur` date NOT NULL,
  `alamat_instruktur` text NOT NULL,
  `agama_instruktur` enum('islam','kristen','khatolik','hindu','budha','dll') NOT NULL,
  `email_instruktur` varchar(30) NOT NULL,
  `jenis_kelamin_instruktur` enum('laki_laki','perempuan') NOT NULL,
  `no_hp_instruktur` varchar(30) NOT NULL,
  `foto_instruktur` varchar(30) NOT NULL,
  PRIMARY KEY (`id_instruktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id_instruktur`, `nama_instruktur`, `password_instruktur`, `ttl_instruktur`, `alamat_instruktur`, `agama_instruktur`, `email_instruktur`, `jenis_kelamin_instruktur`, `no_hp_instruktur`, `foto_instruktur`) VALUES
(2, 'arys', '213213', '2017-08-09', 'jogja', 'islam', 'arys@gmail.com', 'laki_laki', '0929292', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` int(11) NOT NULL,
  `id_instruktur` int(11) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_siswa`, `id_instruktur`, `jam`, `hari`, `id_kelas`) VALUES
(1, 1, 2, '10.00', 'Senin', 1),
(2, 2, 2, '10:10', 'Rabu', 2),
(3, 1, 2, '10:10', 'Selasa', 1),
(4, 2, 2, '14:00', 'Selasa', 2),
(5, 1, 2, '13.10', 'Selasa', 1),
(6, 2, 2, '10:10', 'Selasa', 1),
(7, 3, 2, '13.10', 'Rabu', 1),
(8, 0, 0, '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(60) NOT NULL,
  `id_paket` int(11) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_paket`) VALUES
(1, 'Kelas A', 19),
(2, 'Kelas B', 23),
(3, 'Kelas C', 10),
(4, 'Kelas D', 20);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`) VALUES
(8, 'EFC (English for Children) untuk siswa-siswa SD/MI kelas 1 s.d kelas 6.'),
(9, 'EEC (Elementary English Course) untuk siswa-siswa SMP/MTs kelas 7 s.d kelas 9'),
(10, 'MBE (Mastering Basic English) untuk siswa-siswa SMA/SMK kelas 10 s.d kelas 12'),
(11, 'MSE (Mastering Speaking English) untuk siswa-siswa SMA/SMK kelas 10 s.d kelas 12'),
(12, 'TOEIC (Test of English as International Communication) untuk siswa-siswa SMK'),
(13, 'TOEFL (Test of English Foreign Language) untuk SMA/ Mahasiswa/ S1 dan S2'),
(14, 'ECP (English for Carrier Program) untuk lulusan SMA/SMK/ Universitas'),
(15, 'DC ( Dinamic Conversation ) untuk umum yang hendak bekerja ke Luar Negeri dan Berlayar'),
(16, 'One Student, One Teacher'),
(17, 'Program Bimbel UN untuk siswa SMP/MTS kelas 9'),
(18, 'Program Bimbel UN untuk siswa SMA/MA Kelas 12'),
(19, 'Program Bimbel UN untuk siswa SMK(SMEA/STM) kelas 12'),
(20, 'Program ini untuk siswa Lulusan SMA/SMK yang ingin melanjutkan ke PTN/PTS/ STAN/ STIS'),
(21, 'Untuk masyarakat UMUM, yang hendak melanjutkan study ke Luar Negeri'),
(22, 'Program MS. OFFICE (Ms. Word, Ms. Excell, Ms. PowerPoint)'),
(23, 'Program Desain Grafis (Corel Draw & Photo Shop)'),
(24, 'Program Teknisi Komputer (Perakitan, Perbaikan, Instalasi/ Pemrograman)'),
(25, 'Program Editing Video Shooting');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `id_paket` int(11) NOT NULL,
  `jenis` enum('bimbel','kursus') NOT NULL,
  `kategori` enum('private','umum','reguler') NOT NULL,
  `biaya` int(11) NOT NULL,
  `lama` int(11) NOT NULL,
  `waktu` enum('pertemuan','bulan') NOT NULL,
  PRIMARY KEY (`id_program`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `id_paket`, `jenis`, `kategori`, `biaya`, `lama`, `waktu`) VALUES
(1, 8, 'kursus', 'reguler', 300000, 6, 'bulan'),
(2, 8, 'kursus', 'reguler', 150000, 3, 'bulan'),
(3, 9, 'kursus', 'reguler', 300000, 6, 'bulan'),
(4, 8, 'kursus', 'reguler', 150000, 3, 'bulan'),
(5, 10, 'kursus', 'reguler', 300000, 6, 'bulan'),
(6, 10, 'kursus', 'reguler', 150000, 3, 'bulan'),
(7, 11, 'kursus', 'reguler', 300000, 6, 'bulan'),
(8, 11, 'kursus', 'reguler', 150000, 3, 'bulan'),
(9, 12, 'kursus', 'reguler', 300000, 6, 'bulan'),
(10, 12, 'kursus', 'reguler', 150000, 3, 'bulan'),
(11, 13, 'kursus', 'reguler', 300000, 3, 'bulan'),
(12, 14, 'kursus', 'reguler', 300000, 2, 'bulan'),
(13, 15, 'kursus', 'reguler', 300000, 1, 'bulan'),
(14, 16, 'kursus', 'private', 300000, 1, 'bulan'),
(15, 17, 'bimbel', 'reguler', 300000, 3, 'bulan'),
(16, 18, 'bimbel', 'reguler', 300000, 3, 'bulan'),
(17, 19, 'bimbel', 'reguler', 300000, 3, 'bulan'),
(18, 20, 'bimbel', 'reguler', 300000, 1, 'bulan'),
(19, 21, 'kursus', 'private', 400000, 1, 'bulan'),
(20, 22, 'kursus', 'private', 400000, 8, 'pertemuan'),
(21, 23, 'kursus', 'private', 600000, 10, 'pertemuan'),
(22, 24, 'kursus', 'private', 800000, 11, 'pertemuan'),
(23, 25, 'kursus', 'private', 1000000, 11, 'pertemuan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `agama` enum('islam','kristen','katolik','hindu','budha','dll') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` enum('laki_laki','perempuan') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `jenjang` enum('SD','SMP','SMA/SMK','Umum') NOT NULL,
  `status` enum('Baru','Aktif','Lulus') NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_program`, `nama`, `password`, `ttl`, `agama`, `alamat`, `email`, `jk`, `no_telp`, `jenjang`, `status`, `tanggal_daftar`, `foto`) VALUES
(1, 19, 'Arys', 'adsas', '1992-01-22', 'kristen', 'asds', 'sda@sda', 'laki_laki', 'asd', 'SD', 'Aktif', '2017-08-10', NULL),
(2, 19, 'eko', '123', '1998-04-14', 'islam', 'Jalan jalan', 'eko.rme@gmail.com', 'laki_laki', '1234567', 'Umum', 'Aktif', '2017-08-16', NULL),
(3, 5, 'jon lenon', '12345678', '1998-03-16', 'islam', 'Jalan Jalan', 'eko@jon.vom', 'laki_laki', '1233434', 'SMA/SMK', 'Aktif', '2017-10-28', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
