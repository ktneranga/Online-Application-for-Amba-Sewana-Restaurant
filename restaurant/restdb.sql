-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 07:53 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Confirm_Password` varchar(40) NOT NULL,
  `Last_Login` datetime NOT NULL,
  `is_delete` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `First_Name`, `Last_Name`, `Email`, `Password`, `Confirm_Password`, `Last_Login`, `is_delete`) VALUES
(1, 'Teran', 'Neranga', 'teran.neranga@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-02-21 12:22:48', 0),
(2, 'Sandaru', 'Gunasinghe', 'gps.sandarugunasighe@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00 00:00:00', 0),
(3, 'Chamith', 'Peramune', 'csperamune@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00 00:00:00', 0),
(4, 'Lakshan', 'Deshapriya', 'lakshan.gkl@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00 00:00:00', 0),
(5, 'Maduri', 'Vidanapathirana', 'maduri@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00 00:00:00', 0),
(6, 'Jayatri', 'Prashadika', 'jayathri64prashadika@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0000-00-00 00:00:00', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
