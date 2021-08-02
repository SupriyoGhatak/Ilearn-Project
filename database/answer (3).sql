-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 28, 2021 at 11:35 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

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
(120, 'sleep()', 30, 'java_f', 'java'),
(121, '7var_name', 31, 'c_plus_1st', 'c_plus'),
(122, '7VARNAME', 31, 'c_plus_1st', 'c_plus'),
(123, 'VAR_1234', 31, 'c_plus_1st', 'c_plus'),
(124, '$var_name', 31, 'c_plus_1st', 'c_plus'),
(125, 'An array is a series of elements of the same type in contiguous memory locations', 32, 'c_plus_1st', 'c_plus'),
(126, ' An array is a series of element', 32, 'c_plus_1st', 'c_plus'),
(127, 'An array is a series of elements of the same type placed in non-contiguous memory locations', 32, 'c_plus_1st', 'c_plus'),
(128, 'An array is an element of the different type', 32, 'c_plus_1st', 'c_plus'),
(129, 'int *ip;', 33, 'c_plus_1st', 'c_plus'),
(130, 'string s, *sp = 0;', 33, 'c_plus_1st', 'c_plus'),
(131, ' int i; double* dp = &i;', 33, 'c_plus_1st', 'c_plus'),
(132, 'int *pi = 0;', 33, 'c_plus_1st', 'c_plus'),
(133, 'integer numerals', 34, 'c_plus_1st', 'c_plus'),
(134, 'floating-point numerals', 34, 'c_plus_1st', 'c_plus'),
(135, 'strings and boolean values', 34, 'c_plus_1st', 'c_plus'),
(136, 'all of the mentioned', 34, 'c_plus_1st', 'c_plus'),
(137, 'Using Inheritance', 35, 'c_plus_2nd', 'c_plus'),
(138, 'Using Virtual functions', 35, 'c_plus_2nd', 'c_plus'),
(139, 'Using Templates', 35, 'c_plus_2nd', 'c_plus'),
(140, 'Using Inheritance and Virtual functions', 35, 'c_plus_2nd', 'c_plus'),
(141, 'A function which can access all the private, protected and public members of a class', 36, 'c_plus_2nd', 'c_plus'),
(142, 'A function which is not allowed to access any member of any class', 36, 'c_plus_2nd', 'c_plus'),
(143, 'A function which is allowed to access public and protected members of a class', 36, 'c_plus_2nd', 'c_plus'),
(144, 'A function which is allowed to access only public members of a class', 36, 'c_plus_2nd', 'c_plus'),
(145, 'Error occurs', 37, 'c_plus_2nd', 'c_plus'),
(146, 'Segmentation fault', 37, 'c_plus_2nd', 'c_plus'),
(147, 'Objects are not created properly', 37, 'c_plus_2nd', 'c_plus'),
(148, 'Constructor of A followed by B', 38, 'c_plus_2nd', 'c_plus'),
(149, 'Constructor of B followed by A', 38, 'c_plus_2nd', 'c_plus'),
(150, 'Constructor of A only', 38, 'c_plus_2nd', 'c_plus'),
(151, 'Constructor of B only', 38, 'c_plus_2nd', 'c_plus'),
(152, 'Contiguous', 39, 'c_plus_f', 'c_plus'),
(153, 'Non-Contiguous', 39, 'c_plus_f', 'c_plus'),
(154, 'Both A and B', 39, 'c_plus_f', 'c_plus'),
(155, 'Neither A or B', 39, 'c_plus_f', 'c_plus'),
(156, 'It checks that the specified variable is of the array or not', 40, 'c_plus_f', 'c_plus'),
(157, 'It checks that the specified array of single dimension or not', 40, 'c_plus_f', 'c_plus'),
(158, 'It checks that the array specified of multi-dimension or not', 40, 'c_plus_f', 'c_plus'),
(159, 'Both B and C', 40, 'c_plus_f', 'c_plus'),
(160, 'It is a technique to ensure that a private member of a base class can be accessed', 41, 'c_plus_f', 'c_plus'),
(161, 'It is a technique to optimize the multiple inheritances', 41, 'c_plus_f', 'c_plus'),
(162, 'It is a technique to avoid the multiple inheritances of the classes', 41, 'c_plus_f', 'c_plus'),
(163, 'It is a C++ technique to avoid multiple copies of the base class into the derived or child classes', 41, 'c_plus_f', 'c_plus'),
(164, 'An object is an instance of its class', 42, 'c_plus_f', 'c_plus'),
(165, 'A class is an instance of its object', 42, 'c_plus_f', 'c_plus'),
(166, 'An object is the instance of the data type of that class', 42, 'c_plus_f', 'c_plus'),
(167, 'Both A and C', 42, 'c_plus_f', 'c_plus'),
(168, 'Distributed', 43, 'c_plus_f', 'c_plus'),
(169, 'Multi-level', 43, 'c_plus_f', 'c_plus'),
(170, 'Multiple', 43, 'c_plus_f', 'c_plus'),
(171, 'Hierarchal', 43, 'c_plus_f', 'c_plus'),
(172, 'Modularity', 44, 'c_plus_f', 'c_plus'),
(173, 'Abstraction', 44, 'c_plus_f', 'c_plus'),
(174, 'Encapsulation', 44, 'c_plus_f', 'c_plus'),
(175, 'None of the above', 44, 'c_plus_f', 'c_plus'),
(176, 'The private part of its class.', 45, 'c_plus_f', 'c_plus'),
(177, 'The part declared as public of its class.', 45, 'c_plus_f', 'c_plus'),
(178, 'Class of which it is the member.', 45, 'c_plus_f', 'c_plus'),
(179, 'None of the above', 45, 'c_plus_f', 'c_plus'),
(180, 'It is a type of system software', 46, 'rdbms_1st', 'rdbms'),
(181, 'It is a type of application software', 46, 'rdbms_1st', 'rdbms'),
(182, 'It is a type of general software', 46, 'rdbms_1st', 'rdbms'),
(183, 'Both A and C', 46, 'rdbms_1st', 'rdbms'),
(184, 'Degree', 47, 'rdbms_1st', 'rdbms'),
(185, 'Tuples', 47, 'rdbms_1st', 'rdbms'),
(186, 'Entity', 47, 'rdbms_1st', 'rdbms'),
(187, 'All of the above', 47, 'rdbms_1st', 'rdbms'),
(188, 'Create', 48, 'rdbms_1st', 'rdbms'),
(189, 'Alter', 48, 'rdbms_1st', 'rdbms'),
(190, 'Delete', 48, 'rdbms_1st', 'rdbms'),
(191, 'All of the above', 48, 'rdbms_1st', 'rdbms'),
(192, 'Queries', 49, 'rdbms_1st', 'rdbms'),
(193, 'Domains', 49, 'rdbms_1st', 'rdbms'),
(194, 'Relations', 49, 'rdbms_1st', 'rdbms'),
(195, 'All of the above', 49, 'rdbms_1st', 'rdbms'),
(196, 'Functional Dependencies', 50, 'rdbms_2nd', 'rdbms'),
(197, 'Transitive Dependencies', 50, 'rdbms_2nd', 'rdbms'),
(198, 'Trivial Functional Dependency', 50, 'rdbms_2nd', 'rdbms'),
(199, 'Multivalued Dependencies', 50, 'rdbms_2nd', 'rdbms'),
(200, 'A -> C.', 51, 'rdbms_2nd', 'rdbms'),
(201, 'B -> C.', 51, 'rdbms_2nd', 'rdbms'),
(202, '(A,B) is a composite determinant.', 51, 'rdbms_2nd', 'rdbms'),
(203, 'C is a determinant.', 51, 'rdbms_2nd', 'rdbms'),
(204, 'A -> B.', 52, 'rdbms_2nd', 'rdbms'),
(205, 'B -> A.', 52, 'rdbms_2nd', 'rdbms'),
(206, 'C -> A.', 52, 'rdbms_2nd', 'rdbms'),
(207, '(B,C) -> A.', 52, 'rdbms_2nd', 'rdbms'),
(208, 'First normal form', 53, 'rdbms_2nd', 'rdbms'),
(209, 'Second normal form', 53, 'rdbms_2nd', 'rdbms'),
(210, 'Third normal form', 53, 'rdbms_2nd', 'rdbms'),
(211, 'All of the above', 53, 'rdbms_2nd', 'rdbms'),
(212, 'Reflexivity rule', 54, 'rdbms_f', 'rdbms'),
(213, 'Transitivity rule', 54, 'rdbms_f', 'rdbms'),
(214, 'Pseudotransitivity rule', 54, 'rdbms_f', 'rdbms'),
(215, 'Augmentation rule', 54, 'rdbms_f', 'rdbms'),
(216, 'Primary key', 55, 'rdbms_f', 'rdbms'),
(217, 'Secondary key', 55, 'rdbms_f', 'rdbms'),
(218, 'Candidate key', 55, 'rdbms_f', 'rdbms'),
(219, 'Foreign key', 55, 'rdbms_f', 'rdbms'),
(220, 'Lossless decomposition', 56, 'rdbms_f', 'rdbms'),
(221, ' Lossless-join decomposition', 56, 'rdbms_f', 'rdbms'),
(222, 'All of the mentioned', 56, 'rdbms_f', 'rdbms'),
(223, 'None of the mentioned', 56, 'rdbms_f', 'rdbms'),
(224, ' A->BC', 57, 'rdbms_f', 'rdbms'),
(225, ' A->B', 57, 'rdbms_f', 'rdbms'),
(226, ' B->C', 57, 'rdbms_f', 'rdbms'),
(227, 'None', 57, 'rdbms_f', 'rdbms'),
(228, '2', 58, 'rdbms_f', 'rdbms'),
(229, '7', 58, 'rdbms_f', 'rdbms'),
(230, '10', 58, 'rdbms_f', 'rdbms'),
(231, '12', 58, 'rdbms_f', 'rdbms'),
(232, 'A', 59, 'rdbms_f', 'rdbms'),
(233, 'E', 59, 'rdbms_f', 'rdbms'),
(234, 'B,C', 59, 'rdbms_f', 'rdbms'),
(235, 'D', 59, 'rdbms_f', 'rdbms'),
(236, 'Lossy-join decomposition', 60, 'rdbms_f', 'rdbms'),
(237, 'Lossy decomposition', 60, 'rdbms_f', 'rdbms'),
(238, ' Lossless-join decomposition', 60, 'rdbms_f', 'rdbms'),
(239, 'Both Lossy and Lossy-join decomposition', 60, 'rdbms_f', 'rdbms');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;