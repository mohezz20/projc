-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 11:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_project`
--
CREATE DATABASE IF NOT EXISTS `our_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `our_project`;

-- --------------------------------------------------------

--
-- Table structure for table `collages`
--

DROP TABLE IF EXISTS `collages`;
CREATE TABLE `collages` (
  `id` int(11) NOT NULL,
  `collage_name` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collages`
--

INSERT INTO `collages` (`id`, `collage_name`, `admin_id`) VALUES
(5, 'كلية تربية نوعية ', 0),
(6, 'كلية الاداب', 0),
(7, 'كلية الطب', 0),
(8, 'كلية الهندسة ', 0),
(9, 'زراعة', 8),
(10, 'الحقوق', 9),
(11, 'تربية نوعية', 10);

-- --------------------------------------------------------

--
-- Table structure for table `dr`
--

DROP TABLE IF EXISTS `dr`;
CREATE TABLE `dr` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `subj_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dr`
--

INSERT INTO `dr` (`id`, `name`, `email`, `password`, `r_name`, `subj_id`) VALUES
(1, ' سالى احمد الدالى ', 'saly@rrr.com', '', 'سالى احمد على ', 1),
(2, 'ريهام مصطفى ', 'eee@ggg.com', '', 'ريهام مصطفى محمد', 2),
(3, 'احمد صالح', 'eee@ttt.com', '', 'احمد محمد صالح', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ghyab`
--

DROP TABLE IF EXISTS `ghyab`;
CREATE TABLE `ghyab` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `lects_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lects`
--

DROP TABLE IF EXISTS `lects`;
CREATE TABLE `lects` (
  `id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `lect_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lects`
--

INSERT INTO `lects` (`id`, `subj_id`, `lect_date`) VALUES
(1, 2, '2022-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `part_id`, `name`) VALUES
(1, 3, ' الفرقة الاولى '),
(2, 2, 'الفرقة الثانية '),
(3, 3, 'الفرقة الثالثة '),
(4, 1, 'الفرقة الرابعة '),
(5, 7, 'الأولي'),
(6, 7, 'الثانية'),
(7, 7, 'الثالثة'),
(8, 9, 'الفرقة الأولي'),
(9, 9, 'الفرقة الثانية');

-- --------------------------------------------------------

--
-- Table structure for table `massg`
--

DROP TABLE IF EXISTS `massg`;
CREATE TABLE `massg` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massg`
--

INSERT INTO `massg` (`id`, `from_id`, `to_id`, `body`, `title`) VALUES
(1, 150, 1, 'hالدرس ا', 'الواجب');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `parts`;
CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `collage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `collage_id`) VALUES
(1, 'تكنولوجيا التعليم', 5),
(2, 'قسم فنية ', 5),
(3, 'اقتصاد', 5),
(4, 'kاجليزي', 6),
(5, 'فرنساوي', 6),
(6, 'فنية', 11),
(7, 'اقتصاد', 11),
(8, 'تكنولوجيا', 11),
(9, 'عربي', 10),
(10, 'انجليزي', 10);

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

DROP TABLE IF EXISTS `stu`;
CREATE TABLE `stu` (
  `id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`id`, `level_id`, `users_id`) VALUES
(1, 2, 0),
(2, 1, 0),
(3, 4, 5),
(4, 2, 0),
(5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subj`
--

DROP TABLE IF EXISTS `subj`;
CREATE TABLE `subj` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `term_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subj`
--

INSERT INTO `subj` (`id`, `name`, `term_id`) VALUES
(1, 'تطبيقات الحاسب ', 2),
(2, 'مدخل تكنولوجيا التعليم', 1),
(3, 'علم نفس ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

DROP TABLE IF EXISTS `term`;
CREATE TABLE `term` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`id`, `name`, `level_id`) VALUES
(1, 'الترم الاول ', 2),
(2, 'الترم التانى ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('su','ad','dr','stu') NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `pass`) VALUES
(3, 'aly1', 'medo1@medo.com', 'dr', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(4, 'aly', 'medo@medo.com', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(5, 'asmaa', 'medo4@medo.com', 'stu', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(6, 'المسؤول الكبير', 'su@fyun.com', 'su', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(8, 'محمد زارع', 'z@fyun.com', 'ad', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(9, 'حقاني', 'r@fyun.com', 'ad', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9'),
(10, 'مالك', 'm@fyun.com', 'ad', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collages`
--
ALTER TABLE `collages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`collage_name`);

--
-- Indexes for table `dr`
--
ALTER TABLE `dr`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `r_name` (`r_name`);

--
-- Indexes for table `ghyab`
--
ALTER TABLE `ghyab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lects`
--
ALTER TABLE `lects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massg`
--
ALTER TABLE `massg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subj`
--
ALTER TABLE `subj`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collages`
--
ALTER TABLE `collages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dr`
--
ALTER TABLE `dr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ghyab`
--
ALTER TABLE `ghyab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lects`
--
ALTER TABLE `lects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `massg`
--
ALTER TABLE `massg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subj`
--
ALTER TABLE `subj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
