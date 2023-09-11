-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 04:53 PM
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
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`) VALUES
(1, 'Dhaka'),
(2, 'Rajshahi'),
(3, 'Khulna'),
(4, 'Chattogram'),
(5, 'Rangpur'),
(6, 'Sylhet'),
(7, 'Barishal');

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
(1, 'gtr', 'grt', 0x6d657373692e6a706567, 'Dhaka', '2023-09-07', 'bsc, msc', 'male', 'gtrg'),
(2, 'robiul', 'islam', 0x312e6a706567, 'Khulna', '2023-08-05', 'bsc', 'male', 'tufan'),
(42, '', '', 0x696d61676573322e6a706567, 'Dhaka', '2023-08-30', 'ssc, hsc, bsc, msc', 'male', 'hjtyhdfsx  '),
(44, 'robiul', '', 0x342e6a706567, 'Barishal', '2023-09-13', 'hsc', 'male', 'y5g5'),
(46, '', '', 0x322e6a706567, 'Sylhet', '2023-09-05', 'ssc, hsc', 'male', 'drdf'),
(47, 'robiul', 'hjgh', 0x6e2e6a706567, 'Dhaka', '2023-09-04', 'ssc, hsc', 'male', 'ghg'),
(48, 'Leo', 'Messi', 0x6d657373692e6a706567, 'Dhaka', '2023-09-07', 'ssc, hsc, bsc', 'male', 'Hi');

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
(4, 'Robiul', 'Islam', 'islam@gmail.com', '123456'),
(6, 'Robiul', 'Islam', 'tufan@gmail.com', '123456'),
(7, 'Robiul', 'Islam', 'tufan.com@gmail.com', '123456'),
(8, 'Robiul', 'Islam', 'tufan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

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
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
