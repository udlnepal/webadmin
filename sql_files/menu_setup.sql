-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 04:22 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `menu_setup`
--

CREATE TABLE `menu_setup` (
  `mid` int(25) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `is_inner_page` varchar(50) NOT NULL,
  `menu_order` int(15) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `ext_url` varchar(250) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_content` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_setup`
--

INSERT INTO `menu_setup` (`mid`, `menu_name`, `is_inner_page`, `menu_order`, `slug`, `ext_url`, `page_title`, `page_content`) VALUES
(4, 'Gallery', 'yes', 2, 'gallery', 'asdfsadf', 'asfdsdfsdfsdf', 0x3c703e6161616161616161616161616161616161613c7374726f6e673e6161616161616161616161616161616161613c2f7374726f6e673e3c2f703e0d0a),
(5, 'About Us', 'no', 2, 'about-us', 'safsadfsad', 'This is more about us', 0x3c703e3c733e3c656d3e3c7374726f6e673e48656c6f7720776f726c643c2f7374726f6e673e3c2f656d3e3c2f733e3c2f703e0d0a);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_setup`
--
ALTER TABLE `menu_setup`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_setup`
--
ALTER TABLE `menu_setup`
  MODIFY `mid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
