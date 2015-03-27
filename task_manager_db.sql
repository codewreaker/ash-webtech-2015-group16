-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2015 at 12:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

create Database `task_manager_db`;
use `task_manager_db`;


-- --------------------------------------------------------

--
-- Table structure for table `t_personnel`
--

CREATE TABLE IF NOT EXISTS `t_personnel` (
`pid` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(14) NOT NULL,
  `task_id` int(10) DEFAULT NULL,
  `p_type` varchar(10) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_personnel`
--

INSERT INTO `t_personnel` (`pid`, `first_name`, `last_name`, `user_name`, `password`, `task_id`, `p_type`, `position`, `contact`) VALUES
(1, 'Israel ', 'Agyeman-Prempeh', 'israel.prempeh', 'admin123', NULL, 'admin', 'Senior Doctor', '233272134165'),
(2, 'Akosua', 'Gyamfua', 'akosua.gyamfua', 'guest', NULL, 'non-admin', 'Doctor', '233245677655'),
(3, 'Stephen', 'Donkoh', 'stephen.donkoh', 'guest', NULL, 'non-admin', 'Nurse', '233275677655');

-- --------------------------------------------------------

--
-- Table structure for table `t_report`
--

CREATE TABLE IF NOT EXISTS `t_report` (
  `report_id` int(11) NOT NULL,
  `limitations` varchar(255) DEFAULT 'None',
  `errors` varchar(255) DEFAULT 'None',
  `progress_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_task`
--

CREATE TABLE IF NOT EXISTS `t_task` (
`task_id` int(10) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `task_admin` int(10) NOT NULL,
  `task_personnel` int(10) NOT NULL,
  `due_date` date NOT NULL,
  `report_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
 ADD PRIMARY KEY (`task_id`), ADD KEY `report_id` (`report_id`), ADD KEY `task_admin` (`task_admin`), ADD KEY `task_personnel` (`task_personnel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_personnel`
--
ALTER TABLE `t_personnel`
MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_task`
--
ALTER TABLE `t_task`
MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
