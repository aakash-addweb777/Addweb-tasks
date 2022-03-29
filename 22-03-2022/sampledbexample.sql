-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 02:23 PM
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
-- Table structure for table `tableno.1`
--

CREATE TABLE `tableno.1` (
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `AGE` bigint(10) NOT NULL,
  `DOB` bigint(10) NOT NULL,
  `SEX` varchar(20) NOT NULL,
  `MOBILE NO.` bigint(20) NOT NULL,
  `Height` bigint(5) NOT NULL,
  `Weight` bigint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno.1`
--

INSERT INTO `tableno.1` (`FIRSTNAME`, `LASTNAME`, `AGE`, `DOB`, `SEX`, `MOBILE NO.`, `Height`, `Weight`) VALUES
('Aakash ', 'chamoli', 21, 19102000, 'Male', 8947927647, 0, 0),
('sdygvsdly', 'sjfhvbjsf', 21, 246542, 'dgcdsj', 378456834, 0, 0),
('Aakash ', 'chamoli', 21, 19102000, 'Male', 8947927647, 0, 0),
('sdygvsdly', 'sjfhvbjsf', 21, 246542, 'dgcdsj', 378456834, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tableno.3`
--

CREATE TABLE `tableno.3` (
  `FIRSTNAME` varchar(3) NOT NULL,
  `LASTNAME` varchar(33) NOT NULL,
  `FATHER'S NAME` varchar(3) NOT NULL,
  `MOTHER'S NAME` varchar(20) NOT NULL,
  `MOBILE NUMBER` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `tableno._1`
--

CREATE TABLE `tableno._1` (
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `AGE` bigint(15) NOT NULL,
  `DOB` bigint(15) NOT NULL,
  `MOBILE NUMBER` varchar(12) NOT NULL,
  `SEX` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno._1`
--

INSERT INTO `tableno._1` (`FIRSTNAME`, `LASTNAME`, `AGE`, `DOB`, `MOBILE NUMBER`, `SEX`) VALUES
('Aakash ', 'chamoli', 21, 19102000, '8947927647', 'Male'),
('hari', 'sharma', 12, 1232000, '8967453276', 'male'),
('jatin', 'sharma', 21, 12212001, '896453835', 'male'),
('ahfjcda', 'ancvhac', 43, 56453423, '7867564578', 'male'),
('sdghcyti', 'fvfse', 43, 12345678, '1234567890', 'male'),
('harsh', 'kumar', 12, 19102001, '8956457644', 'male'),
('ronak', 'mathur', 12, 12345677, '4567345654', 'male'),
('harsh', 'beniwal', 21, 21122112, '7676767676', 'male'),
('jon', 'snow', 21, 1221121, '8967543456', 'male'),
('daenerys', 'targeryn', 25, 1241996, '7756453490', 'male'),
('Aakash ', 'chamoli', 21, 19102000, '8947927647', 'Male'),
('hari', 'sharma', 12, 1232000, '8967453276', 'male'),
('jatin', 'sharma', 21, 12212001, '896453835', 'male'),
('ahfjcda', 'ancvhac', 43, 56453423, '7867564578', 'male'),
('sdghcyti', 'fvfse', 43, 12345678, '1234567890', 'male'),
('harsh', 'kumar', 12, 19102001, '8956457644', 'male'),
('ronak', 'mathur', 12, 12345677, '4567345654', 'male'),
('harsh', 'beniwal', 21, 21122112, '7676767676', 'male'),
('jon', 'snow', 21, 1221121, '8967543456', 'male'),
('daenerys', 'targeryn', 25, 1241996, '7756453490', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tableno._2`
--

CREATE TABLE `tableno._2` (
  `FIRSTNAME` varchar(15) NOT NULL,
  `LASTNAME` varchar(15) NOT NULL,
  `AGE` bigint(15) NOT NULL,
  `FATHER'S NAME` varchar(15) NOT NULL,
  `MOTHER'S NAME` varchar(15) NOT NULL,
  `AADHAR CARD NO.` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno._2`
--

INSERT INTO `tableno._2` (`FIRSTNAME`, `LASTNAME`, `AGE`, `FATHER'S NAME`, `MOTHER'S NAME`, `AADHAR CARD NO.`) VALUES
('Aakash ', 'chamoli', 21, 'surya chamoli', 'lalita chamoli', 6567575757),
('uhdcjhd', 'dvhcsdc', 12, 'mcvn jsfcv', 'sjv kjv kf', 653543573),
('shugvuhcef', 'sfuvufw', 54, 'sdvcdsuf', 'sjvhifsv', 245247542),
('sjbcjhdsc', 'kjvnjdf', 43, 'adkvkw', 'jcsbvfsj', 245273468742),
('dsahbvffwjv', 'sfkhvbjwf', 45, 'skhbvs', 'skvnksf', 24765428),
('jzvbjsfv', 'sihbgbvkgsw', 45, 'jskdgudk', 'jfbvf', 72572354),
('suodfHUOS', 'SFLJVBWG', 76, 'SUHFGVF', 'CVB', 34567),
('ZXCVBHNJ', 'cvbn', 34, 'dfghj', 'xfghjm', 876543),
('styhjnvghjk', 'jhgvbhgfc', 56, 'kuyghf', 'fghbvfgyj', 8745678),
('dujhdfj', 'jgfvbnbdf', 54, 'jhcdtyjkfdcvb', 'dfghjbvcdfgh', 7654345),
('Aakash ', 'chamoli', 21, 'surya chamoli', 'lalita chamoli', 6567575757),
('uhdcjhd', 'dvhcsdc', 12, 'mcvn jsfcv', 'sjv kjv kf', 653543573),
('shugvuhcef', 'sfuvufw', 54, 'sdvcdsuf', 'sjvhifsv', 245247542),
('sjbcjhdsc', 'kjvnjdf', 43, 'adkvkw', 'jcsbvfsj', 245273468742),
('dsahbvffwjv', 'sfkhvbjwf', 45, 'skhbvs', 'skvnksf', 24765428),
('jzvbjsfv', 'sihbgbvkgsw', 45, 'jskdgudk', 'jfbvf', 72572354),
('suodfHUOS', 'SFLJVBWG', 76, 'SUHFGVF', 'CVB', 34567),
('ZXCVBHNJ', 'cvbn', 34, 'dfghj', 'xfghjm', 876543),
('styhjnvghjk', 'jhgvbhgfc', 56, 'kuyghf', 'fghbvfgyj', 8745678),
('dujhdfj', 'jgfvbnbdf', 54, 'jhcdtyjkfdcvb', 'dfghjbvcdfgh', 7654345);

-- --------------------------------------------------------

--
-- Table structure for table `tableno._3`
--

CREATE TABLE `tableno._3` (
  `id` varchar(253) NOT NULL,
  `name` varchar(244) NOT NULL,
  `AGE` int(23) NOT NULL,
  `college` varchar(244) NOT NULL,
  `MOBILE NUMBER` bigint(244) NOT NULL,
  `AADHAR CARD NO.` bigint(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tableno._7`
--

CREATE TABLE `tableno._7` (
  `id` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `AGE` bigint(15) NOT NULL,
  `DOB` bigint(15) NOT NULL,
  `SEAT NO.` bigint(12) NOT NULL,
  `height` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno._7`
--

INSERT INTO `tableno._7` (`id`, `name`, `AGE`, `DOB`, `SEAT NO.`, `height`) VALUES
(234567, 'shnvghjk', 21, 19102000, 456, 511),
(2345678, 'shnvghjk', 21, 19102000, 456, 511),
(4234567, 'shnvghjk', 21, 19102000, 456, 511),
(23456785, 'shnvghjk', 21, 19102000, 456, 511),
(42345678, 'shnvghjk', 21, 19102000, 456, 511),
(234567854, 'shnvghjk', 21, 19102000, 456, 511),
(3456785445, 'shnvghjk', 21, 19102000, 456, 511),
(4234567854, 'shnvghjk', 21, 19102000, 456, 511),
(42345678544, 'shnvghjk', 21, 19102000, 456, 511),
(423456785445, 'shnvghjk', 21, 19102000, 456, 511);

-- --------------------------------------------------------

--
-- Table structure for table `tableno._8`
--

CREATE TABLE `tableno._8` (
  `FIRSTNAME` varchar(15) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `records` int(10) NOT NULL,
  `medals` int(10) NOT NULL,
  `streak` int(13) NOT NULL,
  `age` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno._8`
--

INSERT INTO `tableno._8` (`FIRSTNAME`, `LASTNAME`, `records`, `medals`, `streak`, `age`) VALUES
('Aakash ', 'chamoli', 12, 14, 14, 21),
('jabk', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkj', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkjc', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkjcad', 'sdhvfsjkvchamoli', 12, 14, 14, 21),
('jabkjcadv', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkjcf', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkjckdjb', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkjckdjba', 'sdhvfsjkv', 12, 14, 14, 21),
('jabkjckdjbaq', 'sdhvfsjkv', 12, 14, 14, 21);

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.1`
--

CREATE TABLE `tableno_.1` (
  `FIRSTNAME` varchar(15) NOT NULL,
  `LASTNAME` varchar(15) NOT NULL,
  `AGE` bigint(15) NOT NULL,
  `DOB` text NOT NULL,
  `MOBILE NUMBER` bigint(15) NOT NULL,
  `SEX` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.4`
--

CREATE TABLE `tableno_.4` (
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `AGE` bigint(23) NOT NULL,
  `no. of supplements` varchar(73) NOT NULL,
  `weight` bigint(15) NOT NULL,
  `height` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno_.4`
--

INSERT INTO `tableno_.4` (`FIRSTNAME`, `LASTNAME`, `AGE`, `no. of supplements`, `weight`, `height`) VALUES
('Aakash ', 'chamoli', 21, '4', 34, 511),
('sdyg', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvsd', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvsdl', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvsdly', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvTHGTGTsdly', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvTHGTsdly', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvTHTsdly', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvTsdly', 'sjfhvbjsf', 45, '5', 70, 6),
('sdygvTTsdly', 'sjfhvbjsf', 45, '5', 70, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.5`
--

CREATE TABLE `tableno_.5` (
  `CLASS` varchar(20) NOT NULL,
  `SECTION` varchar(20) NOT NULL,
  `ROLL NO.` bigint(15) NOT NULL,
  `AGE` bigint(15) NOT NULL,
  `SEAT NO.` bigint(15) NOT NULL,
  `NAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno_.5`
--

INSERT INTO `tableno_.5` (`CLASS`, `SECTION`, `ROLL NO.`, `AGE`, `SEAT NO.`, `NAME`) VALUES
('7th a', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th b', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th c', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th d', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th e', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th f', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th g', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th h', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th j', 'A', 45678, 14, 456, 'Aakash chamoli'),
('7th k', 'A', 45678, 14, 456, 'Aakash chamoli');

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.6`
--

CREATE TABLE `tableno_.6` (
  `FIRSTNAME` varchar(15) NOT NULL,
  `LASTNAME` varchar(15) NOT NULL,
  `AGE` bigint(6) NOT NULL,
  `college` varchar(20) NOT NULL,
  `MOBILE NUMBER` bigint(15) NOT NULL,
  `height` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno_.6`
--

INSERT INTO `tableno_.6` (`FIRSTNAME`, `LASTNAME`, `AGE`, `college`, `MOBILE NUMBER`, `height`) VALUES
('Aakash ', 'chamoli', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'dfghjkvb', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'dfghjkvbn', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'dfghjkvbvjvb', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'dfghjkvbvjvbn', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'dfghjkvbvjvbnn', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'dfghjkvbvjvbnnb', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'hjkvbvjnnbh', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'hjkvbvjvbnnbh', 21, 'dfghjxcvghjk', 345678976, 511),
('cghjcvbn', 'hjkvbvjvnnbh', 21, 'dfghjxcvghjk', 345678976, 511);

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.8`
--

CREATE TABLE `tableno_.8` (
  `id` bigint(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `AGE` bigint(12) NOT NULL,
  `password` int(10) NOT NULL,
  `pan card no.` int(10) NOT NULL,
  `AADHAR CARD NO.` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno_.8`
--

INSERT INTO `tableno_.8` (`id`, `name`, `AGE`, `password`, `pan card no.`, `AADHAR CARD NO.`) VALUES
(456, 'shnvghjk', 21, 45678, 8765, 876),
(4561, 'shnvghjk', 21, 45678, 8765, 876),
(4562, 'shnvghjk', 21, 45678, 8765, 876),
(4563, 'shnvghjk', 21, 45678, 8765, 876),
(4564, 'shnvghjk', 21, 45678, 8765, 876),
(4565, 'shnvghjk', 21, 45678, 8765, 876),
(4566, 'shnvghjk', 21, 45678, 8765, 876),
(4567, 'shnvghjk', 21, 45678, 8765, 876),
(4568, 'shnvghjk', 21, 45678, 8765, 876),
(4569, 'shnvghjk', 21, 45678, 8765, 876);

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.9`
--

CREATE TABLE `tableno_.9` (
  `id` int(5) NOT NULL,
  `Weight` int(5) NOT NULL,
  `blood group` varchar(5) NOT NULL,
  `DOB` int(14) NOT NULL,
  `SEAT NO.` int(5) NOT NULL,
  `height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno_.9`
--

INSERT INTO `tableno_.9` (`id`, `Weight`, `blood group`, `DOB`, `SEAT NO.`, `height`) VALUES
(345, 34, 'A+', 19102000, 456, 6),
(3456, 34, 'A+', 19102000, 456, 6),
(3473, 34, 'A+', 19102000, 456, 6),
(4567, 34, 'A+', 19102000, 456, 6),
(5673, 34, 'A+', 19102000, 456, 6),
(34561, 34, 'A+', 19102000, 456, 6),
(34567, 34, 'A+', 19102000, 456, 6),
(345673, 34, 'A+', 19102000, 456, 6),
(3456712, 34, 'A+', 19102000, 456, 6),
(34567121, 34, 'A+', 19102000, 456, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tableno_.10`
--

CREATE TABLE `tableno_.10` (
  `id` int(5) NOT NULL,
  `SECTION` int(5) NOT NULL,
  `email` varchar(15) NOT NULL,
  `room no` int(5) NOT NULL,
  `key no.` int(5) NOT NULL,
  `payment` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableno_.10`
--

INSERT INTO `tableno_.10` (`id`, `SECTION`, `email`, `room no`, `key no.`, `payment`) VALUES
(4124, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4125, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4126, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4127, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4128, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4147, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4527, 1, 'ac@gmail.com', 5678, 4567, 23456),
(4567, 1, 'ac@gmail.com', 5678, 4567, 23456),
(25671, 1, 'ac@gmail.com', 5678, 4567, 23456),
(45671, 1, 'ac@gmail.com', 5678, 4567, 23456);

-- --------------------------------------------------------

--
-- Table structure for table `tableno_1`
--

CREATE TABLE `tableno_1` (
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `AGE` bigint(10) NOT NULL,
  `DOB` bigint(10) NOT NULL,
  `SEX` int(12) NOT NULL,
  `MOBILE NO.` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tableno_2`
--

CREATE TABLE `tableno_2` (
  `FIRSTNAME` int(20) NOT NULL,
  `LASTNAME` int(11) NOT NULL,
  `FATHER'S NAME` int(11) NOT NULL,
  `MOTHER'S NAME` int(11) NOT NULL,
  `MOBILE NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableno._.3`
--
ALTER TABLE `tableno._.3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableno._7`
--
ALTER TABLE `tableno._7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableno._8`
--
ALTER TABLE `tableno._8`
  ADD PRIMARY KEY (`FIRSTNAME`);

--
-- Indexes for table `tableno_.4`
--
ALTER TABLE `tableno_.4`
  ADD PRIMARY KEY (`FIRSTNAME`);

--
-- Indexes for table `tableno_.5`
--
ALTER TABLE `tableno_.5`
  ADD PRIMARY KEY (`CLASS`);

--
-- Indexes for table `tableno_.6`
--
ALTER TABLE `tableno_.6`
  ADD PRIMARY KEY (`LASTNAME`);

--
-- Indexes for table `tableno_.8`
--
ALTER TABLE `tableno_.8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableno_.9`
--
ALTER TABLE `tableno_.9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableno_.10`
--
ALTER TABLE `tableno_.10`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
