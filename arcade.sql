-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 12:56 AM
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
-- Database: `arcade`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`ID`, `Title`, `Description`, `Image`, `Price`, `Date`, `Status`) VALUES
(1, 'Razer Basilisk V3 Pro', 'This contoured, wireless gaming mouse has 9 programmable buttons.', '1.png', '109', '2024-07-08 23:35:57', 'True'),
(2, 'Logitech G502 X Plus', 'Excellent premium gaming mouse with plenty of features.', '4.png', '80', '2024-07-08 23:37:00', 'True'),
(3, 'Razer DeathAdder V3 Pro', 'Ultra-lightweight. Zero Excess, Full Performance.', '3.png', '129', '2024-07-08 23:41:34', 'True'),
(4, 'Cooler Master MM720', 'An excellent entry-level gaming mouse that should please fans.', '2.png', '99', '2024-07-08 23:42:36', 'True'),
(5, 'Corsair K100 Air Wireless', 'Ultra-thin frame for increased comfort · Multi-device connectivity.', '8.png', '109', '2024-07-08 23:43:54', 'True'),
(6, 'Razer Deathstalker V2 Pro', 'A wireless ultra-slim optical keyboard optimized for top-tier performance and durability.', '6.png', '225', '2024-07-08 23:45:11', 'True'),
(7, 'MSI Vigor GK71 Sonic', 'Feel the ultimate in linear keystrokes and lightweight design.', '5.png', '89', '2024-07-08 23:46:16', 'True'),
(8, 'Corsair K100 RGB', 'Stylish aluminum design with RGB edge.', '7.png', '50', '2024-07-08 23:49:23', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `ID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`ID`, `Title`, `Description`, `Image`, `Price`, `Date`, `Status`) VALUES
(20, 'Google Play Gift Cards', 'Gift cards for Google purchases.', 'ff.png', '10', '2024-07-16 19:22:53', 'True'),
(21, 'Google Play Gift Cards', 'Gift cards for Google purchases.', 'ff.png', '20', '2024-07-16 19:22:53', 'True'),
(22, 'Google Play Gift Cards', 'Gift cards for Google purchases.', 'ff.png', '50', '2024-07-16 19:22:53', 'True'),
(23, 'Xbox Gift Cards', 'Gift cards for Xbox purchases.', 'xbox.png', '10', '2024-07-16 19:22:53', 'True'),
(24, 'Xbox Gift Cards', 'Gift cards for Xbox purchases.', 'xbox.png', '20', '2024-07-16 19:22:53', 'True'),
(25, 'Xbox Gift Cards', 'Gift cards for Xbox purchases.', 'xbox.png', '50', '2024-07-16 19:22:53', 'True'),
(26, 'Play Station Gift Cards', 'Gift cards for Play Station purchases.', 'play.png', '10', '2024-07-16 19:25:55', 'True'),
(27, 'Play Station Gift Cards', 'Gift cards for Play Station purchases.', 'play.png', '20', '2024-07-16 19:26:52', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `ID` int(11) NOT NULL,
  `IP` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `ID` int(20) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`ID`, `Title`, `Description`, `Image`, `Price`, `Date`, `Status`) VALUES
(202, 'CyberPunk', 'Enter the world of Cyberpunk 2077', 'p4.jpg', '1099', '2024-09-04 21:21:04', 'True'),
(203, 'PUBG', 'PUBG: BATTLEGROUNDS is a battle royale.', 'p10.jpg', '209', '2024-09-04 21:21:09', 'True'),
(204, 'Monster Hunter', 'Monster Hunter (モンスターハンタ)', 'p2.png', '599', '2024-09-04 21:21:16', 'True'),
(205, 'Blue Archive', 'Blue Archive is a role-playing game developed by Nexon Games', 'blue.jpg', '899', '2024-09-04 21:36:10', 'True'),
(206, 'Persona 5', 'Persona 5 is a 2016 role-playing video game developed by P-Studio', 'p0.jpg', '799', '2024-09-04 22:05:51', 'True'),
(207, 'Pokemon Go', 'Join Trainers around the world and play Pokémon GO', 'pkmn.jpg', '299', '2024-09-04 21:37:36', 'True'),
(208, 'Red Dead Redemption', 'Red Dead Redemption is a 2010 action-adventure game developed by Rockstar', 'l3.jpg', '699', '2024-09-05 08:57:49', 'True'),
(209, 'Grand Theft Auto', 'Play the genre-defining classics of the original Grand Theft Auto', 'l5.jpg', '99', '2024-09-05 08:58:29', 'True'),
(210, 'SkyRim', 'The Elder Scrolls V: Skyrim is a single-player.', 'p1.jpg', '999', '2024-09-11 19:30:32', 'True'),
(211, 'Counter Strike', 'Counter-Strike (CS) is a series of multiplayer tactical first-person shooter', 'l4.jpg', '59', '2024-09-05 09:03:30', 'True'),
(212, 'Minecraft', 'Minecraft is a 2011 sandbox game developed and published by Mojang Studios', 'l10.jpg', '35', '2024-09-05 09:05:30', 'True'),
(213, 'Risk of Rain 2', 'Escape a chaotic alien planet by fighting through hordes', 'p6.jpg', '499', '2024-09-05 09:08:03', 'True'),
(214, 'Last Epoch', 'Last Epoch combines time travel, exciting dungeon crawling', 'p7.jpg', '499', '2024-09-05 09:18:58', 'True'),
(215, 'Final Fantasy VII', 'Final Fantasy VII is a 1997 role-playing video game developed by Square', 'p3.jpg', '299', '2024-09-05 09:20:06', 'True'),
(217, 'Horizon', 'Horizon is a science fiction action role-playing game series.', 'p8.jpg', '77', '2024-09-11 19:30:52', 'True'),
(218, 'Football Manager', 'Unrivalled series of football management simulation video games.', 'fm.jpg', '289', '2024-09-05 09:25:00', 'True'),
(219, 'Euro Truck Simulator 2', 'Euro Truck Simulator 2 features 7 licensed truck brands and a total of 22 unique truck', 'truck.jpg', '999', '2024-09-05 09:26:48', 'True'),
(220, 'War Thunder', 'This is the World of Warhunder. How it feels to play War Thunder', 'war.jpg', '49', '2024-09-05 09:28:33', 'True'),
(221, 'Forza Horizon', 'Your Ultimate Horizon Adventure awaits!', 'p5.jpg', '200', '2024-09-05 09:36:28', 'True'),
(222, 'Asseto Corsa', 'Assetto Corsa features an advanced.', 'l6.jpg', '99', '2024-09-11 19:29:32', 'True'),
(224, 'NFS Most Wanted 2', 'Need for Speed: Most Wanted is a single and multiplayer car racing game', 'wp2278183-need-for-speed-most-wanted-2012-wallpapers.jpg', '99', '2024-09-05 23:51:39', 'True'),
(225, 'Tetris', 'Visit the official Tetris® website to play', 'tetris.png', '40', '2024-09-05 09:51:57', 'True'),
(226, 'Half Life', 'A new, full-length entry in the Half-Life series', 'half.jpg', '79', '2024-09-05 09:52:32', 'True'),
(227, 'Beat Saber', 'Beat Saber is a VR rhythm game where you slash.', 'beat saber.png', '299', '2024-09-11 19:28:21', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Nafis', 'nafiss3333@gmail.com', '$2y$10$PXX8M1hurN2EHJwRNqwJyO/3d3H.NA.EW0t3qV1B4469xDJjy07c6'),
(4, 'admin', 'enu@gmail.com', '$2y$10$wiMIO03.TiReWkQn2Od09e1WLi..0NGIGIsf.MCDv9zFaOpnQpnFm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
