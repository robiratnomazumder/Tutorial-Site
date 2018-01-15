-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 09:09 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `user_id` int(100) NOT NULL,
  `video_id` int(100) NOT NULL,
  `post` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`user_id`, `video_id`, `post`) VALUES
(1, 1, 'the best in the world'),
(2, 1, 'what  a goal'),
(0, 1, 'abcd'),
(0, 1, 'ihhihi'),
(0, 1, 'lol'),
(2, 1, 'jhhffdgfjhgmv'),
(2, 1, 'hggfhgdh'),
(2, 1, 'fdgrfdredytdutydcujy'),
(2, 1, 'fdfdrfdgfxdhgc'),
(2, 13, 'looks yammy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `username`, `password`, `userType`) VALUES
(1, 'Bob', 'admin', 'admin', 'Admin'),
(2, 'Adam', 'user', 'user', 'User'),
(3, 'abcd', '111', '111', 'User'),
(4, 'saieed', '1234', '1234', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videoId` int(20) NOT NULL,
  `videoName` varchar(200) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  `likeCount` int(20) NOT NULL,
  `reportCount` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `views` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoId`, `videoName`, `caption`, `description`, `likeCount`, `reportCount`, `category`, `views`) VALUES
(1, 'Leo.mp4', 'Great Leo', 'Abd', 21, 10, 'Sports', 299),
(2, 'Gopro.mp4', 'gopro', 'Captured with GoPro HERO 4', 50, 1, 'Productivity', 64),
(3, 'cricket.mp4', 'Bangladesh Cricket', 'Bangladesh Cricket History', 26, 2, 'sports', 11),
(4, 'Original iphone x unboxing __ iphone x unboxing __ iphone x unboxing & review __ iphone x.mp4', 'Original iphone x', 'Original iphone x unboxing __ iphone x unboxing __ iphone x unboxing & review __ iphone x', 11, 5, 'entertainment', 0),
(13, 'Vegetable Bread Pizza - Quick Recipe.mp4', 'Vegetable Bread Pizza', 'Vegetable Bread Pizza', 8, 2, 'food', 38),
(14, 'One Minute Video \'The Perfectionist\'.mp4', 'One Minute Video \'The Perfectionist\'', 'One Minute Video \'The Perfectionist\'', 4, 7, 'Education', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videoId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
