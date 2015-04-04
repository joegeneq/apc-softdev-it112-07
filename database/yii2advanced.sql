-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 09:51 AM
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
  `alumni_nationality` varchar(45) NOT NULL,
  `alumni_occupation` varchar(45) NOT NULL,
  `alumni_marital_stat` char(10) NOT NULL,
  `alumni_address` varchar(45) NOT NULL,
  `alumni_mobile` char(15) NOT NULL,
  `alumni_landline` char(10) NOT NULL,
  `alumni_email` varchar(45) NOT NULL,
  `alumni_school_graduated_from` varchar(45) NOT NULL,
  `alumni_school_year_graduated` varchar(45) NOT NULL,
  `alumni_school_address` varchar(45) NOT NULL,
  `alumni_school_contact_num` int(11) NOT NULL,
  `alumni_photo` blob NOT NULL,
  `alumni_father_name` varchar(45) NOT NULL,
  `alumni_father_address` varchar(45) NOT NULL,
  `alumni_father_occupation` varchar(45) NOT NULL,
  `alumni_father_contact_num` int(11) NOT NULL,
  `alumni_mother_name` varchar(45) NOT NULL,
  `alumni_mother_address` varchar(45) NOT NULL,
  `alumni_mother_occupation` varchar(45) NOT NULL,
  `alumni_mother_contact_num` int(11) NOT NULL,
  `alumni_num_siblings` int(11) NOT NULL,
  `alumni_spouse` varchar(45) NOT NULL,
  `alumni_num_children` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `alumni_lname`, `alumni_fname`, `alumni_mname`, `alumni_gender`, `alumni_birthdate`, `alumni_nationality`, `alumni_occupation`, `alumni_marital_stat`, `alumni_address`, `alumni_mobile`, `alumni_landline`, `alumni_email`, `alumni_school_graduated_from`, `alumni_school_year_graduated`, `alumni_school_address`, `alumni_school_contact_num`, `alumni_photo`, `alumni_father_name`, `alumni_father_address`, `alumni_father_occupation`, `alumni_father_contact_num`, `alumni_mother_name`, `alumni_mother_address`, `alumni_mother_occupation`, `alumni_mother_contact_num`, `alumni_num_siblings`, `alumni_spouse`, `alumni_num_children`) VALUES
(1, 'Arendain-Elesis', 'Cecilia', 'ASdg', 'F', '0000-00-00', '', '', 'Married', 'Zone III, Bo. Obrero 5000 Iloilo City', '09178344158', '8249614', 'babibatacan@yahoo.com', '', '', '', 0, 0x6a616e7361, '', '', '', 0, '', '', '', 0, 0, '', 0),
(2, 'Arendain-Elesis', 'Cecilia', 'ASdg', 'F', '0000-00-00', '', '', 'Married', 'Zone III, Bo. Obrero 5000 Iloilo City', '09178344158', '8249614', 'babibatacan@yahoo.com', '', '', '', 0, 0x6a646b733b7361, '', '', '', 0, '', '', '', 0, 0, '', 0),
(3, 'demo', 'demo', 'demo', 'f', '0000-00-00', '', '', 'demo', 'demo', '893084935', '94305436', 'dkslfjd@gmail.com', '', '', '', 0, 0x6473646664, '', '', '', 0, '', '', '', 0, 0, '', 0),
(4, 'demo', 'demo', 'demo', 'f', '0000-00-00', '', '', 'demo', 'demo', '893084935', '94305436', 'dkslfjd@gmail.com', '', '', '', 0, 0x6473646664, '', '', '', 0, '', '', '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_code` int(11) NOT NULL,
  `batch_year` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch_code`, `batch_year`) VALUES
(1, 1, '0000-00-00');

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
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission_num_of_volunteer` varchar(45) NOT NULL,
  `mission_location` varchar(45) NOT NULL,
  `mission_contact_person_lname` varchar(45) NOT NULL,
  `mission_contact_person_fname` varchar(45) NOT NULL,
  `mission_contact_num` char(12) NOT NULL,
  `mission_email_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `mission_num_of_volunteer`, `mission_location`, `mission_contact_person_lname`, `mission_contact_person_fname`, `mission_contact_num`, `mission_email_address`) VALUES
(1, '10', 'Baguio', 'Cabildo', 'Abigail', '09876543243', 'abigailcabildo@gmail.com');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
