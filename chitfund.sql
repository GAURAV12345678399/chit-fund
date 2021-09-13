-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2021 at 08:11 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chitfund`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phnumber` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`uname`, `pass`, `fname`, `lname`, `email`, `phnumber`, `balance`) VALUES
('jack123', 'jack123', 'jack', 'aiden', 'jack@tmail.com', '1234567890', '95000'),
('arun123', 'arun123', 'Arun', 'raj', 'arun@tmail.com', '1234567889', '35000'),
('raj123', 'raj123', 'Raj', 'kumar', 'raj@tmail.com', '1234567890', '20000'),
('sonia123', 'sonia123', 'Sonia', 'singh', 'sonia@tmail.com', '1234567890', '2010000'),
('sagar123', 'sagar123', 'Sagar', 'raj', 'sagar@tmail.com', '1000000000', '15000'),
('gaurav123', 'gaurav123', 'Gaurav', 'kumar', 'gaurav2@tmail.com', '5678901234', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `fmembers`
--

CREATE TABLE `fmembers` (
  `fid` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `won` varchar(10) NOT NULL,
  `wondate` varchar(100) NOT NULL,
  `request` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fmembers`
--

INSERT INTO `fmembers` (`fid`, `uname`, `won`, `wondate`, `request`) VALUES
('f22', 'sonia123', 'yes', '29/12/2020', 'a'),
('f22', 'jack123', 'yes', '29/12/2020', 'a'),
('f22', 'raj123', 'yes', '29/12/2020', 'a'),
('f22', 'sagar123', 'yes', '29/12/2020', 'a'),
('f22', 'arun123', 'yes', '29/12/2020', 'a'),
('f123', 'gaurav123', 'no', '0', 'a'),
('f44', 'gaurav123', 'no', '0', 'd'),
('f77', 'sagar123', 'yes', '29/12/2020', 'a'),
('f77', 'sonia123', 'yes', '29/12/2020', 'a'),
('f77', 'arun123', 'yes', '29/12/2020', 'a'),
('f55', 'gaurav123', 'no', '0', 'r'),
('f44', 'arun123', 'no', '0', 'r'),
('f123', 'arun123', 'no', '0', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `fid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `totmembers` varchar(100) NOT NULL,
  `onmembers` varchar(100) NOT NULL,
  `nocalls` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`fid`, `amount`, `totmembers`, `onmembers`, `nocalls`) VALUES
('f123', '10000', '5', '1', '0'),
('f22', '5000', '5', '5', '5'),
('f44', '5000', '5', '0', '0'),
('f55', '10000', '5', '0', '0'),
('f77', '5000', '3', '3', '3');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
