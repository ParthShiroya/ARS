-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2019 at 01:20 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(30) NOT NULL default '',
  `Password` varchar(20) default NULL,
  PRIMARY KEY  (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `User_Id` varchar(30) NOT NULL,
  `Flight_No` varchar(10) NOT NULL,
  `From_Loc` varchar(10) NOT NULL,
  `To_Loc` varchar(10) NOT NULL,
  `Date` varchar(11) NOT NULL,
  `No_Booked_Ticket` varchar(20) NOT NULL,
  `Rate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`User_Id`, `Flight_No`, `From_Loc`, `To_Loc`, `Date`, `No_Booked_Ticket`, `Rate`) VALUES
('p4patel@gmail.com', '22', 'Bangalore', 'Surat', '2019-03-19', '25', '365500'),
('seems13@gmail.com', '22', 'Bangalore', 'Surat', '2019-03-19', '2', '29240');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City` varchar(20) NOT NULL,
  PRIMARY KEY  (`City`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City`) VALUES
('Bangalore'),
('Baroda'),
('Delhi'),
('Goa'),
('Surat');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_Name` varchar(30) default NULL,
  `Flight_No` varchar(20) NOT NULL default '',
  `Company_Name` varchar(20) default NULL,
  `From_Loc` varchar(20) default NULL,
  `To_Loc` varchar(20) default NULL,
  `Time` varchar(10) default NULL,
  `Date` varchar(10) default NULL,
  `Class` varchar(20) default NULL,
  `Rate` varchar(10) default NULL,
  PRIMARY KEY  (`Flight_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Flight_Name`, `Flight_No`, `Company_Name`, `From_Loc`, `To_Loc`, `Time`, `Date`, `Class`, `Rate`) VALUES
('hj', '2', 'hj', 'Delhi', 'Bangalore', '22:00', '2019-03-17', 'Bussiness class', '1420'),
('king', '2121', 'knig', 'Bangalore', 'Goa', '22:00', '2019-03-27', 'Bussiness class', '15000'),
('hj22', '22', 'hj22', 'Bangalore', 'Surat', '05:00', '2019-03-19', 'Economy class', '14620');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Email` varchar(30) NOT NULL default '',
  `Password` varchar(20) default NULL,
  `ContactNo` varchar(10) default NULL,
  `Address` varchar(30) default NULL,
  PRIMARY KEY  (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Email`, `Password`, `ContactNo`, `Address`) VALUES
('pshiroya@gmail.com', '1234aaAA', '8866167750', 'abc'),
('p4patel@gmail.com', '123456aAA', '9754659887', 'dgdg'),
('hp2019@gmail.com', '12345aaAA', '7894561230', 'dgdg'),
('seems13@gmail.com', '123456aA', '9016736341', 'bcd');
