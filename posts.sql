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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Mon premier billet!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit posuere metus in cursus. Aenean eros leo, congue at dolor non, maximus interdum erat. Duis malesuada ipsum sit amet blandit posuere. Nulla mi erat, interdum ac sollicitudin ut, blandit eu felis. Suspendisse potenti. Vestibulum vulputate ullamcorper auctor. Ut ornare semper felis vitae feugiat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent aliquam laoreet sem a iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur porttitor, neque in imperdiet pharetra, arcu erat ultricies nulla, vel porttitor dui nulla in mi. Fusce ac sapien porta, luctus turpis sed, egestas dolor.', '2018-02-02 12:05:11'),
(2, 'Mon billet n°2, waw!', 'Maecenas eros mi, fringilla et mauris in, egestas vehicula dolor. Fusce dapibus tincidunt eros et consequat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sollicitudin, nunc non volutpat lacinia, est mi dignissim nulla, nec dictum enim libero sed tellus. Curabitur aliquet ligula purus, sodales volutpat lectus consectetur a. Pellentesque et nisl viverra, fermentum nisl sed, fringilla tortor. Etiam nec fermentum diam. Suspendisse eget arcu non augue consequat gravida. Morbi velit arcu, ornare sed congue ac, feugiat sed ligula. Aliquam molestie sapien nec mi commodo, sit amet ornare lorem tincidunt. Pellentesque viverra suscipit augue id vulputate. Ut sed lorem at dui ornare vehicula ac sit amet nunc.', '2018-02-04 12:06:06'),
(3, 'Un troisieme billet s\'il vous plait !', 'Duis felis tortor, tempor et interdum non, ullamcorper nec nunc. Etiam dictum nulla sit amet erat sodales, ac consequat urna semper. Sed interdum metus diam, quis gravida ligula mattis a. Integer quis erat ut mauris scelerisque interdum. Sed in tellus eget nunc rutrum molestie in eget nunc. Sed laoreet nisi eros, nec cursus nisi sodales sit amet. Nunc aliquam risus erat. In consequat pharetra enim, eu dapibus enim gravida eget. Suspendisse sed tempor leo. Cras sed leo eget urna maximus ultrices nec eu ipsum. Proin sed iaculis odio. Phasellus et ex a sapien molestie scelerisque sit amet ultrices dolor. Vestibulum id eleifend turpis. Nullam vitae commodo mi. Curabitur tincidunt pharetra dignissim.\n\nDonec sed porta tellus. Nunc hendrerit mollis massa a ornare. Maecenas interdum, sapien id aliquet scelerisque, erat nulla dictum dolor, in auctor metus ipsum vitae neque. Donec ultrices, ligula nec sollicitudin dapibus, metus ligula tincidunt mauris, eget egestas arcu nulla quis est. Phasellus scelerisque nibh id consequat ullamcorper. Ut orci orci, luctus id nulla a, pellentesque facilisis elit. Nullam malesuada ac purus id semper. Sed sed elit hendrerit, rhoncus erat vitae, viverra elit. Ut eu dignissim quam. In sem ligula, euismod quis congue sit amet, finibus vitae urna. Nulla odio sapien, pretium vel mollis eget, vehicula quis metus. Sed in fermentum massa. Suspendisse massa purus, varius quis lacus at, facilisis suscipit magna. Maecenas sit amet nisl finibus, efficitur metus vel, tincidunt elit. Phasellus vitae ex ac odio sollicitudin dignissim. Suspendisse potenti.', '2018-02-07 12:07:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
