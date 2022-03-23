-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 02:16 PM
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
-- Database: `sampledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableno._.3`
--

CREATE TABLE `tableno._.3` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `AGE` bigint(15) NOT NULL,
  `DOB` bigint(15) NOT NULL,
  `MOBILE NUMBER` bigint(15) NOT NULL,
  `AADHAR CARD NO.` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno._.3`
--

INSERT INTO `tableno._.3` (`id`, `name`, `AGE`, `DOB`, `MOBILE NUMBER`, `AADHAR CARD NO.`) VALUES
('2345678', 'shnvghjk', 56, 2345678, 987654567, 6567575757),
('45', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('4567', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('456797', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('45679765', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('579765', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('679765', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('6797655', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('67976555', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567),
('679765555', 'ertyujdfgtyu', 76, 9876543, 98765434, 54334567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableno._.3`
--
ALTER TABLE `tableno._.3`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
