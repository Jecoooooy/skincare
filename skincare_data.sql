-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 03:34 AM
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
-- Database: `skincare`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `subtitle`, `description`, `image`, `created_at`) VALUES
(1, 'COLLAGEN PEPTIDE EXFOLIATING GEL', NULL, 'Instant results with visible remove of dead cells. Clinically proven to activate the skin repair process.Smooths wrinkles, improves tone & elasticity.', './images/about/photo1.svg', '2024-11-19 16:46:12'),
(2, 'BELLA COLLAGEN ELIXIR', 'Beauty from the Inside Out', 'Helps the body product more collagen. Backed by double blind clinical studies. Healthier skin, hair, nails, joints & more.', './images/about/photo2.svg', '2024-11-19 16:46:12'),
(3, 'HYDRATING LIP PLUMPING OIL', '', 'Ultimate softness, hydration, & comfort. A smooth and naturally-plump look. Shine of a gloss with the benefits of a balm.', './images/about/photo3.svg', '2024-11-19 16:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `influencers`
--

CREATE TABLE `influencers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `influencers`
--

INSERT INTO `influencers` (`id`, `name`, `email`, `image`) VALUES
(1, 'Grace Perez', '@graceperez', './images/influencer/photo1.svg'),
(2, 'Bella Marie', '@bellamarie', './images/influencer/photo2.svg'),
(3, 'Gigi Hadid', '@gigihadid', './images/influencer/photo3.svg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `created_at`) VALUES
(1, 'jerico', 'bencito', '09162077645', 'bencitojerico@gmail.com', '2024-11-20 14:25:53'),
(16, 'jerico', 'bencito', '09162077645', 'test@gmail.com', '2024-11-20 14:57:58'),
(17, 'jerico', 'bencito', '09162077645', 'bencito@gmail.com', '2024-11-20 15:06:08'),
(20, 'jerico', 'bencito', '09162077645', 'jerico@gmail.com', '2024-11-20 15:12:18'),
(98, 'jerico', 'bencito', '09162077645', 'bencitonew@gmail.com', '2024-11-21 16:50:04'),
(100, 'jerico', 'bencito', '09162077645', 'new@gmail.com', '2024-11-21 16:57:57'),
(102, 'jerico', 'bencito', '09162077645', 'bencitonewentry@gmail.com', '2024-11-21 17:03:20'),
(104, 'jerico', 'bencito', '09162077645', 'jericonew@gmail.com', '2024-11-21 17:09:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `influencers`
--
ALTER TABLE `influencers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `influencers`
--
ALTER TABLE `influencers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
