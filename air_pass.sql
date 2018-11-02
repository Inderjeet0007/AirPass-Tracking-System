-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 07:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air pass`
--

-- --------------------------------------------------------

--
-- Table structure for table `beacon`
--

CREATE TABLE `beacon` (
  `beacon_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mac_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beacon`
--

INSERT INTO `beacon` (`beacon_id`, `b_name`, `timestamp`, `mac_add`) VALUES
(2, 'Deep Blue', '2018-11-01 10:15:47', '346'),
(3, 'Nidhi', '2018-11-01 16:38:08', '1234dddd'),
(4, 'Radhika', '2018-11-01 10:17:13', '36423'),
(5, 'Demo', '2018-11-01 10:20:02', 'sd,fnsjfh');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `c_id` int(11) NOT NULL,
  `e_id` int(11) NOT NULL,
  `beacon_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_id` varchar(50) NOT NULL,
  `f_takeoff` time NOT NULL,
  `f_board_time` time NOT NULL,
  `p_id` int(11) NOT NULL,
  `f_dest` varchar(50) NOT NULL,
  `f_gate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `id`) VALUES
('Inderjeet', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `c_id` int(10) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `beacon_id` int(11) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE `reader` (
  `reader_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `mac_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`reader_id`, `r_name`, `mac_add`) VALUES
(3, 'ReaderDxxxx', '1234'),
(4, 'ReaderC', '2890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beacon`
--
ALTER TABLE `beacon`
  ADD PRIMARY KEY (`beacon_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `eid` (`e_id`),
  ADD KEY `beacon_id` (`beacon_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_id`),
  ADD KEY `pid_foreign` (`p_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cid_foreign` (`c_id`),
  ADD KEY `fid_foreign` (`f_id`),
  ADD KEY `beacon_id` (`beacon_id`);

--
-- Indexes for table `reader`
--
ALTER TABLE `reader`
  ADD PRIMARY KEY (`reader_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beacon`
--
ALTER TABLE `beacon`
  MODIFY `beacon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reader`
--
ALTER TABLE `reader`
  MODIFY `reader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `counter`
--
ALTER TABLE `counter`
  ADD CONSTRAINT `counter_ibfk_1` FOREIGN KEY (`beacon_id`) REFERENCES `beacon` (`beacon_id`),
  ADD CONSTRAINT `counter_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `passenger` (`p_id`),
  ADD CONSTRAINT `eid` FOREIGN KEY (`e_id`) REFERENCES `employee` (`e_id`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `pid_foreign` FOREIGN KEY (`p_id`) REFERENCES `passenger` (`p_id`);

--
-- Constraints for table `passenger`
--
ALTER TABLE `passenger`
  ADD CONSTRAINT `cid_foreign` FOREIGN KEY (`c_id`) REFERENCES `counter` (`c_id`),
  ADD CONSTRAINT `fid_foreign` FOREIGN KEY (`f_id`) REFERENCES `flight` (`flight_id`),
  ADD CONSTRAINT `passenger_ibfk_1` FOREIGN KEY (`beacon_id`) REFERENCES `beacon` (`beacon_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
