-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2015 at 01:38 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_code` varchar(45) NOT NULL,
  `alumni_fname` varchar(45) NOT NULL,
  `alumni_lname` varchar(45) NOT NULL,
  `alumni_mname` varchar(45) NOT NULL,
  `alumn_bdate` varchar(45) NOT NULL,
  `alumni_age` varchar(45) NOT NULL,
  `alumni_school_graduated` varchar(45) NOT NULL,
  `alumni_year_graduated` varchar(45) NOT NULL,
  `alumni_address` varchar(45) NOT NULL,
  `alumni_contact_num` varchar(45) NOT NULL,
  `alumni_reg_date` varchar(45) NOT NULL,
  `alumni_occupation` varchar(45) NOT NULL,
  `alumni_company_name` varchar(45) NOT NULL,
  `alumni_company_contact_num` varchar(45) NOT NULL,
  `alumni_company_address` varchar(45) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `volunteer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_alumni_admin1_idx` (`admin_id`),
  KEY `fk_alumni_volunteer1_idx` (`volunteer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_code` varchar(45) NOT NULL,
  `batch_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logs_date` date NOT NULL,
  `admin_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_logs_admin1_idx` (`admin_id`)
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
  `volunteer_start_date` date NOT NULL,
  `batch_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_volunteer_batch1_idx` (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_has_mission`
--

CREATE TABLE IF NOT EXISTS `volunteer_has_mission` (
  `volunteer_id` int(11) NOT NULL,
  `mission_id` int(11) NOT NULL,
  PRIMARY KEY (`volunteer_id`,`mission_id`),
  KEY `fk_volunteer_has_mission_mission1_idx` (`mission_id`),
  KEY `fk_volunteer_has_mission_volunteer1_idx` (`volunteer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `fk_alumni_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumni_volunteer1` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_admin1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `fk_volunteer_batch1` FOREIGN KEY (`batch_id`) REFERENCES `batch` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `volunteer_has_mission`
--
ALTER TABLE `volunteer_has_mission`
  ADD CONSTRAINT `fk_volunteer_has_mission_mission1` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_volunteer_has_mission_volunteer1` FOREIGN KEY (`volunteer_id`) REFERENCES `volunteer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
