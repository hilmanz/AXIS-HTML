-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2012 at 04:56 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `axis_teaser_2012`
--

-- --------------------------------------------------------

--
-- Table structure for table `teaser_data`
--

CREATE TABLE IF NOT EXISTS `teaser_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ipaddress` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `date_ts` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teaser_data`
--

INSERT INTO `teaser_data` (`id`, `ipaddress`, `type`, `date`, `date_ts`) VALUES
(1, '::1', 1, '2012-12-10 22:55:22', 1355154922);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
