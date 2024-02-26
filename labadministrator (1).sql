-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labadministrator`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `uname`, `Pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cid` int(255) NOT NULL,
  `userID` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `timey` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `uname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `userID`, `userType`, `subject`, `complaint`, `timey`, `uname`) VALUES
(7, '1', 'teacher', 'One compleaint', 'Pc 1 And Pc 34 not working', '2024-02-26 04:15:18.000000', 'Aarthi patkar'),
(8, '6', 'student', 'Cordova is Not installed', 'ajsnd aksnd aksjd aksjd owuo ', '2024-02-26 04:17:48.000000', 'Surya SK');

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `computerID` int(225) NOT NULL,
  `computerNumber` varchar(255) NOT NULL,
  `computerName` varchar(255) NOT NULL,
  `computerProcessor` varchar(255) NOT NULL,
  `computerRam` varchar(225) NOT NULL,
  `computerHdd` varchar(255) NOT NULL,
  `computerVersion` varchar(255) NOT NULL,
  `computerSsd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`computerID`, `computerNumber`, `computerName`, `computerProcessor`, `computerRam`, `computerHdd`, `computerVersion`, `computerSsd`) VALUES
(1, 'PC 00', 'PC 143', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 8.1 Pro', '256GB'),
(2, 'PC 1', 'LAB1-PC1', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(3, 'PC 2', 'LAB1-PC2', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(4, 'PC 3', 'LAB1-PC3', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(5, 'PC 4', 'LAB1-PC4', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(6, 'PC 5', 'LAB1-PC5', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(7, 'PC 6', 'LAB1-PC6', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(8, 'PC 7', 'LAB1-PC7', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(9, 'PC 8', 'LAB1-PC8', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(10, 'PC 9', 'LAB1-PC9', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(11, 'PC 10', 'LAB1-PC10', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(12, 'PC 11', 'LAB1-PC11', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(13, 'PC 12', 'LAB1-PC12', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(14, 'PC 13', 'LAB1-PC13', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(15, 'PC 14', 'LAB1-PC14', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(16, 'PC 15', 'LAB1-PC15', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(17, 'PC 16', 'LAB1-PC16', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(18, 'PC 17', 'LAB1-PC17', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(19, 'PC 18', 'LAB1-PC18', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(20, 'PC 19', 'LAB1-PC19', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(21, 'PC 20', 'LAB1-PC20', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(22, 'PC 21', 'LAB1-PC21', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(23, 'PC 22', 'LAB1-PC22', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(24, 'PC 23', 'LAB1-PC23', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(25, 'PC 24', 'LAB1-PC24', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(26, 'PC 25', 'LAB1-PC25', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(27, 'PC 26', 'LAB1-PC26', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(28, 'PC 27', 'LAB1-PC27', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(29, 'PC 28', 'LAB1-PC28', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(30, 'PC 29', 'LAB1-PC29', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(31, 'PC 30', 'LAB1-PC30', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(32, 'PC 31', 'LAB1-PC31', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(33, 'PC 32', 'LAB1-PC32', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(34, 'PC 33', 'LAB1-PC33', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(35, 'PC 34', 'LAB1-PC34', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(36, 'PC 35', 'LAB1-PC35', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(37, 'PC 36', 'LAB1-PC36', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(38, 'PC 37', 'LAB1-PC37', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(39, 'PC 38', 'LAB1-PC38', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(40, 'PC 39', 'LAB1-PC39', 'Intel pentinum G630 @2.70GHz', '8GB', 'NO', 'Windows 10 Pro', '256GB'),
(41, 'PC 40', 'LAB1-PC40', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 10 Pro', 'NO'),
(42, 'PC 41', 'LAB1-PC41', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(43, 'PC 42', 'LAB1-PC42', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(44, 'PC 43', 'LAB1-PC43', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(45, 'PC 44', 'LAB1-PC44', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(46, 'PC 45', 'LAB1-PC45', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(47, 'PC 46', 'LAB1-PC46', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(48, 'PC 47', 'LAB1-PC47', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(49, 'PC 48', 'LAB1-PC48', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(50, 'PC 49', 'LAB1-PC49', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(51, 'PC 50', 'LAB1-PC50', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(52, 'PC 51', 'LAB1-PC51', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(53, 'PC 52', 'LAB1-PC52', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(54, 'PC 53', 'LAB1-PC53', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(55, 'PC 54', 'LAB1-PC54', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(56, 'PC 55', 'LAB1-PC55', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(57, 'PC 56', 'LAB1-PC56', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(58, 'PC 57', 'LAB1-PC57', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(59, 'PC 58', 'LAB1-PC58', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(60, 'PC 59', 'LAB1-PC59', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(61, 'PC 60', 'LAB1-PC60', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO'),
(62, 'PC 61', 'LAB1-PC61', 'Intel pentinum G630 @2.70GHz', '8GB', '500GB', 'Windows 11 Pro', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(255) NOT NULL,
  `sid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `addon` varchar(255) NOT NULL,
  `datey` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `sid`, `uid`, `complaint`, `addon`, `datey`, `status`) VALUES
(16, 9, 0, 'Install a Software', 'i want mYsql in Pc 7 ', '2023-10-20 05:01:30.000000', 0),
(17, 9, 0, 'qewdb', 'uig', '0000-00-00 00:00:00.000000', 0),
(18, 9, 0, 'Install a Software', 'i want mYsql in Pc 7 ', '2023-10-20 05:01:30.000000', 0),
(19, 9, 0, 'Hardware not working', 'ert', '2023-10-04 05:56:53.000000', 0),
(20, 8, 0, 'c5', 'computer not working', '2023-10-04 06:21:22.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `timey` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `heading`, `body`, `timey`) VALUES
(1, ' tommoro Holiday', 'DUE TO HEAVY RAINFALL', '2024-02-26 05:58:54.000000'),
(2, ' Exam TImeTble', 'Sem ^ Exam is on April 1', '2024-02-26 06:03:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherID` int(255) NOT NULL,
  `teacherName` varchar(255) NOT NULL,
  `teacherUniqueID` varchar(255) NOT NULL,
  `teacherContactNo` varchar(255) NOT NULL,
  `teacherPwd` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `timey` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherID`, `teacherName`, `teacherUniqueID`, `teacherContactNo`, `teacherPwd`, `Email`, `timey`) VALUES
(1, 'Aarti patkar', 'aartipatkat@teacher-1', '1231231231', 'Aarti patkar', 'qwertyuio@gmail.com', '2024-02-26 04:47:31.788295');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(255) NOT NULL,
  `uName` varchar(255) NOT NULL,
  `userPwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `std` varchar(255) NOT NULL,
  `divs` varchar(255) NOT NULL,
  `times` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `userName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `uName`, `userPwd`, `email`, `std`, `divs`, `times`, `userName`) VALUES
(6, 'student1', '1234', 'sghumre0912@gmail.com', 'FYBSCIT', 'A', '2024-02-26 04:16:35.000000', 'labxpert@student1 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`computerID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `computerID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
