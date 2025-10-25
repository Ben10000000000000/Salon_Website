-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 10:22 AM
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
-- Database: `style_sanctuary`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `select_service` varchar(255) NOT NULL,
  `select_time` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`id`, `status`, `created_at`, `name`, `email`, `mobile number`, `date`, `select_service`, `select_time`, `message`) VALUES
(2, 'Active', '2024-07-18 08:15:33', 'Raman', 'raman@gmail.com', '987654321', ' 2024-07-17', ' Haircutting ', '8am to 10am', 'fghknjknl');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `status`, `created_at`, `name`, `image`, `description`) VALUES
(2, 'Active', '2024-07-18 07:49:04', 'UNDERCUT HAIRCUTTING:', '126659816281fe7af6a1e7213df963ed1bd87e72bc.jpg ', 'this is  a best  hair style in this year'),
(3, 'Active', '2024-07-18 07:52:35', 'FULL BEARD:', '61087813full-beard-1.jpg ', 'nothing '),
(4, 'Active', '2024-07-18 08:04:05', 'UNDERCUT HAIRCUTTING:', '994471843men-shaving.jpg', ' this is  a best  hair style in this year'),
(5, 'Active', '2024-07-18 08:10:59', 'UNDERCUT HAIRCUTTING:', '126659816281fe7af6a1e7213df963ed1bd87e72bc.jpg ', ' this is  a best  hair style in this year'),
(6, 'Active', '2024-07-18 08:12:19', 'UNDERCUT HAIRCUTTING:', '126659816281fe7af6a1e7213df963ed1bd87e72bc.jpg ', ' this is  a best  hair style in this year'),
(7, 'Active', '2024-07-18 08:12:34', 'UNDERCUT HAIRCUTTING:', '126659816281fe7af6a1e7213df963ed1bd87e72bc.jpg ', ' this is  a best  hair style in this year'),
(8, 'Active', '2024-07-18 08:12:45', 'UNDERCUT HAIRCUTTING:', '126659816281fe7af6a1e7213df963ed1bd87e72bc.jpg ', ' this is  a best  hair style in this year');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Message` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MOB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `status`, `created_at`, `Message`, `Name`, `Email`, `MOB`) VALUES
(1, 'Active', '2024-07-18 07:10:42', 'hjdfjlgbkjrha', 'hugjetwglybw', ' keryfhjewg@gmail.com', '4256174859');

-- --------------------------------------------------------

--
-- Table structure for table `service_table`
--

CREATE TABLE `service_table` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `service_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_table`
--

INSERT INTO `service_table` (`id`, `status`, `created_at`, `service_name`, `image`, `description`, `category_name`) VALUES
(1, 'Active', '2024-07-18 07:16:18', 'HAIRCUTTING:', '1682043089360_F_145456840_FR304Elzr4TMOy3uJnlKGkPhFdQNPRrU.jpg', 'HFIEWHFYERFH', 'HAIRCUTTING:'),
(2, 'Active', '2024-07-18 07:50:14', 'HAIRCUTTING', '1141872020360_F_145456840_FR304Elzr4TMOy3uJnlKGkPhFdQNPRrU (1).jpg', 'NO NEED FOR THIS ', 'UNDERCUT HAIRCUTTING:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_table`
--
ALTER TABLE `service_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_table`
--
ALTER TABLE `service_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
