-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2015 at 09:14 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ama-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_lname` varchar(45) NOT NULL,
  `alumni_fname` varchar(45) NOT NULL,
  `alumni_mname` varchar(45) NOT NULL,
  `alumni_gender` char(6) NOT NULL,
  `alumni_birthdate` date NOT NULL,
  `alumni_nationality` varchar(45) NOT NULL,
  `alumni_occupation` varchar(45) NOT NULL,
  `alumni_marital_stat` char(10) NOT NULL,
  `alumni_address` varchar(45) NOT NULL,
  `alumni_mobile` char(12) NOT NULL,
  `alumni_landline` char(7) DEFAULT NULL,
  `alumni_email` varchar(45) NOT NULL,
  `alumni_school_graduated_from` varchar(45) NOT NULL,
  `alumni_school_year_grad` year(4) NOT NULL,
  `alumni_school_address` varchar(45) NOT NULL,
  `alumni_school_contact_num` int(11) NOT NULL,
  `alumni_father_name` varchar(45) NOT NULL,
  `alumni_father_address` varchar(45) NOT NULL,
  `alumni_father_occupation` varchar(45) DEFAULT NULL,
  `alumni_father_contact_num` char(12) DEFAULT NULL,
  `alumni_mother_name` varchar(45) NOT NULL,
  `alumni_mother_address` varchar(45) NOT NULL,
  `alumni_mother_occupation` varchar(45) DEFAULT NULL,
  `alumni_mother_contact_num` char(12) DEFAULT NULL,
  `alumni_num_siblings` int(11) DEFAULT NULL,
  `alumni_spouse` varchar(45) DEFAULT NULL,
  `alumni_num_children` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `alumni_lname`, `alumni_fname`, `alumni_mname`, `alumni_gender`, `alumni_birthdate`, `alumni_nationality`, `alumni_occupation`, `alumni_marital_stat`, `alumni_address`, `alumni_mobile`, `alumni_landline`, `alumni_email`, `alumni_school_graduated_from`, `alumni_school_year_grad`, `alumni_school_address`, `alumni_school_contact_num`, `alumni_father_name`, `alumni_father_address`, `alumni_father_occupation`, `alumni_father_contact_num`, `alumni_mother_name`, `alumni_mother_address`, `alumni_mother_occupation`, `alumni_mother_contact_num`, `alumni_num_siblings`, `alumni_spouse`, `alumni_num_children`) VALUES
(1, 'Abisado', 'Jandra', 'Correa', 'Female', '1994-01-19', 'Filipino', 'na', 'Single', 'Paranaque', '0989768983', '8767890', 'jandruhh@gmail.com', 'APC', 2014, 'Magallanes', 9876789, 'Alejandro Abisado', 'Paranaque', 'NA', '8907890', 'Geraldine Correa', 'Las Pinas', 'NA', '8907689', 0, 'NA', 0),
(2, 'Cabildo', 'Abigail', 'Lantang', 'Female', '1994-01-19', 'Filipino', 'kfkljdlkf', 'Single', 'fkldjfld', '0989768983', '8767890', 'jdsakfdklsf@gmail.com', 'APC', 2014, 'Magallanes', 9876789, 'sas', 'sa', 'sa', '909809', 'fd', 'hgjfdhgfdl', 'dkhfdg', '8907689', 0, 'NA', 0),
(3, 'Lacuata', 'Kyra', 'Lacuata', 'Female', '1996-02-06', 'American', 'na', 'Single', 'Taguig', '+639', '543657', 'none@gmail.com', 'APC', 2014, 'Magallanes', 807899, 'sas', 'fdegf', 'gfhg', 'gffhyj', 'ndksfndskl', 'gfgh', 'hghgj', 'hgjh', 0, 'NA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_location` varchar(255) NOT NULL,
  `area_supervisor` varchar(255) NOT NULL,
  `area_contactnum` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area_location`, `area_supervisor`, `area_contactnum`) VALUES
(1, 'Baguio', 'Josephine Alcantara', 2147483647),
(2, 'Iloilo', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `batch_code` varchar(11) NOT NULL,
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_code` varchar(11) NOT NULL,
  `batch_created_date` date NOT NULL,
  `alumni_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `batch_ibfk_2` (`alumni_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch_code`, `batch_created_date`, `alumni_id`) VALUES
(9, '1990-1', '1990-12-04', 1),
(10, '1990-1', '1990-12-04', 2),
(11, '1991-1', '2015-04-23', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_id` int(11) NOT NULL,
  `mission_length` varchar(20) NOT NULL,
  `mission_start_date` date NOT NULL,
  `mission_end_date` date NOT NULL,
  `mission_status` varchar(20) NOT NULL,
  `batch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mission_ibfk_1` (`batch_id`),
  KEY `mission_ibfk_3` (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `area_id`, `mission_length`, `mission_start_date`, `mission_end_date`, `mission_status`, `batch_id`) VALUES
(1, 1, 'Six months', '2015-11-30', '2016-11-30', 'Ongoing', 9),
(2, 2, 'Six months', '2015-04-07', '2015-04-08', 'Ongoing', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abbycabildo09', 'tgMvkVQMeWOYRgTZLnpdMoJJ8Ay-Yu1B', '$2y$13$E3aVeQAyplSte3Bwf.X42.yl/hxmMbHIJmPbjv/dlceLha6Eh5Mlm', NULL, 'abbycabildo09@gmail.com', 10, 1425528693, 1425528693),
(2, 'kyralacuata', 'OkqUF4Fr4uWeYg6iQ8BtpteTheER0QXs', '$2y$13$KYtwDL15T5Q.A5UGVCw3meUcfoi8dGWXNvx/qIutY4QSMMV8zfzLO', NULL, 'kyralacuata@gmail.com', 10, 1425530231, 1425530231),
(3, 'gamay', '_JAYZj1AKKbsyqNDVD9R2aY548lDwqfc', '$2y$13$TZKUJQT0ujIzyyC9FUR3wuIPLVWZgkQO1BTL5CKpirRJaJaD15Mdm', NULL, 'gamay@gmail.com', 10, 1426229090, 1426229090),
(4, 'admin', 'WWsoSAoGRmGtIZdo1QJabRbnitqP3DIj', '$2y$13$Y77wzHKkIwYZN5XOPX.2tufYpyCA8VCnWJOnpTgE6bds1DsO5I.Hm', NULL, 'administrator@gmail.com', 10, 1427504044, 1427504044);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`id`);

--
-- Constraints for table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`id`),
  ADD CONSTRAINT `mission_ibfk_3` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
