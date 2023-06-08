-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 05:34 AM
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
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Platform` varchar(255) NOT NULL,
  `Pengembang` varchar(255) NOT NULL,
  `Penerbit` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Metascore` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_game`
--

INSERT INTO `data_game` (`id`, `judul`, `release_date`, `Genre`, `Platform`, `Pengembang`, `Penerbit`, `Gambar`, `Video`, `Metascore`) VALUES
(1, 'Hogwarts Legacy', '2023-02-10', 'Open world, Action role-playing game', 'PlayStation 5, Nintendo Switch, PlayStation 4, Xbox Series X and Series S, Xbox One, Microsoft Windows', 'Avalanche Software', 'Warner Bros. Games', 'https://cdn1.epicgames.com/offer/e97659b501af4e3981d5430dad170911/EGS_HogwartsLegacy_AvalancheSoftware_S1_2560x1440-2baf3188eb3c1aa248bcc1af6a927b7e', 'https://youtu.be/BsC-Rl9GYy0', '10'),
(2, 'Red Dead Redemption 2', '2018-10-26', 'Open world, Action role-playing game', ' PlayStation 4, Xbox One, Microsoft Windows', ' Rockstar Games', ' Rockstar Games', 'https://m.media-amazon.com/images/I/7164BYhGhZL._AC_SX679_.jpg', 'https://youtu.be/gmA6MrX81z4', '9'),
(3, 'Assassin\'s Creed Valhalla', '2020-11-10', ' Action-adventure game,  Fighting game, Platform game, Action role-playing game, Adventure', ' PlayStation 5, PlayStation 4, Xbox One, Xbox Series X and Series S, Microsoft Windows', 'Ubisoft Montreal', 'Ubisoft ', 'https://image.api.playstation.com/vulcan/ap/rnd/202008/0723/i2ICFMr0Ius6qtYYD9GNrY68.jpg', 'https://youtu.be/1wiclO4a60A', '8'),
(4, 'Yakuza: Like a Dragon', '2020-01-16', 'RPG, Adventure, Action, JRPG, Turn-Based+', 'PlayStation 5, PlayStation 4, Xbox One', 'Ryu Ga Gotoku Studio', ' SEGA', 'https://laptopnesia.com/wp-content/uploads/2021/03/Yakuza-Like-a-Dragon-1.jpg', 'https://youtu.be/AJhqN7R_oAg', '10'),
(5, 'Resident Evil 4 REMAKE', '2023-03-23', 'Puzzle, Survival horror, Shooter, Action, Adventure', 'PlayStation 5, PlayStation 4, Xbox Series X and Series S, Microsoft Windows', 'CAPCOM Co., Ltd.', 'CAPCOM Co., Ltd.', 'https://cdn.cloudflare.steamstatic.com/steam/apps/2050650/header.jpg?t=1684904145', 'https://youtu.be/rcFarJACzx0', '10'),
(39, 'FINAL FANTASY VII REMAKE', '2020-04-10', 'Action role-playing game, Fighting game, Adventure game, Adventure', 'PlayStation 5, PlayStation 4, Microsoft Windows', 'Square Enix', 'Square Enix', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1462040/header.jpg?t=1663767129', 'https://youtu.be/ERgrFVhL-n4', '9'),
(40, 'Marvel\'s Spider-Man', '2018-09-07', ' Open world, Action-adventure game, Nonlinear gameplay', 'PlayStation 4, PlayStation 5, Microsoft Windows', ' Insomniac Games, Nixxes Software', ' PlayStation PC LLC', 'https://cdn.cloudflare.steamstatic.com/steam/apps/1817070/header.jpg?t=1673999865', 'https://youtu.be/8pR0o2fGyHg', '10'),
(41, 'Ghost of Tsushima', '2020-07-17', 'Stealth game, Role-playing, Fighting, Action-adventure', 'PlayStation 5, PlayStation 4', 'Sucker Punch Productions', 'Sony Interactive Entertainment', 'https://i0.wp.com/workingcasual.com/wp-content/uploads/2020/07/Ghost-of-Tsushima-Title-scaled.jpg?ssl=1', 'https://youtu.be/RcWk08PBe7k', '9');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
