-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 03:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepatubola`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bobot_harga`
--

CREATE TABLE `kriteria_bobot_harga` (
  `id_kriteria_bobot_harga` int(11) NOT NULL,
  `nilai_kriteria_harga` varchar(45) DEFAULT NULL,
  `bobot_kriteria_harga` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bobot_harga`
--

INSERT INTO `kriteria_bobot_harga` (`id_kriteria_bobot_harga`, `nilai_kriteria_harga`, `bobot_kriteria_harga`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '2', '21'),
(23, '2', '22'),
(24, '2', '23'),
(25, '2', '24'),
(26, '2', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '3', '31'),
(33, '3', '32'),
(34, '3', '33'),
(35, '3', '34'),
(36, '3', '35'),
(37, '3', '36'),
(38, '3', '37'),
(39, '3', '38'),
(40, '3', '39'),
(41, '3', '40'),
(42, '4', '41'),
(43, '4', '42'),
(44, '4', '43'),
(45, '4', '44'),
(46, '4', '45'),
(47, '4', '46'),
(48, '4', '47'),
(49, '4', '48'),
(50, '4', '49'),
(51, '4', '50'),
(52, '4', '51'),
(53, '4', '52'),
(54, '4', '53'),
(55, '4', '54'),
(56, '4', '55'),
(57, '4', '56'),
(58, '4', '57'),
(59, '4', '58'),
(60, '4', '59'),
(61, '4', '60'),
(62, '4', '61'),
(63, '4', '62'),
(64, '4', '63'),
(65, '4', '64'),
(66, '4', '65'),
(67, '4', '66'),
(68, '4', '67'),
(69, '4', '68'),
(70, '4', '69'),
(71, '4', '70'),
(72, '4', '71'),
(73, '4', '72'),
(74, '4', '73'),
(75, '4', '74'),
(76, '4', '75'),
(77, '5', '76'),
(78, '5', '77'),
(79, '5', '78'),
(80, '5', '79'),
(81, '5', '80'),
(82, '5', '81'),
(83, '5', '82'),
(84, '5', '83'),
(85, '5', '84'),
(86, '5', '85'),
(87, '5', '86'),
(88, '5', '87'),
(89, '5', '88'),
(90, '5', '89'),
(91, '5', '90'),
(92, '5', '91'),
(93, '5', '92'),
(94, '5', '93'),
(95, '5', '94'),
(96, '5', '95'),
(97, '5', '96'),
(98, '5', '97'),
(99, '5', '98'),
(100, '5', '99'),
(101, '5', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bobot_material`
--

CREATE TABLE `kriteria_bobot_material` (
  `id_kriteria_bobot_material` int(11) NOT NULL,
  `nilai_kriteria_material` varchar(45) DEFAULT NULL,
  `bobot_kriteria_material` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bobot_material`
--

INSERT INTO `kriteria_bobot_material` (`id_kriteria_bobot_material`, `nilai_kriteria_material`, `bobot_kriteria_material`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '2', '21'),
(23, '2', '22'),
(24, '2', '23'),
(25, '2', '24'),
(26, '2', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '3', '31'),
(33, '3', '32'),
(34, '3', '33'),
(35, '3', '34'),
(36, '3', '35'),
(37, '3', '36'),
(38, '3', '37'),
(39, '3', '38'),
(40, '3', '39'),
(41, '3', '40'),
(42, '4', '41'),
(43, '4', '42'),
(44, '4', '43'),
(45, '4', '44'),
(46, '4', '45'),
(47, '4', '46'),
(48, '4', '47'),
(49, '4', '48'),
(50, '4', '49'),
(51, '4', '50'),
(52, '4', '51'),
(53, '4', '52'),
(54, '4', '53'),
(55, '4', '54'),
(56, '4', '55'),
(57, '4', '56'),
(58, '4', '57'),
(59, '4', '58'),
(60, '4', '59'),
(61, '4', '60'),
(62, '4', '61'),
(63, '4', '62'),
(64, '4', '63'),
(65, '4', '64'),
(66, '4', '65'),
(67, '4', '66'),
(68, '4', '67'),
(69, '4', '68'),
(70, '4', '69'),
(71, '4', '70'),
(72, '4', '71'),
(73, '4', '72'),
(74, '4', '73'),
(75, '4', '74'),
(76, '4', '75'),
(77, '5', '76'),
(78, '5', '77'),
(79, '5', '78'),
(80, '5', '79'),
(81, '5', '80'),
(82, '5', '81'),
(83, '5', '82'),
(84, '5', '83'),
(85, '5', '84'),
(86, '5', '85'),
(87, '5', '86'),
(88, '5', '87'),
(89, '5', '88'),
(90, '5', '89'),
(91, '5', '90'),
(92, '5', '91'),
(93, '5', '92'),
(94, '5', '93'),
(95, '5', '94'),
(96, '5', '95'),
(97, '5', '96'),
(98, '5', '97'),
(99, '5', '98'),
(100, '5', '99'),
(101, '5', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bobot_position`
--

CREATE TABLE `kriteria_bobot_position` (
  `id_kriteria_bobot_position` int(11) NOT NULL,
  `nilai_kriteria_position` varchar(45) DEFAULT NULL,
  `bobot_kriteria_position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bobot_position`
--

INSERT INTO `kriteria_bobot_position` (`id_kriteria_bobot_position`, `nilai_kriteria_position`, `bobot_kriteria_position`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '1', '26'),
(28, '1', '27'),
(29, '1', '28'),
(30, '1', '29'),
(31, '1', '30'),
(32, '1', '31'),
(33, '1', '32'),
(34, '2', '33'),
(35, '2', '34'),
(36, '2', '35'),
(37, '2', '36'),
(38, '2', '37'),
(39, '2', '38'),
(40, '2', '39'),
(41, '2', '40'),
(42, '2', '41'),
(43, '2', '42'),
(44, '2', '43'),
(45, '2', '44'),
(46, '2', '45'),
(47, '2', '46'),
(48, '2', '47'),
(49, '2', '48'),
(50, '2', '49'),
(51, '2', '50'),
(52, '2', '51'),
(53, '2', '52'),
(54, '2', '53'),
(55, '2', '54'),
(56, '2', '55'),
(57, '2', '56'),
(58, '2', '57'),
(59, '2', '58'),
(60, '2', '59'),
(61, '2', '60'),
(62, '2', '61'),
(63, '2', '62'),
(64, '2', '63'),
(65, '2', '64'),
(66, '2', '65'),
(67, '3', '66'),
(68, '3', '67'),
(69, '3', '68'),
(70, '3', '69'),
(71, '3', '70'),
(72, '3', '71'),
(73, '3', '72'),
(74, '3', '73'),
(75, '3', '74'),
(76, '3', '75'),
(77, '3', '76'),
(78, '3', '77'),
(79, '3', '78'),
(80, '3', '79'),
(81, '3', '80'),
(82, '3', '81'),
(83, '3', '82'),
(84, '3', '83'),
(85, '3', '84'),
(86, '3', '85'),
(87, '3', '86'),
(88, '3', '87'),
(89, '3', '88'),
(90, '3', '89'),
(91, '3', '90'),
(92, '3', '91'),
(93, '3', '92'),
(94, '3', '93'),
(95, '3', '94'),
(96, '3', '95'),
(97, '3', '96'),
(98, '3', '97'),
(99, '3', '98'),
(100, '3', '99'),
(101, '3', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bobot_type`
--

CREATE TABLE `kriteria_bobot_type` (
  `id_kriteria_bobot_type` int(11) NOT NULL,
  `nilai_kriteria_type` varchar(45) DEFAULT NULL,
  `bobot_kriteria_type` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bobot_type`
--

INSERT INTO `kriteria_bobot_type` (`id_kriteria_bobot_type`, `nilai_kriteria_type`, `bobot_kriteria_type`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '2', '21'),
(23, '2', '22'),
(24, '2', '23'),
(25, '2', '24'),
(26, '2', '25'),
(27, '2', '26'),
(28, '2', '27'),
(29, '2', '28'),
(30, '2', '29'),
(31, '2', '30'),
(32, '3', '31'),
(33, '3', '32'),
(34, '3', '33'),
(35, '3', '34'),
(36, '3', '35'),
(37, '3', '36'),
(38, '3', '37'),
(39, '3', '38'),
(40, '3', '39'),
(41, '3', '40'),
(42, '4', '41'),
(43, '4', '42'),
(44, '4', '43'),
(45, '4', '44'),
(46, '4', '45'),
(47, '4', '46'),
(48, '4', '47'),
(49, '4', '48'),
(50, '4', '49'),
(51, '4', '50'),
(52, '4', '51'),
(53, '4', '52'),
(54, '4', '53'),
(55, '4', '54'),
(56, '4', '55'),
(57, '4', '56'),
(58, '4', '57'),
(59, '4', '58'),
(60, '4', '59'),
(61, '4', '60'),
(62, '4', '61'),
(63, '4', '62'),
(64, '4', '63'),
(65, '4', '64'),
(66, '4', '65'),
(67, '4', '66'),
(68, '4', '67'),
(69, '4', '68'),
(70, '4', '69'),
(71, '4', '70'),
(72, '4', '71'),
(73, '4', '72'),
(74, '4', '73'),
(75, '4', '74'),
(76, '4', '75'),
(77, '5', '76'),
(78, '5', '77'),
(79, '5', '78'),
(80, '5', '79'),
(81, '5', '80'),
(82, '5', '81'),
(83, '5', '82'),
(84, '5', '83'),
(85, '5', '84'),
(86, '5', '85'),
(87, '5', '86'),
(88, '5', '87'),
(89, '5', '88'),
(90, '5', '89'),
(91, '5', '90'),
(92, '5', '91'),
(93, '5', '92'),
(94, '5', '93'),
(95, '5', '94'),
(96, '5', '95'),
(97, '5', '96'),
(98, '5', '97'),
(99, '5', '98'),
(100, '5', '99'),
(101, '5', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bobot_weight`
--

CREATE TABLE `kriteria_bobot_weight` (
  `id_kriteria_bobot_weight` int(11) NOT NULL,
  `nilai_kriteria_weight` varchar(45) DEFAULT NULL,
  `bobot_kriteria_weight` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bobot_weight`
--

INSERT INTO `kriteria_bobot_weight` (`id_kriteria_bobot_weight`, `nilai_kriteria_weight`, `bobot_kriteria_weight`) VALUES
(1, '1', '0'),
(2, '1', '1'),
(3, '1', '2'),
(4, '1', '3'),
(5, '1', '4'),
(6, '1', '5'),
(7, '1', '6'),
(8, '1', '7'),
(9, '1', '8'),
(10, '1', '9'),
(11, '1', '10'),
(12, '1', '11'),
(13, '1', '12'),
(14, '1', '13'),
(15, '1', '14'),
(16, '1', '15'),
(17, '1', '16'),
(18, '1', '17'),
(19, '1', '18'),
(20, '1', '19'),
(21, '1', '20'),
(22, '1', '21'),
(23, '1', '22'),
(24, '1', '23'),
(25, '1', '24'),
(26, '1', '25'),
(27, '1', '26'),
(28, '1', '27'),
(29, '1', '28'),
(30, '1', '29'),
(31, '1', '30'),
(32, '1', '31'),
(33, '1', '32'),
(34, '1', '33'),
(35, '1', '34'),
(36, '1', '35'),
(37, '1', '36'),
(38, '1', '37'),
(39, '1', '38'),
(40, '1', '39'),
(41, '1', '40'),
(42, '1', '41'),
(43, '1', '42'),
(44, '1', '43'),
(45, '1', '44'),
(46, '1', '45'),
(47, '1', '46'),
(48, '1', '47'),
(49, '1', '48'),
(50, '1', '49'),
(51, '1', '50'),
(52, '2', '51'),
(53, '2', '52'),
(54, '2', '53'),
(55, '2', '54'),
(56, '2', '55'),
(57, '2', '56'),
(58, '2', '57'),
(59, '2', '58'),
(60, '2', '59'),
(61, '2', '60'),
(62, '2', '61'),
(63, '2', '62'),
(64, '2', '63'),
(65, '2', '64'),
(66, '2', '65'),
(67, '2', '66'),
(68, '2', '67'),
(69, '2', '68'),
(70, '2', '69'),
(71, '2', '70'),
(72, '2', '71'),
(73, '2', '72'),
(74, '2', '73'),
(75, '2', '74'),
(76, '2', '75'),
(77, '2', '76'),
(78, '2', '77'),
(79, '2', '78'),
(80, '2', '79'),
(81, '2', '80'),
(82, '2', '81'),
(83, '2', '82'),
(84, '2', '83'),
(85, '2', '84'),
(86, '2', '85'),
(87, '2', '86'),
(88, '2', '87'),
(89, '2', '88'),
(90, '2', '89'),
(91, '2', '90'),
(92, '2', '91'),
(93, '2', '92'),
(94, '2', '93'),
(95, '2', '94'),
(96, '2', '95'),
(97, '2', '96'),
(98, '2', '97'),
(99, '2', '98'),
(100, '2', '99'),
(101, '2', '100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_harga`
--

CREATE TABLE `kriteria_harga` (
  `id_kriteria_harga` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4','5') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_harga`
--

INSERT INTO `kriteria_harga` (`id_kriteria_harga`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Diatas 4 juta', '1', '0-20'),
(2, '3.500.001 - 4.000.000', '2', '21-30'),
(3, '2.500.001 - 3.500.000', '3', '31-40'),
(4, '2.000.000 - 2.500.000', '4', '41-75'),
(5, 'Dibawah 2 juta', '5', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_material`
--

CREATE TABLE `kriteria_material` (
  `id_kriteria_material` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4','5') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_material`
--

INSERT INTO `kriteria_material` (`id_kriteria_material`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Taurus Leather', '1', '0-20'),
(2, 'Synthetic', '2', '21-30'),
(3, 'Knit', '3', '31-40'),
(4, 'PrimeKnit', '4', '41-75'),
(5, 'FlyKnit', '5', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_position`
--

CREATE TABLE `kriteria_position` (
  `id_kriteria_position` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_position`
--

INSERT INTO `kriteria_position` (`id_kriteria_position`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Defence', '1', '0-32'),
(2, 'MidField', '2', '33-65'),
(3, 'Attack', '3', '66-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_type`
--

CREATE TABLE `kriteria_type` (
  `id_kriteria_type` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2','3','4','5') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_type`
--

INSERT INTO `kriteria_type` (`id_kriteria_type`, `nama_range`, `nilai`, `bobot`) VALUES
(1, 'Control', '1', '0-20'),
(2, 'Heritage', '2', '21-30'),
(3, 'Speed', '3', '31-40'),
(4, 'Agility', '4', '41-75'),
(5, 'Striking', '5', '76-100');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_weight`
--

CREATE TABLE `kriteria_weight` (
  `id_kriteria_weight` int(11) NOT NULL,
  `nama_range` varchar(25) NOT NULL,
  `nilai` enum('1','2') NOT NULL,
  `bobot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_weight`
--

INSERT INTO `kriteria_weight` (`id_kriteria_weight`, `nama_range`, `nilai`, `bobot`) VALUES
(1, '200 - 300', '1', '0-50'),
(2, '100 - 200', '2', '51-100');

-- --------------------------------------------------------

--
-- Table structure for table `sepatubola`
--

CREATE TABLE `sepatubola` (
  `id_sepatu` varchar(3) NOT NULL,
  `merk_sepatu` varchar(150) NOT NULL,
  `gambar_sepatu` varchar(255) NOT NULL DEFAULT 'https://i.pinimg.com/736x/03/18/e0/0318e08c23dbb7e664a7ea3ebc35c661.jpg',
  `tipe_sepatu` varchar(255) NOT NULL,
  `harga_sepatu` varchar(45) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `harga_B` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `bobot_type` varchar(10) NOT NULL,
  `jenis_type` varchar(10) NOT NULL,
  `material` varchar(10) NOT NULL,
  `bobot_material` varchar(10) NOT NULL,
  `jenis_material` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `bobot_weight` varchar(10) NOT NULL,
  `jenis_weight` varchar(10) NOT NULL,
  `position` varchar(10) NOT NULL,
  `bobot_position` varchar(10) NOT NULL,
  `jenis_position` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepatubola`
--

INSERT INTO `sepatubola` (`id_sepatu`, `merk_sepatu`, `gambar_sepatu`, `tipe_sepatu`, `harga_sepatu`, `harga`, `harga_B`, `type`, `bobot_type`, `jenis_type`, `material`, `bobot_material`, `jenis_material`, `weight`, `bobot_weight`, `jenis_weight`, `position`, `bobot_position`, `jenis_position`) VALUES
('1nm', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2021/04/6071b0392cc3a.jpg', 'Nemeziz .1', '3215000', '3', '40', '4', '74', 'Agility', '3', '40', 'Knit', '1', '45', '225', '3', '80', 'Attack'),
('1pr', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2020/05/5eccf2da94152.jpg', 'Predator 20.1', '2669000', '3', '40', '1', '20', 'Control', '4', '75', 'PrimeKnit', '1', '45', '235', '2', '50', 'Midfield'),
('1pt', 'Nike', 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/822e1464-7068-4baa-bea7-698d56327eb9/mercurial-superfly-8-elite-fg-football-boot-24FtzR.png', 'Mercurial Phantom GT Elite', '4445000', '1', '20', '4', '73', 'Agility', '5', '90', 'Flyknit', '1', '45', '218', '1', '29', 'Defence'),
('1pu', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2021/04/6071aa7b11b64.jpg', 'Ultra 1.2', '2854000', '3', '40', '3', '40', 'Speed', '2', '30', 'Synthetic', '2', '78', '160', '3', '80', 'Attack'),
('1sp', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2021/03/604775646b719.jpg', 'Mercurial Superfly 8 Elite', '3699000', '2', '30', '3', '40', 'Speed', '5', '90', 'Flyknit', '1', '45', '210', '3', '80', 'Attack'),
('1u3', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/67/3.jpg', 'Predator LZ', '3100000', '3', '39', '1', '19', 'Control', '1', '19', 'Taurus Leather', '2', '96', '157', '1', '17', 'Defence'),
('2ft', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2020/09/5f68d226c649c.jpg', 'Future 6.1 Netfit', '1899000', '5', '85', '1', '20', 'Control', '2', '30', 'Synthetic', '1', '45', '210', '1', '29', 'Defence'),
('2jd', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2021/04/60817d3da7f30.jpg', 'Predator Freak .1 Low', '3809000', '2', '30', '1', '20', 'Control', '3', '40', 'Knit', '2', '78', '198', '2', '50', 'Midfield'),
('2pr', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2020/06/5edd009e58e09.jpg', 'Future 5.1 Netfit', '1547000', '5', '85', '5', '80', 'Striking', '1', '20', 'Taurus Leather', '1', '45', '210', '3', '80', 'Attack'),
('2vn', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2020/01/5e2b73b57eda2.jpg', 'VNM', '2366000', '4', '72', '5', '80', 'Striking', '5', '90', 'Flyknit', '1', '45', '201', '3', '80', 'Attack'),
('3cp', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2021/03/604f7068a93d7.jpg', 'Copa Sense + inner life', '5201000', '1', '20', '2', '30', 'Heritage', '3', '40', 'Knit', '1', '45', '205', '2', '50', 'Midfield'),
('5n1', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2020/12/5fcd122352c73.jpg', 'Future 18.1 Netfit', '1777000', '5', '85', '3', '31', 'Speed', '1', '20', 'Taurus Leather', '2', '78', '167', '1', '29', 'Defence'),
('6g2', 'Nike', 'https://www.footballbootsdb.com/logos/boots/45/3.jpg', 'CTR360 Maestri', '4232112', '1', '20', '1', '18', 'Control', '1', '20', 'Taurus Leather', '2', '98', '123', '1', '31', 'Defence'),
('7hc', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2021/02/6021546946129.jpg', 'Mercurial Vapor 14', '3120000', '3', '40', '3', '40', 'Speed', '4', '75', 'PrimeKnit', '2', '86', '200', '1', '27', 'Defence'),
('7hu', 'Mizuno', 'https://www.footballbootsdb.com/logos/boots/15/7/3.jpg', 'Morelia Neo', '2622000', '3', '40', '3', '40', 'Speed', '4', '75', 'PrimeKnit', '2', '86', '180', '1', '27', 'Defence'),
('8us', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2019/10/5db421add5769.jpg', 'Predator 19.1', '2879000', '3', '40', '1', '20', 'Control', '4', '75', 'PrimeKnit', '1', '45', '210', '1', '29', 'Defence'),
('9qp', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2020/01/5e2b737d0b4ea.jpg', 'Mercurial Superfly 7 Elite', '1894000', '5', '85', '1', '20', 'Control', '1', '20', 'Taurus Leather', '2', '78', '199', '1', '29', 'Defence'),
('9w6', 'Mizuno', 'https://www.footballbootsdb.com/logos/boots/2020/06/5eed08fe46c2a.jpg', 'Morelia Neo II', '1436000', '5', '85', '2', '30', 'Heritage', '1', '20', 'Taurus Leather', '2', '78', '150', '1', '29', 'Defence'),
('aez', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2020/09/5f68d3f787796.jpg', 'Copa 20.1', '1567000', '5', '85', '1', '20', 'Control', '1', '20', 'Taurus Leather', '2', '78', '198', '1', '29', 'Defence'),
('avx', 'Mizuno', 'https://www.footballbootsdb.com/logos/boots/2019/08/5d67ec41e9d10.jpg', 'Rebula 3', '2755890', '3', '35', '1', '14', 'Control', '1', '19', 'Taurus Leather', '2', '95', '150', '1', '31', 'Defence'),
('bms', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/211/3.jpg', 'X 17.1 Leather', '3679000', '2', '28', '1', '17', 'Control', '1', '20', 'Taurus Leather', '2', '69', '185', '1', '14', 'Defence'),
('e2p', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2020/09/5f68d1cca78fd.jpg', 'Ultra 1.1', '1246700', '5', '85', '3', '40', 'Speed', '1', '20', 'Taurus Leather', '2', '78', '190', '1', '29', 'Defence'),
('e90', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2019/09/5d7f923116b4b.jpg', 'EvoSpeed 17 SL-S', '2350000', '4', '72', '3', '40', 'Speed', '1', '20', 'Taurus Leather', '1', '45', '201', '1', '29', 'Defence'),
('iix', 'Lotto', 'https://www.footballbootsdb.com/logos/boots/219/3.jpg', 'Stadio 300', '3241000', '3', '40', '1', '18', 'Control', '4', '70', 'PrimeKnit', '1', '45', '220', '1', '29', 'Defence'),
('j3y', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/122/3.jpg', 'X 15.1 Leather Now', '2868560', '3', '39', '1', '19', 'Control', '1', '19', 'Taurus Leather', '2', '86', '168', '1', '24', 'Defence'),
('jtz', 'Umbro', 'https://www.footballbootsdb.com/logos/boots/2020/10/5f8195d7afd3e.jpg', 'Tocco', '1676700', '5', '85', '2', '30', 'Heritage', '1', '20', 'Taurus Leather', '2', '78', '187', '1', '29', 'Defence'),
('kul', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2020/10/5f8583a8ebdda.jpg', 'Predator 20+', '1980000', '5', '85', '1', '20', 'Control', '2', '30', 'Synthethic', '2', '78', '185', '1', '29', 'Defence'),
('mqv', 'Puma', 'https://www.footballbootsdb.com/logos/boots/99/3.jpg', 'EvoPower', '1400500', '5', '85', '2', '30', 'Heritage', '1', '20', 'Taurus Leather', '1', '45', '220', '1', '29', 'Defence'),
('na6', 'Nike', 'https://www.footballbootsdb.com/logos/boots/47/3.jpg', 'Mercurial Vapor 10', '3678000', '2', '28', '1', '16', 'Control', '1', '19', 'Taurus Leather', '2', '69', '185', '1', '30', 'Defence'),
('o3o', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2021/05/60b0e85c12b40.jpg', 'Tiempo Legend 8', '1708421', '5', '78', '2', '30', 'Heritage', '5', '90', 'FlyKnit', '1', '45', '218', '1', '29', 'Defence'),
('ohb', 'Lotto', 'https://www.footballbootsdb.com/logos/boots/2019/08/5d6744bed17cf.jpg', 'Solista 200 III', '2754780', '3', '40', '1', '15', 'Control', '4', '75', 'PrimeKnit', '1', '45', '218', '1', '35', 'Defence'),
('p7c', 'Adidas', 'https://www.footballbootsdb.com/logos/boots/2020/02/5e5868d38c473.jpg', 'F50 X Ghosted Adizero', '2450000', '4', '72', '1', '20', 'Control', '4', '75', 'PrimeKnit', '2', '75', '198', '1', '30', 'Defence'),
('r86', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2020/01/5e2b734b0efc3.jpg', 'Mercurial Vapor 13 Elite', '3241000', '3', '40', '3', '40', 'Speed', '5', '90', 'FlyKnit', '2', '78', '188', '3', '80', 'Attack'),
('rab', 'Nike', 'https://www.footballbootsdb.com/logos/boots/2020/02/5e5868d38c473.jpg', 'Phantom VSN 2', '2789000', '3', '39', '1', '20', 'Control', '4', '70', 'PrimeKnit', '1', '45', '245', '1', '29', 'Defence'),
('ras', 'Nike', 'https://www.footballbootsdb.com/logos/boots/5/3.jpg', 'Magista Obra', '2599000', '3', '39', '1', '20', 'Control', '4', '70', 'PrimeKnit', '1', '45', '210', '1', '27', 'Defence'),
('rat', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2019/09/5d6d7afa7e728.jpg', 'King Platinum', '2756000', '3', '39', '1', '20', 'Control', '5', '89', 'Flyknit', '1', '45', '213', '1', '27', 'Defence'),
('rrq', 'Puma', 'https://www.footballbootsdb.com/logos/boots/2019/09/5d7f923116b4b.jpg', 'ONE 5.1 EvoKnit', '1521000', '5', '76', '3', '40', 'Speed', '1', '20', 'Taurus Leather', '1', '46', '218', '1', '29', 'Defence'),
('sja', 'Lotto', 'https://www.footballbootsdb.com/logos/boots/152/3.jpg', 'Stadio Potenza 2', '2321560', '4', '72', '1', '19', 'Control', '1', '20', 'Taurus Leather', '2', '90', '192', '1', '25', 'Defence'),
('twh', 'Lotto', 'https://www.footballbootsdb.com/logos/boots/144/3.jpg', 'Zhero Gravity 7 700 Colorways', '2140000', '4', '71', '1', '18', 'Control', '1', '16', 'Taurus Leather', '2', '83', '182', '1', '26', 'Defence');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_anggota` varchar(25) DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `nama_lengkap`, `email`, `username`, `password`, `id_anggota`, `level`) VALUES
(1, 'Gerald Arrivaldo', 'arrivaldo@gmail.com', 'admin', 'admin', 'B01', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria_bobot_harga`
--
ALTER TABLE `kriteria_bobot_harga`
  ADD PRIMARY KEY (`id_kriteria_bobot_harga`);

--
-- Indexes for table `kriteria_bobot_material`
--
ALTER TABLE `kriteria_bobot_material`
  ADD PRIMARY KEY (`id_kriteria_bobot_material`);

--
-- Indexes for table `kriteria_bobot_position`
--
ALTER TABLE `kriteria_bobot_position`
  ADD PRIMARY KEY (`id_kriteria_bobot_position`);

--
-- Indexes for table `kriteria_bobot_type`
--
ALTER TABLE `kriteria_bobot_type`
  ADD PRIMARY KEY (`id_kriteria_bobot_type`);

--
-- Indexes for table `kriteria_bobot_weight`
--
ALTER TABLE `kriteria_bobot_weight`
  ADD PRIMARY KEY (`id_kriteria_bobot_weight`);

--
-- Indexes for table `kriteria_harga`
--
ALTER TABLE `kriteria_harga`
  ADD PRIMARY KEY (`id_kriteria_harga`);

--
-- Indexes for table `kriteria_material`
--
ALTER TABLE `kriteria_material`
  ADD PRIMARY KEY (`id_kriteria_material`);

--
-- Indexes for table `kriteria_position`
--
ALTER TABLE `kriteria_position`
  ADD PRIMARY KEY (`id_kriteria_position`);

--
-- Indexes for table `kriteria_type`
--
ALTER TABLE `kriteria_type`
  ADD PRIMARY KEY (`id_kriteria_type`);

--
-- Indexes for table `kriteria_weight`
--
ALTER TABLE `kriteria_weight`
  ADD PRIMARY KEY (`id_kriteria_weight`);

--
-- Indexes for table `sepatubola`
--
ALTER TABLE `sepatubola`
  ADD PRIMARY KEY (`id_sepatu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria_harga`
--
ALTER TABLE `kriteria_harga`
  MODIFY `id_kriteria_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_material`
--
ALTER TABLE `kriteria_material`
  MODIFY `id_kriteria_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_position`
--
ALTER TABLE `kriteria_position`
  MODIFY `id_kriteria_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_type`
--
ALTER TABLE `kriteria_type`
  MODIFY `id_kriteria_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria_weight`
--
ALTER TABLE `kriteria_weight`
  MODIFY `id_kriteria_weight` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
