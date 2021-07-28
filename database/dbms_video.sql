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
-- Table structure for table `dbms_video`
--

DROP TABLE IF EXISTS `dbms_video`;
CREATE TABLE IF NOT EXISTS `dbms_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms_video`
--

INSERT INTO `dbms_video` (`id`, `video_id`, `src`) VALUES
(1, 'video1', 'https://drive.google.com/file/d/1GfGSR8EX6kqAGRkAiO4Irsd_Cs_LkCY4/preview'),
(2, 'video2', 'https://drive.google.com/file/d/1ty5jrUsAVTRKfsuzv5UKNZfgC9CT4kSc/preview'),
(3, 'video3', 'https://drive.google.com/file/d/13eUJqASqXw6RsYYi1cx2el5V_IXIYI3-/preview'),
(4, 'video4', 'https://drive.google.com/file/d/1aHYyYBlWKhFlr6C-meC_g6w2pzPrbz5A/preview'),
(5, 'video5', 'https://drive.google.com/file/d/1M4cGNbdS2FHHd9uTypnZtVuQuQUME8GS/preview'),
(6, 'video8', 'https://drive.google.com/file/d/1yewm7WvkOFrcBHJjjlNSp47vSWYFXBcy/preview'),
(7, 'video9', 'https://drive.google.com/file/d/1a6OuGk0J0bIfxPBDvfx7cyoQX3dIeQkw/preview'),
(8, 'video10', 'https://drive.google.com/file/d/1HCjWsq4ogooQvRIhFFvi1ae2SdUz5BtY/preview'),
(9, 'video11', 'https://drive.google.com/file/d/1IRBfM9VRJSN3DbOef2kZ8G2VRsqF9gGt/preview'),
(10, 'video12', 'https://drive.google.com/file/d/1EosAoXnzoZo9cN27krwRp3BZOm6Ru_FI/preview'),
(11, 'video14', 'https://drive.google.com/file/d/1ljMtgv8uNaW2XBmCN50VUjNYXynet7SC/preview'),
(12, 'video6', 'https://drive.google.com/file/d/1IbkprCO2CiSqmObeboD8m4Ft3QgNbxWW/preview'),
(13, 'video7', 'https://drive.google.com/file/d/1PncjAmmw90jmwkQgolo30kDEEtKDuRJb/preview'),
(14, 'video13', 'https://drive.google.com/file/d/1z7SZwj3Of1nacRcT7Dmf67FMkWiXGs9G/preview');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
