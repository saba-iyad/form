-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 04:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `Id` int(11) NOT NULL,
  `scientific-department` varchar(50) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `forms_attendance` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `Study_hours` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Course_objectives` varchar(100) NOT NULL,
  `Course_Outcomes` varchar(100) NOT NULL,
  `Teaching_learning_methods` varchar(100) NOT NULL,
  `Evaluation_methods1` varchar(100) NOT NULL,
  `Evaluation_methods2` varchar(100) NOT NULL,
  `bookreq` varchar(150) NOT NULL,
  `referncesmain` varchar(150) NOT NULL,
  `bookandrefe` varchar(150) NOT NULL,
  `referncesnet` varchar(150) NOT NULL,
  `planedev` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE `infrastructure` (
  `Id` int(11) NOT NULL,
  `teaching_methods` varchar(50) NOT NULL,
  `Evaluation_methods` varchar(50) NOT NULL,
  `Unit_name` varchar(50) NOT NULL,
  `Required_learning_outcomes` varchar(100) NOT NULL,
  `week` varchar(30) NOT NULL,
  `hours` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `username`, `password`, `email`) VALUES
(1, 'noora', 'norhan98', 'noor@gmail'),
(2, 'ahmad ', 'ahmad789', 'ahmad@gmail'),
(3, 'karim', 'karim9321', 'karim@gmail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `infrastructure`
--
ALTER TABLE `infrastructure`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `infrastructure`
--
ALTER TABLE `infrastructure`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
