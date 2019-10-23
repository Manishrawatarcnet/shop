-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 07:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cat`
--

CREATE TABLE `add_cat` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_cat`
--

INSERT INTO `add_cat` (`id`, `category`, `status`) VALUES
(1, 'Branded Foods', 1),
(2, 'Household', 1),
(3, 'Kitchen', 1),
(4, 'Pet Food', 1),
(5, 'Vegetables', 2),
(6, 'Fruits', 1),
(7, 'Drinks', 2),
(8, 'Snacks', 1),
(9, 'Bread', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_prod`
--

CREATE TABLE `add_prod` (
  `id` int(11) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pcat` varchar(200) NOT NULL,
  `pnprice` int(15) NOT NULL,
  `poprice` int(15) NOT NULL,
  `pdescription` text NOT NULL,
  `pimg` varchar(200) NOT NULL,
  `psubcat` varchar(250) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_prod`
--

INSERT INTO `add_prod` (`id`, `pname`, `pcat`, `pnprice`, `poprice`, `pdescription`, `pimg`, `psubcat`, `status`) VALUES
(2, 'knorr instant soup (100 gm)', 'Branded Foods', 3, 5, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '5.png', '', 0),
(3, 'chings noodles (75 gm)', 'Branded Foods', 5, 8, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '6.png', '', 0),
(4, 'lahsun sev (150 gm)', 'Branded Foods', 3, 5, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '7.png', '', 0),
(5, 'premium bake rusk (300 gm)', 'Branded Foods', 5, 7, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '8.png', '', 0),
(6, 'mixed fruit juice (1 ltr)', 'Branded Foods', 3, 4, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '13.png', '', 0),
(7, 'Dishwash gel, lemon (1.5 ltr)', 'Household', 8, 10, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '17.png', '', 0),
(11, 'coco cola zero can (330 ml)', 'Drinks', 3, 5, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '20.png', 'Soft Drinks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `add_subcat`
--

CREATE TABLE `add_subcat` (
  `id` int(5) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `subcat` varchar(100) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_subcat`
--

INSERT INTO `add_subcat` (`id`, `cat`, `subcat`, `status`) VALUES
(1, 'Vegetables', 'Fruits', 2),
(2, 'Vegetables', 'Sabzi', 2),
(4, 'Drinks', 'Soft Drinks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id`, `admin_id`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `city`, `address`) VALUES
(1, 'Manish', 'manishrawat@gmail.com', '123456', '965439858', 'Delhi', 'Geeta Colony'),
(2, 'Alex', 'alexmocxk@gmail.com', '123456', '976231546', 'Noida', 'Gaur City'),
(3, 'Shubham', 'shubham@gmail.com', '123456', '97843657347', 'Haryana', 'Panipat Haryama');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(111, 1, 3, 'Added to Cart'),
(112, 1, 2, 'Added to Cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_cat`
--
ALTER TABLE `add_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_prod`
--
ALTER TABLE `add_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_subcat`
--
ALTER TABLE `add_subcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_cat`
--
ALTER TABLE `add_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `add_prod`
--
ALTER TABLE `add_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `add_subcat`
--
ALTER TABLE `add_subcat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
