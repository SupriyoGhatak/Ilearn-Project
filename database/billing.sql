-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2021 at 10:25 AM
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
-- Database: `payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` bigint(25) NOT NULL,
  `ccname` varchar(250) NOT NULL,
  `ccnum` varchar(250) NOT NULL,
  `expmonth` varchar(50) NOT NULL,
  `expyear` bigint(15) NOT NULL,
  `cvv` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `fullname`, `email`, `address`, `city`, `state`, `zip`, `ccname`, `ccnum`, `expmonth`, `expyear`, `cvv`) VALUES
(1, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, '', '0', '', 0, 0),
(2, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, '', '', 'September', 2022, 352),
(3, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(4, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(5, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(6, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(7, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(8, 'Sanchari Acharya', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(9, 'Sanchari Acharyaaaaa', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(10, 'Sanchari Acharyaaaaa', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(11, 'Sanchari Acharyaaaaa', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352),
(12, 'Sanchari Achar', 'sanchari1999@gmail.com', 'No 1 S N Bose Road,Shivmandir,Kadamtala,Darjeeling', 'Siliguri', 'West Bengal', 734011, 'Sanchari Acharya', '11001100011000', 'September', 2022, 352);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
