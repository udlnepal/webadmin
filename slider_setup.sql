-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2018 at 01:08 PM
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
-- Table structure for table `slider_setup`
--

CREATE TABLE `slider_setup` (
  `ss_id` int(10) NOT NULL,
  `slider_img_name` varchar(200) NOT NULL,
  `primary_slider_title` varchar(150) NOT NULL,
  `sec_slider_title` varchar(100) NOT NULL,
  `slider_text` varchar(250) NOT NULL,
  `slider_btn_text` varchar(50) NOT NULL DEFAULT 'View More',
  `slider_btn_link` varchar(150) DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_setup`
--

INSERT INTO `slider_setup` (`ss_id`, `slider_img_name`, `primary_slider_title`, `sec_slider_title`, `slider_text`, `slider_btn_text`, `slider_btn_link`) VALUES
(19, '014.jpg', 'Purbanchal University', 'testing', 'a quick brown fox jumps over the lazy dog.', 'hello', '#hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider_setup`
--
ALTER TABLE `slider_setup`
  ADD PRIMARY KEY (`ss_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider_setup`
--
ALTER TABLE `slider_setup`
  MODIFY `ss_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
