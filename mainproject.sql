-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2018 at 06:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', ''),
(2, 'swadesh', 'swadesh', ''),
(3, 'lubna', 'lubna', '');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `friend` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `username`, `friend`) VALUES
(1, 'lubna', 'swadesh'),
(2, 'swadesh', 'lubna');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fpname` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `username`, `fpname`, `date`) VALUES
(23, 'lubna', 'ktm', '2018-03-01'),
(24, 'lubna', 'swadesh', '2018-03-01'),
(25, 'lubna', 'ktm', '2018-03-02'),
(26, 'lubna', 'mc queen', '2018-03-02'),
(53, 'lubna', 'ktm', '2018-03-03'),
(54, 'lubna', 'lubna', '2018-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `productpost`
--

CREATE TABLE `productpost` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productcolor` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `uses` varchar(100) NOT NULL,
  `madeby` varchar(100) NOT NULL,
  `photo` blob NOT NULL,
  `vote` int(50) NOT NULL,
  `rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productpost`
--

INSERT INTO `productpost` (`id`, `productname`, `productcolor`, `description`, `uses`, `madeby`, `photo`, `vote`, `rate`) VALUES
(1, 'ktm', 'brown&orange', 'this is racing bike', 'racing', 'ktm', 0x62696b65312e6a7067, 20, ''),
(2, 'mc queen', 'red', 'racing car', 'racing', 'cars', 0x636172322e6a7067, 25, '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `profilepic` blob NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `gender`, `pincode`, `mobile`, `address`, `date`, `profilepic`, `status`) VALUES
(1, 'swadesh', 'swadesh', 'swadeshreddy555@gmail.com', 'male', 4567890, 2147483647, 'hyderabad', '2018-04-05', 0x70726f66696c652e6a7067, 'authorised'),
(2, 'lubna', 'lubna', 'lubna@gmail.com', 'male', 503175, 2147483647, 'Hyderabad', '1995-05-02', 0x494d475f383537382e4a5047, 'authorised'),
(3, 'shivani ', 'shivani', 'shivani@gmail.com', 'male', 503175, 2147483647, 'hyderabad', '1995-06-13', 0x62672d696d672e6a7067, 'authorise');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `friendname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `username`, `friendname`, `status`, `date`) VALUES
(1, 'swadesh', 'lubna', 'accepted', '2028-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rproduct`
--

CREATE TABLE `rproduct` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `recommandto` varchar(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rproduct`
--

INSERT INTO `rproduct` (`id`, `username`, `recommandto`, `productname`, `date`, `description`) VALUES
(1, 'swadesh', 'lubna', 'ktm', '12:24:26pm', 'it is good bike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productpost`
--
ALTER TABLE `productpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rproduct`
--
ALTER TABLE `rproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `productpost`
--
ALTER TABLE `productpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rproduct`
--
ALTER TABLE `rproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
