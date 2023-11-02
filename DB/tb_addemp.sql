-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 09:49 AM
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
-- Table structure for table `tb_addemp`
--

CREATE TABLE `tb_addemp` (
  `idno` int(10) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `JOB` varchar(30) NOT NULL,
  `CTRY` varchar(255) NOT NULL,
  `STAT` varchar(255) NOT NULL,
  `IMAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_addemp`
--

INSERT INTO `tb_addemp` (`idno`, `NAME`, `DOB`, `JOB`, `CTRY`, `STAT`, `IMAGE`) VALUES
(14, 'arun', '2005-10-24', 'Team Lead', 'Albania', 'Kucove', 'Penguins.jpg'),
(15, 'avin', '2005-10-01', 'manager', 'Antigua And Barbuda', 'Saint John', 'Koala.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_addemp`
--
ALTER TABLE `tb_addemp`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_addemp`
--
ALTER TABLE `tb_addemp`
  MODIFY `idno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
