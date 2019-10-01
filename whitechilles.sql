-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2018 at 11:19 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whitechilles`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` bigint(20) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `adminaddr` varchar(50) NOT NULL,
  `adminmob` bigint(20) NOT NULL,
  `adminmail` varchar(50) NOT NULL,
  `adminpsswrd` varchar(300) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `adminaddr`, `adminmob`, `adminmail`, `adminpsswrd`) VALUES
(288884631426, 'yash patel', 'c-6/7,asera comlex,amli,silvassa.', 7069910936, 'roockyyash123@gmail.com', 'b07fff7fd423970288f76206301dbeb4'),
(599250690544, 'Vipisha Verma', 'Yogi darshan,amliwhile', 9537773857, 'vipiksha24@gmail.com', 'd787a8315911b9bb70eccb5839543bd1');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `billid` bigint(20) NOT NULL AUTO_INCREMENT,
  `adminid` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `bdate` varchar(50) NOT NULL,
  `indate` varchar(50) NOT NULL,
  `outdate` varchar(50) NOT NULL,
  `day` bigint(20) NOT NULL,
  `room` bigint(20) NOT NULL,
  `price` bigint(20) NOT NULL,
  PRIMARY KEY (`billid`),
  KEY `day` (`day`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billid`, `adminid`, `id`, `name`, `mob`, `bdate`, `indate`, `outdate`, `day`, `room`, `price`) VALUES
(1, 288884631426, 345345345345, 'yash patel', 7778811329, '28/02/2018', '2018-03-01', '2018-03-16', 16, 14, 24000),
(2, 112233445566, 112233445566, 'vipu', 2132435343, '28/02/2018', '2018-03-02', '2018-03-14', 13, 15, 19500),
(3, 112233445566, 112233445566, 'ssr', 9537773857, '05/03/2018', '2018-03-07', '2018-03-23', 17, 10, 13600),
(4, 112233445566, 112233445566, 'ade', 1234534232, '05/03/2018', '2018-03-08', '2018-03-24', 17, 12, 25500),
(5, 112233445566, 112233445566, 'ADGYDG', 1234231211, '05/03/2018', '2018-03-31', '2018-04-01', 2, 16, 3000),
(6, 112233445566, 112233445566, 'vipiksha verma', 9537773857, '05/03/2018', '2018-03-16', '2018-03-24', 9, 25, 22500),
(7, 112233445566, 112233445566, 'vipiksha verma', 9537773857, '05/03/2018', '2018-03-09', '2018-03-25', 17, 30, 42500),
(8, 599250690544, 789586546754, 'Ram Patel', 8789677687, '07/03/2018', '2018-03-24', '2018-03-31', 8, 2, 6400),
(9, 599250690544, 675468754674, 'yogesh patil', 8978777898, '07/03/2018', '2018-03-17', '2018-03-30', 14, 4, 11200),
(10, 599250690544, 677867783456, 'yash', 8978977789, '09/03/2018', '2018-03-17', '2018-03-18', 2, 8, 1600);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `indate` date NOT NULL,
  `outdate` date NOT NULL,
  `roomno` bigint(11) NOT NULL,
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `mobno` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`indate`, `outdate`, `roomno`, `id`, `name`, `addr`, `mobno`, `email`) VALUES
('2018-03-01', '2018-03-16', 14, 345345345345, 'yash patel', 'basera complex', 7778811329, 'roocyyash123@gmail.com'),
('2018-03-02', '2018-03-14', 15, 112233445566, 'vipu', 'amli', 2132435343, 'vipiksha24@gmail.com'),
('2018-03-07', '2018-03-23', 10, 112233445566, 'ssr', 'vapi', 9537773857, 'vipiksha24@gmail.com'),
('2018-03-07', '2018-03-23', 10, 112233445566, 'acs', 'gzb', 2342364128, 'asfdgsd24@gmail.com'),
('2018-03-08', '2018-03-24', 12, 112233445566, 'ade', 'ase', 1234534232, 'asdfstr24@gmail.com'),
('2018-03-09', '2018-03-23', 12, 112233445566, 'ASFGS', 'ADS', 1212323414, 'ASDGF22@GMAIL.COM'),
('2018-03-31', '2018-04-01', 16, 112233445566, 'ADGYDG', 'ASD', 1234231211, 'ASRT24@GMAIL.COM'),
('2018-04-02', '2018-04-18', 12, 112233445566, 'vipiksha verma', 'silvassa', 9537773857, 'vipiksha24@gmail.com'),
('2018-04-12', '2018-04-28', 12, 112233445566, 'vipiksha verma', 'silvassa', 9537773857, 'vipiksha24@gmail.com'),
('2018-03-16', '2018-03-24', 25, 112233445566, 'vipiksha verma', 'silvassa', 9537773857, 'vipiksha24@gmail.com'),
('2018-03-09', '2018-03-25', 30, 112233445566, 'vipiksha verma', 'ased', 9537773857, 'vipiksha24@gmail.com'),
('2018-03-24', '2018-03-31', 2, 789586546754, 'Ram Patel', 'Gunan,Vapi', 8789677687, 'ram23@gmail.com'),
('2018-03-17', '2018-03-30', 4, 675468754674, 'yogesh patil', 'chanda faliya,dadra', 8978777898, 'yogesh43@gmail.com'),
('2018-03-17', '2018-03-18', 8, 677867783456, 'yash', 'basera', 8978977789, 'yash122@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
