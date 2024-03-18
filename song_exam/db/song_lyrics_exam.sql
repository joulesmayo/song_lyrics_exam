-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 12:41 PM
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
-- Database: `song_lyrics_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_song`
--

CREATE TABLE `table_song` (
  `id` int(10) NOT NULL,
  `artist` varchar(999) NOT NULL,
  `lyrics` longtext NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `title` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_song`
--

INSERT INTO `table_song` (`id`, `artist`, `lyrics`, `date_created`, `title`) VALUES
(1, 'Justin Bie', 'What&#039;s your ETA', '2024-03-18', 'ETA'),
(4, 'Adelle12', '  Hello, its me ', '2024-03-18', 'Hello'),
(7, ' Bryan White', 'God Gave me you to show me what&#039;s real ', '2024-03-18', 'God Gave Me You'),
(8, 'Spongecola', 'Sayang giliw, ito ang sinapit ', '2024-03-18', 'Nakapagtataka ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_song`
--
ALTER TABLE `table_song`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_song`
--
ALTER TABLE `table_song`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
