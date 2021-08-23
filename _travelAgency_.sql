-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2021 at 12:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelagency`
--
CREATE DATABASE IF NOT EXISTS `travelagency` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `travelagency`;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `capacity` varchar(3) COLLATE utf8_persian_ci NOT NULL,
  `period` varchar(2) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `capacity`, `period`, `price`) VALUES
(1, 'سفر به اعماق جنگل های گیلان و مازندران', '50', '3', '600,000'),
(2, 'سفر به دل کویر لوت و مصر', '45', '2', '500,000'),
(3, 'کوهنوردی تا نوک دماوند', '20 ', '4', '720,000');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

DROP TABLE IF EXISTS `passengers`;
CREATE TABLE IF NOT EXISTS `passengers` (
  `name` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `tour` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `descript` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`name`, `phoneNumber`, `tour`, `descript`) VALUES
('امیرحسین', '09116612648', 'dessert', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `phoneNumber` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `phoneNumber`, `password`) VALUES
('amir@gmail.com', '09116612648', '123'),
('amirhajitabar2@gmail.com', '09116612648', '1'),
('asdaasdd@gmail.com', '09116612648', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
