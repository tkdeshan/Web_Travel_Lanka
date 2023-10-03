-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_lanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(68, 'Kavinda', 'tkdeshan1103@gmail.com', '0704120004', 'Nakiyadeniya, Galle.', 'Hummanaya', 10, '2023-04-01', '2023-04-08'),
(69, 'Shammi', 'sh@gmail.com', '0912340005', 'Thellambura, Galle.', 'Trincomalee', 20, '2023-04-03', '2023-04-05'),
(70, 'Ramesh', 'rm@gmail.com', '0912323456', 'Mathugama, kalutara.', 'Trincomalee', 50, '2023-04-01', '2023-04-03'),
(71, 'jayamini', 'jt@gmail.com', '0729873456', 'Nakiyadeniya, Galle', 'Kataragama', 10, '2023-04-30', '2023-05-03'),
(91, 'Nadeesha Lakmal', 'Nadeesha@Gmail.Com', '0765269874', 'Nittabuwa', 'Ussangoda Beach', 10, '2023-05-12', '2023-05-14'),
(95, 'Kavinda Deshan', 'tkdeshan1103@gmail.com', '0769011856', '77B, Visihawulhena, Thellambura, Nakiyadeniya, Galle', 'Galle Fort', 30, '2023-05-20', '2023-05-22'),
(96, 'Kavinda Deshan', 'tkdeshan1103@gmail.com', '0769011856', 'Visihawulhena, Thellmbura, Nakiyadenya, Galle.', 'Sri Padaya', 6, '2023-08-10', '2023-08-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
