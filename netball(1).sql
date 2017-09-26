-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 11:14 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netball`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_base_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_base_admin` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(45) NOT NULL,
  `pw` varchar(45) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club`
--

CREATE TABLE IF NOT EXISTS `tbl_club` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `payment` int(10) unsigned NOT NULL COMMENT 'id of tbl_club_payment',
  `password` text NOT NULL,
  `club_name` varchar(250) NOT NULL,
  `association_afiliated` varchar(250) NOT NULL,
  `birthday` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`no`, `email`, `name`, `createdate`, `payment`, `password`, `club_name`, `association_afiliated`, `birthday`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `user_type`) VALUES
(4, 'club@gmail.com', 'club', '2017-09-26 08:36:13', 0, '$2y$10$VaiSuB89cXYBKvWze3thluzHXT6kNmI6jn.RDuOAY8YEEcmOLoFku', 'abc', 'abc', '12/01/2017', 'mig', 'indore', 'mp', 'dsf', 'Austraila', '2356', '2356', 'club'),
(5, 'player@gmail.com', 'admin', '2017-09-26 08:36:18', 0, '$2y$10$9p9iWG8X5gaPnsxPHbi.7.s9WnoiibCRk5C3UbJM.iPGzZ5O54iM.', 'abc', 'abc', '12/01/2017', 'mig', 'indore', 'mp', '452001', 'Austraila', '2356', '2356', 'club');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_club_payment` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(10) unsigned NOT NULL COMMENT '0:paypal,1:bank',
  `name` varchar(45) NOT NULL,
  `bsb` varchar(45) NOT NULL,
  `number` varchar(45) NOT NULL,
  `branch` varchar(45) NOT NULL,
  `paypal` varchar(45) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_player`
--

CREATE TABLE IF NOT EXISTS `tbl_player` (
  `no` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `birthday` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `postcode` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `position1` varchar(45) NOT NULL,
  `position2` varchar(45) NOT NULL,
  `position3` varchar(45) NOT NULL,
  `user_type` varchar(45) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_player`
--

INSERT INTO `tbl_player` (`no`, `email`, `name`, `password`, `birthday`, `address`, `city`, `state`, `postcode`, `country`, `phone`, `mobile`, `position1`, `position2`, `position3`, `user_type`) VALUES
(6, 'player@gmail.com', 'player', '$2y$10$P0Ra7NRoNt34Xkoxzkca3uJCp6YQV8a5wsXm93vhEkhLkiJu0DsHi', '12/01/2017', 'lig', 'indore', 'mp', '452001', '', '', '', 'GK', 'GK', 'GK', 'player');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_login`
--

CREATE TABLE IF NOT EXISTS `tbl_user_login` (
  `user_login_id` varchar(250) NOT NULL,
  `current_password` varchar(60) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`user_login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_login`
--

INSERT INTO `tbl_user_login` (`user_login_id`, `current_password`, `user_type`) VALUES
('admin', '$2y$10$t9Tmijmw4ClRxEZpJB0uw.lHtV/H4WJqBBDO5rkmEqcTbpmWxYrxG', 'admin'),
('club', '$2y$10$PNQdJT/pW2Q6YtqY2.fPKuryJeBJaJ5CZjVIz9ca5gg1menUfVhZe', 'club'),
('demo', '$2y$10$d8GJM8Mx49UhBiP9Tv9Rvu6YMsluUoVhBKVQg1qCaUpoD5JaaFV6S', 'player'),
('player', '$2y$10$odPEm8rDHjk4NljRYJpzNupzNX6xDL7l6MDfcearoEWSQhQWY5Eau', 'player');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
