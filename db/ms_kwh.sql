-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2019 pada 16.04
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing_system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_kwh`
--

CREATE TABLE `ms_kwh` (
  `No_ID` int(11) NOT NULL,
  `Nama_Client` varchar(255) NOT NULL,
  `Lokasi` varchar(255) NOT NULL,
  `Daya` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_kwh`
--

INSERT INTO `ms_kwh` (`No_ID`, `Nama_Client`, `Lokasi`, `Daya`) VALUES
(1, 'KWH-T8-23', 'LANTAI 23', 1),
(2, 'KWH-T7-23', 'LANTAI 23', 1),
(3, 'KWH-T6-23', 'LANTAI 23', 1),
(4, 'KWH-T5-23', 'LANTAI 23', 1),
(5, 'KWH-T4-23', 'LANTAI 23', 1),
(6, 'KWH-T3-23', 'LANTAI 23', 1),
(7, 'KWH-T2-23', 'LANTAI 23', 1),
(8, 'KWH-T1-23', 'LANTAI 23', 1),
(9, 'KWH-T8-22', 'LANTAI 22', 1),
(10, 'KWH-T7-22', 'LANTAI 22', 1),
(11, 'KWH-T6-22', 'LANTAI 22', 1),
(12, 'KWH-T5-22', 'LANTAI 22', 1),
(13, 'KWH-T4-22', 'LANTAI 22', 1),
(14, 'KWH-T3-22', 'LANTAI 22', 1),
(15, 'KWH-T2-22', 'LANTAI 22', 1),
(16, 'KWH-T1-22', 'LANTAI 22', 1),
(17, 'KWH-T8-21', 'LANTAI 21', 1),
(18, 'KWH-T7-21', 'LANTAI 21', 1),
(19, 'KWH-T6-21', 'LANTAI 21', 1),
(20, 'KWH-T5-21', 'LANTAI 21', 1),
(21, 'KWH-T4-21', 'LANTAI 21', 1),
(22, 'KWH-T3-21', 'LANTAI 21', 1),
(23, 'KWH-T2-21', 'LANTAI 21', 1),
(24, 'KWH-T1-21', 'LANTAI 21', 1),
(25, 'KWH-T8-20', 'LANTAI 20', 1),
(26, 'KWH-T7-20', 'LANTAI 20', 1),
(27, 'KWH-T6-20', 'LANTAI 20', 1),
(28, 'KWH-T5-20', 'LANTAI 20', 1),
(29, 'KWH-T4-20', 'LANTAI 20', 1),
(30, 'KWH-T3-20', 'LANTAI 20', 1),
(31, 'KWH-T2-20', 'LANTAI 20', 1),
(32, 'KWH-T1-20', 'LANTAI 20', 1),
(33, 'KWH-T8-19', 'LANTAI 19', 1),
(34, 'KWH-T7-19', 'LANTAI 19', 1),
(35, 'KWH-T6-19', 'LANTAI 19', 1),
(36, 'KWH-T5-19', 'LANTAI 19', 1),
(37, 'KWH-T4-19', 'LANTAI 19', 1),
(38, 'KWH-T3-19', 'LANTAI 19', 1),
(39, 'KWH-T2-19', 'LANTAI 19', 1),
(40, 'KWH-T1-19', 'LANTAI 19', 1),
(41, 'KWH-T8-18', 'LANTAI 18', 1),
(42, 'KWH-T7-18', 'LANTAI 18', 1),
(43, 'KWH-T6-18', 'LANTAI 18', 1),
(44, 'KWH-T5-18', 'LANTAI 18', 1),
(45, 'KWH-T4-18', 'LANTAI 18', 1),
(46, 'KWH-T3-18', 'LANTAI 18', 1),
(47, 'KWH-T2-18', 'LANTAI 18', 1),
(48, 'KWH-T1-18', 'LANTAI 18', 1),
(49, 'KWH-T8-17', 'LANTAI 17', 1),
(50, 'KWH-T7-17', 'LANTAI 17', 1),
(51, 'KWH-T6-17', 'LANTAI 17', 1),
(52, 'KWH-T5-17', 'LANTAI 17', 1),
(53, 'KWH-T4-17', 'LANTAI 17', 1),
(54, 'KWH-T3-17', 'LANTAI 17', 1),
(55, 'KWH-T2-17', 'LANTAI 17', 1),
(56, 'KWH-T1-17', 'LANTAI 17', 1),
(57, 'KWH-T8-16', 'LANTAI 16', 1),
(58, 'KWH-T7-16', 'LANTAI 16', 1),
(59, 'KWH-T6-16', 'LANTAI 16', 1),
(60, 'KWH-T5-16', 'LANTAI 16', 1),
(61, 'KWH-T4-16', 'LANTAI 16', 1),
(62, 'KWH-T3-16', 'LANTAI 16', 1),
(63, 'KWH-T2-16', 'LANTAI 16', 1),
(64, 'KWH-T1-16', 'LANTAI 16', 1),
(65, 'KWH-T8-15', 'LANTAI 15', 1),
(66, 'KWH-T7-15', 'LANTAI 15', 1),
(67, 'KWH-T6-15', 'LANTAI 15', 1),
(68, 'KWH-T5-15', 'LANTAI 15', 1),
(69, 'KWH-T4-15', 'LANTAI 15', 1),
(70, 'KWH-T3-15', 'LANTAI 15', 1),
(71, 'KWH-T2-15', 'LANTAI 15', 1),
(72, 'KWH-T1-15', 'LANTAI 15', 1),
(73, 'KWH-T8-12', 'LANTAI 12', 1),
(74, 'KWH-T7-12', 'LANTAI 12', 1),
(75, 'KWH-T6-12', 'LANTAI 12', 1),
(76, 'KWH-T5-12', 'LANTAI 12', 1),
(77, 'KWH-T4-12', 'LANTAI 12', 1),
(78, 'KWH-T3-12', 'LANTAI 12', 1),
(79, 'KWH-T2-12', 'LANTAI 12', 1),
(80, 'KWH-T1-12', 'LANTAI 12', 1),
(81, 'KWH-T8-11', 'LANTAI 11', 1),
(82, 'KWH-T7-11', 'LANTAI 11', 1),
(83, 'KWH-T6-11', 'LANTAI 11', 1),
(84, 'KWH-T5-11', 'LANTAI 11', 1),
(85, 'KWH-T4-11', 'LANTAI 11', 1),
(86, 'KWH-T3-11', 'LANTAI 11', 1),
(87, 'KWH-T2-11', 'LANTAI 11', 1),
(88, 'KWH-T1-11', 'LANTAI 11', 1),
(89, 'KWH-T8-10', 'LANTAI 10', 1),
(90, 'KWH-T7-10', 'LANTAI 10', 1),
(91, 'KWH-T6-10', 'LANTAI 10', 1),
(92, 'KWH-T5-10', 'LANTAI 10', 1),
(93, 'KWH-T4-10', 'LANTAI 10', 1),
(94, 'KWH-T3-10', 'LANTAI 10', 1),
(95, 'KWH-T2-10', 'LANTAI 10', 1),
(96, 'KWH-T1-10', 'LANTAI 10', 1),
(97, 'KWH-T8-9', 'LANTAI 9', 1),
(98, 'KWH-T7-9', 'LANTAI 9', 1),
(99, 'KWH-T6-9', 'LANTAI 9', 1),
(100, 'KWH-T5-9', 'LANTAI 9', 1),
(101, 'KWH-T4-9', 'LANTAI 9', 1),
(102, 'KWH-T3-9', 'LANTAI 9', 1),
(103, 'KWH-T2-9', 'LANTAI 9', 1),
(104, 'KWH-T1-9', 'LANTAI 9', 1),
(105, 'KWH-T8-8', 'LANTAI 8', 1),
(106, 'KWH-T7-8', 'LANTAI 8', 1),
(107, 'KWH-T6-8', 'LANTAI 8', 1),
(108, 'KWH-T5-8', 'LANTAI 8', 1),
(109, 'KWH-T4-8', 'LANTAI 8', 1),
(110, 'KWH-T3-8', 'LANTAI 8', 1),
(111, 'KWH-T2-8', 'LANTAI 8', 1),
(112, 'KWH-T1-8', 'LANTAI 8', 1),
(113, 'KWH-B1-1', 'LANTAI B1', 1),
(114, 'KWH-B1-2', 'LANTAI B1', 1),
(115, 'KWH-B1-3', 'LANTAI B1', 1),
(116, 'KWH-MDP-B1-HOTEL', 'LANTAI B1', 1),
(117, 'KWH-SDP-HT-1', 'LANTAI B1', 1),
(118, 'KWH-SDP-HT-2', 'LANTAI B1', 1),
(119, 'KWH-SDP-HT-3', 'LANTAI B1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_kwh`
--
ALTER TABLE `ms_kwh`
  ADD PRIMARY KEY (`No_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_kwh`
--
ALTER TABLE `ms_kwh`
  MODIFY `No_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
