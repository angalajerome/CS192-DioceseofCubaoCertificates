-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 06:56 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certificates_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesses`
--

CREATE TABLE `accesses` (
  `accessDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userCode` int(11) NOT NULL,
  `parishcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accesses`
--

INSERT INTO `accesses` (`accessDate`, `userCode`, `parishcode`) VALUES
('2017-05-03 10:54:45', 1, 1001),
('2017-05-03 10:55:14', 0, 9999);

-- --------------------------------------------------------

--
-- Table structure for table `bapts`
--

CREATE TABLE `bapts` (
  `firstName` text NOT NULL,
  `middleName` text NOT NULL,
  `lastName` text NOT NULL,
  `suffix` text NOT NULL,
  `mother` text NOT NULL,
  `father` text NOT NULL,
  `bDay` int(11) NOT NULL,
  `bMonth` text NOT NULL,
  `bYear` int(11) NOT NULL,
  `bPlace` text NOT NULL,
  `bParishCode` int(11) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `registered` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `baptCode` int(11) NOT NULL,
  `bPriestName` text NOT NULL,
  `bSpA` text NOT NULL,
  `bSpB` text NOT NULL,
  `printingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `printingDetails` int(11) NOT NULL,
  `printingStaffCode` int(11) NOT NULL,
  `bBookNum` int(11) NOT NULL,
  `bPageNum` int(11) NOT NULL,
  `bLineNum` int(11) NOT NULL,
  `baptDay` int(11) NOT NULL,
  `baptMonth` text NOT NULL,
  `baptYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bapts`
--

INSERT INTO `bapts` (`firstName`, `middleName`, `lastName`, `suffix`, `mother`, `father`, `bDay`, `bMonth`, `bYear`, `bPlace`, `bParishCode`, `lastModified`, `registered`, `baptCode`, `bPriestName`, `bSpA`, `bSpB`, `printingDateTime`, `printingDetails`, `printingStaffCode`, `bBookNum`, `bPageNum`, `bLineNum`, `baptDay`, `baptMonth`, `baptYear`) VALUES
('Jera', 's', 'Angga', 's', 's', 's', 1, 'September', 1900, 's', 2001, '2017-05-01 08:17:26', '2017-05-01 02:17:26', 4, 's', 's', 's', '0000-00-00 00:00:00', 0, 0, 1, 1, 1, 1, 'January', 1900);

-- --------------------------------------------------------

--
-- Table structure for table `confs`
--

CREATE TABLE `confs` (
  `firstName` text NOT NULL,
  `middleName` text NOT NULL,
  `lastName` text NOT NULL,
  `suffix` text NOT NULL,
  `mother` text NOT NULL,
  `father` text NOT NULL,
  `bDay` int(11) NOT NULL,
  `bMonth` text NOT NULL,
  `bYear` int(11) NOT NULL,
  `cParishCode` int(11) NOT NULL,
  `lastModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `registered` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `confCode` int(11) NOT NULL,
  `cBishopName` text NOT NULL,
  `cSpA` text NOT NULL,
  `cSpB` text NOT NULL,
  `printingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `printingDetails` int(11) NOT NULL,
  `printingStaffCode` int(11) NOT NULL,
  `cBookNum` int(11) NOT NULL,
  `cPageNum` int(11) NOT NULL,
  `cLineNum` int(11) NOT NULL,
  `confDay` int(11) NOT NULL,
  `confMonth` text NOT NULL,
  `confYear` int(11) NOT NULL,
  `confAdmin` text NOT NULL,
  `baptDay` int(11) NOT NULL,
  `baptMonth` text NOT NULL,
  `baptYear` int(11) NOT NULL,
  `baptParishCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `confs`
--

INSERT INTO `confs` (`firstName`, `middleName`, `lastName`, `suffix`, `mother`, `father`, `bDay`, `bMonth`, `bYear`, `cParishCode`, `lastModified`, `registered`, `confCode`, `cBishopName`, `cSpA`, `cSpB`, `printingDateTime`, `printingDetails`, `printingStaffCode`, `cBookNum`, `cPageNum`, `cLineNum`, `confDay`, `confMonth`, `confYear`, `confAdmin`, `baptDay`, `baptMonth`, `baptYear`, `baptParishCode`) VALUES
('Josuke', 'None', 'Higashikata', '', 'someone', 'Joseph Joestar', 1, 'January', 1900, 2001, '2017-05-03 14:25:08', '2017-05-03 08:25:08', 1, 's', 's', 's', '0000-00-00 00:00:00', 0, 0, 1, 1, 1, 1, 'January', 1900, 's', 1, 'January', 1900, 2001);

-- --------------------------------------------------------

--
-- Table structure for table `parishes`
--

CREATE TABLE `parishes` (
  `parishCode` int(11) NOT NULL,
  `parishName` text NOT NULL,
  `parishPriestName` text NOT NULL,
  `vicariateCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userCode` int(11) NOT NULL,
  `userName` text NOT NULL,
  `password` text NOT NULL,
  `parishCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userCode`, `userName`, `password`, `parishCode`) VALUES
(0, 'CubaoAdmin', '9dc778ecf844759ae64b5c39ffe15c1a', 9999),
(1, 'hfprd', '5f4dcc3b5aa765d61d8327deb882cf99', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `vicariates`
--

CREATE TABLE `vicariates` (
  `vicariateCode` binary(10) NOT NULL,
  `vicariateName` binary(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
