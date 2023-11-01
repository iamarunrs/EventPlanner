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
-- Table structure for table `tb_career`
--

CREATE TABLE `tb_career` (
  `ID` int(11) NOT NULL,
  `logid` int(255) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `PH` varchar(20) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `education` varchar(30) NOT NULL,
  `selectcountry` varchar(255) NOT NULL,
  `selectstate` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Resume` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_career`
--

INSERT INTO `tb_career` (`ID`, `logid`, `Name`, `DOB`, `email`, `PH`, `Gender`, `education`, `selectcountry`, `selectstate`, `Photo`, `Resume`, `Status`) VALUES
(26, 1, 'ajith', '2005-10-06', 'iamarun.rs@gmail.com', '8940242654', 'female', 'graduate', 'Bangladesh', 'Faridpur', 'arun aadhar.jpg', 'AruN resume.docx', 1),
(27, 1, 'arun', '2005-10-15', 'iamarun.rs@gmail.com', '8940242654', 'female', 'graduate', 'Bangladesh', 'Gaybanda', 'arun aadhar.jpg', 'Application Form PASSPORT ARUN.pdf', 2),
(28, 2, 'Akash', '2005-10-14', 'ajith@gmail.com', '8940242654', 'female', 'PG', 'Bangladesh', 'Gopalganj', 'EMPLOYMENT 1 ST ARUN 10 TH.jpg', 'EAadhaar_864319472034_31122017185812_659597 arun.pdf', 1),
(29, 1, 'asf', '1994-03-12', 'iamarun.rs@gmail.com', '123456789', 'male', 'graduate', 'Barbados', 'Saint James', 'EMPLOYMENT 1 ST ARUN 10 TH.jpg', 'ARUN-Employment and Training Department,Govt.pdf', 2),
(30, 1, 'ajith', '2005-10-13', 'iamarun.rs@gmail.com', '8940242654', 'female', 'graduate', 'Barbados', 'Saint Andrew', 'EMPLOYMENT 1 ST ARUN 10 TH.jpg', 'ARUN-Employment and Training Department,Govt.pdf', 1),
(31, 2, 'Avin', '2005-10-26', 'ajith@gmail.com', '8940242654', 'male', 'graduate', 'India', 'Tamil Nadu', 'IMG_0417.JPG.jpg', 'AruN resume.docx', 0),
(32, 1, 'Nura', '2005-10-21', 'iamarun.rs@gmail.com', '8940242654', 'female', 'graduate', 'Bahrain', 'Manama', 'FINGERPRINT.jpg', 'Coursera UF93D24CWQUM (1).pdf', 0),
(33, 1, 'Nura', '2005-10-21', 'iamarun.rs@gmail.com', '8940242654', 'female', 'graduate', 'Bahrain', 'Manama', 'FINGERPRINT.jpg', 'Coursera UF93D24CWQUM (1).pdf', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_career`
--
ALTER TABLE `tb_career`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_career`
--
ALTER TABLE `tb_career`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
