-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 04:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `account`, `amount`) VALUES
(1, 'Sirisha', 'Chennamasetti', 'Salary account', '277000'),
(2, 'Rohit', 'Varma', 'Current account', '23243'),
(3, 'Deepika', 'Deepu', 'Salary account', '270000'),
(4, 'Sai', 'Prasad', 'Savings account', '2000'),
(5, 'Dinesh', 'Dinnu', 'current account', '9029343'),
(6, 'Ayush', 'Penumatcha', 'Salary account', '17068'),
(7, 'Abhi', 'Varma', 'Salary account', '25932');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(5) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(0, 'Abhi', 'Ayush', 25000, '2021-06-13'),
(0, 'Ayush', 'Abhi', 2344, '2021-06-13'),
(0, 'Ayush', 'Abhi', 2344, '2021-06-13'),
(0, 'Ayush', 'Abhi', 2121, '2021-06-13'),
(0, 'Ayush', 'Abhi', 2123, '2021-06-13'),
(0, 'Ayush', 'Abhi', 800, '2021-06-13'),
(0, 'Abhi', 'Sirisha', 12000, '2021-06-13'),
(0, 'Sirisha', 'Abhi', 25000, '2021-06-13'),
(0, 'Deepika', 'Sirisha', 230000, '2021-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
