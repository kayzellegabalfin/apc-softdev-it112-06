-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 01:44 PM
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
-- Table structure for table `price_list`
--

CREATE TABLE IF NOT EXISTS `price_list` (
  `plist_id` int(11) NOT NULL,
  `plist_name` varchar(50) NOT NULL,
  `plist_price` double NOT NULL,
  `plist_currency` varchar(10) NOT NULL,
  `slit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE IF NOT EXISTS `requirements` (
  `req_id` varchar(8) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slist_id` int(11) NOT NULL,
  `rlist_id` int(11) NOT NULL,
  `req_status` varchar(25) NOT NULL DEFAULT 'no file submitted',
  `req_fileuploaded` varchar(255) DEFAULT NULL,
  `req_datefileuploaded` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`req_id`, `user_id`, `slist_id`, `rlist_id`, `req_status`, `req_fileuploaded`, `req_datefileuploaded`) VALUES
('34t87yfu', 1, 1, 3, 'no file submitted', NULL, NULL),
('487tyrny', 1, 1, 3, 'no file submitted', NULL, NULL),
('7t6rbg7e', 1, 2, 4, 'no file submitted', NULL, NULL),
('ertyubvy', 1, 2, 4, 'no file submitted', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requirements_list`
--

CREATE TABLE IF NOT EXISTS `requirements_list` (
`rlist_id` int(11) NOT NULL,
  `rlist_name` varchar(50) NOT NULL,
  `rlist_desc` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements_list`
--

INSERT INTO `requirements_list` (`rlist_id`, `rlist_name`, `rlist_desc`) VALUES
(3, 'Birth Certificate', NULL),
(4, 'Request Letter', NULL);

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
  `slist_desc` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`slist_id`, `slist_name`, `slist_desc`) VALUES
(1, 'Change of Status', NULL),
(2, 'Extension', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `user_lname`, `user_fname`, `user_mname`, `user_housenum`, `user_street`, `user_city`, `user_country`, `user_postalcode`, `user_gender`, `user_contact`, `user_company`, `user_birthdate`, `user_age`, `user_type`) VALUES
(1, 'kayzellegabalfin@gmail.com', 'samplepassword', 'Gabalfin', 'Kayzelle', 'Cabaysa', '26 - B', 'Talaba 5', 'Bacoor', 'Philippines', 4107, 'Female', '092222222', 'Asia Pacific College', NULL, NULL, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
 ADD PRIMARY KEY (`plist_id`);

--
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
 ADD PRIMARY KEY (`req_id`), ADD KEY `user_id` (`user_id`), ADD KEY `slist_id` (`slist_id`), ADD KEY `rlist_id` (`rlist_id`);

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
 ADD PRIMARY KEY (`slist_id`);

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
MODIFY `rlist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
MODIFY `slist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `price_list`
--
ALTER TABLE `price_list`
ADD CONSTRAINT `price_list_fk_1` FOREIGN KEY (`plist_id`) REFERENCES `service_list` (`slist_id`);

--
-- Constraints for table `requirements`
--
ALTER TABLE `requirements`
ADD CONSTRAINT `requirements_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
ADD CONSTRAINT `requirements_fk_2` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`),
ADD CONSTRAINT `requirements_fk_3` FOREIGN KEY (`rlist_id`) REFERENCES `requirements_list` (`rlist_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
ADD CONSTRAINT `services_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
ADD CONSTRAINT `services_fk_2` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
