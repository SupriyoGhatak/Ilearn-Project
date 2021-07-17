-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2021 at 04:33 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

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
-- Table structure for table `user_exam_result`
--

DROP TABLE IF EXISTS `user_exam_result`;
CREATE TABLE IF NOT EXISTS `user_exam_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `c_1st` double(11,2) NOT NULL DEFAULT 0.00,
  `c_2nd` double(11,2) NOT NULL DEFAULT 0.00,
  `c_f` double(11,2) NOT NULL DEFAULT 0.00,
  `java_1st` double(11,2) NOT NULL DEFAULT 0.00,
  `java_2nd` double(11,2) NOT NULL DEFAULT 0.00,
  `java_f` double(11,2) NOT NULL DEFAULT 0.00,
  `c_plus_1st` double(11,2) NOT NULL DEFAULT 0.00,
  `c_plus_2nd` double(11,2) NOT NULL DEFAULT 0.00,
  `c_plus_f` double(11,2) NOT NULL DEFAULT 0.00,
  `rdbms_1st` double(11,2) NOT NULL DEFAULT 0.00,
  `rdbms_2nd` double(11,2) NOT NULL DEFAULT 0.00,
  `rdbms_f` double(11,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_exam_result`
--

INSERT INTO `user_exam_result` (`id`, `user_id`, `c_1st`, `c_2nd`, `c_f`, `java_1st`, `java_2nd`, `java_f`, `c_plus_1st`, `c_plus_2nd`, `c_plus_f`, `rdbms_1st`, `rdbms_2nd`, `rdbms_f`) VALUES
(11, 13, 75.00, 75.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(17, 15, 75.00, 75.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(18, 18, 75.00, 100.00, 85.71, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
