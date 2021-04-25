-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 07:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `AssessmentNo` int(10) NOT NULL,
  `Marks` int(10) NOT NULL,
  `CoID` int(10) NOT NULL,
  `SectionID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`AssessmentNo`, `Marks`, `CoID`, `SectionID`) VALUES
(1, 165, 1, 1),
(2, 35, 2, 1),
(3, 50, 3, 1),
(4, 30, 4, 1),
(5, 165, 1, 2),
(6, 35, 2, 2),
(7, 50, 3, 2),
(8, 30, 4, 2),
(9, 165, 1, 1),
(10, 35, 2, 1),
(11, 50, 3, 1),
(12, 30, 4, 1),
(13, 165, 1, 2),
(14, 35, 2, 2),
(15, 50, 3, 2),
(16, 30, 4, 2),
(17, 165, 1, 1),
(18, 35, 2, 1),
(19, 50, 3, 1),
(20, 30, 4, 1),
(21, 165, 1, 2),
(22, 35, 2, 2),
(23, 50, 3, 2),
(24, 30, 4, 2),
(25, 165, 1, 1),
(26, 35, 2, 1),
(27, 50, 3, 1),
(28, 30, 4, 1),
(29, 165, 1, 2),
(30, 35, 2, 2),
(31, 50, 3, 2),
(32, 30, 4, 2),
(33, 165, 1, 1),
(34, 35, 2, 1),
(35, 50, 3, 1),
(36, 30, 4, 1),
(37, 165, 1, 2),
(38, 35, 2, 2),
(39, 50, 3, 2),
(40, 30, 4, 2),
(41, 165, 1, 1),
(42, 35, 2, 1),
(43, 50, 3, 1),
(44, 30, 4, 1),
(45, 165, 1, 2),
(46, 35, 2, 2),
(47, 50, 3, 2),
(48, 30, 4, 2),
(49, 165, 1, 1),
(50, 35, 2, 1),
(51, 50, 3, 1),
(52, 30, 4, 1),
(53, 165, 1, 2),
(54, 35, 2, 2),
(55, 50, 3, 2),
(56, 30, 4, 2),
(57, 165, 1, 1),
(58, 35, 2, 1),
(59, 50, 3, 1),
(60, 30, 4, 1),
(61, 165, 1, 2),
(62, 35, 2, 2),
(63, 50, 3, 2),
(64, 30, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `CoID` int(10) NOT NULL,
  `CoNo` int(10) NOT NULL,
  `CourseID` int(10) NOT NULL,
  `PloID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`CoID`, `CoNo`, `CourseID`, `PloID`) VALUES
(1, 1, 303, 2),
(2, 2, 303, 3),
(3, 3, 303, 4),
(4, 4, 303, 6),
(5, 1, 101, 1),
(6, 2, 101, 2),
(7, 3, 101, 3),
(8, 4, 101, 4),
(9, 1, 104, 5),
(10, 2, 104, 6),
(11, 3, 104, 7),
(12, 4, 104, 8),
(13, 1, 201, 9),
(14, 2, 201, 10),
(15, 3, 201, 11),
(16, 4, 201, 12),
(17, 1, 203, 2),
(18, 2, 203, 3),
(19, 3, 203, 4),
(20, 4, 203, 5),
(21, 1, 204, 6),
(22, 2, 204, 7),
(23, 3, 204, 8),
(25, 1, 210, 8),
(26, 2, 210, 10),
(27, 3, 210, 11),
(28, 4, 210, 12),
(29, 1, 211, 3),
(30, 2, 211, 4),
(31, 3, 211, 5),
(32, 4, 211, 6),
(33, 1, 213, 7),
(34, 2, 213, 8),
(35, 3, 213, 9),
(36, 4, 213, 10);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(10) NOT NULL,
  `CourseName` varchar(10) NOT NULL,
  `noOfCredits` int(10) NOT NULL,
  `ProgramID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `noOfCredits`, `ProgramID`) VALUES
(101, '', 3, 'CSE'),
(104, '', 3, 'CSE'),
(201, '', 3, 'CSE'),
(203, '', 3, 'CSE'),
(204, '', 3, 'CSE'),
(210, '', 3, 'CSE'),
(211, '', 3, 'CSE'),
(213, '', 3, 'CSE'),
(303, '', 3, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `EvaluationNo` int(10) NOT NULL,
  `Obtainedmarks` int(10) NOT NULL,
  `AssessmentID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`EvaluationNo`, `Obtainedmarks`, `AssessmentID`) VALUES
(1, 55, 1),
(2, 26, 2),
(3, 28, 3),
(4, 24, 4),
(5, 45, 5),
(6, 13, 6),
(7, 23, 7),
(8, 23, 8),
(9, 35, 9),
(10, 8, 10),
(11, 13, 11),
(12, 6, 12),
(13, 0, 13),
(14, 0, 14),
(15, 0, 15),
(16, 0, 16),
(17, 58, 17),
(18, 10, 18),
(19, 4, 19),
(20, 24, 20),
(21, 5, 21),
(22, 0, 22),
(23, 0, 23),
(24, 0, 24),
(25, 52, 25),
(26, 19, 26),
(27, 4, 27),
(28, 27, 28),
(29, 85, 29),
(30, 19, 30),
(31, 15, 31),
(32, 0, 32),
(33, 15, 33),
(34, 15, 34),
(35, 0, 35),
(36, 0, 36),
(37, 95, 37),
(38, 27, 38),
(39, 18, 39),
(40, 23, 40),
(41, 56, 41),
(42, 10, 42),
(43, 17, 43),
(44, 30, 44),
(45, 31, 45),
(46, 13, 46),
(47, 4, 47),
(48, 9, 48),
(49, 34, 49),
(50, 27, 50),
(51, 4, 51),
(52, 6, 52),
(53, 54, 53),
(54, 13, 54),
(55, 6, 55),
(56, 11, 56),
(57, 139, 57),
(58, 25, 58),
(59, 22, 59),
(60, 34, 60),
(61, 74, 61),
(62, 9, 62),
(63, 25, 63),
(64, 24, 64);

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `userid` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`userid`, `password`, `usertype`) VALUES
(1426, 'strawberry12', 'Instructor'),
(1722006, 'strawberry12', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `plo`
--

CREATE TABLE `plo` (
  `PloNO` int(10) NOT NULL,
  `ProgramID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plo`
--

INSERT INTO `plo` (`PloNO`, `ProgramID`) VALUES
(1, 'CSE'),
(2, 'CSE'),
(3, 'CSE'),
(4, 'CSE'),
(5, 'CSE'),
(6, 'CSE'),
(7, 'CSE'),
(8, 'CSE'),
(9, 'CSE'),
(10, 'CSE'),
(11, 'CSE'),
(12, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `SectionID` int(10) NOT NULL,
  `CourseId` int(10) NOT NULL,
  `SectionNo` int(10) NOT NULL,
  `FacultyID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SectionID`, `CourseId`, `SectionNo`, `FacultyID`) VALUES
(1, 303, 1, 1426),
(2, 303, 2, 1426),
(3, 101, 1, 1234),
(4, 101, 2, 1234),
(5, 104, 1, 4321),
(6, 104, 2, 4321),
(7, 201, 1, 5678),
(8, 201, 2, 5678),
(9, 203, 1, 2345),
(10, 203, 2, 2345),
(11, 204, 1, 2134),
(12, 204, 2, 2134),
(13, 210, 1, 3456),
(14, 210, 2, 3456),
(15, 211, 1, 6781),
(16, 211, 2, 6781),
(17, 213, 1, 4567),
(18, 213, 2, 4567);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `Name`, `Gender`) VALUES
(1528882, '', ''),
(1612985, '', ''),
(1613273, '', ''),
(1614142, '', ''),
(1614733, '', ''),
(1616161, '', ''),
(1622731, '', ''),
(1623112, '', ''),
(1625654, '', ''),
(1633554, '', ''),
(1634352, '', ''),
(1641252, '', ''),
(1645333, '', ''),
(1646434, '', ''),
(1653725, '', ''),
(1654432, '', ''),
(1661638, '', ''),
(1662147, '', ''),
(1665491, '', ''),
(1665555, '', ''),
(1668314, '', ''),
(1669953, '', ''),
(1674181, '', ''),
(1678812, '', ''),
(1691291, '', ''),
(1691483, '', ''),
(1695837, '', ''),
(1696326, '', ''),
(1721911, 'Misbahur Rashid', 'Male'),
(1722006, 'Rafid Al Ahsan', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`AssessmentNo`);

--
-- Indexes for table `co`
--
ALTER TABLE `co`
  ADD PRIMARY KEY (`CoID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`EvaluationNo`);

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `plo`
--
ALTER TABLE `plo`
  ADD PRIMARY KEY (`PloNO`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
