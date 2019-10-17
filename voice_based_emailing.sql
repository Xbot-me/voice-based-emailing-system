-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 10:20 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voice_based_emailing`
--

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `mail_id` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `mail_id`, `address`, `subject`, `message`, `status`) VALUES
(25, '2019/08/21?01:56:44pm', 'T a h a s i n i s l a m 39@gmail.com', 'This is a test mail', 'Assalamu Alaikum this is Tehseen I love you all please call me 0152 1493 074 this is my number thank you', ''),
(26, '2019/08/21?03:11:11pm', 'Hello @ gmail.com', 'This is test object', 'Hi this is a test message I am building a software that can be used by the blind people', ''),
(27, '2019/08/22?07:45:26pm', 'P a h a s i n @ gmail.com', 'Is a test mail', 'Hello this is awesome this is awesome this is awesome', 'not sent'),
(28, '2019/08/29?07:41:27pm', 'Hello @ gmail.com', 'Latest update', 'Hi this is a test message I love you all thank you', 'not sent'),
(29, '2019/08/31?08:42:19pm', 'T h a n @ gmail.com', '123456', 'Hi hi test match I love you', ''),
(30, '2019/09/02?09:15:39am', 'A b c d e f g h @ gmail.com', 'This is a test mail', 'Hi this is the system I am building a voice based email system for blind people thank you', ''),
(31, '2019/09/02?10:14:50pm', 'This is Tarzan', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
