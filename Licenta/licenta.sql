-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2025 at 08:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenta`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `parola` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID`, `email`, `parola`) VALUES
(1, 'andra.giulia13@yahoo.com', '095b2626c9b6bad0eb89019ea6091bd9');

-- --------------------------------------------------------

--
-- Table structure for table `curse`
--

CREATE TABLE `curse` (
  `id` int(11) NOT NULL,
  `orasP` varchar(255) NOT NULL,
  `orasD` varchar(255) NOT NULL,
  `dataP` varchar(255) NOT NULL,
  `locuri` varchar(255) NOT NULL,
  `durata` varchar(255) NOT NULL,
  `pret` varchar(255) NOT NULL,
  `ora` time(6) NOT NULL,
  `companie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curse`
--

INSERT INTO `curse` (`id`, `orasP`, `orasD`, `dataP`, `locuri`, `durata`, `pret`, `ora`, `companie`) VALUES
(1, 'Bucuresti', 'Timisoara', '10/12/2025', '-1', '1 ora', '100 ', '13:00:00.000000', 'Wizz Air'),
(3, 'Timisoara', 'Cluj Napoca', '10/08/2025', '59', '1 ore', '190 lei', '15:00:00.000000', 'Wizz Air'),
(4, 'Cluj Napoca', 'Oradea', '10/13/2025', '109', '1 ora', '110 ', '07:30:00.000000', 'Wizz Air'),
(5, 'Timisoara', 'Roma', '10/09/2025', '295', '3 ore', '300 lei', '02:00:00.000000', 'Tarom'),
(9, 'Timisoara', 'Bucuresti', '10/16/2025', '87', '1 ora ', '120 lei', '22:00:00.000000', 'Wizz Air'),
(37, 'Barcelona', 'Timisoara', '06/29/2025', '300', '3', '500', '19:10:00.000000', 'Wizz Air'),
(38, 'Bari', 'Constanta', '06/30/2025', '500', '3', '250', '22:30:00.000000', 'Tarom'),
(39, 'Barcelona', 'Timisoara', '06/29/2025', '1', '2', '500', '00:20:00.000000', 'Wizz Air');

-- --------------------------------------------------------

--
-- Table structure for table `rezervari`
--

CREATE TABLE `rezervari` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_curse` varchar(255) NOT NULL,
  `locuri` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pret` int(11) NOT NULL,
  `plata` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervari`
--

INSERT INTO `rezervari` (`id`, `id_user`, `id_curse`, `locuri`, `status`, `pret`, `plata`) VALUES
(33, '14', '5', '1', 'In asteptare', 275, 0),
(34, '16', '5', '1', 'Aprobat', 200, 0),
(41, '2', '1', '1', 'Anulat', 900, 1),
(45, '2', '1', '1', 'Aprobat', 1200, 0),
(50, '1', '1', '1', 'Anulat', 1500, 0),
(52, '1', '4', '1', 'Aprobat', 1700, 1),
(57, '1', '34', '1', 'Anulat', 150, 1),
(58, '1', '34', '1', 'Anulat', 150, 1),
(59, '1', '34', '1', 'Anulat', 150, 1),
(61, '1', '1', '1', 'Aprobat', 100, 1),
(62, '1', '9', '1', 'Aprobat', 120, 1),
(65, '1', '1', '1', 'Aprobat', 100, 1),
(66, '1', '1', '1', 'Aprobat', 100, 1),
(67, '1', '1', '1', 'Anulat', 100, 0),
(68, '1', '1', '1', 'Anulat', 100, 1),
(69, '1', '1', '1', 'Anulat', 100, 1),
(70, '1', '1', '1', 'Aprobat', 100, 0),
(71, '1', '1', '1', 'In asteptare', 100, 0),
(72, '1', '1', '1', 'In asteptare', 100, 0),
(73, '1', '1', '1', 'In asteptare', 100, 0),
(74, '1', '1', '7', 'In asteptare', 100, 0),
(75, '1', '1', '7', 'In asteptare', 100, 0),
(76, '1', '1', '5', 'In asteptare', 100, 0),
(77, '1', '1', '7', 'In asteptare', 100, 0),
(78, '1', '1', '4', 'In asteptare', 100, 0),
(79, '1', '1', '7', 'In asteptare', 100, 0),
(80, '1', '1', '3', 'In asteptare', 100, 0),
(81, '1', '1', '7', 'In asteptare', 100, 0),
(82, '1', '1', '7', 'In asteptare', 100, 0),
(83, '1', '1', '8', 'In asteptare', 100, 0),
(84, '1', '1', '7', 'In asteptare', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Adresa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `Phone`, `Email`, `Password`, `Adresa`) VALUES
(1, 'Andrei', 'Munteanu', '0735792451', 'andrei.munteanu1398@gmail.com', '095b2626c9b6bad0eb89019ea6091bd9', 'Bucuresti'),
(2, 'Adrian', 'Dumitru', '0745694598', 'adrian@gmail.com', '095b2626c9b6bad0eb89019ea6091bd9', 'Oradea'),
(3, 'Iordache', 'Iulia', '0782145982', 'iuliaiordache@gmail.com', '96fe7876ade83ac10150a41ead58f8ee', 'Oravita'),
(4, 'Alexandrescu', 'Mihnea', '0795234789', 'mihneaalexandrescu@gmail.com', '095b2626c9b6bad0eb89019ea6091bd9', 'Oradea'),
(5, 'Lazar', 'Giulia', '0785267412', 'lazargiulia@yahoo.com', '095b2626c9b6bad0eb89019ea6091bd9', 'Arad'),
(6, 'Mircescu', 'Alexandra', '0785954268', 'alexandramircescu@yahoo.com', '095b2626c9b6bad0eb89019ea6091bd9', 'Brasov'),
(7, 'Alex', 'Mihai', '0752684210', 'alexmihai@yahoo.com', '095b2626c9b6bad0eb89019ea6091bd9', 'Timisoara'),
(20, 'Mihnea', 'Laur', '0736528741', 'laurmihnea@gmail.com', '095b2626c9b6bad0eb89019ea6091bd9', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `curse`
--
ALTER TABLE `curse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervari`
--
ALTER TABLE `rezervari`
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
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `curse`
--
ALTER TABLE `curse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `rezervari`
--
ALTER TABLE `rezervari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
