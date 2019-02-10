-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-g.hosting.stackcp.net
-- Generation Time: Feb 10, 2019 at 09:14 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee-3237f9b4`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `UID` int(11) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `deptno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`UID`, `Fname`, `Lname`, `Mname`, `DOB`, `deptno`) VALUES
(175006, 'Shivam', 'Chaudhary', '', '1999-08-02', 10),
(175025, 'Salomi', 'Gavhale', '', '2000-02-06', 0),
(175062, 'Sumit', 'Sonagra', '', '1995-05-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `NAME` varchar(20) NOT NULL,
  `IMAGE` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`NAME`, `IMAGE`) VALUES
('Image jpg', 0x38333837332d);

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `ID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`ID`, `Email`, `Password`) VALUES
(100, 'shivamc021999@gmail.com', '01'),
(101, 'cshivam509@gmail.com', '02'),
(102, 'shivamc02@gmail.com', '044'),
(103, 'abhidubey@gmail.com', '069');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `UID` int(11) NOT NULL,
  `Course_Id` varchar(15) NOT NULL,
  `Exam_Id` varchar(5) NOT NULL,
  `Sem_Number` int(11) NOT NULL,
  `Marks_Obtained` double NOT NULL,
  `Total_Marks` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`UID`, `Course_Id`, `Exam_Id`, `Sem_Number`, `Marks_Obtained`, `Total_Marks`) VALUES
(175006, 'SITS 301', 'CIA1', 3, 19, 20),
(175006, 'SITS 301', 'CIA2', 3, 14, 20),
(175006, 'SITS 302', 'CIA1', 3, 17, 20),
(175006, 'SITS 302', 'CIA2', 3, 19, 20),
(175006, 'SITS 303', 'CIA1', 3, 16.5, 20),
(175006, 'SITS 303', 'CIA2', 3, 17, 20),
(175006, 'SITS 304', 'CIA1', 3, 17, 20),
(175006, 'SITS 304', 'CIA2', 3, 15, 20),
(175006, 'SITS 305', 'CIA1', 3, 18, 20),
(175006, 'SITS 305', 'CIA2', 3, 19, 20),
(175006, 'SPC 301', 'CIA1', 3, 17, 20),
(175006, 'SPC 301', 'CIA2', 3, 15, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `UserId` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `UserId`, `Password`) VALUES
(100, 'king', 'one'),
(101, 'user', 'pass'),
(175006, '175006', 's175006'),
(175062, '175062', 's175062'),
(175025, '175025', 's175025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `ids`
--
ALTER TABLE `ids`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`UID`,`Course_Id`,`Exam_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
