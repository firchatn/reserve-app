-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2017 at 05:17 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavage`
--

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

CREATE TABLE `etat` (
  `jour` varchar(20) NOT NULL,
  `zero` varchar(20) NOT NULL,
  `deux` varchar(20) NOT NULL,
  `trois` varchar(20) NOT NULL,
  `quatre` varchar(20) NOT NULL,
  `cinq` varchar(20) NOT NULL,
  `six` varchar(20) NOT NULL,
  `sept` varchar(20) NOT NULL,
  `huit` varchar(20) NOT NULL,
  `neuf` varchar(20) NOT NULL,
  `dix` varchar(20) NOT NULL,
  `onze` varchar(20) NOT NULL,
  `douz` varchar(20) NOT NULL,
  `treize` varchar(20) NOT NULL,
  `quatorze` varchar(20) NOT NULL,
  `quinze` varchar(20) NOT NULL,
  `seize` varchar(20) NOT NULL,
  `dix-sept` varchar(20) NOT NULL,
  `dix-huit` varchar(20) NOT NULL,
  `dix-neuf` varchar(20) NOT NULL,
  `vingt` varchar(20) NOT NULL,
  `vingt-et-un` varchar(20) NOT NULL,
  `vingt-deux` varchar(20) NOT NULL,
  `vingt-trois` varchar(20) NOT NULL,
  `vingt-quatre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`jour`, `zero`, `deux`, `trois`, `quatre`, `cinq`, `six`, `sept`, `huit`, `neuf`, `dix`, `onze`, `douz`, `treize`, `quatorze`, `quinze`, `seize`, `dix-sept`, `dix-huit`, `dix-neuf`, `vingt`, `vingt-et-un`, `vingt-deux`, `vingt-trois`, `vingt-quatre`) VALUES
('lundi', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre'),
('mardi', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre'),
('mercredi', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre'),
('jeudi', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre'),
('vendredi', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre'),
('samedi', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre'),
('dimanche', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre', 'libre');

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

CREATE TABLE `reserver` (
  `id` int(11) NOT NULL,
  `matricule` varchar(20) NOT NULL,
  `client` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
