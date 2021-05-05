-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 12:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sjcsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_middle_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_contact_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_first_name`, `admin_middle_name`, `admin_last_name`, `admin_contact_number`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin332', 'istration333', 'l.davinci@la1', '0924511233');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `class_gradelevel` varchar(50) NOT NULL,
  `class_section` varchar(50) NOT NULL,
  `class_subject` int(11) NOT NULL,
  `class_adviser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `class_gradelevel`, `class_section`, `class_subject`, `class_adviser`) VALUES
(3, 'apple', 'Grade 1', 'I', 18, 1),
(4, 'Jupiter', 'Grade 1', 'I', 22, 1),
(5, 'orange', 'Grade 1', 'I', 22, 3),
(6, 'asda', 'Grade 1', 'I', 18, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_accountnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_middle_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_contactnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_accountnumber`, `student_username`, `student_password`, `student_first_name`, `student_middle_name`, `student_last_name`, `student_contactnumber`) VALUES
(1, 'SJCS20200', 'SJCS20200', 'cd3e77d30f38eb1d3518c21c15a7e70b', 'John', 'Armand', 'Adolfo', '09297894102'),
(3, 'SJCS20202', 'SJCS20202', '2a9a0b526027bda7d7bdda78cf51d37b', 'Hardy', 'A', 'Atis', '091245677600'),
(4, 'SJCS20202', 'SJCS20202', '2a9a0b526027bda7d7bdda78cf51d37b', 'test', 'test', 'test', '091245677600'),
(5, 'SJCS20213', 'SJCS20213', '555e78ba905f60b68e78f856a45b1b07', 'Chad', 'asa', 'Gothong', '+639328734193'),
(6, 'SJCS20214', 'SJCS20214', '3c4639b2e1146dd24696865d793b7815', 'Chad', 'asda', 'Gothong', '+639328734193');

-- --------------------------------------------------------

--
-- Table structure for table `studentlist`
--

CREATE TABLE `studentlist` (
  `studentlist_id` int(11) NOT NULL,
  `classID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlist`
--

INSERT INTO `studentlist` (`studentlist_id`, `classID`, `studentID`) VALUES
(9, 4, 1),
(10, 4, 4),
(11, 5, 3),
(16, 3, 1),
(17, 3, 4),
(18, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` text COLLATE utf8_unicode_ci NOT NULL,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_name`) VALUES
(18, 'fil-1', 'filipino-1'),
(21, 'eng-1', 'english-1'),
(22, 'MATH-1', 'Math 1'),
(23, 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_accountnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_middle_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `teacher_contactnumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_accountnumber`, `teacher_username`, `teacher_password`, `teacher_first_name`, `teacher_middle_name`, `teacher_last_name`, `teacher_contactnumber`) VALUES
(1, 'SJCST20200', 'SJCST20200', 'a59b48370628189061166a8477b71c52', 'remie ', 'kaye', 'pulmones', '091274127894'),
(3, 'SJCST20201', 'SJCST20201', '6b3d7ce778773291da722bc895aebcd0', 'test', 'test', 'test', '0912345600'),
(4, 'SJCST20212', 'SJCST20212', '84774d4453a0b5b841ee717c027e06fc', 'Chad', 'asd', 'Gothong', '+639328734193');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `studentlist`
--
ALTER TABLE `studentlist`
  ADD PRIMARY KEY (`studentlist_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentlist`
--
ALTER TABLE `studentlist`
  MODIFY `studentlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
