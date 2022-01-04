-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2015 at 12:01 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `otdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(22) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('tosin', 'tosin'),
('olumide', 'olumba118021');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(55) NOT NULL,
  `reg` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `reg`, `email`, `message`, `id`, `date`) VALUES
('lukman ibrahim olalekan', '247151', '@kjds', 'dfsghdsffg', 6, '2015-08-01 23:05:31'),
('adebambo', '09050544944', 'paula@yahoo.com', 'password', 8, '2015-09-10 18:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `level` varchar(11) NOT NULL,
  `semester` varchar(33) NOT NULL,
  `matricno` int(33) NOT NULL,
  `course` varchar(22) NOT NULL,
  `courset` varchar(44) NOT NULL,
  `unit` int(33) NOT NULL,
  `score` int(33) NOT NULL,
  `point` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`level`, `semester`, `matricno`, `course`, `courset`, `unit`, `score`, `point`, `id`) VALUES
('ND 2', 'fs', 247169, 'CSE 201', 'RELATIONAL DATABASE MANAGEMENT', 3, 45, 2, 1),
('ND 2', 'fs', 247169, 'CSE 211', 'SOFTWARE PROJECT MANAGEMENT', 2, 76, 5, 2),
('ND 2', 'ss', 247169, 'EDP 202', 'PRACTICE OF ENTREPRENEURSHIP', 3, 67, 4, 3),
('ND 2', 'ss', 247169, 'CSE 210', 'CASE STUDIES', 2, 89, 5, 4),
('ND 1', 'fs', 247169, 'CSK 101', 'TECHNICAL WRITING', 2, 78, 5, 5),
('ND 1', 'ss', 247169, 'CSE104', 'FILE ORGANIZATION AND MANAGEMENT', 3, 79, 5, 6),
('ND 1', 'fs', 247169, 'CSE 101', 'INTERNATIONAL COMPUTER DRIVING LICENSE', 3, 91, 5, 7),
('ND 1', 'fs', 247169, 'MTH 105', 'TRIGONOMETRY AND ANALYTICAL GEOMETRY', 2, 78, 5, 8),
('ND 1', 'fs', 247169, 'CHT 101', 'BASIC ELECTRONICS', 2, 64, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `matricno` int(22) NOT NULL,
  `surname` varchar(22) NOT NULL,
  `firstname` varchar(22) NOT NULL,
  `othername` varchar(22) NOT NULL,
  `level` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `password` text NOT NULL,
  `faculty` varchar(33) NOT NULL,
  `department` varchar(33) NOT NULL,
  `gender` varchar(33) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `course` varchar(33) NOT NULL,
  KEY `faculty` (`faculty`),
  FULLTEXT KEY `department` (`department`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`matricno`, `surname`, `firstname`, `othername`, `level`, `email`, `password`, `faculty`, `department`, `gender`, `phoneno`, `course`) VALUES
(247169, 'Adebambo', 'paul', 'adeoye', 'ND 2', 'pauladeoye59@yahoo.com', 'paul', 'Science', 'Computer Software Engineering', 'Male', '08147483647', 'computer');

