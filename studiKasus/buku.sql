-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 12:28 PM
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
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`) VALUES
(1, 'One Piece'),
(2, 'Naruto Shippuden'),
(3, 'Jujutsu Kaisen'),
(4, 'Kimetsu No Yaiba'),
(5, 'Record Of Ragnarok');

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id_komik` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `nama_komik` varchar(50) NOT NULL,
  `tahun` year(4) NOT NULL,
  `harga` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `penerbit_id` int(11) NOT NULL,
  `pengarang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id_komik`, `img`, `nama_komik`, `tahun`, `harga`, `category_id`, `penerbit_id`, `pengarang_id`) VALUES
(1, 'Jujutsu Kaisen Volume 15.jpg', 'Jujutsu Kaisen Vol. 15', '2021', 150000, 3, 1, 2),
(2, 'Jujutsu Kaisen Volume 16.jpg', 'Jujutsu Kaisen Vol. 16', '2021', 150000, 3, 1, 2),
(3, 'Jujutsu Kaisen Volume 17.jpg', 'Jujutsu Kaisen Vol. 17', '2021', 150000, 3, 1, 2),
(4, 'Jujutsu Kaisen Volume 18.jpg', 'Jujutsu Kaisen Vol. 18', '2021', 150000, 3, 1, 2),
(5, 'Jujutsu Kaisen Volume 19.jpg', 'Jujutsu Kaisen Vol. 19', '2022', 150000, 3, 1, 2),
(6, 'Jujutsu Kaisen Volume 20.jpg', 'Jujutsu Kaisen Vol. 20', '2022', 150000, 3, 1, 2),
(7, 'Jujutsu Kaisen Volume 21.jpg', 'Jujutsu Kaisen Vol. 21', '2022', 150000, 3, 1, 2),
(8, 'Jujutsu Kaisen Volume 22.jpg', 'Jujutsu Kaisen Vol. 22', '2023', 150000, 3, 1, 2),
(9, 'Jujutsu Kaisen Volume 23.jpg', 'Jujutsu Kaisen Vol. 23', '2023', 150000, 3, 1, 2),
(10, 'Jujutsu Kaisen Volume 24.jpg', 'Jujutsu Kaisen Vol. 24', '2023', 150000, 3, 1, 2),
(11, 'One Piece Volume 98.jpg', 'One Piece Vol. 98', '2021', 150000, 1, 1, 3),
(12, 'One Piece Volume 99.jpg', 'One Piece Vol. 99', '2021', 150000, 1, 1, 3),
(13, 'One Piece Volume 100.jpg', 'One Piece Vol. 100', '2021', 150000, 1, 1, 3),
(14, 'One Piece Volume 101.jpg', 'One Piece Vol. 101', '2021', 150000, 1, 1, 3),
(15, 'One Piece Volume 102.jpg', 'One Piece Vol. 102', '2022', 150000, 1, 1, 3),
(16, 'One Piece Volume 103.jpg', 'One Piece Vol. 103', '2022', 150000, 1, 1, 3),
(17, 'One Piece Volume 104.jpg', 'One Piece Vol. 104', '2022', 150000, 1, 1, 3),
(18, 'One Piece Volume 105.jpg', 'One Piece Vol. 105', '2023', 150000, 1, 1, 3),
(19, 'One Piece Volume 106.jpg', 'One Piece Vol. 106', '2023', 150000, 1, 1, 3),
(20, 'One Piece Volume 107.jpg', 'One Piece Vol. 107', '2023', 150000, 1, 1, 3),
(21, 'Naruto Volume 63.jpg', 'Naruto Shippuden Vol. 63', '2012', 150000, 2, 1, 1),
(22, 'Naruto Volume 64.jpg', 'Naruto Shippuden Vol. 64', '2013', 150000, 2, 1, 1),
(23, 'Naruto Volume 65.jpg', 'Naruto Shippuden Vol. 65', '2013', 150000, 2, 1, 1),
(24, 'Naruto Volume 66.jpg', 'Naruto Shippuden Vol. 66', '2013', 150000, 2, 1, 1),
(25, 'Naruto Volume 67.jpg', 'Naruto Shippuden Vol. 67', '2013', 150000, 2, 1, 1),
(26, 'Naruto Volume 68.jpg', 'Naruto Shippuden Vol. 68', '2014', 150000, 2, 1, 1),
(27, 'Naruto Volume 69.jpg', 'Naruto Shippuden Vol. 69', '2014', 150000, 2, 1, 1),
(28, 'Naruto Volume 70.jpg', 'Naruto Shippuden Vol. 70', '2014', 150000, 2, 1, 1),
(29, 'Naruto Volume 71.jpg', 'Naruto Shippuden Vol. 71', '2014', 150000, 2, 1, 1),
(30, 'Naruto Volume 72.jpg', 'Naruto Shippuden Vol. 72', '2015', 150000, 2, 1, 1),
(31, 'KNY Volume 14.jpg', 'Kimetsu No Yaiba Vol. 14', '2019', 150000, 4, 1, 5),
(32, 'KNY Volume 15.jpg', 'Kimetsu No Yaiba Vol. 15', '2019', 150000, 4, 1, 5),
(33, 'KNY Volume 16.jpg', 'Kimetsu No Yaiba Vol. 16', '2019', 150000, 4, 1, 5),
(34, 'KNY Volume 17.jpg', 'Kimetsu No Yaiba Vol. 17', '2019', 150000, 4, 1, 5),
(35, 'KNY Volume 18.jpg', 'Kimetsu No Yaiba Vol. 18', '2019', 150000, 4, 1, 5),
(36, 'KNY Volume 19.jpg', 'Kimetsu No Yaiba Vol. 19', '2020', 150000, 4, 1, 5),
(37, 'KNY Volume 20.jpg', 'Kimetsu No Yaiba Vol. 20', '2020', 150000, 4, 1, 5),
(38, 'KNY Volume 21.jpg', 'Kimetsu No Yaiba Vol. 21', '2020', 150000, 4, 1, 5),
(39, 'KNY Volume 22.jpg', 'Kimetsu No Yaiba Vol. 22', '2020', 150000, 4, 1, 5),
(40, 'KNY Volume 23.jpg', 'Kimetsu No Yaiba Vol. 23', '2020', 150000, 4, 1, 5),
(41, 'Record Of Ragnarok Volume 10.jpg', 'Record Of Ragnarok Vol. 10', '2021', 150000, 5, 2, 4),
(42, 'Record Of Ragnarok Volume 11.jpg', 'Record Of Ragnarok Vol. 11', '2021', 150000, 5, 2, 4),
(43, 'Record Of Ragnarok Volume 12.jpg', 'Record Of Ragnarok Vol. 12', '2021', 150000, 5, 2, 4),
(44, 'Record Of Ragnarok Volume 13.jpg', 'Record Of Ragnarok Vol. 13', '2021', 150000, 5, 2, 4),
(45, 'Record Of Ragnarok Volume 14.jpg', 'Record Of Ragnarok Vol. 14', '2022', 150000, 5, 2, 4),
(46, 'Record Of Ragnarok Volume 15.jpg', 'Record Of Ragnarok Vol. 15', '2022', 150000, 5, 2, 4),
(47, 'Record Of Ragnarok Volume 16.jpg', 'Record Of Ragnarok Vol. 16', '2022', 150000, 5, 2, 4),
(48, 'Record Of Ragnarok Volume 17.jpg', 'Record Of Ragnarok Vol. 17', '2022', 150000, 5, 2, 4),
(49, 'Record Of Ragnarok Volume 18.jpg', 'Record Of Ragnarok Vol. 18', '2023', 150000, 5, 2, 4),
(50, 'Record Of Ragnarok Volume 19.jpg', 'Record Of Ragnarok Vol. 19', '2023', 150000, 5, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat`) VALUES
(1, 'Shueisha', 'Chiyoda, Tokyo'),
(2, 'Tokuma Shoten', 'Shinagawa, Tokyo');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `tgl_lahir`, `alamat`) VALUES
(1, 'Masashi Kishimoto', '1974-11-08', 'Okayama, Japan'),
(2, 'Gege Akutami', '1992-02-26', 'Iwate, Japan'),
(3, 'Eiichiro Oda', '1975-01-01', 'Kumamoto, Japan'),
(4, 'Shinya Umemura', '1967-04-10', 'Japan'),
(5, 'Koyoharu Gotouge', '1989-05-05', 'Fukuoka, Japan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id_komik`),
  ADD KEY `FOREIGN` (`category_id`,`penerbit_id`,`pengarang_id`) USING BTREE,
  ADD KEY `pengarang_id` (`pengarang_id`),
  ADD KEY `penerbit_id` (`penerbit_id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengarang`
--
ALTER TABLE `pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komik`
--
ALTER TABLE `komik`
  ADD CONSTRAINT `komik_ibfk_1` FOREIGN KEY (`pengarang_id`) REFERENCES `pengarang` (`id_pengarang`),
  ADD CONSTRAINT `komik_ibfk_2` FOREIGN KEY (`penerbit_id`) REFERENCES `penerbit` (`id_penerbit`),
  ADD CONSTRAINT `komik_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
