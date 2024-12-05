-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `area` text NOT NULL,
  `rooms` text NOT NULL DEFAULT '1',
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `title`, `description`, `type`, `status`, `price`, `area`, `rooms`, `created_at`, `updated_at`) VALUES
(2, 'ocean view', 'Very nice view you will love it', 'office', 'processing', 300, 'Near mexico', '0', '2024-12-04 14:43:50.332013', '2024-12-04 15:43:50.332013'),
(3, 'ocean view', 'Very nice view you will love it', 'office', 'processing', 300, 'Near mexico', '0', '2024-12-04 14:44:46.439915', '2024-12-04 15:44:46.439915'),
(4, 'ocean view', 'Very nice view you will love it', 'office', 'processing', 300, 'Near mexico', 'room 3', '2024-12-04 14:45:33.998335', '2024-12-04 15:45:33.998335'),
(5, 'ocean view', 'Very nice view you will love it', 'office', 'processing', 300, 'Near mexico', 'room 3', '2024-12-04 18:40:11.691753', '2024-12-04 19:40:11.691753'),
(6, 'ocean view', 'Very nice view you will love it', 'office', 'processing', 300, 'Near mexico', 'room 3', '2024-12-04 18:45:03.776050', '2024-12-04 19:45:03.776050'),
(7, 'jguhi', 'mgsgdoihf', 'house', 'processing', 3000, 'ewrfdsv', 'room 4', '2024-12-04 19:48:38.910521', '2024-12-04 20:48:38.910521'),
(8, 'jguhi', 'mgsgdoihf', 'house', 'processing', 3000, 'ewrfdsv', 'room 4', '2024-12-04 19:50:02.154593', '2024-12-04 20:50:02.154593');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
