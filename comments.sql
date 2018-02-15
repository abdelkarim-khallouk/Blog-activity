-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2018 at 10:10 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `author` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `post_id` tinyint(3) UNSIGNED NOT NULL,
  `comment_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `author`, `comment`, `post_id`, `comment_date`) VALUES
(3, 'karim', 'oh hyper interessant !!!', 1, '2018-02-07 11:58:13'),
(4, 'Said', 'Cool mais ...!', 1, '2018-02-07 11:58:59'),
(5, 'Ahmed', 'bla bla bla...!!', 2, '2018-02-07 12:00:09'),
(6, 'ahmed', 'bli bli bli', 3, '2018-02-07 12:00:35'),
(7, 'samar', 'ce n\'est pas vrai !!!!', 3, '2018-02-07 12:01:11'),
(8, 'sarah', 'waaaaaaaaaaaaaaaaw !', 3, '2018-01-07 12:02:07'),
(9, 'kkk', 'ccccccccccccc', 1, '2018-02-13 00:00:00'),
(10, 'kkkk', 'ccccccccccccc', 1, '2018-02-13 22:09:47'),
(11, 'Samir', 'God job (y)', 3, '2018-02-14 00:12:53'),
(12, 'Farid', 'Sed in fermentum massa. Suspendisse massa purus, varius quis lacus at, facilisis suscipit magna.', 3, '2018-02-14 10:41:32'),
(13, 'Kamal', 'Ut sed lorem at dui ornare vehicula ac sit amet nunc...', 2, '2018-02-14 17:58:46'),
(14, 'Gerard', 'Vivamus sollicitudin calin..', 2, '2018-02-14 18:29:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_posts_id_fk` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts_id_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
