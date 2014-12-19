-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 03:01 
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `id_wilayah`, `no_spt`, `klasifikasi`) VALUES
(18, 13, 3, 'Typic Psammaquents, Typic Udipsamments'),
(19, 13, 3, 'Typic Udipsamments'),
(20, 13, 16, 'Typic Haplohemists, Typic Haplosaprists'),
(26, 13, 27, 'Typic Hapludults, Typic Endoaquepts'),
(28, 15, 1, 'aaa'),
(29, 15, 2, 'ddd');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `alternatif_kriteria`
--

INSERT INTO `alternatif_kriteria` (`id_alteria`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(1, 1, 3, 10),
(2, 1, 4, 10),
(3, 1, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(5) NOT NULL AUTO_INCREMENT,
  `kriteria` varchar(255) NOT NULL,
  `alias` varchar(3) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `alias`) VALUES
(1, 'Suhu tahunan rata-rata', 'C1'),
(2, 'Curah hujan tahunan rata-rata', 'C2'),
(3, 'Jumlah bulan kering', 'C3'),
(4, 'Fraksi Kasar', 'C4'),
(5, 'Kedalaman tanah', 'C5'),
(6, 'Ketebalan gambut', 'C6'),
(7, 'Salinitas', 'C7'),
(8, 'Kedalaman sulfidik', 'C8'),
(9, 'Lereng', 'C9'),
(10, 'Batuan Permukaan', 'C10'),
(11, 'Singkapan Batuan', 'C11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `password`) VALUES
(14, 'rahmad', '4d96c294635019ba56b729675881202a'),
(15, 'samsul', '846c25ead0e84f2d7ccf10922f682278'),
(18, 'batman', '8ee60a2e00c90d7e00d5069188dc115b');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE IF NOT EXISTS `wilayah` (
  `id_wilayah` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id_wilayah`, `user_name`, `nama_wilayah`) VALUES
(13, 'samsul', 'Aceh Barat'),
(15, 'rahmad', 'Serdang'),
(20, 'batman', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `wil_kriteria`
--

CREATE TABLE IF NOT EXISTS `wil_kriteria` (
  `id_wil_kriteria` int(7) NOT NULL AUTO_INCREMENT,
  `id_wilayah` int(5) NOT NULL,
  `id_kriteria` int(2) NOT NULL,
  `bobot` int(3) NOT NULL,
  PRIMARY KEY (`id_wil_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `wil_kriteria`
--

INSERT INTO `wil_kriteria` (`id_wil_kriteria`, `id_wilayah`, `id_kriteria`, `bobot`) VALUES
(87, 13, 1, 0),
(88, 13, 2, 0),
(89, 13, 3, 0),
(90, 13, 4, 0),
(91, 13, 5, 0),
(92, 13, 6, 0),
(93, 13, 7, 0),
(94, 13, 8, 0),
(95, 13, 9, 0),
(96, 13, 10, 0),
(97, 13, 11, 0),
(102, 15, 4, 1),
(103, 15, 6, 1);
