-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 11:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dict_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcourses`
--

CREATE TABLE `tblcourses` (
  `courseid` int(11) NOT NULL,
  `coursecode` varchar(15) NOT NULL,
  `coursedesc` varchar(100) NOT NULL,
  `datedeleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcourses`
--

INSERT INTO `tblcourses` (`courseid`, `coursecode`, `coursedesc`, `datedeleted`) VALUES
(1, 'dfa', 'dfadf', '2024-08-15 10:06:52'),
(2, 'fdfasfa', 'fadfasf', '2024-08-15 10:08:22'),
(3, 'faf', 'fdfadsf', '2024-08-29 08:01:22'),
(4, 'faf', 'fdfadsf', '2024-08-29 08:01:35'),
(5, 'faf', 'fdfadsf', '2024-08-29 08:01:31'),
(6, 'faf', 'fdfadsf', '2024-08-29 08:01:27'),
(7, 'faf', 'fdfadsf', '2024-08-15 10:08:31'),
(8, 'fdfa', 'fdfadf', '2024-08-15 10:08:27'),
(9, 'bscs', 'bachelor of science in computer science', NULL),
(10, 'r', 'r', '2024-08-15 10:06:06'),
(11, 'bsis', 'bachelor of science in information systems', NULL),
(12, 'X', 'X', '2024-08-29 20:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_desc` varchar(200) NOT NULL,
  `datedeleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`subject_id`, `subject_code`, `subject_desc`, `datedeleted`) VALUES
(1, 'BSCS', 'BS Computer Science', NULL),
(2, 'BSIT', 'BS Information Technology', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userid` int(11) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `entrydate` datetime DEFAULT NULL,
  `lastupdatingdate` datetime DEFAULT NULL,
  `datedeleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userid`, `lastname`, `firstname`, `middlename`, `username`, `password`, `entrydate`, `lastupdatingdate`, `datedeleted`) VALUES
(1, 'ANTONIO', 'ELBREN', 'Osorios', 'ELBREN', 'ANTONIO', '2024-08-21 15:47:44', '2024-08-29 19:21:08', NULL),
(2, 'RAEL', 'CYRUS', 'BANDIES', 'CYRUS', 'RAEL', NULL, NULL, NULL),
(3, 'CATAJAY', 'LENMAR', 'TRAVILLA', 'LENMAR', 'CATAJAY', NULL, NULL, NULL),
(9, 'ventilacion', 'maikah', 'romualdez', 'maikah', 'a', '2024-08-14 11:28:43', '2024-08-14 14:50:09', NULL),
(10, 'koko', 'kokoko', 'kokoko', 'kokoko', '$2y$10$DX/mJxqRGttZt1Oh46G1N.j1gZgHVCJa1/5cSt0ha8wQlRl6.Mace', '2024-08-14 11:32:41', '2024-08-14 11:32:41', NULL),
(11, 'lalala', 'lalala', 'lala', 'ii', '$2y$10$K.udCzT8lVFan4uJ12tYReLO8PenIZjjZ5sjUezACFj0FEGVU5KDi', '2024-08-14 11:37:00', '2024-08-14 15:01:56', '2024-08-14 15:01:56'),
(12, 'zuckerberge', 'markoz', 'gener', 'mark', '$2y$10$Sq.wa.unS4ZUuBLRR.lMLuwGXK3kOPYJORXWTiz1Pw7azyWzIn89.', '2024-08-14 11:41:23', '2024-08-29 19:22:35', '2024-08-29 19:22:35'),
(13, 'bren reeve', 'antonio', 'tomaro', 'bren', '$2y$10$.M/pEKQgevIIC90Tm09zTei5kRcp3vt0E/PA6FNRvByCYOOt/GyL2', '2024-08-14 12:25:08', '2024-08-14 14:18:29', NULL),
(14, 'antonio', 'breeve alexei', 'tomaro', 'breeve', '$2y$10$ScGCU.KgL60jUEXBbFZt9OGqSy/3e49YEzil5nApnhr/3CjGkvRgC', '2024-08-14 14:51:36', '2024-08-14 14:51:36', NULL),
(15, 'a', 'a', 'a', 'a', '$2y$10$e0rNO/ZaJch82RW1IIXFKeIXaicTJCjIZtLr2WIUCUtgAIpvY5ZuS', '2024-08-14 15:43:47', '2024-08-14 15:46:44', '2024-08-14 15:46:44'),
(16, 'a', 'a', 'a', 'afafasfa', '$2y$10$tc2bA9n6stjPqt6uF0cKcul2kbWpLw.Jc29wYdCiHq6OrBHEgzSiO', '2024-08-14 15:46:16', '2024-08-14 15:46:41', '2024-08-14 15:46:41'),
(17, 'rqwrq', 'fasfaf', 'fadfa', 'erere', '$2y$10$mIkF44DUGyUAoYFhUF.egOLsHPSu723/RIk66y7T8B2FoMRgQXaSq', '2024-08-14 15:49:55', '2024-08-14 15:49:55', NULL),
(18, 'koko', 'koko', 'koko', 'koko', '$2y$10$jDYgAOEC4VrMbXnaDwpYeuoENW6CfwmE2e2U3RlT0dM31gfrTMhc6', '2024-08-14 16:42:48', '2024-08-14 16:42:48', NULL),
(19, 'admin', 'admin', 'admin', 'admin', '$2y$10$3PYIoMNneY3xd.oJcu3//eyToR6y2zUQzZweGxqm3crwxi72C0/ym', '2024-08-29 20:02:31', '2024-08-29 20:02:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcourses`
--
ALTER TABLE `tblcourses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcourses`
--
ALTER TABLE `tblcourses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
