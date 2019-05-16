-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Nov 2016 pada 02.04
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billing_system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
`ID_Golongan` int(11) NOT NULL,
  `Golongan_Tarif` varchar(255) NOT NULL,
  `Tarif_KWH` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`ID_Golongan`, `Golongan_Tarif`, `Tarif_KWH`) VALUES
(1, 'Tarif-1', 1000),
(2, 'Tarif-2', 1500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_kwh`
--

CREATE TABLE IF NOT EXISTS `ms_kwh` (
`No_ID` int(11) NOT NULL,
  `Nama_Client` varchar(255) NOT NULL,
  `Lokasi` varchar(255) NOT NULL,
  `Daya` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data untuk tabel `ms_kwh`
--

INSERT INTO `ms_kwh` (`No_ID`, `Nama_Client`, `Lokasi`, `Daya`) VALUES
(1, 'KWH-LT-7', 'LANTAI 7', 164.5),
(2, 'KWH-LT-8', 'LANTAI-8', 164.5),
(3, 'KWH-LT-9', 'LANTAI 9', 164.5),
(4, 'KWH-LT-10', 'LANTAI 10', 164.5),
(5, 'KWH-LT-11', 'LANTAI 11', 164.5),
(6, 'KWH-LT-12', 'LANTAI 12', 164.5),
(7, 'KWH-LT-13', 'LANTAI 13', 164.5),
(8, 'KWH-LT-14', 'LANTAI 14', 164.5),
(9, 'KWH-LT-15', 'LANTAI 15', 164.5),
(10, 'KWH-LT-16', 'LANTAI 16', 164.5),
(11, 'KWH-LT-17', 'LANTAI 17', 164.5),
(12, 'KWH-LT-18', 'LANTAI 18', 164.5),
(13, 'KWH-LT-19', 'LANTAI 19', 164.5),
(14, 'KWH-LT-20', 'LANTAI 20', 164.5),
(15, 'KWH-LT-21', 'LANTAI 23', 41.12),
(16, 'KWH1-LT-22', 'LANTAI 22', 5.5),
(17, 'KWH2-LT-22', 'LANTAI 22', 3.1),
(18, 'KWH3-LT-22', 'LANTAI 22', 3.1),
(19, 'KWH4-LT-22', 'LANTAI 22', 4.4),
(20, 'KWH5-LT-22', 'LANTAI 22', 4.4),
(21, 'KWH6-LT-22', 'LANTAI 22', 3.1),
(22, 'KWH7-LT-22', 'LANTAI 22', 3.1),
(23, 'KWH8-LT-22', 'LANTAI 22', 5.5),
(24, 'KWH1-LT-23', 'LANTAI 23', 16.45),
(25, 'KWH2-LT-23', 'LANTAI 23', 8.2),
(26, 'KWH3-LT-23', 'LANTAI 23', 8.2),
(27, 'KWH4-LT-23', 'LANTAI 23', 13.2),
(28, 'KWH5-LT-23', 'LANTAI 23', 13.2),
(29, 'KWH6-LT-23', 'LANTAI 23', 8.2),
(30, 'KWH7-LT-23', 'LANTAI 23', 8.2),
(31, 'KWH8-LT-23', 'LANTAI 23', 8.2),
(32, 'KWH1-LT-24', 'LANTAI 24', 11),
(33, 'KWH2-LT-24', 'LANTAI 24', 8.8),
(34, 'KWH3-LT-24', 'LANTAI 24', 8.8),
(35, 'KWH4-LT-24', 'LANTAI 24', 6.87),
(36, 'KWH1-LT-25', 'LANTAI 25', 6.87),
(37, 'KWH2-LT-25', 'LANTAI 25', 6.87),
(38, 'KWH3-LT-25', 'LANTAI 25', 6.87),
(39, 'KWH4-LT-25', 'LANTAI 25', 6.87),
(40, 'KWH1-LT-26', 'LANTAI 26', 6.87),
(41, 'KWH2-LT-26', 'LANTAI 26', 6.87),
(42, 'KWH3-LT-26', 'LANTAI 26', 6.87),
(43, 'KWH4-LT-26', 'LANTAI 26', 6.87),
(44, 'KWH1-LT-27', 'LANTAI 27', 6.87),
(45, 'KWH2-LT-27', 'LANTAI 27', 6.87),
(46, 'KWH3-LT-27', 'LANTAI 27', 6.87),
(47, 'KWH4-LT-27', 'LANTAI 27', 6.87),
(48, 'KWH1-LT-28', 'LANTAI 28', 6.87),
(49, 'KWH2-LT-28', 'LANTAI 28', 6.87),
(50, 'KWH3-LT-28', 'LANTAI 28', 6.87),
(51, 'KWH4-LT-28', 'LANTAI 28', 6.87),
(52, 'KWH1-LT-29', 'LANTAI 29', 6.87),
(53, 'KWH2-LT-29', 'LANTAI 29', 6.87),
(54, 'KWH3-LT-29', 'LANTAI 29', 6.87),
(55, 'KWH4-LT-29', 'LANTAI 29', 6.87),
(56, 'KWH1-LT-30', 'LANTAI 30', 6.87),
(57, 'KWH2-LT-30', 'LANTAI 30', 6.87),
(58, 'KWH3-LT-30', 'LANTAI 30', 6.87),
(59, 'KWH4-LT-30', 'LANTAI 30', 6.87),
(60, 'KWH1-LT-31', 'LANTAI 31', 6.87),
(61, 'KWH2-LT-31', 'LANTAI 31', 6.87),
(62, 'KWH3-LT-31', 'LANTAI 31', 6.87),
(63, 'KWH4-LT-31', 'LANTAI 31', 6.87),
(64, 'KWH1-LT-32', 'LANTAI 32', 32.9),
(65, 'KWH2-LT-32', 'LANTAI 32', 26.32),
(66, 'KWH3-LT-32', 'LANTAI 32', 26.32),
(67, 'KWH4-LT-32', 'LANTAI 32', 20.56);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pph`
--

CREATE TABLE IF NOT EXISTS `pph` (
`No` int(11) NOT NULL,
  `PPH` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `pph`
--

INSERT INTO `pph` (`No`, `PPH`) VALUES
(1, 40000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwayat`
--

CREATE TABLE IF NOT EXISTS `tb_riwayat` (
`ID_Riwayat` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Value` varchar(255) NOT NULL,
  `No_ID` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data untuk tabel `tb_riwayat`
--

INSERT INTO `tb_riwayat` (`ID_Riwayat`, `Date_Time`, `Value`, `No_ID`) VALUES
(1, '2016-11-18 00:00:00', '699.864', 1),
(2, '2016-11-18 00:00:00', '527.754', 2),
(3, '2016-11-18 00:00:00', '548.702', 3),
(4, '2016-11-18 00:00:00', '556.723', 4),
(5, '2016-11-18 00:00:00', '349.869', 5),
(6, '2016-11-18 00:00:00', '395.823', 6),
(7, '2016-11-18 00:00:00', '1168.14', 7),
(8, '2016-11-18 00:00:00', '382.659', 8),
(9, '2016-11-18 00:00:00', '491.723', 9),
(10, '2016-11-18 00:00:00', '321.801', 10),
(11, '2016-11-18 00:00:00', '332.482', 11),
(12, '2016-11-18 00:00:00', '340.762', 12),
(13, '2016-11-18 00:00:00', '564.616', 13),
(14, '2016-11-18 00:00:00', '671.678', 14),
(15, '2016-11-18 00:00:00', '368.102', 15),
(16, '2016-11-18 00:00:00', '250.661', 16),
(17, '2016-11-18 00:00:00', '186.318', 17),
(18, '2016-11-18 00:00:00', '304.935', 18),
(19, '2016-11-18 00:00:00', '278.4', 19),
(20, '2016-11-18 00:00:00', '214.188', 20),
(21, '2016-11-18 00:00:00', '296.413', 21),
(22, '2016-11-18 00:00:00', '387.016', 22),
(23, '2016-11-18 00:00:00', '135.125', 23),
(24, '2016-11-18 00:00:00', '156.355', 24),
(25, '2016-11-18 00:00:00', '181.401', 25),
(26, '2016-11-18 00:00:00', '155.853', 26),
(27, '2016-11-18 00:00:00', '214.602', 27),
(28, '2016-11-18 00:00:00', '210.4', 28),
(29, '2016-11-18 00:00:00', '129.715', 29),
(30, '2016-11-18 00:00:00', '186.901', 30),
(31, '2016-11-18 00:00:00', '178.907', 31),
(32, '2016-11-18 00:00:00', '64.937', 32),
(33, '2016-11-18 00:00:00', '53.629', 33),
(34, '2016-11-18 00:00:00', '47.6', 34),
(35, '2016-11-18 00:00:00', '70.364', 35),
(36, '2016-11-18 00:00:00', '110.5', 36),
(37, '2016-11-18 00:00:00', '123.108', 37),
(38, '2016-11-18 00:00:00', '117.707', 38),
(39, '2016-11-18 00:00:00', '142.847', 39),
(40, '2016-11-18 00:00:00', '372.149', 40),
(41, '2016-11-18 00:00:00', '460.023', 41),
(42, '2016-11-18 00:00:00', '397.362', 42),
(43, '2016-11-18 00:00:00', '497.828', 43),
(44, '2016-11-18 00:00:00', '379.8', 44),
(45, '2016-11-18 00:00:00', '499.104', 45),
(46, '2016-11-18 00:00:00', '293.757', 46),
(47, '2016-11-18 00:00:00', '545.454', 47),
(48, '2016-11-18 00:00:00', '59.505', 48),
(49, '2016-11-18 00:00:00', '50.437', 49),
(50, '2016-11-18 00:00:00', '66.722', 50),
(51, '2016-11-18 00:00:00', '44.309', 51),
(52, '2016-11-18 00:00:00', '94.215', 52),
(53, '2016-11-18 00:00:00', '102.543', 53),
(54, '2016-11-18 00:00:00', '63.735', 54),
(55, '2016-11-18 00:00:00', '75.116', 55),
(56, '2016-11-18 00:00:00', '59.452', 56),
(57, '2016-11-18 00:00:00', '67.749', 57),
(58, '2016-11-18 00:00:00', '29.66', 58),
(59, '2016-11-18 00:00:00', '57.155', 59),
(60, '2016-11-18 00:00:00', '60.403', 60),
(61, '2016-11-18 00:00:00', '192.711', 61),
(62, '2016-11-18 00:00:00', '49.837', 62),
(63, '2016-11-18 00:00:00', '35.427', 63),
(64, '2016-11-18 00:00:00', '23.227', 64),
(65, '2016-11-18 00:00:00', '43.727', 65),
(66, '2016-11-18 00:00:00', '46.521', 66),
(67, '2016-11-18 00:00:00', '43.512', 67),
(68, '2016-11-21 00:00:00', '867.987', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_User` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
 ADD PRIMARY KEY (`ID_Golongan`);

--
-- Indexes for table `ms_kwh`
--
ALTER TABLE `ms_kwh`
 ADD PRIMARY KEY (`No_ID`);

--
-- Indexes for table `pph`
--
ALTER TABLE `pph`
 ADD PRIMARY KEY (`No`);

--
-- Indexes for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
 ADD PRIMARY KEY (`ID_Riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
MODIFY `ID_Golongan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ms_kwh`
--
ALTER TABLE `ms_kwh`
MODIFY `No_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `pph`
--
ALTER TABLE `pph`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_riwayat`
--
ALTER TABLE `tb_riwayat`
MODIFY `ID_Riwayat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
