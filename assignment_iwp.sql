-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2016 at 12:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment_iwp`
--
CREATE DATABASE IF NOT EXISTS `assignment_iwp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `assignment_iwp`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(4) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `surname`, `email`, `mobile`) VALUES
(1, 'Dexter', 'Morgan', 'dexter.morgan@gmail.com', '3538383838'),
(6, 'James', 'Kirk', 'kirk.james@gmail.com', '3530839456'),
(8, 'Hannibal', 'Lecter', 'lecter.hannibal@gmail.com', '0836999696'),
(9, 'Norman', 'Fletcher', 'fletcher.norman@gmail.com', '0831213234'),
(10, 'Joe', 'Black', 'black.joe@gmail.com', '0835667567'),
(11, 'Han', 'Solo', 'solo.han@gmail.com', '0839887654'),
(12, 'Darth', 'Vader', 'vader.darth@gmail.com', '0838383838'),
(13, 'Peter', 'Parker', 'parker.peter@gmail.com', '0853445345'),
(14, 'Star', 'Lord', 'lord.star@gmail.com', '0878796875'),
(15, 'Jack', 'Sparrow', 'sparrow.jack@gmail.com', '0988776543'),
(16, 'Inigo', 'Montoya', 'montoya.inigo@gmail.com', '0981234567'),
(19, 'Rick', 'Deckard', 'deckard.rick@outlook.com', '0998976123'),
(20, 'Elim', 'Garak', 'garak.elim@ds9.ie', '0984523234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
