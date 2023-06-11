-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 03:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubespw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_films`
--

CREATE TABLE `tb_films` (
  `id` int NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kode` char(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jenis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_films`
--

INSERT INTO `tb_films` (`id`, `judul`, `kode`, `jenis`, `tahun`, `gambar`) VALUES
(1, 'Peaky Blinders', '001', 'Top 1 Films', '2013', 'logo.png'),
(2, 'Spy x Family: Code: White', '002', 'trending Movies', '2023', 'logo.png'),
(3, 'Demon Slayer : Mugen Train', '003', 'Trending Movies', '2020', 'logo.png'),
(4, 'Jujutsu Kaisen 0', '004', 'Trending Movies', '2020', 'logo.png'),
(5, 'Dragon Ball Super: Super Hero', '005', 'Trending Movies', '2022', 'logo.png'),
(6, 'One Piece Film: Red', '006', 'Trending Movies', '2022', 'logo.png'),
(7, 'Tenet', '007', 'Hollywood Movies', '2020', 'logo.png'),
(8, 'Wonder Woman 1984', '008', 'Hollywood Movies', '2020', 'logo.png'),
(9, 'Monochrome', '009', 'Hollywood Movies', '2016', 'logo.png'),
(10, 'Mortal', '010', 'Hollywood Movies', '2020', 'logo.png'),
(11, 'Don\'t Look Back', '011', 'Hollywood Movies', '2020', 'logo.png'),
(12, 'the bloodhound', '012', 'Hollywood Movies', '2020', 'logo.png'),
(13, 'Reunion', '013', 'Hollywood Movies', '2020', 'logo.png'),
(14, 'Chibi Tiny Tales', '014', 'Disney Favorites', '2020', 'logo.png'),
(15, '101 Dalmatians', '015', 'Disney Favorites', '1996', 'logo.png'),
(16, 'Alice in Wonderland', '016', 'Disney Favorites', '2010', 'logo.png'),
(17, 'Beauty and the Beast', '017', 'Disney Favorites', '2017', 'logo.png'),
(18, 'Moana', '018', 'Disney Favorites', '2016', 'logo.png'),
(19, 'Frozen', '019', 'Disney Favorites', '2013', 'logo.png'),
(20, 'The Rescuers', '020', 'Disney Favorites', '1977', 'logo.png'),
(22, 'Finding Dory', '022', 'Pixar Movies', '2016', 'logo.png'),
(23, 'Inside Out', '023', 'Pixar Movies', '2015', 'logo.png'),
(24, 'Cars 3', '024', 'Pixar Movies', '2017', 'logo.png'),
(25, 'Luca', '025', 'Pixar Movies', '2021', 'logo.png'),
(26, 'Monsters University', '026', 'Pixar Movies', '2013', 'logo.png'),
(27, 'The Good Dinosaur', '027', 'Pixar Movies', '2015', 'logo.png'),
(28, 'Toy Story 3', '028', 'Pixar Movies', '2010', 'logo.png'),
(29, 'Obi-Wan Kenobi', '029', 'Star Wars Maovies', '2022', 'logo.png'),
(30, 'Tales of the Jedi', '030', 'Star Wars Maovies', '2022', 'logo.png'),
(31, 'Star Wars: The Last Jedi', '031', 'Star Wars Maovies', '2017', 'logo.png'),
(32, 'The Mandalorian', '032', 'Star Wars Maovies', '2019', 'logo.png'),
(33, 'Rogue One: A Star Wars Story', '033', 'Star Wars Maovies', '2016', 'logo.png'),
(34, 'The Book of Boba Fett', '034', 'Star Wars Maovies', '2021', 'logo.png'),
(35, 'Star Wars: The Bad Batch', '035', 'Star Wars Maovies', '2021', 'logo.png'),
(36, 'Teka-teki Tika', '036', 'Indonesian Movies', '2021', 'logo.png'),
(37, 'Ada Apa dengan Cinta? 2', '037', 'Indonesian Movies', '2016', 'logo.png'),
(38, 'Surga yang Tak Dirindukan', '038', 'Indonesian Movies', '2015', 'logo.png'),
(39, 'Tenggelamnya Kapal Van der Wijck', '039', 'Indonesian Movies', '2013', 'logo.png'),
(40, 'Yowis Ben', '040', 'Indonesian Movies', '2018', 'logo.png'),
(41, 'Cek Toko Sebelah', '041', 'Indonesian Movies', '2016', 'logo.png'),
(42, 'Habibie & Ainun', '042', 'Indonesian Movies', '2012', 'logo.png'),
(43, 'Avengers: Endgame', '043', 'G Movies Hits', '2019', 'logo.png'),
(44, 'Alice in Wonderland\r\n', '044', 'G Movies Hits', '2010', 'logo.png'),
(45, 'Black Panther: Wakanda Forever\r\n', '045', 'G Movies Hits', '2022', 'logo.png'),
(46, 'Spider-Man: Homecoming\r\n', '046', 'G Movies Hits', '2017', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_films`
--
ALTER TABLE `tb_films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_films`
--
ALTER TABLE `tb_films`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
