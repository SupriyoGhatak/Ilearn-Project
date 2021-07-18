-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2021 at 04:03 AM
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
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`, `type`, `course`) VALUES
(1, 'Loops in C Language are implemented using.?', 4, 'c_1st', 'c'),
(2, 'Choose facts about continue; statement is C Language', 8, 'c_1st', 'c'),
(3, 'An array Index starts with.?', 10, 'c_1st', 'c'),
(4, 'What is the size of a C structure.?', 14, 'c_1st', 'c'),
(5, 'What is the keyword used to declare a C file pointer.?', 18, 'c_2nd', 'c'),
(6, 'What is a C FILE data type.?', 21, 'c_2nd', 'c'),
(7, 'What are the C functions used to read or write a file in Binary Mode.?', 26, 'c_2nd', 'c'),
(8, 'Which of the following function can be used to terminate the main function from another function safely?', 30, 'c_2nd', 'c'),
(9, 'What is the size returned for each of sizeof() operator?', 33, 'c_f', 'c'),
(10, 'Which of the following true about FILE *fp', 38, 'c_f', 'c'),
(11, 'When fopen() is not able to open a file, it returns', 42, 'c_f', 'c'),
(12, 'fseek() should be preferred over rewind() mainly because\r\n', 47, 'c_f', 'c'),
(13, 'Which of the following is not a valid variable name declaration?', 52, 'c_f', 'c'),
(14, 'Which of the following cannot be a variable name in C?', 53, 'c_f', 'c'),
(15, 'Which is valid C expression?', 58, 'c_f', 'c');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
