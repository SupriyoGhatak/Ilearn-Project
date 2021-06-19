-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2021 at 04:24 PM
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
(1, 'video1', 'https://drive.google.com/file/d/1MRqtWigPN_YxrOYZHcmJwo6YvpIYwzll/preview'),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
