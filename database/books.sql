-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 21, 2021 at 02:17 PM
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
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `category_ids` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` text NOT NULL,
  `description` text NOT NULL,
  `image_path` text NOT NULL,
  `pdf_path` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_ids`, `title`, `author`, `description`, `image_path`, `pdf_path`) VALUES
(1, '1,1', 'Let Us C', 'Yashavant Kanetkar', 'The bible for C Programming Language for all beginners to learn from.', 'https://drive.google.com/file/d/1HEcgV_czYlxB6jVVL3HS6iPBh6dtstxL/preview', 'https://drive.google.com/file/d/1TfwdQTpe5yM-blROGGJ5nYibCW26qm4H/preview'),
(2, '2,2', 'The Complete Reference- C++', 'Herbert Schildt', 'Covers all the topics starting from beginners to advanced.', 'https://drive.google.com/file/d/1sTA3rslrh4S0XCIuy-oVcEEBrjDxnxPJ/preview', 'https://drive.google.com/file/d/1E573_dCaYtfPs-J8342y7nAUpqi_ectU/preview');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
