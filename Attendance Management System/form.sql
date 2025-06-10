-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2023 at 02:47 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`Sr_no`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sr_no`, `emp_id`, `first_name`, `last_name`, `phone_no`, `email`, `password`, `gender`) VALUES
(1, 1, 'admin', 'admin', 1234567890, 'admin@gmail.com', 'admin', 'Male'),
(2, 2, 'abc', 'def', 4455882200, 'abcdef@gmail.com', '123', 'Female'),
(3, 102, 'admin1', 'admin1', 123456798, 'admin1@gmail.com', '123', 'Male'),
(4, 29, 'Harshad', 'Raurale', 7208355594, 'harshadraurale83@gmail.com', '123', 'Male'),
(5, 101, 'Harsh', 'Raurale', 7208355594, 'harshraurale83@gmail.com', '123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `Sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `attenance` varchar(10) NOT NULL,
  PRIMARY KEY (`Sr_no`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Sr_no`, `emp_id`, `first_name`, `last_name`, `time`, `date`, `attenance`) VALUES
(1, 1, 'Harshad', 'Raurale', '22:08:27', '2021-09-06', 'P'),
(2, 2, 'abc', 'abc', '22:11:10', '2021-09-06', 'P'),
(3, 2, 'abc', 'abc', '11:32:03', '2021-10-22', 'P'),
(4, 1, 'abc', 'abc', '11:03:53', '2022-01-07', 'P'),
(5, 101, 'emp ', 'emp', '12:15:54', '2022-01-07', 'P'),
(6, 1, 'abc', 'abc', '12:53:09', '2022-05-05', 'P'),
(7, 1, 'abc', 'abc', '13:05:01', '2022-05-05', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`Sr_no`),
  UNIQUE KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Sr_no`, `emp_id`, `first_name`, `last_name`, `phone_no`, `email`, `password`, `gender`) VALUES
(7, 1, 'abc', 'abc', 1234567890, 'abc@gmail.com', 'abc', 'Male'),
(8, 101, 'emp ', 'emp', 1234567890, 'emp@gmail.com', '123', 'Male'),
(9, 22022, 'Res8', 'Raurale ', 9137953848, 'reshmaraurale0@gmail.com ', '0000', 'Female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
