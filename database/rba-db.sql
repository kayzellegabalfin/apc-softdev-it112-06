-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 11:07 AM
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
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE IF NOT EXISTS `price_list` (
  `plist_id` int(11) NOT NULL,
  `plist_name` varchar(50) NOT NULL,
  `plist_price` double NOT NULL,
  `plist_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_list`
--

CREATE TABLE IF NOT EXISTS `requirements_list` (
  `rlist_id` int(11) NOT NULL,
  `rlist_name` varchar(50) NOT NULL,
  `rlist_desc` text,
  `rlist_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_per_service`
--

CREATE TABLE IF NOT EXISTS `requirements_per_service` (
  `rps_id` int(11) NOT NULL,
  `rps_name` text NOT NULL,
  `slist_id` int(11) NOT NULL,
  `rlist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requirements_per_user`
--

CREATE TABLE IF NOT EXISTS `requirements_per_user` (
  `rpu_id` int(11) NOT NULL,
  `rpu_status` varchar(50) NOT NULL DEFAULT 'no file submitted',
  `rpu_datefilesubmitted` timestamp NULL DEFAULT NULL,
  `rpu_fileuploaded` varchar(255) DEFAULT NULL,
  `rps_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slist_id` int(11) NOT NULL,
  `service_dateapplied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_status` varchar(25) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE IF NOT EXISTS `service_list` (
  `slist_id` int(11) NOT NULL,
  `slist_name` text NOT NULL,
  `slist_desc` text,
  `slist_type` varchar(45) NOT NULL,
  `slist_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`slist_id`, `slist_name`, `slist_desc`, `slist_type`, `slist_dateadded`) VALUES
(1, 'Conversion to Quota Immigrant', '', 'Immigrant Visa', '2015-03-07 10:04:02'),
(2, 'Special Work Permit', '', 'Non Immigrant Visa', '2015-03-07 10:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `user_lastname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_firstname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_midname` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_housenum` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_street` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_city` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_country` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_postalcode` int(10) NOT NULL,
  `user_gender` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_companyname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_companyadd` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_companycontact` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_age` int(2) DEFAULT NULL,
  `user_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Client'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
 ADD PRIMARY KEY (`plist_id`), ADD KEY `price_list_fk_1_idx` (`slist_id`);

--
-- Indexes for table `requirements_list`
--
ALTER TABLE `requirements_list`
 ADD PRIMARY KEY (`rlist_id`);

--
-- Indexes for table `requirements_per_service`
--
ALTER TABLE `requirements_per_service`
 ADD PRIMARY KEY (`rps_id`), ADD KEY `slist_id` (`slist_id`), ADD KEY `rlist_id` (`rlist_id`);

--
-- Indexes for table `requirements_per_user`
--
ALTER TABLE `requirements_per_user`
 ADD PRIMARY KEY (`rpu_id`), ADD KEY `fk_requirements_per_user_requirements_per_service1_idx` (`rps_id`), ADD KEY `fk_requirements_per_user_user1_idx` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`service_id`), ADD KEY `slist_id` (`slist_id`), ADD KEY `fk_services_user1_idx` (`user_id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
 ADD PRIMARY KEY (`slist_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `price_list`
--
ALTER TABLE `price_list`
ADD CONSTRAINT `price_list_fk_1` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirements_per_service`
--
ALTER TABLE `requirements_per_service`
ADD CONSTRAINT `requirements_fk_1` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `requirements_fk_2` FOREIGN KEY (`rlist_id`) REFERENCES `requirements_list` (`rlist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirements_per_user`
--
ALTER TABLE `requirements_per_user`
ADD CONSTRAINT `requirements_per_user_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `requirements_per_user_fk_2` FOREIGN KEY (`rps_id`) REFERENCES `requirements_per_service` (`rps_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
ADD CONSTRAINT `services_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `services_fk_2` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
