-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 06:28 AM
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
-- Database: `list_game`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_game`
--

CREATE TABLE `data_game` (
  `id` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `release_date` date NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Platform` varchar(100) NOT NULL,
  `Pengembang` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Metascore` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_game`
--

INSERT INTO `data_game` (`id`, `judul`, `release_date`, `Genre`, `Platform`, `Pengembang`, `Penerbit`, `Gambar`, `Metascore`) VALUES
(1, 'Hogwarts Legacy', '2023-02-10', '', '', 'Avalanche Software', 'Warner Bros. Games', 'https://cdn.cloudflare.steamstatic.com/steam/apps/990080/header.jpg?t=1680647016', '10'),
(2, 'Red Dead Redemption 2', '2018-10-26', '', '', ' Rockstar Games', ' Rockstar Games', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1174180/header.jpg?t=1671485009', '9'),
(3, 'Assassin\'s Creed Valhalla', '2020-11-10', '', '', 'Ubisoft Montreal', 'Ubisoft ', 'https://cdn.cloudflare.steamstatic.com/steam/apps/2208920/header.jpg?t=1671135934', '8'),
(4, 'Yakuza: Like a Dragon', '2020-01-16', '', '', 'Ryu Ga Gotoku Studio', ' SEGA', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1235140/header.jpg?t=1683900288', '10'),
(5, 'Resident Evil 4 REMAKE', '2023-03-23', '', '', 'CAPCOM Co., Ltd.', 'CAPCOM Co., Ltd.', 'https://cdn.cloudflare.steamstatic.com/steam/apps/2050650/header.jpg?t=1684904145', '10'),
(39, 'FINAL FANTASY VII REMAKE', '2020-04-10', '', '', 'Square Enix', 'Square Enix', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1462040/header.jpg?t=1663767129', '9\r\n'),
(40, 'Marvel\'s Spider-Man', '2018-09-07', '', '', ' Insomniac Games, Nixxes Software', ' PlayStation PC LLC', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1817070/header.jpg?t=1673999865', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_game`
--
ALTER TABLE `data_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_game`
--
ALTER TABLE `data_game`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
