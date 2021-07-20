-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2021 at 05:09 AM
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
-- Table structure for table `c_plus_video`
--

DROP TABLE IF EXISTS `c_plus_video`;
CREATE TABLE IF NOT EXISTS `c_plus_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_plus_video`
--

INSERT INTO `c_plus_video` (`id`, `video_id`, `src`) VALUES
(1, 'video1', 'https://drive.google.com/file/d/1iESv58C73v_ixbOWgAhLOd4HwhCX0jZy/preview'),
(2, 'video2', 'https://drive.google.com/file/d/1bjcSvV1PuGfXEJWg4AATGt6rb2X-4Ong/preview'),
(3, 'video3', 'https://drive.google.com/file/d/1PGyA63-_xdM1XNiz2picizSD7dqerO4X/preview'),
(4, 'video4', 'https://drive.google.com/file/d/1ESeWeGHQapsV2y7qWzRBYjME7zgCsgF5/preview'),
(5, 'video5', 'https://drive.google.com/file/d/12XBf8Sn8YJrW_Ao4vt6Ehp4RHO6wiyt8/preview'),
(6, 'video6', 'https://drive.google.com/file/d/1P-JJcg2gMhvir2exNxj-WBeIxjQlqAgO/preview'),
(7, 'video7', 'https://drive.google.com/file/d/1fruN4prU7pUf6TKvcuyyk_CJ-CuDgc9s/preview'),
(8, 'video8', 'https://drive.google.com/file/d/11biK3kQBsxL4A6XuK09BLEA_GPs6YRQR/preview'),
(9, 'video9', 'https://drive.google.com/file/d/1OrHkzcusCR5abFuC-D6Sfis02Dhj4jHM/preview'),
(10, 'video10', 'https://drive.google.com/file/d/1Bio5URwpIEfGyMu4yG4o5gLz1njl2idP/preview'),
(11, 'video11', 'https://drive.google.com/file/d/18E2wvTyhSsAl4tSomYH5sI8G7CibFxyl/preview'),
(12, 'video12', 'https://drive.google.com/file/d/1hK19KtQLEygRZKbTgYcOPQY6winGmZ8h/preview'),
(13, 'video13', 'https://drive.google.com/file/d/19basbMSMVt6tO8nE148eupuf2w1sY4A8/preview'),
(14, 'video14', 'https://drive.google.com/file/d/1OiX_ESVrxa1OGxhbJmJ_usWXP3LbeAnT/preview');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
