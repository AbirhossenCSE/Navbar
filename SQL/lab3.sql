-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 11:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab3`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `date`) VALUES
(1, 'Noorjahan', 'noor', '123', 'Swarna126-08-2023'),
(3, 'fahad', 'fahad420', 'fahad8888', 'shawon26-08-2023'),
(4, 'Farabi', 'tafarabi', '12345', 'shawon-26-08-2023'),
(5, 'azizsakib', 'aziz', '0000', 'aziz26-08-2023'),
(6, 'shakib', 'shakib', '321654987', 'shakib26-08-2023'),
(7, 'AKIB HOSSAIN', 'AKIB', '00001', 'AKIB26-08-2023'),
(8, 'fuad', 'fuad', '123456789rwerw', 'xyz-26-08-2023'),
(9, 'nusrat', 'methila', '1234', '26-08-2023'),
(10, 'Tasnim Jahan Rifa', 'Rifa', '1234567', '26-08-2023'),
(11, 'Amir', 'Hamza11', '0174', 'Hamza26-08-2023'),
(12, 'md', 'onoy', '9090', 'onoy26-08-2023'),
(13, 'Nil Sari', 'poreche', 'only for you', '26-08-2023'),
(14, 'Lovely Islam', 'lOVELY', '4321', '26-08-2023'),
(15, 'shawon', 'MSHQ', '123456', 'tomo26-08-2023'),
(16, 'Arnob', 'Rafid', '88888888', '26-08-2023'),
(18, 'onoyyy', 'sob o korce', '1234', 'xyz-26-08-2023'),
(19, 'Swarna', 'Swarna Mitu', '1234', 'Swarna126-08-2023'),
(23, 'Asraful', 'asif@gamil.com', '1234', '26-08-2023'),
(25, 'xyz', 'xyz', '123', '26-08-2023'),
(27, 'sir ', 'ken ', 'amon', '26-08-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
