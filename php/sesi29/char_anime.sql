-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 04:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `char_anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama_anime` varchar(50) NOT NULL,
  `rilis` year(4) NOT NULL,
  `id_author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `img`, `nama_anime`, `rilis`, `id_author`) VALUES
(1, 'AOT.png', 'Attack On Titan', '2013', 7),
(2, 'Black-Clover.png', 'Black Clover', '2017', 8),
(3, 'Bleach.png', 'Bleach', '2004', 3),
(4, 'Dragon-Ball.png', 'Dragon Ball', '1986', 9),
(5, 'HxH.jpg', 'Hunter x Hunter', '2011', 10),
(6, 'Jujutsu.jpg', 'Jujutsu Kaisen', '2019', 4),
(7, 'Demon-Slayer.png', 'Kimetsu No Yaiba', '2019', 5),
(8, 'Naruto.png', 'Naruto Shippuden', '2007', 2),
(9, 'One-Piece.png', 'One Piece', '1999', 1),
(10, 'OPM.jpg', 'One Punch Man', '2015', 6);

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama_author` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `img`, `nama_author`, `tgl_lahir`) VALUES
(1, 'Oda.jpg', 'Eiichiro Oda', '1975-01-01'),
(2, 'Masashi.jpg', 'Masashi Kishimoto', '1974-11-08'),
(3, 'Tite.jpg', 'Tite Kubo', '1977-06-26'),
(4, 'Gege.jpg', 'Gege Akutami', '1992-02-26'),
(5, 'Koyoharu.png', 'Koyoharu Getoge', '1989-05-05'),
(6, 'Murata.png', 'Yusuke Murata', '1978-07-04'),
(7, 'Hajime.jpg', 'Hajime Isayama', '1986-08-29'),
(8, 'Tabata.jpg', 'Yuki Tabata', '1984-06-30'),
(9, 'Toriyama.jpg', 'Akira Toriyama', '1955-04-05'),
(10, 'Yoshihiro.jpg', 'Yoshihiro Togashi', '1966-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama_char` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_anime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `img`, `nama_char`, `tgl_lahir`, `id_anime`) VALUES
(1, 'Asta.jpg', 'Asta', '2023-10-04', 2),
(2, 'Eren.jpg', 'Eren Yeager', '2023-03-30', 1),
(3, 'Gon.jpg', 'Gon Freecss', '2023-05-05', 5),
(4, 'Ichigo.jpg', 'Kurosaki Ichigo', '2023-07-15', 3),
(5, 'Luffy.jpg', 'Monkey D. Luffy', '2023-05-05', 9),
(6, 'Saitama-OPM.png', 'Saitama', '2023-10-15', 10),
(7, 'Goku.jpg', 'Son Goku', '2023-04-16', 4),
(8, 'Tanjiro.jpg', 'Tanjiro Kamado', '2023-07-14', 7),
(9, 'Naruto.jpg', 'Uzumaki Naruto', '2023-10-10', 8),
(10, 'Yuji.jpg', 'Yuji Itadori', '2023-03-15', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_author`) USING BTREE;

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_anime`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anime`
--
ALTER TABLE `anime`
  ADD CONSTRAINT `anime_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`id_anime`) REFERENCES `anime` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
