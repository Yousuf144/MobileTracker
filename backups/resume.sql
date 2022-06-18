-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 05:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `soft_skills` varchar(255) NOT NULL,
  `refrence` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `skill_heighlights` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL,
  `skill_hightlightsame_desc` varchar(255) NOT NULL,
  `educations_year` varchar(255) NOT NULL,
  `certifications_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `address`, `phone`, `soft_skills`, `refrence`, `education`, `skill_heighlights`, `certificate`, `skill_hightlightsame_desc`, `educations_year`, `certifications_year`) VALUES
(1, 'Muhammad Yousuf', 'muhammadyousuf144@gmail.com', 'house no 123 sector a/3 abc town Karachi', '03072781033', '[\"Time Management\",\"Communication skills\",\"Self-learning\",\"Team Work\",\"Interpersonal skills\"]', 'References available on request', '[\"Matriculation (Science) from BOARD OF SECONDARY EDUCATION KARACHI\",\"I.Com (Commerce) From INTERMEDIATE BOARD KARACHI\"]', '[\"Web Designing\",\"Web Development\",\"Database\"]', '[\"C.I.T (6 Month Course)\"]', '[\"( HTML5 ,CSS, BOOTSTRAP , ANGULAR JS)\",\"(PHP,Laravel )\",\"MySQL\"]', '[\"2017\",\"2019\"]', '[\"2017\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
