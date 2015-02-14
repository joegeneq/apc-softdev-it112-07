-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2015 at 01:28 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amadb`
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
-- Table structure for table `paypal`
--

CREATE TABLE IF NOT EXISTS `paypal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paypal_account` int(11) NOT NULL,
  `paypal_amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_type` char(7) NOT NULL,
  `user_lname` varchar(45) NOT NULL,
  `user_fname` varchar(45) NOT NULL,
  `user_mname` varchar(45) NOT NULL,
  `user_gender` char(6) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_marital_stat` char(10) NOT NULL,
  `user_address` varchar(45) NOT NULL,
  `user_mobile` char(15) NOT NULL,
  `user_landline` char(10) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_photo` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_password`, `user_type`, `user_lname`, `user_fname`, `user_mname`, `user_gender`, `user_birthdate`, `user_marital_stat`, `user_address`, `user_mobile`, `user_landline`, `user_email`, `user_photo`) VALUES
(1, 'jcabisado', '1234', 'admin', 'Abisado', 'Jandra', 'Correa', 'female', '1994-01-19', 'Single', '6741 Tramo St. San Dionisio Paranaque City', '09191234121', '8205679', 'abisado.jandra@gmail.com', 0x64736b6c6a66646a6b6c7366);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `v_lname` varchar(45) NOT NULL,
  `v_fname` varchar(45) NOT NULL,
  `v_mname` varchar(45) NOT NULL,
  `v_gender` char(6) NOT NULL,
  `v_birthdate` date NOT NULL,
  `v_marital_status` char(10) NOT NULL,
  `v_address` varchar(45) NOT NULL,
  `v_mobile` char(15) NOT NULL,
  `v_landline` char(10) NOT NULL,
  `v_email` varchar(45) NOT NULL,
  `v_photo` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `v_lname`, `v_fname`, `v_mname`, `v_gender`, `v_birthdate`, `v_marital_status`, `v_address`, `v_mobile`, `v_landline`, `v_email`, `v_photo`) VALUES
(1, 'Abisado', 'Jandra', 'Correa', 'Female', '1994-01-19', 'Single', 'Paranaque City', '+63912345678', '021231234', 'abisadojandra@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
