-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 01:27 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `compaign`
--

CREATE TABLE `compaign` (
  `compaign_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compaign`
--

INSERT INTO `compaign` (`compaign_id`, `date`, `title`, `image`) VALUES
(17, '2018-09-20', 'storm', 'storm.jfif'),
(18, '2018-07-21', 'cyclone', 'cyclone.jpg'),
(19, '2015-08-21', 'Drought', 'Dry_Land.jpg'),
(20, '2017-11-10', 'earthquake', 'earthquake.jpg'),
(22, '2018-07-14', 'kerala', 'img2.jpg'),
(25, '2018-10-20', 'tornado', 'storm.jfif'),
(26, '2018-10-24', 'flood', 'img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `compaign` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `amount`, `date`, `compaign`, `note`) VALUES
(7, 5000, '2018-05-01', 'Cyclone', 'ewrty'),
(8, 12345, '2018-10-12', 'Kerala Flood', 'dwefhj6uk'),
(9, 23456, '2018-08-11', 'earthquake', 'jbvhviufhui'),
(10, 6787, '2018-08-17', 'rajasthan-storm', 'jnwfg'),
(11, 4354, '2018-10-19', 'maharashtra-drought', 'eyudgwyufg'),
(12, 98847, '2018-01-31', 'uttrakhand-flood', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `position`, `name`, `email`, `password`, `username`) VALUES
(1, 'helper', 'vivek rautela', 'vivekrautela000@gmail.com', 'jarineee', 'vivrockers'),
(2, 'administrator', 'Monu Kumar', 'monumittal21598@gmail.com', 'monu12345', 'monu123'),
(3, 'administartor', 'aashu', 'aashu@gmail.com', 'aashu12345', 'aashu123'),
(4, 'administrator', 'wertyuio', 'sdfg@gmail.com', 'aar12345', 'aar123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compaign`
--
ALTER TABLE `compaign`
  ADD PRIMARY KEY (`compaign_id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compaign`
--
ALTER TABLE `compaign`
  MODIFY `compaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
