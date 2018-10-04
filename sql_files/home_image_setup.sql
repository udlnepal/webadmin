-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 01:40 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_image_setup`
--

CREATE TABLE `home_image_setup` (
  `hi_id` int(25) NOT NULL,
  `cont_id` int(25) NOT NULL,
  `cimage_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_image_setup`
--

INSERT INTO `home_image_setup` (`hi_id`, `cont_id`, `cimage_name`) VALUES
(1, 0, '0.jpg'),
(2, 12, '02.jpg'),
(3, 14, '0.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_image_setup`
--
ALTER TABLE `home_image_setup`
  ADD PRIMARY KEY (`hi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_image_setup`
--
ALTER TABLE `home_image_setup`
  MODIFY `hi_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
