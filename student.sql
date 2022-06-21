-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 08:03 PM
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
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` int(20) NOT NULL,
  `IMAGE` varchar(50) NOT NULL,
  `CREATED_AT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `EMAIL`, `PHONE`, `IMAGE`, `CREATED_AT`) VALUES
(9, 'Shreya', 'Shreya', 123456789, 'upload/p3.jpg', '2022-06-21 14:14:22'),
(10, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 14:48:10'),
(11, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 14:49:35'),
(12, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 14:50:32'),
(13, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 14:50:37'),
(14, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 14:51:04'),
(15, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 14:56:59'),
(16, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 15:18:19'),
(17, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 15:19:04'),
(18, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 15:19:07'),
(19, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 15:30:31'),
(20, 'Sunita Gupta ', 'sunita123@gmail.com', 123456789, 'upload/p1.jpg', '2022-06-21 15:33:08'),
(21, 'Gauri Gupta', 'gauri123@gmail.com', 987654321, 'upload/p1.jpg', '2022-06-21 16:27:43'),
(22, 'Gauri Gupta', 'gauri123@gmail.com', 987654321, 'upload/p1.jpg', '2022-06-21 16:38:53'),
(23, 'Gauri Gupta', 'gauri123@gmail.com', 987654321, 'upload/p1.jpg', '2022-06-21 16:38:59'),
(24, 'Gauri Gupta', 'gauri123@gmail.com', 987654321, 'upload/p1.jpg', '2022-06-21 16:40:02'),
(26, 'fgf', 'dfjkdf', 0, 'upload/cancel.png', '2022-06-21 16:41:06'),
(27, 'Gauri', 'gauri.gupta6464@gmail.com', 987654321, 'upload/p1.jpg', '2022-06-21 16:58:57'),
(28, 'Gauri', 'gauri.gupta6464@gmail.com', 987654321, 'upload/p1.jpg', '2022-06-21 17:00:03'),
(29, 'Gauri', 'gauri.gupta6464@gmail.com', 987654321, 'upload/edit.png', '2022-06-21 17:04:22'),
(32, 'Gaurifdkjnjfd', 'gauri.gupta6464@gmail.com', 2147483647, 'upload/edit.png', '2022-06-21 17:42:10'),
(33, 'dfg', 'gh', 0, 'upload/cancel.png', '2022-06-21 17:52:38'),
(34, 'dfg', 'gh', 0, 'upload/cancel.png', '2022-06-21 18:00:58'),
(35, 'Gauri', 'gauri.gupta6464@gmail.com', 2147483647, 'upload/cancel.png', '2022-06-21 18:02:08'),
(36, 'Gauri', 'gauri.gupta6464@gmail.com', 2147483647, 'upload/cancel.png', '2022-06-21 18:02:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
