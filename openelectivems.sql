-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2017 at 08:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openelectivems`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(20) NOT NULL,
  `passwd` varchar(50) DEFAULT NULL,
  `email` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `passwd`, `email`) VALUES
('Rishabh0402', 'd652f978a9cdcb00b25bc5007f2ee4b4', 'rishabh0402@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `csd315`
--

CREATE TABLE `csd315` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept_login`
--

CREATE TABLE `dept_login` (
  `deptid` varchar(10) NOT NULL,
  `teachername` varchar(20) DEFAULT NULL,
  `pswd` varchar(50) DEFAULT NULL,
  `electiveid` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_login`
--

INSERT INTO `dept_login` (`deptid`, `teachername`, `pswd`, `electiveid`, `email`) VALUES
('cse1', 'garima', '1264dd49afb9ca5d58daa41d51d28fd8', 'csd315', 'garima@gmail.com'),
('mech1', 'Somesh', '8f127632002879308f6fa2d67b9f5a97', 'mech312', 'somesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `elective`
--

CREATE TABLE `elective` (
  `elecname` varchar(10) NOT NULL,
  `teachernm` varchar(20) NOT NULL,
  `publish` int(1) NOT NULL,
  `seats` int(3) DEFAULT NULL,
  `info` varchar(500) NOT NULL,
  `link` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elective`
--

INSERT INTO `elective` (`elecname`, `teachernm`, `publish`, `seats`, `info`, `link`) VALUES
('csd315', 'garima', 1, 75, 'This is the information about the elective.\r\nThis elective is very helpful for us.\r\nThis can be studied with great ease and its really interesting.', 'nith.ac.in/newweb/computer-science-engineering/syllabus/'),
('mech312', 'Somesh', 1, 80, 'askldfj\r\nasjfkjasdf\r\njasfjas\r\nf', 'nith.ac.in/newweb/computer-science-engineering/syllabus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mech312`
--

CREATE TABLE `mech312` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `rollno` varchar(10) NOT NULL,
  `pswd` varchar(50) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `brancode` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `allotted` int(1) DEFAULT NULL,
  `pr1` varchar(10) DEFAULT NULL,
  `pr2` varchar(10) DEFAULT NULL,
  `pr3` varchar(10) DEFAULT NULL,
  `pr4` varchar(10) DEFAULT NULL,
  `pr5` varchar(10) DEFAULT NULL,
  `pr6` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`rollno`, `pswd`, `cgpi`, `brancode`, `email`, `allotted`, `pr1`, `pr2`, `pr3`, `pr4`, `pr5`, `pr6`) VALUES
('14mi508', '3489b909418aec96e54689274211bf1a', '9', 'cse1', 'rishabh0402@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `csd315`
--
ALTER TABLE `csd315`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `dept_login`
--
ALTER TABLE `dept_login`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `elective`
--
ALTER TABLE `elective`
  ADD PRIMARY KEY (`elecname`);

--
-- Indexes for table `mech312`
--
ALTER TABLE `mech312`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`rollno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
