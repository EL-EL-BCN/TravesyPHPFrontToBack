-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 08:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`) VALUES
(1, 'Post one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis diam quis viverra volutpat. Nulla eu commodo sapien, nec lobortis justo. Nunc lacinia, mi pellentesque dapibus tempus, velit quam faucibus turpis, at dapibus lorem odio et erat. In suscipit nibh neque. Duis rutrum, lorem sodales viverra pellentesque, felis lectus pellentesque felis, eget volutpat mauris libero sit amet nunc. Nam rutrum dui non odio iaculis ultrices. Maecenas at varius risus. Mauris pellentesque diam a velit gravida dapibus.', 'Brad Travesy', '2022-09-17 16:22:30'),
(2, 'post two', 'Suspendisse ornare finibus neque a scelerisque. Morbi sodales quam vitae nulla feugiat ornare. Nunc elementum semper metus, at rutrum nisl accumsan vitae. Nam fermentum accumsan consectetur. Mauris semper risus sapien, id semper lacus viverra ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis laoreet consectetur tortor, vitae varius justo. Morbi lacinia tincidunt nunc vitae tempus. Curabitur iaculis ultrices enim sed hendrerit.', 'Brad Travesy', '2022-09-17 16:23:11');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
