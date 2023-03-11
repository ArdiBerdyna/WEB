-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 01:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renta_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `emri` varchar(200) NOT NULL,
  `lloji` varchar(200) NOT NULL,
  `qmimi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `image`, `emri`, `lloji`, `qmimi`) VALUES
(20, './assets/images/car.jpg.jpg', 'Audi  ', ' A5 2015, ', ' Price for day 50$  '),
(21, './assets/images/10.jpg', 'Mercedes-Benz', 'S400 2015, ', 'Price for day 60$ '),
(22, './assets/images/33.jpg', 'Volkswagen', 'Touareg 2022, ', 'Price for day 200$ '),
(23, './assets/images/about-img.jpg.jpg', 'Audi', 'A1 2016, ', 'Price for day 30$ ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefoni` varchar(20) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `telefoni`, `messages`) VALUES
(15, 'fatjon_881@hotmail.com', '049593582', 'nuk jam i kenaqur me sherbimet tuaja'),
(17, 'Erionberdyna@hotmail.com', '049523687', 'Jam i interesuar te marr informacione per vendodhjen e objektit kryesor');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `Pick_up_date` date NOT NULL,
  `Drop_off_date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `car_name`, `Pick_up_date`, `Drop_off_date`, `name`, `email`, `phone`) VALUES
(27, 'Mercedes-Benz S400 2015,  Price for day 60$ ', '2023-03-15', '2023-03-16', 'Erion Berdyna', 'erionberdyha@hotmail.com', 49587236),
(28, 'Audi    A5 2015,   Price for day 50$  ', '2023-03-09', '2023-03-24', 'Ardi Berdyna', 'ardi_881@hotmail.com', 4225201),
(29, 'Volkswagen Touareg 2022,  Price for day 200$ ', '2023-03-08', '2023-03-10', 'Ardit Sefaj', 'ardisefaj@hotmail.com', 48527149);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`) VALUES
(18, 'Ardi Berdyna', 'ardi_881@hotmail.com', '$2y$10$aZPvGSS3EBOnItDbZOU2MOmu.oXNX4yuobu4JZqLjvykFAFzgr3tq', 'admin'),
(19, 'Erion Berdyna', 'Erionardit@hotmail.com', '$2y$10$RjKv7e4/WV9gBWI.Km/1r.fa9vEliLDLhzJQ4eY2SW7IUcZ7gqAHO', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
