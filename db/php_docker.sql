-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Apr 23, 2023 at 06:04 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_docker`
--

-- --------------------------------------------------------

--
-- Table structure for table `Clubs`
--

CREATE TABLE `Clubs` (
  `clubID` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `yearFounded` int NOT NULL,
  `leagueID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Clubs`
--

INSERT INTO `Clubs` (`clubID`, `name`, `location`, `yearFounded`, `leagueID`) VALUES
(222, 'Newcastle United', 'Newcastle upon Tyne', 1892, 111),
(444, 'FC Barcelona', 'Barcelona', 1899, 333),
(666, 'Borussia Dortmund', 'Dortmund', 1909, 555),
(888, 'A.S. Roma', 'Rome', 1927, 777),
(889, 'Paris Saint Germain', 'Paris', 1970, 999);

-- --------------------------------------------------------

--
-- Table structure for table `Leagues`
--

CREATE TABLE `Leagues` (
  `leagueID` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(30) NOT NULL,
  `rank` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Leagues`
--

INSERT INTO `Leagues` (`leagueID`, `name`, `country`, `rank`) VALUES
(111, 'Premier League', 'England', 1),
(333, 'La Liga', 'Spain', 2),
(555, 'Bundesliga', 'Germany', 3),
(777, 'Serie A', 'Italy', 4),
(999, 'Ligue 1', 'France', 5);

-- --------------------------------------------------------

--
-- Table structure for table `Players`
--

CREATE TABLE `Players` (
  `playerID` int NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `position` varchar(20) NOT NULL,
  `clubID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Players`
--

INSERT INTO `Players` (`playerID`, `firstName`, `lastName`, `position`, `clubID`) VALUES
(12, 'Miguel', 'Almiron', 'Forward', 222),
(34, 'Ronald', 'Araujo', 'Defender', 444),
(56, 'Jude', 'Bellingham', 'Midfielder', 666),
(78, 'Paulo', 'Dybala', 'Forward', 888),
(90, 'Gianluigi', 'Donnarumma', 'Goalkeeper', 889);

-- --------------------------------------------------------

--
-- Table structure for table `Stats`
--

CREATE TABLE `Stats` (
  `playerID` int NOT NULL,
  `appearences` int NOT NULL,
  `goals` int DEFAULT NULL,
  `assists` int DEFAULT NULL,
  `cleanSheets` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Stats`
--

INSERT INTO `Stats` (`playerID`, `appearences`, `goals`, `assists`, `cleanSheets`) VALUES
(12, 26, 11, 1, NULL),
(34, 17, 0, 2, 13),
(56, 38, 10, 7, NULL),
(78, 35, 15, 7, NULL),
(90, 47, NULL, NULL, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Clubs`
--
ALTER TABLE `Clubs`
  ADD PRIMARY KEY (`clubID`),
  ADD KEY `leagueID` (`leagueID`);

--
-- Indexes for table `Leagues`
--
ALTER TABLE `Leagues`
  ADD PRIMARY KEY (`leagueID`);

--
-- Indexes for table `Players`
--
ALTER TABLE `Players`
  ADD PRIMARY KEY (`playerID`),
  ADD KEY `clubID` (`clubID`);

--
-- Indexes for table `Stats`
--
ALTER TABLE `Stats`
  ADD PRIMARY KEY (`playerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Clubs`
--
ALTER TABLE `Clubs`
  MODIFY `clubID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=894;

--
-- AUTO_INCREMENT for table `Leagues`
--
ALTER TABLE `Leagues`
  MODIFY `leagueID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Clubs`
--
ALTER TABLE `Clubs`
  ADD CONSTRAINT `clubToLeague` FOREIGN KEY (`leagueID`) REFERENCES `Leagues` (`leagueID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Players`
--
ALTER TABLE `Players`
  ADD CONSTRAINT `playersToClub` FOREIGN KEY (`clubID`) REFERENCES `Clubs` (`clubID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Stats`
--
ALTER TABLE `Stats`
  ADD CONSTRAINT `statsToPlayers` FOREIGN KEY (`playerID`) REFERENCES `Players` (`playerID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
