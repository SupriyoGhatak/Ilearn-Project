-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2021 at 03:03 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
(16, 'None of the above', 4, 'c_1st', 'c');

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
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `fullname`, `email`, `address`, `city`, `state`, `zip`, `ccname`, `ccnum`, `expmonth`, `expyear`, `cvv`, `status`, `price`, `payment`, `course`, `user_id`) VALUES
(39, 'Ilearn', 'Ilearn@gmail.com', 'Chowbaga Rd, Anandapur, Mundapara, Kolkata, West Bengal 700107', 'kolkata', 'West Bengal', 700107, 'Ilearn', '55555555', '22222', 2014, 356, 'Delivered', 350, 'Paid', 'c', 13),
(43, 'Tanmoy Das', 'td632149@gmail.com', '2/76 sucheta Nagar post-haltu Kolkata 70078', 'Kolkata', 'West Bengal', 1101000, 'Tanmoy das', '555', 'hhh', 2014, 652, 'Delivered', 500, 'Paid', 'java', 13),
(41, 'Ilearn', 'Ilearn@gmail.com', 'Chowbaga Rd, Anandapur, Mundapara, Kolkata, West Bengal 700107', 'kolkata', 'West Bengal', 700107, 'Ilearn', '555555555', 'sept', 2023, 896, 'Delivered', 450, 'Paid', 'rdbms', 13),
(42, 'Ilearn', 'Ilearn@gmail.com', 'Chowbaga Rd, Anandapur, Mundapara, Kolkata, West Bengal 700107', 'kolkata', 'West Bengal', 700107, 'Ilearn', '55555', 'bgu', 2012, 652, 'Delivered', 250, 'Paid', 'c_plus ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `c_plus_video`
--

DROP TABLE IF EXISTS `c_plus_video`;
CREATE TABLE IF NOT EXISTS `c_plus_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_video`
--

DROP TABLE IF EXISTS `c_video`;
CREATE TABLE IF NOT EXISTS `c_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_video`
--

INSERT INTO `c_video` (`id`, `video_id`, `src`) VALUES
(2, 'video2', 'https://drive.google.com/file/d/1YDyddir4GwX8H5Re96X_woy99urySpuf/preview'),
(3, 'video3', 'https://drive.google.com/file/d/1F1_Uxob_LO_HGSMDIMtUC_7RjkHEH1Ly/preview'),
(4, 'video4', 'https://drive.google.com/file/d/1x1kMdOVsl2S06UB6_eajq9xUL4oj8EOG/preview'),
(5, 'video6', 'https://drive.google.com/file/d/1VTxGQv9C7kZWdn4tnQG3gyXZRoN9loMi/preview'),
(6, 'video7', 'https://drive.google.com/file/d/1jWOVPtWFHgkxcrp5yi_mBc7pZmdSMawm/preview'),
(7, 'video5', 'https://drive.google.com/file/d/1BLsq_RrrOvqGJ2mnqHwfwtLvCpC0LeMx/preview'),
(8, 'video8', 'https://drive.google.com/file/d/15ECbqqyTNmBbbyn2kDN7OTo-5Y9K9IL4/preview'),
(9, 'video10', 'https://drive.google.com/file/d/1Y7-qXOoXjMcmEAjcUddkTLpUTQSRJbNn/preview'),
(10, 'video11', 'https://drive.google.com/file/d/1RycKeZvEsTajmw-eWvBRn-3H8GY3UrZZ/preview'),
(11, 'video9', 'https://drive.google.com/file/d/19kZQY158WScFsToXwZihnNz-4y8uGHTX/preview'),
(12, 'video12', 'https://drive.google.com/file/d/1-JyeBvQpp6qiE_p_ZPW0wip6XoURebwy/preview'),
(13, 'video13', 'https://drive.google.com/file/d/1xMO6M1UKafPwf1vMBo5l0c8_J5tk-po3/preview'),
(14, 'video14', 'https://drive.google.com/file/d/1N-PdQqzmUlQrw9zRlBv9ZucFmiiH01mp/preview'),
(15, 'video19', 'https://drive.google.com/file/d/1EWDknQp0Vzqvt7TXguW1wmBCoxI2dKFl/preview'),
(16, 'video20', 'https://drive.google.com/file/d/1AiPme-NRjb7hRXNJ0ATBXskVOje1sg8J/preview'),
(17, 'video16', 'https://drive.google.com/file/d/1n7BbCCrGp2sXSlS5zG0bx8igGfJ7jbnd/preview'),
(18, 'video15', 'https://drive.google.com/file/d/1YgcV82bGuiCUhCxBlRqmVmm0qwUP-7yx/preview'),
(19, 'video17', 'https://drive.google.com/file/d/1s6fxezoB-bHXGA-3FI-716NFgCA220MK/preview'),
(20, 'video18', 'https://drive.google.com/file/d/1PfZj8E4q7M09DnuagwuSgQ4Sg-Vlc1f5/preview');

-- --------------------------------------------------------

--
-- Table structure for table `java_video`
--

DROP TABLE IF EXISTS `java_video`;
CREATE TABLE IF NOT EXISTS `java_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`, `type`, `course`) VALUES
(1, 'Loops in C Language are implemented using.?', 4, 'c_1st', 'c'),
(2, 'Choose facts about continue; statement is C Language', 8, 'c_1st', 'c'),
(3, 'An array Index starts with.?', 10, 'c_1st', 'c'),
(4, 'What is the size of a C structure.?', 14, 'c_1st', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `rdbms_video`
--

DROP TABLE IF EXISTS `rdbms_video`;
CREATE TABLE IF NOT EXISTS `rdbms_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_buyed_course`
--

DROP TABLE IF EXISTS `user_buyed_course`;
CREATE TABLE IF NOT EXISTS `user_buyed_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `c` int(11) NOT NULL DEFAULT 0,
  `c_plus` int(11) NOT NULL DEFAULT 0,
  `java` int(11) NOT NULL DEFAULT 0,
  `rdbms` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_buyed_course`
--

INSERT INTO `user_buyed_course` (`id`, `user_id`, `c`, `c_plus`, `java`, `rdbms`) VALUES
(13, 13, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` bigint(13) DEFAULT 0,
  `user_dob` varchar(255) DEFAULT 'none',
  `user_address` varchar(255) DEFAULT 'none',
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT '2',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COMMENT='User details table';

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_dob`, `user_address`, `user_password`, `user_image`) VALUES
(8, 'Tanmoy Das', 'td632149545@gmail.com', 9123624445, '2/10/1998', 'Kolkata 700078', '81dc9bdb52d04dc20036dbd8313ed055', 'profile_img/profile_photo.jpeg'),
(7, 'supriyo ghatak', 'supriyoghatak15@gmail.com', 9163440544, '2/10/1998', '2/76 sucheta nagar ', '81dc9bdb52d04dc20036dbd8313ed055', '2'),
(9, 'rohan', 'rohan@gmail.com', 0, 'none', 'none', '81dc9bdb52d04dc20036dbd8313ed055', 'profile_img/profile_photo.jpeg'),
(10, 'Tanmoy Das', 'td@gmail.com', 0, 'none', 'none', 'c20ad4d76fe97759aa27a0c99bff6710', '2'),
(11, 't', 't@gmail.com', 0, 'none', 'none', 'c4ca4238a0b923820dcc509a6f75849b', '2'),
(12, 'Banti Das', 'dasbanti17@gmail.com', 0, 'none', 'none', '81dc9bdb52d04dc20036dbd8313ed055', '2'),
(13, 'Ilearn', 'Ilearn@gmail.com', 3366270502, '2/10/1998', 'Chowbaga Rd, Anandapur, Mundapara, Kolkata, West Bengal 700107', '81dc9bdb52d04dc20036dbd8313ed055', 'profile_img/Hitk_1.png'),
(14, 'siddharth Basu', 'guddu.happy@gmail.com', 5, '8455', 'n  ', '81dc9bdb52d04dc20036dbd8313ed055', 'profile_img/Hitk_1.png');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_exam_result`
--

INSERT INTO `user_exam_result` (`id`, `user_id`, `c_1st`, `c_2nd`) VALUES
(9, 13, 75.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
CREATE TABLE IF NOT EXISTS `visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `total_count`) VALUES
(1, 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
