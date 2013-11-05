-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2013 at 09:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `t-shirt and food coupon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('rajeev', 'mca_2060'),
('raushan', 'nitt_2060');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `roll_no` int(9) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`roll_no`, `name`, `password`) VALUES
(205112037, 'Utsav Chatterjee', 'nitt400'),
(205112051, 'Nripesh Toppo', 'nitt600'),
(205112055, 'Srikanth ', 'nitt500'),
(205112059, 'Satyam Gupta', 'nitt100'),
(205112060, 'Rajeev Raushan Prasad', '7667819001'),
(205112063, 'Vijay Lakra', 'nitt200'),
(205112070, 'Birendra Kumar', 'nitt300');

-- --------------------------------------------------------

--
-- Table structure for table `mca_fest`
--

CREATE TABLE IF NOT EXISTS `mca_fest` (
  `roll_no` int(9) NOT NULL DEFAULT '0',
  `dept` text NOT NULL,
  `t_size` text NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `roll_no` int(9) NOT NULL,
  `name` text NOT NULL,
  `dept` text NOT NULL,
  `t_size` text,
  `f_coupon` text,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`roll_no`, `name`, `dept`, `t_size`, `f_coupon`) VALUES
(205112037, 'Utsav Chatterjee', 'CA', 'Excel', 'no'),
(205112059, 'Satyam Gupta', 'CA', '-', 'yes'),
(205112060, 'Rajeev Raushan Prasad', 'CA', 'Medium', 'yes'),
(205112063, 'Vijay Lakra', 'CA', 'Large', 'yes'),
(205112070, 'Birendra Kumar', 'CA', 'Excel', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
