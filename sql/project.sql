-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 12:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `s2`
--

CREATE TABLE `s2` (
  `ID` int(11) NOT NULL,
  `pname1` varchar(20) NOT NULL,
  `uname1` varchar(20) NOT NULL,
  `pass1` varchar(20) NOT NULL,
  `age1` int(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phone1` bigint(10) NOT NULL,
  `email1` varchar(25) NOT NULL,
  `aadhar1` bigint(12) NOT NULL,
  `address1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s2`
--

INSERT INTO `s2` (`ID`, `pname1`, `uname1`, `pass1`, `age1`, `gender`, `phone1`, `email1`, `aadhar1`, `address1`) VALUES
(1, 'tharun', 'jana', 'tharunraj', 12, 'Male', 8056694523, 'sbtharun2001@gmail.com', 789456123214, 'nandhivaram'),
(2, '', '', '', 0, '', 0, '', 0, ''),
(3, '', '', '', 0, '', 0, '', 0, ''),
(4, 'th', 'rgr', 'rgt', 22, 'Male', 8123654786, 'rfr@gmail.com', 123654789632, 'frfr'),
(5, 'tharun', 'tharun', '1234', 12, 'Male', 9111123654, 'tharun@gmail.com', 123654789632, 'chennai'),
(6, '', '', '', 0, '', 0, '', 0, ''),
(7, 'tharun', 'tharun', 'tharun', 18, 'Male', 7894561230, 'tharun@gmail.com', 123456789012, 'chennai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s2`
--
ALTER TABLE `s2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s2`
--
ALTER TABLE `s2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
