-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2014 at 02:30 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk_lahan_karet`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(5) NOT NULL AUTO_INCREMENT,
  `id_wilayah` int(5) NOT NULL,
  `no_spt` int(5) NOT NULL,
  `klasifikasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `id_wilayah`, `no_spt`, `klasifikasi`) VALUES
(1, 0, 3, 'Typic Psammaquents, Typic Udipsamments'),
(2, 0, 4, 'Typic Udipsamments'),
(3, 0, 16, 'Typic Haplohelmists, Typic Haplosaprists'),
(5, 0, 27, 'Typic Hapludults, Typic Endoaquepts');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_kriteria`
--

CREATE TABLE IF NOT EXISTS `alternatif_kriteria` (
  `id_alteria` int(5) NOT NULL AUTO_INCREMENT,
  `id_alternatif` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `nilai` int(10) NOT NULL,
  PRIMARY KEY (`id_alteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `alternatif_kriteria`
--


-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,
  `kriteria` varchar(255) NOT NULL,
  `alias` varchar(3) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `alias`) VALUES
(8, ' Suhu tahunan rata-rata, Curah hujan tahunan rata-rata, Jumlah bulan kering, Fraksi kasar, Kedalaman tanah, Ketebalan gambut, Salinitas, Kedalaman sulfidik, Lereng, Batuan permukaan, Sinngkapan batuan ', ''),
(9, ' Suhu tahunan rata-rata, Curah hujan tahunan rata-rata, , , Kedalaman tanah, , Salinitas, , , ,  ', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `password`) VALUES
(14, 'rahmad', '4d96c294635019ba56b729675881202a'),
(15, 'samsul', '846c25ead0e84f2d7ccf10922f682278'),
(16, 'eel', '874009492fa91f511e7e775ecfbc28d6'),
(17, 'asa', '457391c9c82bfdcbb4947278c0401e41');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
  `id_wilayah` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `user_name`, `nama_wilayah`) VALUES
(10, 'samsul', ' Angkola '),
(13, 'samsul', 'Batam'),
(15, 'rahmad', 'Serdang'),
(18, 'samsul', 'Batam');
