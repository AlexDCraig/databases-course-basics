-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: oniddb
-- Generation Time: Apr 29, 2016 at 12:29 PM
-- Server version: 5.5.47
-- PHP Version: 5.2.6-1+lenny16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `schutfoj-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Apply`
--

CREATE TABLE IF NOT EXISTS `Apply` (
  `sID` char(6) NOT NULL,
  `cName` char(20) NOT NULL,
  `major` char(20) NOT NULL,
  `decision` char(1) DEFAULT NULL,
  PRIMARY KEY (`sID`,`cName`,`major`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Apply`
--

INSERT INTO `Apply` (`sID`, `cName`, `major`, `decision`) VALUES
('123', 'Cornell', 'EE', 'Y'),
('123', 'OSU', 'CS', 'Y'),
('123', 'OSU', 'EE', 'N'),
('123', 'U of O', 'CS', 'Y'),
('123', 'MIT', 'CS', 'Y'),
('234', 'U of O', 'biology', 'N'),
('345', 'Cornell', 'bioengineering', 'N'),
('345', 'Cornell', 'CS', 'Y'),
('345', 'Cornell', 'EE', 'N'),
('345', 'MIT', 'bioengineering', 'Y'),
('543', 'MIT', 'CS', 'N'),
('678', 'Cornell', 'history', 'N'),
('678', 'Cornell', 'psychology', 'Y'),
('678', 'OSU', 'history', 'Y'),
('765', 'OSU', 'history', 'Y'),
('876', 'MIT', 'biology', 'Y'),
('876', 'MIT', 'marine biology', 'N'),
('876', 'OSU', 'CS', 'N'),
('987', 'OSU', 'CS', 'Y'),
('987', 'U of O', 'CS', 'Y');

--
-- Table structure for table `Student`
--

CREATE TABLE IF NOT EXISTS `Student` (
  `sID` char(6) NOT NULL,
  `sName` char(20) NOT NULL,
  `GPA` decimal(3,2) DEFAULT NULL,
  `sizeHS` int(11) DEFAULT NULL,
  `Advisor` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`sID`),
  UNIQUE KEY `student_PK` (`sID`),
  KEY `Advisor` (`Advisor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`sID`, `sName`, `GPA`, `sizeHS`, `Advisor`) VALUES
('123', 'Amy', 3.90, 1000, NULL),
('234', 'Bob', 3.60, 1500, NULL),
('345', 'Craig', 3.50, 500, NULL),
('456', 'Doris', 3.90, 1000, NULL),
('543', 'Craig', 3.40, 2000, '6'),
('567', 'Edward', 2.90, 2000, '6'),
('654', 'Amy', 3.90, 1000, '1'),
('678', 'Fay', 3.80, 200, NULL),
('765', 'Jay', 2.90, 1500, NULL),
('876', 'Irene', 3.90, 400, NULL),
('987', 'Helen', 4.00, 800, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Student`
--

-- Table structure for table `College`
--

CREATE TABLE IF NOT EXISTS `College` (
  `cName` char(20) NOT NULL,
  `state` char(2) DEFAULT NULL,
  `enrollment` int(11) NOT NULL,
  PRIMARY KEY (`cName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `College`
--

INSERT INTO `College` (`cName`, `state`, `enrollment`) VALUES
('Cornell', 'NY', 21000),
('MIT', 'MA', 10000),
('OSU', 'OR', 28000),
('U of O', 'OR', 25000);
