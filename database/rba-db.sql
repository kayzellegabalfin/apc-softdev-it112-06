-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2015 at 03:14 AM
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
  `plist_name` varchar(255) NOT NULL,
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
  `rlist_name` varchar(255) NOT NULL,
  `rlist_desc` text,
  `rlist_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `slist_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirements_list`
--

INSERT INTO `requirements_list` (`rlist_id`, `rlist_name`, `rlist_desc`, `rlist_dateadded`, `slist_id`) VALUES
(5, 'Request Letter for Special Work Permit', 'Letter request from the petitioner-company with an undertaking to withhold and remit BIR taxes due on all income of the applicant and with a statement that all documents submitted were legally obtained from the corresponding government agencies.', '2015-03-09 16:50:35', 8),
(6, 'Request Letter for Visa Extension of Pre-arranged Employee-Commercial', 'Letter request from the Petitioner, with a statement that all documents submitted were legally obtained from the corresponding government agencies.', '2015-03-10 03:33:55', 5),
(7, 'Request Letter for Temporary Resident Visa', 'Letter request from the Petitioner (alien permanent resident)', '2015-03-10 03:35:14', 3),
(8, 'Request Letter for Conversion to Pre-arranged Employee-Commercial', 'Letter request from the Petitioner with a statement that all documents submitted were legally obtained from the corresponding government agencies.', '2015-03-10 05:39:22', 6),
(9, 'Request Letter for Conversion to Non-Quota Immigrant by Marriage', 'Letter request from the Petitioner with a statement that all documents submitted were legally obtained from the corresponding government agencies.', '2015-03-10 05:40:22', 4),
(10, 'Request Letter for Conversion to Quota Immigrant', 'Letter request stating that the applicant:\r\n(a.) Is in possession of a valid passport (or equivalent document) and visa the time he flies his application;\r\n(b.) does not belong to any class of excludible or deportable foreign nationals;\r\n(c.) possesses the qualification, skills, scientific. educational or technical knowledge which will advance and be beneficial to the national interest of the Philippines or has sufficient capital nor a viable and sustainable investment in the Philippines; and\r\n(d.) all of the documents submitted were legally obtained from the corresponding government agencies.', '2015-03-10 05:46:05', 7),
(11, 'CGAF for Special Work Permit', 'Consolidated General Application Form duly accomplished and notarized', '2015-03-10 05:49:27', 8),
(12, 'CGAF for Visa Extension of Pre-arranged Employee-Commercial', 'Consolidated General Application Form duly accomplished and notarized.', '2015-03-10 05:50:24', 5),
(13, 'CGAF for Temporary Resident Visa', 'Consolidated General Application Form duly accomplished and notarized', '2015-03-10 05:51:14', 3),
(14, 'CGAF for Conversion to Pre-arranged Employee-Commercial', 'Consolidated General Application Form duly accomplished and notarized', '2015-03-10 05:52:02', 6),
(15, 'CGAF for Conversion to Non-Quota Immigrant by Marriage', 'Consolidated General Application Form duly accomplished and notarized', '2015-03-10 05:52:57', 4),
(16, 'CGAF for Conversion to Quota Immigrant', 'Consolidated General Application Form duly accomplished and notarized', '2015-03-10 05:53:35', 7),
(17, 'Passport for Special Work Permit', 'Photocopy of applicant''s passport showing bio-page and authorized stay of at least 20 days.', '2015-03-10 06:00:28', 8),
(18, 'SEC Registration for Special Work Permit', 'Photocopy of SEC Registration, By Laws, Articles of Incorporation of the company.', '2015-03-10 06:02:08', 8),
(19, 'Employment Contract for Special Work Permit', 'Photocopy of Employment Contract specifying the exact compensation to be earned by the applicant.', '2015-03-10 06:03:26', 8),
(20, 'BI Clearance for Special Work Permit', 'Original copy of Bureau of Immigration Clearance Certificate', '2015-03-10 06:04:48', 8),
(21, 'Birth Certificate for Conversion to Non-Quota Immigrant by Marriage', 'Original copy of NSO issued Birth Certificate of the Filipino Spouse.', '2015-03-10 06:06:40', 4),
(22, 'Marriage Contract for Conversion to Non-Quota Immigrant by Marriage', 'Original copy of NSO issued Marriage Contract or if the marriage was solemnized abroad, the Original copy of Marriage Contract authenticated by the Philippines Embassy with the English translation if it is written in other foreign language.', '2015-03-10 06:09:01', 4),
(23, 'Passport for Conversion to Non-Quota Immigrant by Marriage', 'Photocopy of applicant''s Passport with bio-page, admission and authorized stay of at least 20 days.', '2015-03-10 06:10:03', 4),
(24, 'BI Clearance for Conversion to Non-Quota Immigrant by Marriage', 'Original copy of Bureau of Immigration Clearance Certificate.', '2015-03-10 06:10:36', 4),
(25, 'Joint Affidavit for Conversion to Non-Quota Immigrant by Marriage', 'Joint Affidavit of applicant and petitioner attesting to the authenticity and genuineness of all documents submitted in support of the application', '2015-03-10 06:11:53', 4),
(26, 'Proof of Financial Capacity for Conversion to Non-Quota Immigrant by Marriage', 'Proof of financial capacity of applicant and/or petitioner during their permanent residence in the Philippines.', '2015-03-10 06:12:50', 4),
(27, 'Photocopy of Passport, ACR, ASIO  for Temporary Resident Visa', 'Photocopies of the following:\r\nPhotocopy of the Applicant''s passport with valid entry visa and admission intro the country and updated stay;\r\nPassport Page of the Petitioner showing the permanent visa stamped on it;\r\nACR I-Card (front and back portion) of the Petitioner;\r\nOrder granting Permanent Resident Visa to the Petitioner;\r\nASIO Certification/ATAP/accomplished and complete application form of ASIO holder stamped "RECEIVED" by the BI, if applicable.', '2015-03-10 08:45:41', 3),
(28, 'Marriage Certificate or Birth Certificate or Family Register for Temporary Resident Visa', 'Original copy of Marriage Certificate or Birth Certificate or Family Register.', '2015-03-10 08:47:16', 3),
(29, 'BI Clearance of Applicant for Temporary Resident Visa', 'Original Copy of Bureau of Immigration Clearance Certificate of the Applicant', '2015-03-10 08:48:23', 3),
(30, 'BI Clearance of Petitioner for Temporary Resident Visa', 'Original Copy of Bureau of Immigration Clearance Certificate of the Petitioner', '2015-03-10 08:49:34', 3),
(31, 'Joint Affidavit for Temporary Resident Visa', 'Joint Affidavit (applicant and petitioner) stating therein the authenticity and genuineness of all documents submitted in support of petition', '2015-03-10 08:50:50', 3),
(32, 'Proof of Financial Capacity for Temporary Resident Visa', 'Proof of Financial Capacity to support applicant and petitioner during their stay in the Philippines', '2015-03-10 08:51:42', 3),
(33, 'Passport for Conversion to Quota Immigrant', 'Photocopy of Applicant''s Passport showing the its bio-page, admission and authorized stay.', '2015-03-10 08:54:36', 7),
(34, 'BI Stamp for Conversion to Quota Immigrant', 'Original copy of stamp issued by the Bureau of Quarantine and appearing in applicant''s passport or travel document, and a certification from a government health institution that applicant is physically and mentally fit.', '2015-03-10 08:56:17', 7),
(35, 'NICA Clearance for Conversion to Quota Immigrant', 'Original copy of National Intelligence Coordinating Agency Clearance', '2015-03-10 08:57:10', 7),
(36, 'LEA Clearance for Conversion to Quota Immigrant', 'Original Copy of Clearance form from the Law Enforcement Agency of the Applicant''s country of origin, provided, that this requirements may be waived if the applicant has stayed in the Philippines for more than 2 years.', '2015-03-10 08:58:34', 7),
(37, 'NBI Clearance', 'Original copy of National Bureau of Investigation Clearance', '2015-03-10 08:59:05', 7),
(38, 'Proof of Applicant''s Special Qualification for Conversion to Quota Immigrant', 'Proof of Applicant''s Special Qualification like academic degrees, awards, certificate of recognition and other documents attesting to applicant''s special qualification, skills or knowledge, or proof of financial capacity or investment', '2015-03-10 09:01:10', 7);

-- --------------------------------------------------------

--
-- Table structure for table `requirements_per_user`
--

CREATE TABLE IF NOT EXISTS `requirements_per_user` (
`rpu_id` int(11) NOT NULL,
  `rpu_status` varchar(255) NOT NULL,
  `rpu_datefilesubmitted` timestamp NULL DEFAULT NULL,
  `rpu_fileuploaded` varchar(255) DEFAULT NULL,
  `rlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slist_id` int(11) NOT NULL,
  `service_dateapplied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `service_status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE IF NOT EXISTS `service_list` (
`slist_id` int(11) NOT NULL,
  `slist_name` varchar(255) NOT NULL,
  `slist_desc` text,
  `slist_type` varchar(45) NOT NULL,
  `slist_dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`slist_id`, `slist_name`, `slist_desc`, `slist_type`, `slist_dateadded`) VALUES
(3, 'Temporary Resident Visa', '', 'Non Immigrant Visa', '2015-03-09 15:01:44'),
(4, 'Conversion to Non-Quota Immigrant by Marriage', '', 'Immigrant Visa', '2015-03-09 15:02:34'),
(5, 'Visa Extension of Pre-arranged Employee-Commercial', '', 'Non Immigrant Visa', '2015-03-09 15:04:08'),
(6, 'Conversion to Pre-arranged Employee-Commercial', '', 'Non Immigrant Visa', '2015-03-09 15:04:58'),
(7, 'Conversion to Quota Immigrant', '', 'Immigrant Visa', '2015-03-09 15:05:33'),
(8, 'Special Work Permit', '', 'Non Immigrant Visa', '2015-03-09 15:05:59');

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
  `user_midname` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_mobile` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_telephone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_housenum` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_street` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_city` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_country` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `user_postalcode` int(10) NOT NULL,
  `user_gender` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_companyname` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_companyadd` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_companycontact` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_birthdate` date DEFAULT NULL,
  `user_age` int(2) DEFAULT NULL,
  `user_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Client'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `user_lastname`, `user_firstname`, `user_midname`, `user_mobile`, `user_telephone`, `user_housenum`, `user_street`, `user_city`, `user_country`, `user_postalcode`, `user_gender`, `user_companyname`, `user_companyadd`, `user_companycontact`, `user_birthdate`, `user_age`, `user_type`) VALUES
(2, 'jessica', 'mAUPMo6NlUUe3hviPPBdGefUBH9PyvLc', '$2y$13$9O7VKYbSlL62y/2W73S0mOyHzHDkmo.vsvLQVIHKcVtcbz1YMIFRO', NULL, 'martinezjecca@mail.com', 10, 1425913183, 1425913183, 'Martinez', 'Jessica', NULL, '', NULL, NULL, NULL, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'Client'),
(3, 'Kayzelle', 'VNVMl94SN5m-sJQtEZT1-Jp7yqm2s7JT', '$2y$13$s3HXhao0oCEJUPT9Cjt3du6ShLF6SSiPKG7RKtJ7sdG7Un2lHCeEu', NULL, 'kayzellegabalfin@gmail.com', 10, 1426034711, 1426034711, 'Gabalfin', 'Kayzelle', NULL, '', NULL, NULL, NULL, '', '', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'Client');

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
 ADD PRIMARY KEY (`rlist_id`), ADD KEY `requirements_list_fk_1_idx` (`slist_id`);

--
-- Indexes for table `requirements_per_user`
--
ALTER TABLE `requirements_per_user`
 ADD PRIMARY KEY (`rpu_id`), ADD KEY `fk_requirements_per_user_user1_idx` (`user_id`), ADD KEY `requirements_per_user_fk_2_idx` (`rlist_id`), ADD KEY `service_id` (`service_id`);

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
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
MODIFY `plist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requirements_list`
--
ALTER TABLE `requirements_list`
MODIFY `rlist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `requirements_per_user`
--
ALTER TABLE `requirements_per_user`
MODIFY `rpu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
MODIFY `slist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `price_list`
--
ALTER TABLE `price_list`
ADD CONSTRAINT `price_list_fk_1` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirements_list`
--
ALTER TABLE `requirements_list`
ADD CONSTRAINT `requirements_list_fk_1` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requirements_per_user`
--
ALTER TABLE `requirements_per_user`
ADD CONSTRAINT `requirements_per_user_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `requirements_per_user_fk_2` FOREIGN KEY (`rlist_id`) REFERENCES `requirements_list` (`rlist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `requirements_per_user_fk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
ADD CONSTRAINT `services_fk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `services_fk_2` FOREIGN KEY (`slist_id`) REFERENCES `service_list` (`slist_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
