-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 03:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table1`
--

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `id` bigint(5) DEFAULT NULL,
  `age` bigint(5) DEFAULT NULL,
  `height` bigint(5) DEFAULT NULL,
  `weight` bigint(5) DEFAULT NULL,
  `class` bigint(5) DEFAULT NULL,
  `section` bigint(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`id`, `age`, `height`, `weight`, `class`, `section`) VALUES
(1, 21, 511, 60, 10, 1),
(1, 21, 511, 60, 10, 2),
(1, 21, 511, 60, 10, 3),
(1, 21, 511, 60, 10, 4),
(1, 21, 511, 60, 10, 5),
(1, 21, 511, 60, 10, 6),
(1, 21, 511, 60, 10, 7),
(1, 21, 511, 60, 10, 8),
(1, 21, 511, 60, 10, 9),
(1, 21, 511, 60, 10, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
