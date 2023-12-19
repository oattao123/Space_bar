-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 10:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `password`, `created_at`) VALUES
(1, 'admin.first@gmail.com\r\n', 'admin.first@gmail.com', '$2y$10$oG1KZbqhBWJedsBQCS6nVeiQVteQhIvIVScC11jh5pTI4hLaaF/f6', '2023-04-10 10:35:10'),
(2, 'admin.second@gmail.com', 'admin.second@gmail.com', '$2y$10$.ShXDGS/bgd9zQC3sBI1R.DD/cT9c7CIYl.Ah6lENw3uMKNkf9bu6', '2023-04-10 11:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_booking` varchar(200) NOT NULL,
  `num_people` int(10) NOT NULL,
  `special_request` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `date_booking`, `num_people`, `special_request`, `status`, `user_id`, `created_at`) VALUES
(1, 'zzzzzzzzzz', 'moha123@gmail.com', '04/12/2023 3:13 PM', 3, 'Energistically actualize B2B web-readiness after', 'Confirmed', 1, '2023-04-09 13:13:17'),
(2, 'Mohamed Hassan', 'moha123@gmail.com', '04/11/2023 3:15 PM', 2, 'Rapidiously expedite team driven potentialities with interoperable \"outside the box\" thinking. Professionally formulate cross-platform internaProgressively communicate user friendly internal o', 'Done', 1, '2023-04-09 13:16:01'),
(4, 'Mohamed Hassan', 'moha123@gmail.com', '04/12/2023 12:40 PM', 2, 'Energistically actualize B2B web-readiness after', 'Pending', 1, '2023-04-11 10:40:46'),
(5, 'Mohamed Hassan', 'moha123@gmail.com', '04/13/2023 12:45 PM', 2, 'Energistically actualize B2B web-readiness after', 'Pending', 1, '2023-04-11 10:48:59'),
(6, 'Mohamed Hassan', 'Moha123@gmail.com', '04/12/2023 12:59 PM', 2, 'Quickly grow prospective ideas and backend ', 'Pending', 1, '2023-04-11 11:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created-at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `name`, `price`, `image`, `user_id`, `created-at`) VALUES
(10, 1, 'chicken wings', '10', 'menu-1.jpg', 1, '2023-04-11 09:22:55'),
(13, 6, 'steak', '30', 'menu-3.jpg', 1, '2023-04-11 11:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `meal_id` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `image`, `description`, `price`, `meal_id`, `created_at`) VALUES
(1, 'chicken wings', 'menu-1.jpg', 'Energistically recaptiualize prospective manufactured ', '10', 1, '2023-04-08 11:44:38'),
(2, 'pizza', 'menu-2.jpg', 'Holisticly simplify superior meta-services for ', '20', 2, '2023-04-08 11:44:38'),
(3, 'steak', 'menu-3.jpg', 'Continually reintermediate wireless vortals through', '30', 3, '2023-04-08 11:44:38'),
(6, 'steak', 'menu-3.jpg', 'Continually reintermediate wireless vortals through', '30', 1, '2023-04-08 11:44:38'),
(7, 'pizza', 'menu-2.jpg', 'Holisticly simplify superior meta-services for ', '20', 1, '2023-04-08 11:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  
  `phone_number` int(50) NOT NULL,
  `address` text NOT NULL,
  `total_price` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `town`, `country`,  `phone_number`, `address`, `total_price`, `user_id`, `status`, `created_at`) VALUES
(7, 'Mohamed Hassan', 'moha@gmail.com', 'town', 'country', 209332, 123034333, 'Progressively communicate user friendly internal o', 10, 1, 'Pending', '2023-04-11 09:37:21'),
(8, 'Mohamed Hassan', 'moha@gmail.com	', 'sample town', 'sample town', 923, 19232234, 'Efficiently exploit dynamic e-tailers before high-quality core competencies. Quickly administrate ', 40, 1, 'Pending', '2023-04-11 10:38:52'),
(9, 'Mohamed Hassan', 'moha@gmail.com	', 'sample town', 'sample country', 2923, 10233444, 'Progressively communicate user friendly internal o', 30, 1, 'Pending', '2023-04-11 10:47:40'),
(10, 'Mohamed Hassan', 'moha@gmail.com', 'sample town', 'sample country', 990032, 1929344, 'Collaboratively plagiarize maintainable products after viral growth strategies. Efficiently aggregate efficient ', 40, 1, 'Pending', '2023-04-11 11:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `review` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `username`, `created_at`) VALUES
(1, 'Collaboratively empower visionary infomediaries through installed base outsourcing. Progressively iterate B2C communities and top-line content. ', 'Mohamed Hassan', '2023-04-09 14:09:46'),
(2, ' outsourcing. Progressively iterate B2C communities and top-line content. ', 'Mohamed Hassan', '2023-04-09 14:09:46'),
(3, '', 'Mohamed123', '2023-04-11 10:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Mohamed123', 'moha123@gmail.com', '$2y$10$oG1KZbqhBWJedsBQCS6nVeiQVteQhIvIVScC11jh5pTI4hLaaF/f6', '2023-04-08 09:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
