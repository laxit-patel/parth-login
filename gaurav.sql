-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 03:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaurav`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `conformpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `password`, `conformpassword`) VALUES
('ankit', 'ankit78@gmail.com', '9898', '9898'),
('aqaq', 'aqaq@gmail.com', 'aqaq', 'aqaq'),
('gaurav', 'gaurav45@gmail.com', '456', '456'),
('hfggg', 'gfdfgdgfgd@gmail.com', '8787', '8787'),
('jeet', 'jeet@gmail.com', '987', '987'),
('laxit', 'laxit4@gmail.com', '987', '987'),
('rdrtdtrdtr', 'oiuoiuu@gmail.com', 'ouou', 'ouou'),
('parth', 'parth5@gmail.com', '123', '123'),
('ravi', 'ravi450@gmail.com', '4545', '4545'),
('rere', 'rere@gmail.com', 'rere', 'rere'),
('oiuiouuio', 'uioiuiu@gmail.com', 'dfdf', 'dfdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
