-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 03:36 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2advanced`
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
  `alumni_marital_stat` char(10) NOT NULL,
  `alumni_address` varchar(45) NOT NULL,
  `alumni_mobile` char(15) NOT NULL,
  `alumni_landline` char(10) NOT NULL,
  `alumni_email` varchar(45) NOT NULL,
  `alumni_photo` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_code` int(11) NOT NULL,
  `batch_year` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donation_type` int(11) NOT NULL,
  `donation_status` int(11) NOT NULL,
  `donation_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logs_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1425528621),
('m130524_201442_init', 1425528627);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission_name` varchar(45) NOT NULL,
  `mission_desc` varchar(45) NOT NULL,
  `mission_num_of_volunteer_needed` varchar(45) NOT NULL,
  `mission_location` varchar(45) NOT NULL,
  `mission_contact_person_fname` varchar(45) NOT NULL,
  `mission_contact_person_lname` varchar(45) NOT NULL,
  `mission_contact_num` varchar(45) NOT NULL,
  `mission_email_address` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abbycabildo09', 'tgMvkVQMeWOYRgTZLnpdMoJJ8Ay-Yu1B', '$2y$13$E3aVeQAyplSte3Bwf.X42.yl/hxmMbHIJmPbjv/dlceLha6Eh5Mlm', NULL, 'abbycabildo09@gmail.com', 10, 1425528693, 1425528693),
(2, 'kyralacuata', 'OkqUF4Fr4uWeYg6iQ8BtpteTheER0QXs', '$2y$13$KYtwDL15T5Q.A5UGVCw3meUcfoi8dGWXNvx/qIutY4QSMMV8zfzLO', NULL, 'kyralacuata@gmail.com', 10, 1425530231, 1425530231);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_status` varchar(45) NOT NULL,
  `volunteer_code` varchar(45) NOT NULL,
  `volunteer_fname` varchar(45) NOT NULL,
  `volunteer_lname` varchar(45) NOT NULL,
  `volunteer_mname` varchar(45) NOT NULL,
  `volunteer_bdate` varchar(45) NOT NULL,
  `volunteer_age` varchar(45) NOT NULL,
  `volunteer_school_graduated` varchar(45) NOT NULL,
  `volunteer_year_graduated` varchar(45) NOT NULL,
  `volunteer_address` varchar(45) NOT NULL,
  `volunteer_contact_num` varchar(45) NOT NULL,
  `volunteer_start_date` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
