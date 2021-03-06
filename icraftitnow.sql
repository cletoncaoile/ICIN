-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 06:03 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icraftitnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(225) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbcategory`
--

CREATE TABLE `tbcategory` (
  `catid` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbcomment`
--

CREATE TABLE `tbcomment` (
  `idcomment` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `datecomment` date NOT NULL,
  `idcraft` int(11) NOT NULL,
  `timecomment` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcomment`
--

-- Table structure for table `tbcontactus`
--

CREATE TABLE `tbcontactus` (
  `idcontact` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbcraft`
--

CREATE TABLE `tbcraft` (
  `idcraft` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `dateshared` date NOT NULL,
  `timeshared` varchar(255) NOT NULL,
  `namecraft` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `output1` longblob NOT NULL,
  `output2` longblob NOT NULL,
  `output3` longblob NOT NULL,
  `output4` longblob NOT NULL,
  `video` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `materials` varchar(255) NOT NULL,
  `approveordisaprove` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcraft`
--
--

CREATE TABLE `tbrating` (
  `idrating` int(11) NOT NULL,
  `noofrating` float NOT NULL,
  `idcraft` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbrating`
--
-- Table structure for table `tbreport`
--

CREATE TABLE `tbreport` (
  `idreport` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `idcraft` int(11) NOT NULL,
  `datereported` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbsteps`
--

CREATE TABLE `tbsteps` (
  `idstep` int(11) NOT NULL,
  `noofstep` int(11) NOT NULL,
  `stepphoto` longblob NOT NULL,
  `steps` varchar(255) NOT NULL,
  `idcraft` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsteps`
--

-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `username` varchar(225) NOT NULL,
  `fn` varchar(225) NOT NULL,
  `ln` varchar(225) NOT NULL,
  `sex` varchar(225) NOT NULL,
  `profilepic` longblob NOT NULL,
  `phone` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `usertype` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcategory`
--
ALTER TABLE `tbcategory`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `tbcomment`
--
ALTER TABLE `tbcomment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Indexes for table `tbcontactus`
--
ALTER TABLE `tbcontactus`
  ADD PRIMARY KEY (`idcontact`);

--
-- Indexes for table `tbcraft`
--
ALTER TABLE `tbcraft`
  ADD PRIMARY KEY (`idcraft`);

--
-- Indexes for table `tbrating`
--
ALTER TABLE `tbrating`
  ADD PRIMARY KEY (`idrating`);

--
-- Indexes for table `tbreport`
--
ALTER TABLE `tbreport`
  ADD PRIMARY KEY (`idreport`);

--
-- Indexes for table `tbsteps`
--
ALTER TABLE `tbsteps`
  ADD PRIMARY KEY (`idstep`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbcategory`
--
ALTER TABLE `tbcategory`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbcomment`
--
ALTER TABLE `tbcomment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbcontactus`
--
ALTER TABLE `tbcontactus`
  MODIFY `idcontact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbcraft`
--
ALTER TABLE `tbcraft`
  MODIFY `idcraft` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbrating`
--
ALTER TABLE `tbrating`
  MODIFY `idrating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbreport`
--
ALTER TABLE `tbreport`
  MODIFY `idreport` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbsteps`
--
ALTER TABLE `tbsteps`
  MODIFY `idstep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
