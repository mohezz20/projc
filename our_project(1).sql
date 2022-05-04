-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `collages`
--

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
(10, 'الحقوق', 9);

-- --------------------------------------------------------

--
-- Table structure for table `dr_collage`
--

CREATE TABLE `dr_collage` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dr_subj`
--

CREATE TABLE `dr_subj` (
  `id` int(11) NOT NULL,
  `subj_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dr_subj`
--

INSERT INTO `dr_subj` (`id`, `subj_id`, `users_id`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ghyab`
--

CREATE TABLE `ghyab` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `lects_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lects`
--

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
(4, 1, 'الفرقة الرابعة ');

-- --------------------------------------------------------

--
-- Table structure for table `massg`
--

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
(5, 'فرنساوي', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

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
(9, 'حقاني', 'r@fyun.com', 'ad', '*6BB4837EB74329105EE4568DDA7DC67ED2CA2AD9');

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
-- Indexes for table `dr_collage`
--
ALTER TABLE `dr_collage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dr_subj`
--
ALTER TABLE `dr_subj`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dr_collage`
--
ALTER TABLE `dr_collage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dr_subj`
--
ALTER TABLE `dr_subj`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `massg`
--
ALTER TABLE `massg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
