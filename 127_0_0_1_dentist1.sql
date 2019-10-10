-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 09:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dentist1`
--
CREATE DATABASE IF NOT EXISTS `dentist1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dentist1`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `appointmentRegard` varchar(60) NOT NULL,
  `contactMethod` varchar(60) NOT NULL,
  `fromDate` date NOT NULL,
  `fromTime` time NOT NULL,
  `toTime` time NOT NULL,
  `message` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `fname`, `lname`, `email`, `phoneno`, `appointmentRegard`, `contactMethod`, `fromDate`, `fromTime`, `toTime`, `message`) VALUES
(5, 'soumya', 'shetty', 'soumyashetty146@gmail.com', '9987849364', 'Full mouth Dentistry', 'Phone Call', '2019-11-20', '22:00:00', '23:00:00', 'hii '),
(6, 'kom', 'y', 'ko@gmail.com', '7718030740', 'Full mouth Dentistry', 'E-mail', '2019-10-11', '01:00:00', '01:58:00', 'hey'),
(7, 'ok', 'ko', 'walke.niharika@gmail.com', '7718030740', 'New Patient Visit', 'E-mail', '2019-10-16', '10:01:00', '12:00:00', 'uiopp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
