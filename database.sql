-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 10:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stateID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `stateID`) VALUES
(1, 'Diadema', 1),
(2, 'Mauá', 1),
(3, 'Rio Grande da Serra', 1),
(4, 'Angra dos Reis', 2),
(5, 'Barra Mansa', 2),
(6, 'Belford Roxo', 2),
(7, 'Cabo Frio', 2),
(8, 'Aquiraz', 3),
(9, 'Canindé', 3),
(10, 'Caucaia', 3),
(11, 'Crato', 3),
(12, 'Blumenau', 4),
(13, 'Chapecó', 4),
(14, 'Criciúma', 4),
(15, 'Lages', 4),
(16, 'Aracruz', 5),
(17, 'Cariacica', 5),
(18, 'Colatina', 5),
(19, 'Linhares', 5),
(20, 'Guangzhou', 6),
(21, 'Shanghai', 6),
(22, 'Chongqing', 6),
(23, 'Beijing', 6),
(24, 'Baoding', 7),
(25, 'Qinhuangdao', 7),
(26, 'Tangshan', 8),
(27, 'Sanhe', 8),
(28, 'Paris', 11),
(29, 'Poissy', 11),
(30, 'Torbes', 12),
(31, 'Rodrez', 12),
(32, 'Auger-Saint-Vincent', 13),
(33, 'Aumatre', 13),
(34, 'Belfort', 14),
(35, 'Dole', 14),
(36, 'Colmar', 15),
(37, 'Obernai', 15),
(38, 'Gurugram', 16),
(39, 'Panipat', 16),
(40, 'Rewari', 16),
(41, 'Chandigarh', 16),
(42, 'Tirupati', 17),
(43, 'Vijayvada', 17),
(44, 'Elluru', 17),
(45, 'Nellore', 17),
(46, 'New Delhi', 18),
(47, 'Faridabad', 18),
(48, 'Chennai', 19),
(49, 'Madurai', 19),
(50, 'Coimbatore', 19),
(51, 'Salem', 19),
(52, 'Ballia', 20),
(53, 'Varanasi', 20),
(54, 'Lucknow', 20),
(55, 'Kanpur', 20),
(56, 'Los Angeles', 21),
(57, 'San Francisco', 21),
(58, 'San Diego', 21),
(59, 'Oakland', 21),
(60, 'lowa city', 22),
(61, 'Ames', 22),
(62, 'Waterloo', 22),
(63, 'Mason city', 22),
(64, 'New york city', 23),
(65, 'Buffalo', 23),
(66, 'Albany', 23),
(67, 'Yonkers', 23),
(68, 'Trenton', 24),
(69, 'Princeton', 24),
(70, 'Atlantic city', 24),
(71, 'Paterson', 24),
(72, 'Boston', 25),
(73, 'Cambridge', 25),
(74, 'Springfield', 25),
(75, 'Lowell', 25);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Brazil'),
(2, 'China'),
(3, 'France'),
(4, 'India'),
(5, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Hawkeye 302', 36000),
(2, 'Ranger 89', 40000),
(3, 'Ranger 128', 50000),
(4, 'Gladiator 564', 80000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Favre Lueba #111', 18000),
(9, 'Leather', 1500),
(10, 'Beaded', 1000),
(11, 'Golden', 900),
(12, 'Metallic', 120),
(13, 'Hawkeye 385', 36000),
(14, 'Ranger 753', 40000),
(15, 'Ranger 456', 50000),
(16, 'Gladiator 805', 80000),
(17, 'Hawkeye 765', 36000),
(18, 'Ranger 844', 40000),
(19, 'Ranger 800', 80000),
(20, 'Gladiator 201', 80000),
(21, 'Rado Kicks', 17000),
(22, 'Rado Boxter', 25000),
(23, 'Rado 800', 80000),
(24, 'FossilChrono', 56000),
(25, 'Titan Ultraus', 16000),
(26, 'Fossil Genpecta', 86000),
(27, 'Rollex Slide', 123000),
(28, 'Rollex Swade', 156000);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `countryID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `countryID`) VALUES
(1, 'Sao Paulo', 1),
(2, 'Rio de Janeiro', 1),
(3, 'Ceara', 1),
(4, 'Santa Catarina', 1),
(5, 'Espirito Santo', 1),
(6, 'Beijing', 2),
(7, 'Hebei', 2),
(8, 'Jiangsu', 2),
(9, 'Guangdong', 2),
(10, 'Guangdong', 2),
(11, 'Ile-de-France', 3),
(12, 'Midi-Pyrenees', 3),
(13, 'Picardie', 3),
(14, 'Franche-Comte', 3),
(15, 'Alsace', 3),
(16, 'Haryana', 4),
(17, 'Andhra Pradesh', 4),
(18, 'Delhi', 4),
(19, 'Tamil Nadu', 4),
(20, 'Uttar Pradesh', 4),
(21, 'California', 5),
(22, 'Iowa', 5),
(23, 'New York', 5),
(24, 'New Jersey', 5),
(25, 'Massachusetts', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `state`, `country`) VALUES
(8, 'Manan Bolia', 'mananbolia14@gmail.com', 'manan1', '9799996309', '46', '19/5-B margdarshan, Prof. N. S. Phadke marg, andheri(E)', '18', '4'),
(9, 'Amit Birajdar', 'amitbirajdar7@gmail.com', 'amitbi97', '9876543215', '47', 'santacruz, mumbai', '18', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(87, 8, 15, 'Confirmed'),
(88, 8, 14, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
