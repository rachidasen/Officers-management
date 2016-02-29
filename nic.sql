-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 29, 2016 at 12:43 PM
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
  `cadre` varchar(255) NOT NULL,
  `yearreport` year(4) NOT NULL,
  `set` int(11) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`name`, `id`, `officer_id`, `password`, `officer_type`, `cadre`, `yearreport`, `set`) VALUES
('', 1, 'rev1', 'v1re', 'reviewing_officer', '', 0000, -1),
('ab1', 2, 'ab1', 'b1ab1', 'general_officer', '', 0000, 1),
('', 3, 'ab2', 'ab2', 'general_officer', '', 0000, -1),
('', 4, 'ab3', 'ab3', 'general_officer', '', 0000, 1),
('', 5, 'ab4', 'ab4', 'general_officer', '', 0000, -1),
('', 6, 'ab5', 'ab5', 'general_officer', '', 0000, 1),
('', 7, 'ab6', 'ab6', 'general_officer', '', 0000, 1),
('', 8, 'ab7', 'ab7', 'general_officer', '', 0000, 1),
('', 9, 'rep1', 'rep1', 'reporting_officer', '', 0000, 1),
('', 10, 'rep2', 'rep2', 'reporting_officer', '', 0000, 1),
('', 11, 'rep3', 'rep3', 'reporting_officer', '', 0000, -1),
('', 12, 'rev2', 'rev2', 'reviewing_officer', '', 0000, -1),
('tpo1', 13, 'tpo1', 'tpo1', 'general_officer', '', 2015, 1),
('', 15, '1', '1', 'general_officer', '', 0000, -1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_datas`
--

CREATE TABLE IF NOT EXISTS `personal_datas` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` char(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `date_presentgrade` char(11) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `present_post` varchar(255) NOT NULL,
  `date_presentpost` char(11) NOT NULL,
  `period_absence` varchar(255) NOT NULL,
  `training` text NOT NULL,
  `set` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_datas`
--

INSERT INTO `personal_datas` (`id`, `fname`, `lname`, `dob`, `qualification`, `date_presentgrade`, `grade`, `present_post`, `date_presentpost`, `period_absence`, `training`, `set`) VALUES
(2, 'Raghib', 'Ahsan', '06/12/2010', 'hello', '02/05/2016', 'teacher', 'CE', '02/24/2016', '3 Months', 'klfjsda', 1),
(3, 'abtwo', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 1),
(4, 'absix', '', '02/12/2016', 'fadsjk', '02/09/2016', '', 'DG', '02/17/2016', 'adskfj', '', 1),
(5, 'ab', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 1),
(7, 'absix', '', '0000-00-00', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 1),
(15, 'Raghib', '', '02/10/2016', 'B-TECH', '02/04/2016', '', 'DG', '02/10/2016', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reportingofficers_part3`
--

CREATE TABLE IF NOT EXISTS `reportingofficers_part3` (
  `reporting-officer-id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
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
  `integrity` text NOT NULL,
  `reporting_officer_penpicture` longtext NOT NULL,
  `overall_numerical_grading` int(1) NOT NULL,
  `set` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportingofficers_part3`
--

INSERT INTO `reportingofficers_part3` (`reporting-officer-id`, `id`, `plannedwork`, `qualityoutput`, `analytical`, `exceptionalwork`, `overall_workoutput`, `attitudetowork`, `responsibility`, `discipline`, `communication`, `leadership`, `teamspirit`, `timeschedule`, `inter_personal`, `personality`, `overall_personalattributes`, `Knowledgeofrules`, `strategic`, `decision`, `coordination`, `subordinates`, `handlingproblems`, `inspection`, `financialpropriety`, `overall_functionalcompetency`, `public_relation`, `training`, `health`, `integrity`, `reporting_officer_penpicture`, `overall_numerical_grading`, `set`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '7', '', 0, 0),
(9, 2, 2, 3, 2, 7, 4, 5, 6, 3, 1, 4, 7, 8, 8, 8, 6, 8, 8, 8, 8, 8, 8, 8, 8, 8, '8', '8', '88', '', '8', 5, 1),
(8, 8, 8, 88, 8, 8, 8, 8, 8, 8, 8, 88, 8, 8, 8, 8, 8, 88, 8, 8, 8, 88, 8, 8, 8, 8, '8', '8', '8', '', '88', 8, 8),
(8, 23, 8, 8, 88, 8, 8, 8, 8, 8, 8, 88, 8, 8, 8, 8, 8, 88, 8, 8, 8, 88, 8, 8, 8, 8, '8', '8', '8', '', '88', 8, 8),
(35, 37, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 7, 0, 7, 7, 3, 7, 7, 0, 7, 7, 7, 7, 7, 4, '7', '4', '7', '77', '7', 4, 1);

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
('ab1', 'rep1', 2),
('ab3', 'rep2', 0),
('ab5', 'rep3', 0),
('ab6', 'rep1', 0),
('ab7', 'rep2', 0),
('tpo1', 'rep1', 0);

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
('rev1', 'ab1', 10, 1, '  ', 'st', 2, 2, 2, 4, 4, 2, 2, 3, 3, 3, 3, 8, 3, 2, 6, 1, 2, 3, 7, 4, 2, 1, 2, 8);

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
('rev1', 'rep1', 0),
('rev1', 'rep2', 0);

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
-- Dumping data for table `work_infos`
--

INSERT INTO `work_infos` (`id`, `description`, `target0`, `target1`, `target2`, `target3`, `target4`, `target5`, `target6`, `target7`, `target8`, `target9`, `achievement0`, `achievement1`, `achievement2`, `achievement3`, `achievement4`, `achievement5`, `achievement6`, `achievement7`, `achievement8`, `achievement9`, `shortfalls`, `higher_achievement`, `date_of_filling`, `set2`) VALUES
(2, 'A', 'a', 'a', '', '', '', '', '', '', '', '', 'a', 'a', '', '', '', '', '', '', '', '', 'a', '', '0000-00-00', 1),
(4, 'jfdlkj', 'klajsdflk', '', '', '', '', '', '', '', '', '', 'lfkdsajlfk', '', '', '', '', '', '', '', '', '', 'jdskalfj', 'ksdfjlk', '0000-00-00', 1),
(15, 'gkhkj', 'jhgjhgjk', '', '', '', '', '', '', '', '', '', 'fjfkjfj', '', '', '', '', '', '', '', '', '', 'ghjgjjkf', 'hglhglk', '0000-00-00', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
