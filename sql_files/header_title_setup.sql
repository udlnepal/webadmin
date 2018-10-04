-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 01:05 PM
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
-- Table structure for table `header_title_setup`
--

CREATE TABLE `header_title_setup` (
  `id_title` int(25) NOT NULL,
  `logo_image_name` varchar(250) NOT NULL DEFAULT 'logo.jpg',
  `site_title` varchar(250) NOT NULL DEFAULT 'My Site'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_title_setup`
--

INSERT INTO `header_title_setup` (`id_title`, `logo_image_name`, `site_title`) VALUES
(1, 'download2.jpg', 'Purbanchal University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header_title_setup`
--
ALTER TABLE `header_title_setup`
  ADD PRIMARY KEY (`id_title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `header_title_setup`
--
ALTER TABLE `header_title_setup`
  MODIFY `id_title` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
