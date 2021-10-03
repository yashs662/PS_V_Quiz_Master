-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 08:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choices`
--

CREATE TABLE `multiple_choices` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `correct_ans1` tinyint(1) NOT NULL,
  `correct_ans2` tinyint(1) NOT NULL,
  `correct_ans3` tinyint(1) NOT NULL,
  `correct_ans4` tinyint(1) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple_choices`
--

INSERT INTO `multiple_choices` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_ans1`, `correct_ans2`, `correct_ans3`, `correct_ans4`, `difficulty`, `onhold`) VALUES
(67602, 'This is a multiple choice question. choose 2 and 4', '1', '2', '3', '4', 0, 1, 0, 1, 'easy', 0),
(67603, 'This is a multiple choice question. choose 1 and 2', '1', '2', '3', '4', 1, 1, 0, 0, 'medium', 0),
(67604, 'This is a multiple choice question. choose 1 and 3', '1', '2', '3', '4', 1, 0, 1, 0, 'hard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `one_choice`
--

CREATE TABLE `one_choice` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `correct_answer` varchar(50) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `one_choice`
--

INSERT INTO `one_choice` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`, `difficulty`, `onhold`) VALUES
(182, 'What does CSS stand for?', 'Common Style Sheet', 'Colorful Style Sheet', 'Computer Style Sheet', 'Cascading Style Sheet', 'Cascading Style Sheet', 'easy', 0),
(183, 'What does PHP stand for?', 'Hypertext Preprocessor', 'Hypertext Programming', 'Hypertext Preprogramming', 'Hometext Preprocessor', 'Hypertext Preprocessor', 'easy', 0),
(184, 'What does SQL stand for?', 'Statement Question Language', 'Stylesheet Query Language', 'Structured Query Language', 'Stylish Question Language', 'Structured Query Language', 'easy', 0),
(185, 'What does XML stand for?', 'eXecutable Multiple Language', 'eXtensible Markup Language', 'eXamine Multiple Language', 'eXTra Multi-Program Language', 'eXtensible Markup Language', 'easy', 0),
(189, 'This is a single chioce question', 'no', 'no', 'yes', 'no', 'yes', 'medium', 0),
(190, 'This is a single chioce question', 'yes', 'no', 'no', 'no', 'yes', 'hard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `text_completion`
--

CREATE TABLE `text_completion` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text_completion`
--

INSERT INTO `text_completion` (`id`, `question`, `answer`, `difficulty`, `onhold`) VALUES
(18, 'This is a text question input hello in the answer. your answer is?', 'hello', 'easy', 0),
(19, 'This is a text question input yes in the answer. your answer is?', 'yes', 'medium', 0),
(20, 'This is a text question input lol in the answer. your answer is?', 'lol', 'hard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `true_false`
--

CREATE TABLE `true_false` (
  `id` bigint(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` tinyint(1) NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `onhold` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `true_false`
--

INSERT INTO `true_false` (`id`, `question`, `answer`, `difficulty`, `onhold`) VALUES
(20, 'This is a true or false question. the answer is true', 1, 'easy', 0),
(21, 'This is a true or false question. the answer is false', 0, 'easy', 0),
(23, 'This is a true or false question. the answer is true', 1, 'medium', 0),
(24, 'This is a true or false question. the answer is false', 0, 'medium', 0),
(25, 'This is a true or false question. the answer is true', 1, 'hard', 0),
(27, 'This is a true or false question. the answer is false', 0, 'hard', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `sex` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `date`, `sex`, `username`, `password`, `email`, `photo`, `role`) VALUES
(74, 'Yash Sharma', 'Sharma', '2001-08-07', 'male', 'yashs662', '12345', 'yashs662@gmail.com', '../media/yashs662-pfp.jpg', 'admin'),
(75, 'Yash Sharma', 'Sharma', '2021-09-06', 'female', 'yash', '12345', 'yashs662@gmail.com', '../media/Default-user.png', 'user'),
(76, 'test', 'test', '2021-10-03', 'female', 'test', 'test', 'test@test.com', '../media/Default-user.png', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users_history`
--

CREATE TABLE `users_history` (
  `id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `difficulty` varchar(50) NOT NULL,
  `score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_history`
--

INSERT INTO `users_history` (`id`, `username`, `date`, `difficulty`, `score`) VALUES
(84, 'yashs662', '2021-09-27', 'easy', 5),
(85, 'yashs662', '2021-09-27', 'easy', 3),
(86, 'yashs662', '2021-09-27', 'easy', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `one_choice`
--
ALTER TABLE `one_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_completion`
--
ALTER TABLE `text_completion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `true_false`
--
ALTER TABLE `true_false`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_history`
--
ALTER TABLE `users_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67605;

--
-- AUTO_INCREMENT for table `one_choice`
--
ALTER TABLE `one_choice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `text_completion`
--
ALTER TABLE `text_completion`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `true_false`
--
ALTER TABLE `true_false`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users_history`
--
ALTER TABLE `users_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
