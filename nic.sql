-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2015 at 07:58 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

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
-- Table structure for table `officers`
--

CREATE TABLE IF NOT EXISTS `officers` (
  `name` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `officer_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `officer_type` enum('general_officer','reporting_officer','reviewing_officer') NOT NULL,
  `cadre` varchar(255) DEFAULT NULL,
  `yearreport` year(4) NOT NULL,
  `set` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`name`, `id`, `officer_id`, `password`, `officer_type`, `cadre`, `yearreport`, `set`) VALUES
('', 27, 'ab1', 'ab1', 'general_officer', '', 0000, 1),
('', 28, 'ab2', 'ab2', 'general_officer', '', 0000, 1),
('', 29, 'ab3', 'ab3', 'general_officer', '', 0000, 1),
('', 30, 'rep1', 'rep1', 'reporting_officer', NULL, 0000, -1),
('', 31, 'rev1', 'rev1', 'reviewing_officer', NULL, 0000, -1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_datas`
--

CREATE TABLE IF NOT EXISTS `personal_datas` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `date_presentgrade` date NOT NULL,
  `grade` varchar(255) NOT NULL,
  `present_post` varchar(255) NOT NULL,
  `date_presentpost` date NOT NULL,
  `period_absence` date NOT NULL,
  `training` text NOT NULL,
  `set` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_datas`
--

INSERT INTO `personal_datas` (`id`, `fname`, `lname`, `dob`, `qualification`, `date_presentgrade`, `grade`, `present_post`, `date_presentpost`, `period_absence`, `training`, `set`) VALUES
(27, 'hello', 'ksafdjkl', '0000-00-00', 'fdsaf', '0000-00-00', 'fsda', 'saf', '0000-00-00', '0000-00-00', 'faasdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reportingofficers_part3`
--

CREATE TABLE IF NOT EXISTS `reportingofficers_part3` (
  `reporting-officer-id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `plannedwork` int(11) NOT NULL,
  `qualityoutput` int(11) NOT NULL,
  `analytical` int(11) NOT NULL,
  `exceptionalwork` int(11) NOT NULL,
  `overall_workoutput` int(11) NOT NULL,
  `attitudetowork` int(11) NOT NULL,
  `responsibility` int(11) NOT NULL,
  `discipline` int(11) NOT NULL,
  `communication` int(11) NOT NULL,
  `leadership` int(11) NOT NULL,
  `teamspirit` int(11) NOT NULL,
  `timeschedule` int(11) NOT NULL,
  `inter_personal` int(11) NOT NULL,
  `personality` int(11) NOT NULL,
  `overall_personalattributes` int(11) NOT NULL,
  `Knowledgeofrules` int(11) NOT NULL,
  `strategic` int(11) NOT NULL,
  `decision` int(11) NOT NULL,
  `coordination` int(11) NOT NULL,
  `subordinates` int(11) NOT NULL,
  `handlingproblems` int(11) NOT NULL,
  `inspection` int(11) NOT NULL,
  `financialpropriety` int(11) NOT NULL,
  `overall_functionalcompetency` int(11) NOT NULL,
  `public_relation` mediumtext NOT NULL,
  `training` mediumtext NOT NULL,
  `health` mediumtext NOT NULL,
  `reporting_officer-pen-picture` longtext NOT NULL,
  `overall_numerical-grading` int(1) NOT NULL,
  `set` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reporting_officer`
--

CREATE TABLE IF NOT EXISTS `reporting_officer` (
  `id` varchar(100) NOT NULL,
  `reporting-officer-id` varchar(100) NOT NULL,
  `set` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporting_officer`
--

INSERT INTO `reporting_officer` (`id`, `reporting-officer-id`, `set`) VALUES
('ab1', 'rep1', 0),
('ab2', 'rep1', 0),
('ab3', 'rep1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviewingofficers`
--

CREATE TABLE IF NOT EXISTS `reviewingofficers` (
  `review_id` varchar(255) NOT NULL,
  `officer_id` varchar(255) NOT NULL,
  `LOS` int(11) NOT NULL,
  `agree` int(1) NOT NULL,
  `rdisagreement_detail` varchar(255) NOT NULL,
  `rpen_pic` varchar(255) NOT NULL,
  `rplannedwork` int(11) NOT NULL,
  `rqualityoutput` int(11) NOT NULL,
  `ranalytical` int(11) NOT NULL,
  `rexceptionalwork` int(11) NOT NULL,
  `overall_workoutput` int(11) NOT NULL,
  `rattitudetowork` int(11) NOT NULL,
  `rresponsibility` int(11) NOT NULL,
  `rdiscipline` int(11) NOT NULL,
  `rcommunication` int(11) NOT NULL,
  `rleadership` int(11) NOT NULL,
  `rteamspirit` int(11) NOT NULL,
  `rtimeschedule` int(11) NOT NULL,
  `rinter_personal` int(11) NOT NULL,
  `rpersonality` int(11) NOT NULL,
  `overall_personalattributes` int(11) NOT NULL,
  `rKnowledgeofrules` int(11) NOT NULL,
  `rstrategic` int(11) NOT NULL,
  `rdecision` int(11) NOT NULL,
  `rcoordination` int(11) NOT NULL,
  `rsubordinates` int(11) NOT NULL,
  `rhandlingproblems` int(11) NOT NULL,
  `rinspection` int(11) NOT NULL,
  `rfinancialpropriety` int(11) NOT NULL,
  `overall_functionalcompetency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewingofficers`
--

INSERT INTO `reviewingofficers` (`review_id`, `officer_id`, `LOS`, `agree`, `rdisagreement_detail`, `rpen_pic`, `rplannedwork`, `rqualityoutput`, `ranalytical`, `rexceptionalwork`, `overall_workoutput`, `rattitudetowork`, `rresponsibility`, `rdiscipline`, `rcommunication`, `rleadership`, `rteamspirit`, `rtimeschedule`, `rinter_personal`, `rpersonality`, `overall_personalattributes`, `rKnowledgeofrules`, `rstrategic`, `rdecision`, `rcoordination`, `rsubordinates`, `rhandlingproblems`, `rinspection`, `rfinancialpropriety`, `overall_functionalcompetency`) VALUES
('rev1', 'ab1', 34214, 1, '  df', '8', 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8),
('rev1', 'ab2', 23, 1, '  fsdfsd', 'saffsd', 8, 0, 8, 8, 1, 8, 8, 8, 8, 8, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reviewing_officer`
--

CREATE TABLE IF NOT EXISTS `reviewing_officer` (
  `review_officer-id` varchar(100) NOT NULL,
  `reporting-officer-id` varchar(100) NOT NULL,
  `set` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviewing_officer`
--

INSERT INTO `reviewing_officer` (`review_officer-id`, `reporting-officer-id`, `set`) VALUES
('rev1', 'rep5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work_infos`
--

CREATE TABLE IF NOT EXISTS `work_infos` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `target0` text NOT NULL,
  `target1` text NOT NULL,
  `target2` text NOT NULL,
  `target3` text NOT NULL,
  `target4` text NOT NULL,
  `target5` text NOT NULL,
  `target6` text NOT NULL,
  `target7` text NOT NULL,
  `target8` text NOT NULL,
  `target9` text NOT NULL,
  `achievement0` text NOT NULL,
  `achievement1` text NOT NULL,
  `achievement2` text NOT NULL,
  `achievement3` text NOT NULL,
  `achievement4` text NOT NULL,
  `achievement5` text NOT NULL,
  `achievement6` text NOT NULL,
  `achievement7` text NOT NULL,
  `achievement8` text NOT NULL,
  `achievement9` text NOT NULL,
  `shortfalls` varchar(255) NOT NULL,
  `higher_achievement` varchar(255) NOT NULL,
  `date_of_filling` date NOT NULL,
  `set2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`officer_id`),
  ADD UNIQUE KEY `userid` (`id`);

--
-- Indexes for table `personal_datas`
--
ALTER TABLE `personal_datas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`id`);

--
-- Indexes for table `reportingofficers_part3`
--
ALTER TABLE `reportingofficers_part3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `reporting_id` (`reporting-officer-id`),
  ADD KEY `reporting_id_2` (`reporting-officer-id`);

--
-- Indexes for table `reporting_officer`
--
ALTER TABLE `reporting_officer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reporting-officer-id` (`reporting-officer-id`);

--
-- Indexes for table `reviewingofficers`
--
ALTER TABLE `reviewingofficers`
  ADD PRIMARY KEY (`officer_id`),
  ADD UNIQUE KEY `reporting_id` (`officer_id`),
  ADD KEY `review_id` (`review_id`);

--
-- Indexes for table `reviewing_officer`
--
ALTER TABLE `reviewing_officer`
  ADD PRIMARY KEY (`reporting-officer-id`),
  ADD KEY `review_officer-id` (`review_officer-id`);

--
-- Indexes for table `work_infos`
--
ALTER TABLE `work_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
