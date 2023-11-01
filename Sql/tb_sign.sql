-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 09:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_sign`
--

CREATE TABLE `tb_sign` (
  `logid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sign`
--

INSERT INTO `tb_sign` (`logid`, `name`, `email`, `password`, `confirm_password`) VALUES
(1, 'Arun', 'iamarun.rs@gmail.com', '123456', '123456'),
(2, 'ajith', 'ajith@gmail.com', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_sign`
--
ALTER TABLE `tb_sign`
  ADD PRIMARY KEY (`logid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_sign`
--
ALTER TABLE `tb_sign`
  MODIFY `logid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
