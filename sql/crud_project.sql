-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 07:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

CREATE TABLE `add_item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_item`
--

INSERT INTO `add_item` (`item_id`, `name`, `time`) VALUES
(1, 'fcsde', '2023-08-27 03:25:06'),
(2, 'njn', '2023-08-27 03:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `name`) VALUES
(1, 'sdfd'),
(2, 'gfdg'),
(3, 'p86'),
(4, 'rfersf'),
(5, '5g56'),
(6, '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `profilePicture` longblob DEFAULT NULL,
  `district` varchar(150) NOT NULL,
  `date_of_birth` date NOT NULL,
  `education` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fname`, `lname`, `profilePicture`, `district`, `date_of_birth`, `education`, `gender`, `comments`) VALUES
(10, 'grtg', 'grf', '', 'dhaka', '2023-08-01', 'ssc', 'male', 'errf'),
(13, 'sfs', 'fesd', '', 'dhaka', '2023-08-02', 'hsc', 'male', 'cfsdec'),
(14, 'scfsdc', 'sdcfsd', 0x547566616e2e6a7067, 'dhaka', '2023-08-18', 'ssc', 'male', 'sdcsd'),
(15, 'robiul', 'islam', 0x32303231303332325f3138343135302e6a7067, 'dhaka', '2023-08-05', 'bsc', 'male', 'ferf'),
(16, 'test', '', '', 'dhaka', '2023-08-24', 'ssc', 'male', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_email`, `user_password`) VALUES
(1, 'Robiul', 'Islam', 'robiul@gmail.com', '123456'),
(2, 'Robiul', 'Islam', 'robiul@gmail.com', '123456'),
(3, 'Robiul', 'Islam', 'islam@gmail.com', '123456'),
(4, 'Robiul', 'Islam', 'islam@gmail.com', '123456'),
(5, 'Robiul', 'Islam', 'islam@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_item`
--
ALTER TABLE `add_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_item`
--
ALTER TABLE `add_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
