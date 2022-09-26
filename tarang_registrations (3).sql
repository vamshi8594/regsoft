-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2015 at 05:24 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tarang_registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `EVENT_NAME` varchar(100) NOT NULL,
  `NO_PARTICIPANTS` int(255) NOT NULL DEFAULT '0',
  `FEE` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EVENT_NAME`, `NO_PARTICIPANTS`, `FEE`) VALUES
('CODE_EX', 0, 50),
('CODE_HUNT_WITH_C', 0, 50),
('GOLD_PACKAGE', 0, 150),
('PAPER_PRESENTATION', 0, 50),
('PIXEL_PLAY', 0, 50),
('PROJECT_EXPO', 0, 100),
('SILVER_PACKAGE', 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `REG ID` int(10) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `COLLEGE` int(100) NOT NULL,
  `MAIL ID` varchar(255) NOT NULL,
  `PHONE NO` bigint(11) NOT NULL,
  `EVENT ID` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE IF NOT EXISTS `username` (
  `UserNameID` int(9) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`UserNameID`, `userName`, `pass`) VALUES
(1, 'ADMIN', 'vits1389'),
(2, 'vamshi', 'vamshi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD UNIQUE KEY `event_name` (`EVENT_NAME`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`REG ID`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`UserNameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `REG ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `UserNameID` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
