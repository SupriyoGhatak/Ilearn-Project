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
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `answers` varchar(255) NOT NULL,
  `ans_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aid`, `answers`, `ans_id`, `type`, `course`) VALUES
(1, 'While Block', 1, 'c_1st', 'c'),
(2, 'For Block', 1, 'c_1st', 'c'),
(3, 'Do While Block', 1, 'c_1st', 'c'),
(4, 'All the above', 1, 'c_1st', 'c'),
(5, 'continue; is used to take the execution control to next iteration or sequence', 2, 'c_1st', 'c'),
(6, 'continue; statement causes the statements below it to skip for execution', 2, 'c_1st', 'c'),
(7, 'continue; is usually accompanied by IF statement.', 2, 'c_1st', 'c'),
(8, 'All the above.', 2, 'c_1st', 'c'),
(9, '-1', 3, 'c_1st', 'c'),
(10, '0', 3, 'c_1st', 'c'),
(11, '1', 3, 'c_1st', 'c'),
(12, '2', 3, 'c_1st', 'c'),
(13, 'C structure is always 128 bytes.', 4, 'c_1st', 'c'),
(14, 'Size of C structure is the total bytes of all elements of structure.', 4, 'c_1st', 'c'),
(15, 'Size of C structure is the size of largest element.', 4, 'c_1st', 'c'),
(16, 'None of the above', 4, 'c_1st', 'c'),
(17, 'file', 5, 'c_2nd', 'c'),
(18, 'FILE', 5, 'c_2nd', 'c'),
(19, 'FILEFP', 5, 'c_2nd', 'c'),
(20, 'filefp', 5, 'c_2nd', 'c'),
(21, 'FILE is like a Structure only', 6, 'c_2nd', 'c'),
(22, 'FILE is like a Union only', 6, 'c_2nd', 'c'),
(23, 'FILE is like a user define int data type', 6, 'c_2nd', 'c'),
(24, 'None of the above', 6, 'c_2nd', 'c'),
(25, 'fprintf(), fscanf()', 7, 'c_2nd', 'c'),
(26, 'fread(), rwrite()', 7, 'c_2nd', 'c'),
(27, 'readf(), writef()', 7, 'c_2nd', 'c'),
(28, 'printf(), scanf()', 7, 'c_2nd', 'c'),
(29, 'return(expr);', 8, 'c_2nd', 'c'),
(30, 'exit(expr);', 8, 'c_2nd', 'c'),
(31, 'abort();', 8, 'c_2nd', 'c'),
(32, 'both exit(expr); and abort();', 8, 'c_2nd', 'c'),
(33, '444', 9, 'c_f', 'c'),
(34, '144', 9, 'c_f', 'c'),
(35, '148', 9, 'c_f', 'c'),
(36, 'None of the Above', 9, 'c_f', 'c'),
(37, 'FILE is a keyword in C for representing files and fp is a variable of FILE type.', 10, 'c_f', 'c'),
(38, 'FILE is a structure and fp is a pointer to the structure of FILE type', 10, 'c_f', 'c'),
(39, 'FILE is a stream', 10, 'c_f', 'c'),
(40, 'FILE is a buffered stream\r\n', 10, 'c_f', 'c'),
(41, 'EOF\r\n', 11, 'c_f', 'c'),
(42, 'NULL', 11, 'c_f', 'c'),
(43, 'Runtime Error\r\n', 11, 'c_f', 'c'),
(44, 'Compiler Dependent\r\n', 11, 'c_f', 'c'),
(45, 'rewind() doesn\'t work for empty files\r\n', 12, 'c_f', 'c'),
(46, 'rewind() may fail for large files\r\n', 12, 'c_f', 'c'),
(47, 'In rewind, there is no way to check if the operations completed successfully\r\n', 12, 'c_f', 'c'),
(48, 'All of the above\r\n', 12, 'c_f', 'c'),
(49, 'float PI = 3.14;', 13, 'c_f', 'c'),
(50, 'double PI = 3.14;', 13, 'c_f', 'c'),
(51, 'int PI = 3.14;', 13, 'c_f', 'c'),
(52, '#define PI 3.14', 13, 'c_f', 'c'),
(53, 'volatile', 14, 'c_f', 'c'),
(54, 'true', 14, 'c_f', 'c'),
(55, 'friend', 14, 'c_f', 'c'),
(56, 'export', 14, 'c_f', 'c'),
(57, 'int my_num = 100,000;', 15, 'c_f', 'c'),
(58, 'int my_num = 100000;', 15, 'c_f', 'c'),
(59, ' int my num = 1000;', 15, 'c_f', 'c'),
(60, 'int $my_num = 10000;', 15, 'c_f', 'c'),
(61, 'char ch = \'\\utea\';', 16, 'java_1st', 'java'),
(62, 'char ca = \'tea\';', 16, 'java_1st', 'java'),
(63, 'char cr = \\u0223;', 16, 'java_1st', 'java'),
(64, 'char cc = \'\\itea\';', 16, 'java_1st', 'java'),
(65, '5', 17, 'java_1st', 'java'),
(66, '10', 17, 'java_1st', 'java'),
(67, '0', 17, 'java_1st', 'java'),
(68, '100', 17, 'java_1st', 'java'),
(69, '0', 18, 'java_1st', 'java'),
(70, 'Not a number', 18, 'java_1st', 'java'),
(71, 'Infinity', 18, 'java_1st', 'java'),
(72, 'Run time exception', 18, 'java_1st', 'java'),
(73, 'for ( int i = 99; i >= 0; i / 9 )', 19, 'java_1st', 'java'),
(74, 'for ( int i = 7; i <= 77; i += 7 )', 19, 'java_1st', 'java'),
(75, 'for ( int i = 20; i >= 2; - -i )', 19, 'java_1st', 'java'),
(76, 'for ( int i = 2; i <= 20; i = 2* i )', 19, 'java_1st', 'java'),
(77, 'Constructors cannot be synchronized in Java', 20, 'java_2nd', 'java'),
(78, ' Java does not provide default copy constructor', 20, 'java_2nd', 'java'),
(79, 'Constructor can have a return type', 20, 'java_2nd', 'java'),
(80, '“this” and “super” can be used in a constructor', 20, 'java_2nd', 'java'),
(81, 'Compilation error', 21, 'java_2nd', 'java'),
(82, 'Compilation succeeds', 21, 'java_2nd', 'java'),
(83, 'Runtime error', 21, 'java_2nd', 'java'),
(84, 'Compilation succeeds but at the time of creating object using default constructor, it throws compilation error', 21, 'java_2nd', 'java'),
(85, 'class B + class A {}', 22, 'java_2nd', 'java'),
(86, 'class B inherits class A {}', 22, 'java_2nd', 'java'),
(87, 'class B extends A {}', 22, 'java_2nd', 'java'),
(88, 'class B extends class A {}', 22, 'java_2nd', 'java'),
(89, 'static', 23, 'java_2nd', 'java'),
(90, 'constant', 23, 'java_2nd', 'java'),
(91, 'protected', 23, 'java_2nd', 'java'),
(92, 'final', 23, 'java_2nd', 'java'),
(93, 'get()', 24, 'java_f', 'java'),
(94, 'void getclass()', 24, 'java_f', 'java'),
(95, 'Class getclass()', 24, 'java_f', 'java'),
(96, 'None of the mentioned', 24, 'java_f', 'java'),
(97, 'try', 25, 'java_f', 'java'),
(98, 'finally', 25, 'java_f', 'java'),
(99, 'throw', 25, 'java_f', 'java'),
(100, 'catch', 25, 'java_f', 'java'),
(101, 'sleep()', 26, 'java_f', 'java'),
(102, 'terminate()', 26, 'java_f', 'java'),
(103, 'suspend()', 26, 'java_f', 'java'),
(104, 'stop()', 26, 'java_f', 'java'),
(105, 'isAlive()', 27, 'java_f', 'java'),
(106, 'Join()', 27, 'java_f', 'java'),
(107, 'isRunning()', 27, 'java_f', 'java'),
(108, 'Alive()', 27, 'java_f', 'java'),
(109, 'Function overriding', 28, 'java_f', 'java'),
(110, 'Function overloading', 28, 'java_f', 'java'),
(111, 'Function doubling', 28, 'java_f', 'java'),
(112, 'None of the mentioned', 28, 'java_f', 'java'),
(113, 'Copy of argument is made into the formal parameter of the subroutine', 29, 'java_f', 'java'),
(114, 'Reference to original argument is passed to formal parameter of the subroutine', 29, 'java_f', 'java'),
(115, 'Copy of argument is made into the formal parameter of the subroutine and changes made on parameters of subroutine have effect on original argument', 29, 'java_f', 'java'),
(116, 'Reference to original argument is passed to formal parameter of the subroutine and changes made on parameters of subroutine have effect on original argument', 29, 'java_f', 'java'),
(117, 'wait()', 30, 'java_f', 'java'),
(118, 'notify()', 30, 'java_f', 'java'),
(119, 'notifyAll()', 30, 'java_f', 'java'),
(120, 'sleep()', 30, 'java_f', 'java');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
