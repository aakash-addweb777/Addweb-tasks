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
-- Database: `neflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `netflix`
--

CREATE TABLE `netflix` (
  `Id` int(5) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Subscription` int(10) DEFAULT NULL,
  `Plan` varchar(2) DEFAULT NULL,
  `Gmailid` varchar(30) DEFAULT NULL,
  `Amount` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `netflix`
--

INSERT INTO `netflix` (`Id`, `Password`, `Subscription`, `Plan`, `Gmailid`, `Amount`) VALUES
(1, 'Aakash', 23456, '1', '4', 499),
(2, 'ravi', 234156, '11', '5', 599),
(3, 'kishan', 2341156, '1', '5', 199),
(4, 'shyam', 2341156, '3', '5', 299),
(5, 'jack', 234114, '6', '5', 299),
(6, 'jvfghjk', 456, '6', '5', 799),
(7, '45678hjk', 4545676, '6', '5', 699),
(8, '45678h7k', 454987656, '6', '3', 499),
(9, '4568h7k', 454987656, '6', '3', 499),
(10, 'hello123', 454987656, '6', '3', 499);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
