-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2021 at 10:15 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

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
(15, 'Which is valid C expression?', 58, 'c_f', 'c'),
(16, 'Which of the following is a valid declaration of a char?', 61, 'java_1st', 'java'),
(17, 'Given,ArrayList list = new ArrayList();  \r\nWhat is the initial quantity of the ArrayList list?', 66, 'java_1st', 'java'),
(18, 'What does the expression float a = 35 / 0 return?', 71, 'java_1st', 'java'),
(19, 'Which of the following for loop declaration is not valid?', 73, 'java_1st', 'java'),
(20, 'What is false about constructor?', 79, 'java_2nd', 'java'),
(21, 'What would be the behaviour if one parameterized constructor is explicitly defined?', 84, 'java_2nd', 'java'),
(22, 'Which of these is correct way of inheriting class A by class B?', 87, 'java_2nd', 'java'),
(23, 'Which of these keywords can be used to prevent Method overriding?', 92, 'java_2nd', 'java'),
(24, 'Which of these method of Object class is used to obtain class of an object at run time?', 95, 'java_f', 'java'),
(25, 'Which of these keywords must be used to handle the exception thrown by try block in some rational manner?', 100, 'java_f', 'java'),
(26, 'Which of these method of Thread class is used to Suspend a thread for a period of time?', 101, 'java_f', 'java'),
(27, 'Which function of pre defined class Thread is used to check weather current thread being checked is still running?', 105, 'java_f', 'java'),
(28, 'What is the process of defining more than one method in a class differentiated by parameters?', 110, 'java_f', 'java'),
(29, 'Which of these is correct about passing an argument by call-by-value process?', 113, 'java_f', 'java'),
(30, 'Which of these method is used to tell the calling thread to give up a monitor and go to sleep until some other thread enters the same monitor?', 117, 'java_f', 'java');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
