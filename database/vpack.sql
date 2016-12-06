-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2016 at 04:25 ප.ව.
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpack`
--

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metacode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`, `metacode`) VALUES
(1, 'l1', 'l1'),
(2, 'l2', 'l2');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vpackId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(700) COLLATE utf8_unicode_ci NOT NULL,
  `youtubeLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coverImage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `dateTime` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `year`, `genre`, `rating`, `vpackId`, `description`, `youtubeLink`, `coverImage`, `language_id`, `dateTime`, `updatedAt`) VALUES
(1, 'sdsds', '2344', 'ddf', 'dfdf', 'dfdf', 'sdsd', 'sdssdsd', NULL, 2, '2016-12-06 09:28:55', '2016-12-06 09:28:55'),
(2, 'sdsa', 'sa', 'sa', 'sad', 'sds', 'sd', 'sdsd', NULL, 2, '2016-12-06 09:31:53', '2016-12-06 09:31:53'),
(3, 'sds', '2344', 'ddf', 'dfdf', 'dfdf', 'sd', 'sdsd', NULL, 1, '2016-12-06 09:37:49', '2016-12-06 09:37:49'),
(4, 'sds', '2344', 'ddf', 'dfdf', 'dfdf', 'sd', 'sdsd', NULL, 1, '2016-12-06 09:40:31', '2016-12-06 09:40:31'),
(5, 'sds', '2344', 'ddf', 'dfdf', 'dfdf', 'sd', 'sdsd', NULL, 2, '2016-12-06 09:42:57', '2016-12-06 09:42:57'),
(6, 'sds', '2344', 'ddf', 'dfdf', 'dfdf', 'sd', 'sdsd', NULL, 1, '2016-12-06 09:43:59', NULL),
(7, 'sds', '2344', 'ddf', 'dfdf', 'dfdf', 'sdsd', 'sdsd', '58467b34ce353.jpg', 1, '2016-12-06 09:47:48', '2016-12-06 09:47:48'),
(8, 'sds', '2344', 'sd', 'sdsd', 'sdsd', 'sdsd', 'sdssd', '58467b5fe6322.jpg', 1, '2016-12-06 09:48:31', '2016-12-06 09:48:31'),
(9, 'sds', '2344', 'ddf', 'dfdf', 'dfdf', 'sdsd', 'sdsd', '5846c4694a6d9.jpg', 1, '2016-12-06 15:00:09', '2016-12-06 15:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metacode` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `name`, `metacode`) VALUES
(1, 'q1', 'q1'),
(2, 'q2', 'q1');

-- --------------------------------------------------------

--
-- Table structure for table `Quality_movie`
--

CREATE TABLE `Quality_movie` (
  `movie_id` int(11) NOT NULL,
  `quality_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Quality_movie`
--

INSERT INTO `Quality_movie` (`movie_id`, `quality_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `isactive`) VALUES
(1, 'shan', '$2a$12$v4Y19uLObO5V12LFzxAiGudon/JsZciyvVFlHuPdhUXyVi3XRSUL6', 'mkspramuditha@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1D5EF26F82F1BAF4` (`language_id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Quality_movie`
--
ALTER TABLE `Quality_movie`
  ADD PRIMARY KEY (`movie_id`,`quality_id`),
  ADD KEY `IDX_BA8E71A98F93B6FC` (`movie_id`),
  ADD KEY `IDX_BA8E71A9BCFC6D57` (`quality_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9F85E0677` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `FK_1D5EF26F82F1BAF4` FOREIGN KEY (`language_id`) REFERENCES `language` (`id`);

--
-- Constraints for table `Quality_movie`
--
ALTER TABLE `Quality_movie`
  ADD CONSTRAINT `FK_BA8E71A98F93B6FC` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BA8E71A9BCFC6D57` FOREIGN KEY (`quality_id`) REFERENCES `quality` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
