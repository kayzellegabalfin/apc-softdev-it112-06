-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2015 at 10:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rba-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `req_id` varchar(8) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rlist_id` int(11) NOT NULL,
  `req_status` varchar(25) NOT NULL DEFAULT 'no file submitted',
  `req_fileuploaded` varchar(255) DEFAULT NULL,
  `req_datefileuploaded` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_list`
--

CREATE TABLE IF NOT EXISTS `requirements_list` (
`rlist_id` int(11) NOT NULL,
  `rlist_name` varchar(50) NOT NULL,
  `rlist_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` varchar(8) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slist_id` int(11) NOT NULL,
  `service_dateapplied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_status` varchar(25) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE IF NOT EXISTS `service_list` (
`slist_id` int(11) NOT NULL,
  `slist_name` varchar(50) NOT NULL,
  `slist_desc` text,
  `req_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_lname` varchar(25) NOT NULL,
  `user_fname` varchar(25) NOT NULL,
  `user_mname` varchar(10) DEFAULT NULL,
  `user_housenum` varchar(25) DEFAULT NULL,
  `user_street` varchar(25) NOT NULL,
  `user_city` varchar(25) NOT NULL,
  `user_country` varchar(25) NOT NULL,
  `user_postalcode` int(10) NOT NULL,
  `user_gender` varchar(6) DEFAULT NULL,
  `user_contact` varchar(25) NOT NULL,
  `user_company` varchar(25) NOT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_age` int(2) DEFAULT NULL,
  `user_type` varchar(15) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
 ADD PRIMARY KEY (`req_id`), ADD UNIQUE KEY `rlist_id` (`rlist_id`), ADD KEY `user_id` (`user_id`,`rlist_id`);

--
-- Indexes for table `requirements_list`
--
ALTER TABLE `requirements_list`
 ADD PRIMARY KEY (`rlist_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`service_id`), ADD KEY `user_id` (`user_id`), ADD KEY `slist_id` (`slist_id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
 ADD PRIMARY KEY (`slist_id`), ADD KEY `req_id` (`req_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requirements_list`
--
ALTER TABLE `requirements_list`
MODIFY `rlist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
MODIFY `slist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
ADD CONSTRAINT `requirements_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
ADD CONSTRAINT `requirements_fk_2` FOREIGN KEY (`rlist_id`) REFERENCES `requirements_list` (`rlist_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
ADD CONSTRAINT `services_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
ADD CONSTRAINT `services_fk_2` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`);

--
-- Constraints for table `service_list`
--
ALTER TABLE `service_list`
ADD CONSTRAINT `service_list_fk_1` FOREIGN KEY (`req_id`) REFERENCES `requirements_list` (`rlist_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
