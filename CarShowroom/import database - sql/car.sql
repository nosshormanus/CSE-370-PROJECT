-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 03:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('19301188', 'showmen');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `ID` varchar(30) NOT NULL,
  `Manufacturer` varchar(30) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Colors` varchar(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Features` varchar(100) NOT NULL,
  `Year_of_Creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`ID`, `Manufacturer`, `Product`, `Model`, `Colors`, `Price`, `Features`, `Year_of_Creation`) VALUES
('1', 'BMW Group', 'BMW CAR', 'BMW 6 Series GT', 'White, Grey', '$48,684', '48V mid hybrid tech, Mileage: 13.32 to 18.65 kmpl', '2020-05-27'),
('2', 'Bugatti Automobiles S.A.S.', 'BUGATTI ', 'Chiron Super Sport 300+', 'Black', '$3,900,000', '8.0L Quad-Turbo W16 Gas,7-Speed DSG ,All-Wheel Drive', '2020-01-01'),
('3', 'Ferrari N.V.', 'Ferrari', 'Ferrari 250 GTO ', 'Red, Blue, Grey, Black, Green', '$48,000,000', 'Sports car,300 PS,7500 rpm', '1962-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `mechanicdetails`
--

CREATE TABLE `mechanicdetails` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service-requests`
--

CREATE TABLE `service-requests` (
  `Vehicle Name` text NOT NULL,
  `Car Brand` text NOT NULL,
  `Car Model` text NOT NULL,
  `License Number` text NOT NULL,
  `Problem Description` varchar(3000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service-requests`
--

INSERT INTO `service-requests` (`Vehicle Name`, `Car Brand`, `Car Model`, `License Number`, `Problem Description`, `id`) VALUES
('BMW', 'BMW', 'XM', 'JWOIDJQWO', 'Car is not starting.', 11),
('BMW', 'BMW', 'XM', 'JWOIDJQWO', 'Car is not starting.', 12),
('BMW', 'BMW', 'XM', 'JWOIDJQWO', 'Car is not starting.', 13),
('Chiron', 'Chiron Super Sport', 'XM', '999-9991-1111', 'Engine Making Noise', 14);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mechanicdetails`
--
ALTER TABLE `mechanicdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service-requests`
--
ALTER TABLE `service-requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service-requests`
--
ALTER TABLE `service-requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
