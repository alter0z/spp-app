-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 11:07 PM
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
-- Database: `spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role`) VALUES
('admin'),
('wali kelas');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `nis` varchar(128) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `spp_cost` int(11) DEFAULT NULL,
  `status` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`nis`, `duedate`, `spp_cost`, `status`) VALUES
('164131', '2022-04-15', 250000, 'Belum Lunas'),
('146516', '2022-04-14', 250000, 'Belum Lunas'),
('645186', '2022-04-15', 250000, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `nis` varchar(128) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `class` varchar(8) DEFAULT NULL,
  `periode` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`nis`, `student_name`, `class`, `periode`) VALUES
('146516', 'bryand', '10-B', '2021-2022'),
('164131', 'ansori', '10-A', '2021-2022'),
('645186', 'Jane', '10-C', '2021-2022');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `role` enum('admin','walikelas') DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `role`, `username`, `password`) VALUES
('Afila Ansori', 'admin', 'alter0z', 'password'),
('John', 'admin', 'j0hn', 'root'),
('Larry Page', 'admin', 'pagelarry3', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `wclass`
--

CREATE TABLE `wclass` (
  `class` varchar(8) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wclass`
--

INSERT INTO `wclass` (`class`, `fullname`) VALUES
('10-A', 'Larry Page'),
('10-B', 'Johns'),
('10-C', 'Jeanne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `class` (`class`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wclass`
--
ALTER TABLE `wclass`
  ADD PRIMARY KEY (`class`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `student` (`nis`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class`) REFERENCES `wclass` (`class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
