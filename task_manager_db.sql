-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2015 at 05:42 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE Database `task_manager_db`;
use `task_manager_db`;
--

-- --------------------------------------------------------

--
-- Table structure for table `t_personnel`
--

CREATE TABLE IF NOT EXISTS `t_personnel` (
`pid` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pword` varchar(36) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `p_type` enum('admin','non-admin') NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table `t_report`
--

CREATE TABLE IF NOT EXISTS `t_report` (
`report_id` int(10) NOT NULL,
  `limitations` varchar(255) NOT NULL,
  `errors` varchar(255) NOT NULL,
  `progress_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_task`
--

CREATE TABLE IF NOT EXISTS `t_task` (
`task_id` int(10) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `task_personnel` varchar(50) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `report_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_personnel`
--
ALTER TABLE `t_personnel`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `t_report`
--
ALTER TABLE `t_report`
 ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `t_task`
--
ALTER TABLE `t_task`
 ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_personnel`
--
ALTER TABLE `t_personnel`
MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;
--
-- AUTO_INCREMENT for table `t_report`
--
ALTER TABLE `t_report`
MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_task`
--
ALTER TABLE `t_task`
MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
