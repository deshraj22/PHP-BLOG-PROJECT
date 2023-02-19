-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2023 at 07:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogdata`
--

CREATE TABLE `blogdata` (
  `bid` int(10) NOT NULL,
  `tittle` text NOT NULL,
  `blog` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogdata`
--

INSERT INTO `blogdata` (`bid`, `tittle`, `blog`) VALUES
(0, 'first blog vikash', 'iwfhciwgfiuwbwekjb'),
(22, 'new blog', 'eff'),
(22, 'vikash 1st blog', '1st vikash blog'),
(21, 'DESHRAJ FIRST BLOG', '1ST DESHRAJ BLOG'),
(23, 'AMANS 1ST BLOG', '1ST BLOG OF AMAN'),
(23, 'aman 2nd blog', 'aman 2nd blog isnkgfiwekbwufwujg'),
(23, 'aman 2nd blog', 'aman 2nd blog isnkgfiwekbwufwujg'),
(23, 'aman 3rd blog', 'aman 2nd blog isnkgfiwekbwufwujg'),
(23, 'aman 3rd blog', 'aman 2nd blog isnkgfiwekbwufwujg'),
(23, 'aman 4th blog', 'wqkfegweuifgweuifwu8ifg'),
(23, 'jvjvjv', 'loggkln.'),
(23, 'blog 56', 'blog 54'),
(23, 'aman', 'kgvmjkvjmlbv '),
(22, 'new blog56', '56'),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, 'vikash mid blog', 'loiuwgfcujgwjucyudfwjhdwqfdhywqcvdjhnvqd'),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, 'vikash blog n', 'kbvfc,iubew3kiubj'),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(0, '', ''),
(22, '', ''),
(22, 'blog m', 'qisbwqwvxwuyvw2'),
(22, 'dog22', 'ujhuf'),
(22, '', ''),
(22, '', ''),
(22, 'new blog vikash ', 'frtruddyhgdgh'),
(22, '', ''),
(22, '', ''),
(22, 'qdxscwc', 'cdwecew'),
(22, '', ''),
(22, 'yj', 'rhjtjt'),
(22, '', ''),
(22, 'gretgtrg', 'vdvvbervbre'),
(22, 'new blog', 'rd55yr5'),
(22, '', ''),
(22, 'hrh', 'erheh'),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(22, '', ''),
(24, 'YASH BLOG1', 'YAIJQGBSJWGDJIW'),
(22, 'new blog jjjjjj', 'hytnynytn'),
(25, '22 blog', 'sdvdvvberbv'),
(25, '88', '8gu8gugugb'),
(26, 'don blog', 'don blog');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`) VALUES
(1, '', 'ds8184339@gmail.com', '1'),
(2, '', 'deshrajsingh98215@gmail.com', '2'),
(3, '', 'admin@admin.com', '3'),
(4, '', 'dab@gmail.com', '4'),
(5, '', 'dab@gmail.com', '55'),
(6, '', 'a@123', 'b'),
(7, '', 'a@123', 'b'),
(8, '', 'a@123', 'b'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', 'j@gmail.com', '21'),
(13, '', 'j@gmail.com', '21'),
(14, '', 'j@gmail.com', '21'),
(15, '', 'KK@gmail.com', '87'),
(16, '', 'adi@gmail.com', '556'),
(17, '', 'adi@gmail.com', '556'),
(18, '', 'adi@gmail.com', '556'),
(19, '', 'js@gmail.com', 'll'),
(20, 'DESHRAJ', 'MANOJ@GMAIL.COM', '98756'),
(21, 'DESHRAJ', 'MANOJ@GMAIL.COM', '98756'),
(22, 'VIKAS', 'vikas@gmail.com', 'vikash'),
(23, 'AMAN', 'aman@gmail.com', 'aman'),
(24, 'YASH', 'yash@gmail.com', 'yash'),
(25, 'DESHRAJ22', 'ds8184339@gmail.com', '12'),
(26, 'DON', 'donn@gmail.com', '4');

-- --------------------------------------------------------

--
-- Table structure for table `scsignup`
--

CREATE TABLE `scsignup` (
  `FIRSTNAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `CONFIRMPASSWORD` varchar(255) NOT NULL,
  `PHONENO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scsignup`
--

INSERT INTO `scsignup` (`FIRSTNAME`, `LASTNAME`, `EMAIL`, `PASSWORD`, `CONFIRMPASSWORD`, `PHONENO`) VALUES
('DESHRAJ', 'SINGH', 'deshrajsingh98215@gmail.com', '12345', '7358496416', 2147483647),
('DESHRAJ', 'SINGH', 'deshrajsingh98215@gmail.com', '123', '5555555555', 2147483647),
('DESHRAJ', 'SINGH', 'deshrajsingh98215@gmail.com', '123', '5555555555', 2147483647),
('kumar', 'raj', 'admin@admin.com', '1', '5555555555', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
