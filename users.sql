-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2022 at 01:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobnumber` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` varchar(20) NOT NULL,
  `empcode` varchar(30) NOT NULL,
  `empdept` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `dob`, `gender`, `mobnumber`, `email`, `city`, `pin`, `empcode`, `empdept`, `username`, `password`, `cpassword`, `date_time`) VALUES
(4, 'Ruchita', 'Patel', '2000-07-10', 'female', '9527853909', 'ruchita.chimu@gmail.com', 'Boisar palghar', '401504', '3456', 'software', 'ruchimu', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2022-07-05 13:08:55'),
(5, 'Abhi ', 'Shhake ', '2003-02-12', 'male', '7020147534', 'abhi@gmail.com', 'palghar', '401404', '3451', 'hardware', 'abhi10', 'c8b2f17833a4c73bb20f88876219ddcd', 'c8b2f17833a4c73bb20f88876219ddcd', '2022-07-05 12:54:37'),
(6, 'Dweep', 'Patel', '2005-09-18', 'male', '1234567890', 'Dweep2@gmail', 'Mumbai', '123456', '21', 'administration', 'Dweep', '9621344f9a8dc7359118a97d0ea2e1dd', '9621344f9a8dc7359118a97d0ea2e1dd', '2022-07-05 16:42:41'),
(7, 'test', 'testwer', '2022-07-13', 'female', '5678943256', 'Chimu@g.c', 'gchj', '456789', '3421', 'purchase', 'abcd', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2022-07-05 13:50:42'),
(8, 'Ram', 'Gupta', '1998-03-03', 'male', '7439764329', 'ram@gmail.com', 'Pune', '563481', '674', 'legal', 'ramg', '6512bd43d9caa6e02c990b0a82652dca', '6512bd43d9caa6e02c990b0a82652dca', '2022-07-05 16:05:29'),
(9, 'chimu', 'patel', '2011-06-19', 'female', '4562896512', 'etys@g.c', 'boisar', '467294', '563', 'hardware', 'xyz', '12', '12', '2022-07-06 11:25:33'),
(11, 'test', 'sucess', '2015-10-18', 'male', '9553786541', 'rty@g.cd', 'boi', '785439', '6741', 'sale', 'ab', '11', '11', '2022-07-06 10:47:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
