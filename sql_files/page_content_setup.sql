-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2018 at 08:14 AM
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
-- Table structure for table `page_content_setup`
--

CREATE TABLE `page_content_setup` (
  `pc_id` int(25) NOT NULL,
  `pc_mid` int(25) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_content` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_content_setup`
--

INSERT INTO `page_content_setup` (`pc_id`, `pc_mid`, `page_title`, `page_content`) VALUES
(6, 13, 'This Is About us.', 0x3c703e736661736673646673646466736164667361643c2f703e0d0a),
(7, 22, 'fsdafsfsdaf', 0x3c703e7361646673616466736164663c2f703e0d0a),
(8, 24, '', ''),
(9, 27, 'This is About Us', 0x3c703e576861742073686f756c6420776520646973706c617920686572653c2f703e0d0a);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_content_setup`
--
ALTER TABLE `page_content_setup`
  ADD PRIMARY KEY (`pc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page_content_setup`
--
ALTER TABLE `page_content_setup`
  MODIFY `pc_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
