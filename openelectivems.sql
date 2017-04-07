-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2017 at 01:13 PM
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
-- Table structure for table `civil33`
--

CREATE TABLE `civil33` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL,
  `selects` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil33`
--

INSERT INTO `civil33` (`rollno`, `bracode`, `cgpi`, `priority`, `selects`) VALUES
('14501', 'cse1', '9.8', 1, 1),
('14508', 'cse1', '9', 1, 0),
('14509', 'civil1', '8.9', 1, 0),
('14510', 'mech1', '8.7', 1, 0),
('14511', 'archi1', '8.5', 1, 0),
('14533', 'cse1', '9.8', 1, 0),
('14543', 'cse1', '8.9', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cse33`
--

CREATE TABLE `cse33` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL,
  `selects` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse33`
--

INSERT INTO `cse33` (`rollno`, `bracode`, `cgpi`, `priority`, `selects`) VALUES
('14508', 'cse1', '9', 1, 0),
('14509', 'civil1', '8.9', 1, 0),
('14510', 'mech1', '8.7', 1, 0),
('14511', 'archi1', '8.5', 1, 0),
('14543', 'cse1', '8.9', 1, 0);

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
('civil', 'civil', '4016a28e711f08c8d7733f1e84606565', 'civil33', 'civil@gmail.com'),
('cse1', 'garima', '1264dd49afb9ca5d58daa41d51d28fd8', 'cse33', 'cse@gmail.com'),
('ece1', 'gargi mam', 'ef27bb663b1faad89d97bde4e6dc2212', 'ece33', 'ece@gmail.com'),
('eee1', 'handa', 'f36a0dcdaeccac318d0398d83517bb89', 'eee33', 'eee@gmail.com'),
('mech1', 'somesh', '8f127632002879308f6fa2d67b9f5a97', 'mech33', 'mech@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ece33`
--

CREATE TABLE `ece33` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL,
  `selects` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ece33`
--

INSERT INTO `ece33` (`rollno`, `bracode`, `cgpi`, `priority`, `selects`) VALUES
('14510', 'mech1', '8.7', 1, 1),
('14511', 'archi1', '8.5', 1, 1),
('14533', 'cse1', '9.8', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `eee33`
--

CREATE TABLE `eee33` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL,
  `selects` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eee33`
--

INSERT INTO `eee33` (`rollno`, `bracode`, `cgpi`, `priority`, `selects`) VALUES
('14508', 'cse1', '9', 1, 0),
('14509', 'civil1', '8.9', 1, 0),
('14510', 'mech1', '8.7', 1, 0),
('14511', 'archi1', '8.5', 1, 0),
('14533', 'cse1', '9.8', 1, 0),
('14543', 'cse1', '8.9', 1, 0);

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
('civil33', 'civil', 1, 56, 'Upload your files & share with others over Intranet\nwith the premium speed of over 50 Mbps.', 'nith.ac.in/civil/syllabus.pdf'),
('cse33', 'garima', 1, 75, 'Upload your files & share with others over Intranet\nwith the premium speed of over 50 Mbps.', 'nith.ac.in/cse/syllabus.pdf'),
('ece33', 'gargi mam', 1, 60, 'info about ece elective', 'nith.ac.in/ece/syllabus.pdf'),
('eee33', 'handa', 1, 78, 'Upload your files & share with others over Intranet\r\nwith the premium speed of over 50 Mbps.', 'nith.ac.in/eee/syllabus.pdf'),
('mech33', 'somesh', 1, 90, 'info about mech elective', 'nith.ac.in/mech/syllabus.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mech33`
--

CREATE TABLE `mech33` (
  `rollno` varchar(10) NOT NULL,
  `bracode` varchar(10) DEFAULT NULL,
  `cgpi` varchar(5) DEFAULT NULL,
  `priority` int(2) DEFAULT NULL,
  `selects` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mech33`
--

INSERT INTO `mech33` (`rollno`, `bracode`, `cgpi`, `priority`, `selects`) VALUES
('14508', 'cse1', '9', 1, 1),
('14509', 'civil1', '8.9', 1, 1),
('14510', 'mech1', '8.7', 1, 1),
('14511', 'archi1', '8.5', 1, 1),
('14533', 'cse1', '9.8', 1, 1),
('14543', 'cse1', '8.9', 1, 1);

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
('14501', '5f4dcc3b5aa765d61d8327deb882cf99', '9.8', 'cse1', 'asdf@gmail.com', NULL, 'civil33', NULL, NULL, NULL, NULL, NULL),
('14508', '5f4dcc3b5aa765d61d8327deb882cf99', '9', 'cse1', 'rishabh0402@gmail.com', NULL, 'cse33', NULL, NULL, NULL, NULL, NULL),
('14509', '5f4dcc3b5aa765d61d8327deb882cf99', '8.9', 'civil1', 'email@gmailll.com', NULL, 'mech33', NULL, NULL, NULL, NULL, NULL),
('14510', '5f4dcc3b5aa765d61d8327deb882cf99', '8.7', 'mech1', 'pasha@gmail.com', NULL, 'mech33', NULL, NULL, NULL, NULL, NULL),
('14511', '5f4dcc3b5aa765d61d8327deb882cf99', '8.5', 'archi1', 'email1@gmail.com', NULL, 'cse33', NULL, NULL, NULL, NULL, NULL),
('14533', '5f4dcc3b5aa765d61d8327deb882cf99', '9.8', 'cse1', 'milli@gmail.com', NULL, 'mech33', NULL, NULL, NULL, NULL, NULL),
('14543', '5f4dcc3b5aa765d61d8327deb882cf99', '8.9', 'cse1', 'raman@gmail.com', NULL, 'civil33', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `civil33`
--
ALTER TABLE `civil33`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `cse33`
--
ALTER TABLE `cse33`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `dept_login`
--
ALTER TABLE `dept_login`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `ece33`
--
ALTER TABLE `ece33`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `eee33`
--
ALTER TABLE `eee33`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `elective`
--
ALTER TABLE `elective`
  ADD PRIMARY KEY (`elecname`);

--
-- Indexes for table `mech33`
--
ALTER TABLE `mech33`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`rollno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
