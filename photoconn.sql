-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 10:15 PM
-- Server version: 5.7.11-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoconn`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `address_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `stateInit` varchar(2) NOT NULL,
  `zip` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `bid_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `b_location` varchar(50) DEFAULT NULL,
  `bid_date` date DEFAULT NULL,
  `bid_time` time DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `order_time` time DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `total_price` int(11) NOT NULL,
  `add_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `items_quantities` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(15) DEFAULT NULL,
  `photo_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`, `type`, `email`, `phone`) VALUES
(1, 'miketran238', 'abc123', 'Mike', 'Tran', 0, 'soulkeeper2389@gmail.com', '4558881234'),
(3, 'user', 'abc', 'Thomas', 'Brad', 2, 'masbrad234@gmail.com', '9095617383'),
(4, 'ToraSai09', '123', 'Tora', 'Sai', 1, 'toraaaa@gmail.com', '5023468796'),
(5, 'DaiNguyen2511', 'abc123', 'Dai', 'Nguyen', 0, 'dainguyen1211@yahoo.com', '09042875566'),
(6, 'photographyguy', 'abc123', 'Nick', 'Brown', 1, 'nicky86@gmail.com', '9558975621'),
(10, 'kiisouk', 'abc', 'Elizabeth', 'Hughes', 2, 'kiisouk1@gmail.com', ''),
(11, 'nightowl', '123', 'Laura', 'Miller', 2, 'nightowl@yahoo.com', ''),
(12, 'theLegend', 'abc123', 'Legend', 'Kokoro', 0, 'legend1legend2@gmail.com', '5550956755'),
(13, 'tada', '123', 'tada', 'tada2', 0, 'tada@gmail.com', '1114214');

-- --------------------------------------------------------

--
-- Table structure for table `users_bids`
--

CREATE TABLE `users_bids` (
  `b_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `add_id` (`add_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`o_id`,`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_bids`
--
ALTER TABLE `users_bids`
  ADD PRIMARY KEY (`b_id`,`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`add_id`) REFERENCES `addresses` (`address_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`c_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`o_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `photos` (`photo_id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users_bids`
--
ALTER TABLE `users_bids`
  ADD CONSTRAINT `users_bids_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `bids` (`bid_id`),
  ADD CONSTRAINT `users_bids_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
