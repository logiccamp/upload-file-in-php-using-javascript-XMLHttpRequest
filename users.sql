-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 10:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `skills` text NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `lname`, `fname`, `email`, `title`, `skills`, `telephone`, `about`, `password`, `cpassword`) VALUES
(1, 'Demo', 'Demo', 'demo@gmail.com', 'Day Trader now now', 'Bitcoin, Ripple, Doge Coin, BitTorrent, Tron, Litecoin, Etherium', '+261782612', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet maxime soluta dolorem doloremque reprehenderit laudantium fugiat excepturi reiciendis est dolorum. Magni molestiae odio odit repellat magnam eaque modi corrupti vel!', '$2y$10$cfqPYgJGT7EWCyWIAOlISeCVeAgeMEvDtDlPYnlgu/UgwRpX1u9Ne', '$2y$10$cfqPYgJGT7EWCyWIAOlISeCVeAgeMEvDtDlPYnlgu/UgwRpX1u9Ne'),
(2, 'Warren', 'Buffet', 'warren.b@gmail.com', '', '', '', '', '$2y$10$cfqPYgJGT7EWCyWIAOlISeCVeAgeMEvDtDlPYnlgu/UgwRpX1u9Ne', '$2y$10$cfqPYgJGT7EWCyWIAOlISeCVeAgeMEvDtDlPYnlgu/UgwRpX1u9Ne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
