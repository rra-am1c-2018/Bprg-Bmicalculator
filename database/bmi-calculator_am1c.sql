-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2019 at 06:54 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmi_calculator_am1c`
--
CREATE DATABASE IF NOT EXISTS `bmi_calculator_am1c` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bmi_calculator_am1c`;

-- --------------------------------------------------------

--
-- Table structure for table `bmi_data`
--

DROP TABLE IF EXISTS `bmi_data`;
CREATE TABLE IF NOT EXISTS `bmi_data` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `infix` varchar(20) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `bodyweight` decimal(4,1) NOT NULL,
  `bodylength` decimal(4,3) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `sex` enum('boy','girl','trans') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
