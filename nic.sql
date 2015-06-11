-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2015 at 07:15 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nic`
--

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE IF NOT EXISTS `personal_data` (
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `date_presentgrade` date NOT NULL,
  `grade` varchar(255) NOT NULL,
  `present_post` varchar(255) NOT NULL,
  `date_presentpost` date NOT NULL,
  `period_absence` date NOT NULL,
  `training` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `work_info`
--

CREATE TABLE IF NOT EXISTS `work_info` (
  `userid` int(11) NOT NULL,
  `description_duties` text NOT NULL,
  `target1` text NOT NULL,
  `target2` text NOT NULL,
  `target3` text NOT NULL,
  `target4` text NOT NULL,
  `target5` text NOT NULL,
  `target6` text NOT NULL,
  `target7` text NOT NULL,
  `target8` text NOT NULL,
  `target9` text NOT NULL,
  `target10` text NOT NULL,
  `achievement1` text NOT NULL,
  `achievement2` text NOT NULL,
  `achievement3` text NOT NULL,
  `achievement4` text NOT NULL,
  `achievement5` text NOT NULL,
  `achievement6` text NOT NULL,
  `achievement7` text NOT NULL,
  `achievement8` text NOT NULL,
  `achievement9` text NOT NULL,
  `achievement10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
