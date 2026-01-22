-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2026 at 01:03 PM
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
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exer`
--

CREATE TABLE `exer` (
  `id` int(3) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `num` int(10) NOT NULL,
  `date_` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exer`
--

INSERT INTO `exer` (`id`, `prenom`, `nom`, `num`, `date_`) VALUES
(123, 'Ali', 'Ben Salah', 22334455, '2006-11-20'),
(222, 'Youssef', 'Mansour', 55667788, '2006-08-15'),
(321, 'Sara', 'Trabelsi', 99887766, '2007-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exer`
--
ALTER TABLE `exer`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
