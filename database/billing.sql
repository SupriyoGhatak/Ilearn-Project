-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2021 at 07:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilearn`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zip` bigint(25) DEFAULT NULL,
  `ccname` varchar(250) DEFAULT NULL,
  `ccnum` varchar(250) DEFAULT NULL,
  `expmonth` varchar(50) DEFAULT NULL,
  `expyear` bigint(15) DEFAULT NULL,
  `cvv` bigint(15) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `fullname`, `email`, `address`, `city`, `state`, `zip`, `ccname`, `ccnum`, `expmonth`, `expyear`, `cvv`, `status`, `price`, `payment`, `course`, `user_id`) VALUES
(39, 'Tanmoy Das', 'td632149@gmail.com', '2/76 sucheta Nagar post-haltu Kolkata 70078', 'Kolkata', 'West Bengal', 1101000, 'Tanmoy das', '2222222', 'ddff', 2015, 456, 'Delivered', 350, 'Paid', 'c', 13),
(40, 'Tanmoy Das', 'td632149@gmail.com', '2/76 sucheta Nagar post-haltu Kolkata 70078', 'Kolkata', 'West Bengal', 1101000, 'Tanmoy das', '222222222', 'sept', 2014, 356, 'Delivered', 500, 'Paid', 'java', 13),
(41, 'Ilearn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', 450, 'Due', 'rdbms', 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
