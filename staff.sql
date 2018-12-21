-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 08:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `e_id` int(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type` tinyint(2) NOT NULL COMMENT '1-teaching  50-non-teaching',
  `short_form` varchar(5) DEFAULT NULL COMMENT 'Can''t assume uniqueness as some value are missing',
  `first_name` varchar(40) NOT NULL,
  `mid_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `department_id` int(3) DEFAULT NULL,
  `doj` date NOT NULL,
  `dob` date DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `mobile` char(10) NOT NULL,
  `landline` varchar(14) DEFAULT NULL,
  `address` text NOT NULL,
  `pincode` char(6) NOT NULL,
  `aadhaar_id` char(16) NOT NULL,
  `concol` varchar(20) NOT NULL,
  `pancard` varchar(12) NOT NULL,
  `dol` date DEFAULT NULL COMMENT 'date of Leaving',
  `probation_start` date DEFAULT NULL,
  `probation_end` date DEFAULT NULL,
  `is_permanent` tinyint(1) NOT NULL COMMENT '1-Permanent 0-Adhoc',
  `expertise` varchar(1000) DEFAULT NULL,
  `no_of_research_papers` int(5) NOT NULL,
  `last_active` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `slot` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`e_id`, `email`, `type`, `short_form`, `first_name`, `mid_name`, `last_name`, `gender`, `department_id`, `doj`, `dob`, `designation`, `mobile`, `landline`, `address`, `pincode`, `aadhaar_id`, `concol`, `pancard`, `dol`, `probation_start`, `probation_end`, `is_permanent`, `expertise`, `no_of_research_papers`, `last_active`, `slot`) VALUES
(378, '2016.rajpreetsingh.bhengura@ves.ac.in', 1, 'AS', 'Amit', '', 'Singh', 'M', 5, '2016-07-08', '0000-00-00', NULL, '9000000083', NULL, 'PLHLDR_Address_378', '123456', 'PLHLDR_AD_378', 'PLHLDR_CONCOL_378', 'PAN_378', NULL, NULL, NULL, 1, NULL, 0, '2018-08-29 09:24:33', 'T1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`e_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `department_id` (`department_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
