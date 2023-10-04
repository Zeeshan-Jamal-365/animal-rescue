-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 01:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animal_rescue`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `fname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_area` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `w_area`, `city`, `date_created`) VALUES
(7, 'Monkey', 'D. Luffy', 'MonkeyDLuffy@gmail.com', '$2y$10$IM/RSLwqaP4iZ9OKtS5tqOfG0CwCl3pcwbnVxwBxQFkrhsXInJMwi', 'mdpur', 'dhaka', '2021-04-02 18:01:52'),
(8, 'Bloody', 'Mary', 'BloodyMary@yahoo.com', '$2y$10$JOlgU7ztXAi2Tf9qIX4r2OBlBwtGLC8j3tWMNzomQwrbynzRZ4sbq', 'badda', 'dhaka', '2021-04-02 18:22:20'),
(9, 'Chopper', 'San', 'ChopperSan@yahoo.com', '$2y$10$zWv2t3XYg9Cu.nyTDhvvLOoy/K9ApziHO0eXDB9CdtHPh4ZMhbxXS', 'Dhanmondi', 'Dhaka', '2021-04-05 10:47:48'),
(10, 'Nami ', 'San', 'NamiSan@gmail.com', '$2y$10$ztYuSOVREz8k9K2GvWuqje.oNwzp6aEt0jxIBjrB22i/4hBOOMmiu', 'Gulshan', 'Dhaka', '2021-04-05 11:16:31'),
(11, 'Thor', 'Odinson', 'ThorOdinson@gmail.com', '$2y$10$39sP1nKAaSFXvGiPOXynWepSsARIRwaOneVRWCREiSiCf69Uh0q0.', 'Valhalla', 'Asgard', '2021-04-12 00:46:14'),
(12, 'Tom', 'Hanks', 'TomHanks@gmail.com', '$2y$10$xmGi./HLbwt.prFHOFPhieBTRivJmT/HYZXDztAR7RU4/2YahAusi', 'Dhanmondi', 'Dhaka', '2021-04-12 11:25:48');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
