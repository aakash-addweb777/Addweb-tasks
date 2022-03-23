-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 03:14 PM
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
-- Database: `table4`
--

-- --------------------------------------------------------

--
-- Table structure for table `table4`
--

CREATE TABLE `table4` (
  `id` bigint(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `quality` int(15) NOT NULL,
  `phone number` int(15) NOT NULL,
  `age` int(12) NOT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table4`
--

INSERT INTO `table4` (`id`, `quantity`, `quality`, `phone number`, `age`, `place`) VALUES
(1, '12kg', 10, 894792764, 21, 'jaipur'),
(2, '12kg', 10, 894792764, 21, 'jaipur'),
(3, '12kg', 10, 894792764, 21, 'jaipur'),
(4, '12kg', 10, 894792764, 21, 'jaipur'),
(5, '12kg', 10, 894792764, 21, 'jaipur'),
(6, '12kg', 10, 894792764, 21, 'jaipur'),
(7, '12kg', 10, 894792764, 21, 'jaipur'),
(8, '12kg', 10, 894792764, 21, 'jaipur'),
(4567, '12kg', 10, 894792764, 21, 'jaipur'),
(2345678, '12kg', 10, 894792764, 21, 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `table5`
--

CREATE TABLE `table5` (
  `roll no.` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` int(15) NOT NULL,
  `DOB` int(15) NOT NULL,
  `SEX` varchar(15) NOT NULL,
  `height` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table5`
--

INSERT INTO `table5` (`roll no.`, `name`, `class`, `DOB`, `SEX`, `height`) VALUES
(1234561, 'aakash', 10, 19102000, 'Male', 511),
(1234562, 'aakash', 10, 19102000, 'Male', 511),
(1234567, 'aakash', 10, 19102000, 'Male', 511),
(12345673, 'aakash', 10, 19102000, 'Male', 511),
(12345674, 'aakash', 10, 19102000, 'Male', 511),
(12345675, 'aakash', 10, 19102000, 'Male', 511),
(12345676, 'aakash', 10, 19102000, 'Male', 511),
(12345677, 'aakash', 10, 19102000, 'Male', 511),
(12345678, 'aakash', 10, 19102000, 'Male', 511),
(12345679, 'aakash', 10, 19102000, 'Male', 511);

-- --------------------------------------------------------

--
-- Table structure for table `table6`
--

CREATE TABLE `table6` (
  `pin code` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `age` int(15) NOT NULL,
  `height` bigint(12) NOT NULL,
  `weight` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table6`
--

INSERT INTO `table6` (`pin code`, `country`, `state`, `age`, `height`, `weight`) VALUES
(45678, 'India', 'Rajasthan', 21, 511, 70),
(87654, 'India', 'Rajasthan', 21, 511, 70),
(87656, 'India', 'Rajasthan', 21, 511, 70),
(345678, 'India', 'Rajasthan', 21, 511, 70),
(456787, 'India', 'Rajasthan', 21, 511, 70),
(456788, 'India', 'Rajasthan', 21, 511, 70),
(876541, 'India', 'Rajasthan', 21, 511, 70),
(987654, 'India', 'Rajasthan', 21, 511, 70),
(7654345, 'India', 'Rajasthan', 21, 511, 70),
(9876543, 'India', 'Rajasthan', 21, 511, 70);

-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE `table7` (
  `id` int(20) NOT NULL,
  `subjects` int(20) NOT NULL,
  `account no` int(15) NOT NULL,
  `amount` int(15) NOT NULL,
  `half yearly fees` int(12) NOT NULL,
  `full year fees` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table7`
--

INSERT INTO `table7` (`id`, `subjects`, `account no`, `amount`, `half yearly fees`, `full year fees`) VALUES
(23456, 6, 2345645, 12000, 6000, 12000),
(234567, 6, 4523456, 12000, 6000, 12000),
(876567, 6, 456456, 12000, 6000, 12000),
(3456789, 6, 4567890, 12000, 6000, 12000),
(8674567, 6, 452342345, 12000, 6000, 12000),
(8765671, 6, 45656710, 12000, 6000, 12000),
(9876543, 6, 4567856, 12000, 6000, 12000),
(87654345, 6, 4456765, 12000, 6000, 12000),
(87654567, 6, 567657890, 12000, 6000, 12000),
(98765678, 6, 45234, 12000, 6000, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `table8`
--

CREATE TABLE `table8` (
  `10th marks` float NOT NULL,
  `11th marks` float NOT NULL,
  `12marks` float NOT NULL,
  `1st year %` float NOT NULL,
  `2nd year %` float NOT NULL,
  `3rd year %` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table8`
--

INSERT INTO `table8` (`10th marks`, `11th marks`, `12marks`, `1st year %`, `2nd year %`, `3rd year %`) VALUES
(56, 51, 80, 87, 84, 91),
(57, 51, 80, 79, 87, 81),
(67, 52, 87, 75, 83, 82),
(71, 55, 88, 79, 84, 81),
(78, 73, 75, 70, 67, 80),
(79, 54, 46, 87, 84, 91),
(80, 50, 85, 77, 87, 81),
(90, 59, 70, 87, 84, 91),
(91, 53, 82, 87, 84, 91),
(95, 51, 80, 65, 76, 78);

-- --------------------------------------------------------

--
-- Table structure for table `table9`
--

CREATE TABLE `table9` (
  `name` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` int(15) NOT NULL,
  `college` varchar(15) NOT NULL,
  `place` varchar(12) NOT NULL,
  `mob no.` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table9`
--

INSERT INTO `table9` (`name`, `branch`, `year`, `college`, `place`, `mob no.`) VALUES
('aakash', 'ece', 4, 'jecrc', 'jaipur', 8967532567),
('hima', 'ece', 4, 'poornima uni', 'jaipur', 876545678),
('himanshu', 'ece', 4, 'jecrc uni', 'jaipur', 987654387),
('jatin', 'ece', 4, 'poornima uni', 'jaipur', 876544567),
('poonam', 'ece', 4, 'poornima uni', 'jaipur', 876548798),
('ram', 'ece', 4, 'poornima uni', 'jaipur', 876545678),
('ravi', 'ece', 4, 'apex', 'ahmedabad', 5678532567),
('ronak', 'ece', 4, 'jecrc uni', 'jaipur', 8967556787),
('shyam', 'ece', 4, 'poornima uni', 'jaipur', 876545678),
('somay', 'ece', 4, 'poornima uni', 'jaipur', 87654);

-- --------------------------------------------------------

--
-- Table structure for table `table10`
--

CREATE TABLE `table10` (
  `sub1` int(20) NOT NULL,
  `sub2` int(20) NOT NULL,
  `sub3` int(15) NOT NULL,
  `sub4` int(15) NOT NULL,
  `sub5` int(12) NOT NULL,
  `sub6` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table10`
--

INSERT INTO `table10` (`sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(80, 70, 80, 67, 89, 78),
(79, 67, 54, 78, 34, 67),
(77, 67, 65, 34, 53, 64),
(53, 68, 53, 68, 53, 46),
(53, 53, 68, 97, 89, 46),
(68, 68, 89, 68, 68, 46),
(89, 89, 89, 68, 68, 65),
(89, 68, 68, 70, 89, 64),
(68, 45, 45, 45, 79, 64),
(45, 45, 68, 70, 64, 64);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table4`
--
ALTER TABLE `table4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table5`
--
ALTER TABLE `table5`
  ADD PRIMARY KEY (`roll no.`);

--
-- Indexes for table `table6`
--
ALTER TABLE `table6`
  ADD PRIMARY KEY (`pin code`);

--
-- Indexes for table `table7`
--
ALTER TABLE `table7`
  ADD PRIMARY KEY (`id`,`subjects`),
  ADD UNIQUE KEY `id` (`id`,`subjects`);

--
-- Indexes for table `table8`
--
ALTER TABLE `table8`
  ADD PRIMARY KEY (`10th marks`);

--
-- Indexes for table `table9`
--
ALTER TABLE `table9`
  ADD PRIMARY KEY (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table4`
--
ALTER TABLE `table4`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2345679;

--
-- AUTO_INCREMENT for table `table5`
--
ALTER TABLE `table5`
  MODIFY `roll no.` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345680;

--
-- AUTO_INCREMENT for table `table6`
--
ALTER TABLE `table6`
  MODIFY `pin code` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9876544;

--
-- AUTO_INCREMENT for table `table7`
--
ALTER TABLE `table7`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98765679;

--
-- AUTO_INCREMENT for table `table8`
--
ALTER TABLE `table8`
  MODIFY `10th marks` float NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
