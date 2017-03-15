-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 09:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `geo_position`
--

CREATE TABLE `geo_position` (
  `idGeo` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `suburb` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nearby_location`
--

CREATE TABLE `nearby_location` (
  `idNearby` int(11) NOT NULL,
  `nearby_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `objects`
--

CREATE TABLE `objects` (
  `idObjects` int(11) NOT NULL,
  `name_object` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `occurrence`
--

CREATE TABLE `occurrence` (
  `idOccurrence` int(11) NOT NULL,
  `occurrence_type` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `idObjects` int(11) DEFAULT NULL,
  `geo_position` int(11) NOT NULL,
  `idNearby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `occurrence_nearby`
--

CREATE TABLE `occurrence_nearby` (
  `idNearby` int(11) NOT NULL,
  `idOccurrence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `occurrence_objects`
--

CREATE TABLE `occurrence_objects` (
  `idOccurrence` int(11) NOT NULL,
  `idObjects` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geo_position`
--
ALTER TABLE `geo_position`
  ADD PRIMARY KEY (`idGeo`);

--
-- Indexes for table `nearby_location`
--
ALTER TABLE `nearby_location`
  ADD PRIMARY KEY (`idNearby`);

--
-- Indexes for table `objects`
--
ALTER TABLE `objects`
  ADD PRIMARY KEY (`idObjects`);

--
-- Indexes for table `occurrence`
--
ALTER TABLE `occurrence`
  ADD PRIMARY KEY (`idOccurrence`),
  ADD KEY `geo_position` (`geo_position`);

--
-- Indexes for table `occurrence_nearby`
--
ALTER TABLE `occurrence_nearby`
  ADD KEY `idOccurrence` (`idOccurrence`),
  ADD KEY `idNearby` (`idNearby`);

--
-- Indexes for table `occurrence_objects`
--
ALTER TABLE `occurrence_objects`
  ADD KEY `idObjects` (`idObjects`),
  ADD KEY `idOccurrence` (`idOccurrence`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `geo_position`
--
ALTER TABLE `geo_position`
  MODIFY `idGeo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nearby_location`
--
ALTER TABLE `nearby_location`
  MODIFY `idNearby` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `objects`
--
ALTER TABLE `objects`
  MODIFY `idObjects` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `occurrence`
--
ALTER TABLE `occurrence`
  MODIFY `idOccurrence` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `occurrence`
--
ALTER TABLE `occurrence`
  ADD CONSTRAINT `occurrence_ibfk_1` FOREIGN KEY (`geo_position`) REFERENCES `geo_position` (`idGeo`);

--
-- Constraints for table `occurrence_nearby`
--
ALTER TABLE `occurrence_nearby`
  ADD CONSTRAINT `occurrence_nearby_ibfk_1` FOREIGN KEY (`idOccurrence`) REFERENCES `occurrence` (`idOccurrence`),
  ADD CONSTRAINT `occurrence_nearby_ibfk_2` FOREIGN KEY (`idNearby`) REFERENCES `nearby_location` (`idNearby`);

--
-- Constraints for table `occurrence_objects`
--
ALTER TABLE `occurrence_objects`
  ADD CONSTRAINT `occurrence_objects_ibfk_1` FOREIGN KEY (`idObjects`) REFERENCES `objects` (`idObjects`),
  ADD CONSTRAINT `occurrence_objects_ibfk_2` FOREIGN KEY (`idOccurrence`) REFERENCES `occurrence` (`idOccurrence`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
