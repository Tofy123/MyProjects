-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 29, 2021 at 08:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `your_flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `way` varchar(100) NOT NULL,
  `from_city` varchar(400) NOT NULL,
  `to_city` varchar(200) NOT NULL,
  `depart` date NOT NULL,
  `return_date` date NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `infants` int(11) NOT NULL,
  `cabin_class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `way`, `from_city`, `to_city`, `depart`, `return_date`, `adults`, `children`, `infants`, `cabin_class`) VALUES
(100, 'Round', 'alhasa', 'jeddah', '2021-12-31', '2022-01-09', 1, 0, 11, 'business'),
(103, 'One', 'Riyadh', 'dubi', '2021-12-30', '0000-00-00', 2, 1, 3, 'economy');

-- --------------------------------------------------------

--
-- Table structure for table `hotal`
--

CREATE TABLE `hotal` (
  `id` int(11) NOT NULL,
  `ticketId` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `fnumber` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `numRoom` int(11) NOT NULL,
  `numbeds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotal`
--

INSERT INTO `hotal` (`id`, `ticketId`, `fname`, `fnumber`, `check_in`, `check_out`, `numRoom`, `numbeds`) VALUES
(3, 100, 'latifah aloseel', 2147483647, '2021-07-30', '2022-08-09', 2, 4),
(4, 300, 'safa', 12345, '2021-07-21', '2022-07-19', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `renting`
--

CREATE TABLE `renting` (
  `id` int(11) NOT NULL,
  `ticketId` int(11) NOT NULL,
  `loc` varchar(300) NOT NULL,
  `locD` varchar(300) NOT NULL,
  `piD` date NOT NULL,
  `droD` date NOT NULL,
  `piT` time NOT NULL,
  `droT` time NOT NULL,
  `veh` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `renting`
--

INSERT INTO `renting` (`id`, `ticketId`, `loc`, `locD`, `piD`, `droD`, `piT`, `droT`, `veh`) VALUES
(5, 102, 'Riyadh', '', '2021-12-29', '2021-12-30', '14:28:00', '12:26:00', 'Standred');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `funame` varchar(400) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `nati` varchar(300) NOT NULL,
  `date1` date NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `funame`, `pass`, `email`, `nati`, `date1`, `gender`) VALUES
(1, 'Latifah', '1234', 'latifah@hotmail.com', 'Saudi', '2000-03-04', 'female'),
(28, 'Safa', '1234', 'salsalman@kfu.edu.sa', 'Saudi', '2021-12-29', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotal`
--
ALTER TABLE `hotal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renting`
--
ALTER TABLE `renting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `funame` (`funame`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotal`
--
ALTER TABLE `hotal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `renting`
--
ALTER TABLE `renting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
