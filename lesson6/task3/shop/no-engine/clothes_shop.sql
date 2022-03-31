-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 27, 2022 at 11:06 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `item_id`, `name`) VALUES
(1, 1, 'card2.png'),
(2, 2, 'card3.png'),
(3, 3, 'card6.png'),
(4, 4, 'card1.png'),
(5, 5, 'card4.png'),
(6, 6, 'card5.png'),
(7, 7, 'card9.png'),
(8, 8, 'card7.png'),
(9, 9, 'card8.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text,
  `description` text,
  `price` text,
  `collection` text,
  `options` text,
  `views` int(11) NOT NULL DEFAULT '0',
  `preview_photo_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `price`, `collection`, `options`, `views`, `preview_photo_name`) VALUES
(1, 'item1', 'simple description', '$97.53', 'women', NULL, 16, 'card2.png'),
(2, 'item2', 'simple description2', '$52.87', 'man', NULL, 111, 'card3.png'),
(3, 'item3', 'simple description3', '$12.00', 'women', NULL, 11, 'card6.png'),
(4, 'item4', 'simple description4', '$43.00', 'all', NULL, 2, 'card1.png'),
(5, 'item5', 'simple description5', '$53.00', 'all', NULL, 31, 'card4.png'),
(6, 'item6', 'simple description6', '$26.00', 'all', NULL, 9, 'card5.png'),
(7, 'item7', 'simple description7', '$72.50', 'all', NULL, 2, 'card9.png'),
(8, 'item8', 'simple description8', '$12.70', 'all', NULL, 3, 'card7.png'),
(9, 'item9', 'simple description9', '$48.00', 'all', NULL, 1, 'card8.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `item_id`, `name`, `text`, `time`) VALUES
(1, 2, 'toshamilgis@gmail.com', 'first order', '2022-03-27 19:25:05'),
(2, 2, 'toshamilgis@gmail.com', 'Second order', '2022-03-27 19:39:09'),
(3, 2, 'toshamilval@yandex.ru', 'Third order', '2022-03-27 19:48:11'),
(4, 5, 'toshamilgis@gmail.com', 'item5 первый отзыв', '2022-03-27 19:51:06'),
(5, 2, 'toshamilgis@gmail.com', 'feedback', '2022-03-27 19:51:59'),
(6, 3, 'almazShamilArtem@gmail.com', 'Отлично', '2022-03-27 20:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_id` (`item_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item_id_from_reviews` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_item_id_from_reviews` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;