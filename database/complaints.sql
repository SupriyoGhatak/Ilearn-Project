-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2021 at 03:09 PM
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
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `complaintNumber` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `noc` varchar(255) NOT NULL,
  `complaintdetails` mediumtext NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`complaintNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaintNumber`, `user_id`, `noc`, `complaintdetails`, `regDate`, `status`, `lastUpdationDate`) VALUES
(1, 3, 'hey', 'hi', '2021-07-03 06:41:14', NULL, '0000-00-00 00:00:00'),
(2, 3, 'hey', 'hi', '2021-07-03 06:42:29', NULL, '0000-00-00 00:00:00'),
(3, 3, 'hey', 'hi', '2021-07-03 06:45:58', NULL, '0000-00-00 00:00:00'),
(4, 3, 'hey', 'hi', '2021-07-03 06:46:55', NULL, '0000-00-00 00:00:00'),
(5, 3, 'hey', 'hi', '2021-07-03 06:47:29', 'closed', '2021-07-08 14:07:22'),
(6, 2, 'hey', 'hi', '2021-07-03 06:50:59', 'closed', '2021-07-08 11:38:20'),
(7, 3, 'hey', 'hi', '2021-07-03 06:47:29', 'closed', '2021-07-08 11:37:27'),
(8, 3, 'hey', 'i dont know what to do ', '2021-07-03 06:47:29', 'closed', '2021-07-08 11:37:27'),
(9, 3, 'starting date', 'when is the starting date', '2021-07-08 14:52:42', 'closed', '2021-07-08 14:53:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
