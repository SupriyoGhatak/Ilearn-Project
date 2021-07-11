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
-- Table structure for table `java_video`
--

DROP TABLE IF EXISTS `java_video`;
CREATE TABLE IF NOT EXISTS `java_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `java_video`
--

INSERT INTO `java_video` (`id`, `video_id`, `src`) VALUES
(1, 'video1', 'https://drive.google.com/file/d/1IUP6gs__-3XTC-ZBHVLHyFSl-dlpOBCw/preview'),
(2, 'video2', 'https://drive.google.com/file/d/13N8834apE69jtCUwsD_hlz1aHIuBgE51/preview'),
(3, 'video3', 'https://drive.google.com/file/d/1Mb4vskuZtMjZFuJRmMX_EQ9f1UdwfwTX/preview'),
(4, 'video4', 'https://drive.google.com/file/d/1_YgA4E6QhJof-lxjv0JTliW1DZIrZVIr/preview'),
(5, 'video5', 'https://drive.google.com/file/d/1gZHU5mnFD-wPzUjj48NsiKvShJ16z49a/preview'),
(6, 'video6', 'https://drive.google.com/file/d/1ntfRUxytT6y-CEJiwo02z99ADELDoNTW/preview'),
(7, 'video7', 'https://drive.google.com/file/d/1Gq_ImoJX3S2TfaEpJZc6yKca3SX-sgWA/preview'),
(8, 'video8', 'https://drive.google.com/file/d/1npxT_Irtq-XvwmgF_78LnYCwRyt1Pwoj/preview'),
(9, 'video9', 'https://drive.google.com/file/d/1zqP6wYiYLCY_80_kmWkCWwxQQ5hAd21-/preview'),
(10, 'video10', 'https://drive.google.com/file/d/1qzFjqURqgSMwst83bxauuWVX9JJgdmf_/preview'),
(11, 'video11', 'https://drive.google.com/file/d/1IcEy0PHbTxESZs510N2PZrCXTWxnu4jI/preview'),
(12, 'video12', 'https://drive.google.com/file/d/1NbtdNrWj6j4-4GF_hsLz0kfJrwREEVKA/preview'),
(13, 'video13', 'https://drive.google.com/file/d/1OUDCOMibQ10xVvzkfGF7E1Mmli-UgygT/preview'),
(14, 'video14', 'https://drive.google.com/file/d/1NWmPngRSpbnr6XgNR2ydTgixoSdPKJNV/preview');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
