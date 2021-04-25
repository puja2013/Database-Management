-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 11:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `coID` int(30) NOT NULL,
  `courseName` varchar(30) NOT NULL,
  `ploID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(30) NOT NULL,
  `courseTitle` varchar(30) NOT NULL,
  `courseType` varchar(30) NOT NULL,
  `programid` int(30) NOT NULL,
  `instructorID` int(30) DEFAULT NULL,
  `semesterID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deaprtment`
--

CREATE TABLE `deaprtment` (
  `departmentID` int(11) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  `schoolID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plo`
--

CREATE TABLE `plo` (
  `ploID` int(30) DEFAULT NULL,
  `ddeatils` varchar(40) DEFAULT NULL,
  `programID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `programID` int(20) DEFAULT NULL,
  `ProgramName` varchar(50) NOT NULL,
  `departmentID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolID` int(11) NOT NULL,
  `schoolNMAE` varchar(20) NOT NULL,
  `VCID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `secttionID` int(20) NOT NULL,
  `sectionNO` int(20) NOT NULL,
  `roomNO` int(30) NOT NULL,
  `courseID` int(20) NOT NULL,
  `semesterID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(30) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `iname` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `area` varchar(40) NOT NULL,
  `road` varchar(30) NOT NULL,
  `dateofbirth` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contactNo` int(30) NOT NULL,
  `natonality` varchar(30) NOT NULL,
  `enrollmentID` varchar(30) NOT NULL,
  `sectionID` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `studentID` int(20) DEFAULT NULL,
  `studentemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vc`
--

CREATE TABLE `vc` (
  `vc_ID` int(20) DEFAULT NULL,
  `fname` varchar(49) NOT NULL,
  `iname` varchar(47) NOT NULL,
  `joining_Date` int(20) DEFAULT NULL,
  `dateofleaving` int(20) DEFAULT NULL,
  `qualificationg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deaprtment`
--
ALTER TABLE `deaprtment`
  ADD PRIMARY KEY (`departmentID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
