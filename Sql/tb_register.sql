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
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `S_NO` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Eventdate` varchar(20) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`S_NO`, `Name`, `Email`, `Phone`, `Eventdate`, `Message`) VALUES
(2, 'Ajin', 'arunrsarunr@gmail.com', '8940242654', '2023-10-25', 'sdfnk'),
(6, 'Akash', 'as@gmail.com', '8940242654', '2023-10-28', 'info'),
(7, 'adjd', 'iamarun@gmail.com', '8940242654', '2024-03-11', 'shgftjugfh,k'),
(8, 'Ajin', 'arunrsarunr@gmail.com', '8940242654', '2023-10-28', 'kashfasgdgr'),
(9, 'Anil', 'arunrsarunr@gmail.com', '8940242654', '2023-11-10', 'sdghfdjyyluoiulo'),
(10, 'Anilh', 'as@gmail.com', '8940242654', '2023-11-03', 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as â€œa group of sentences or a single sentence that forms a unitâ€ (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the â€œcontrolling idea,â€ because it controls what happens in the rest of the paragraph'),
(11, 'Anilh', 'as@gmail.com', '8940242654', '2023-10-29', 'xdzghfdh'),
(12, 'dfjtfrjt', 'ajin@gmail.com', '8940242654', '2023-10-30', 'cnjgkm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`S_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `S_NO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
