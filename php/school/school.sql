-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 28, 2019 at 04:55 PM
-- Server version: 8.0.18
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `grade` float NOT NULL,
  `mobile_number` varchar(25) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `surname`, `father_name`, `grade`, `mobile_number`, `birthday`) VALUES
(1, 'vasilis', 'vittis', 'nikos', 10, '692134234', '2019-11-06'),
(2, 'asdaad1111', 'asdsdasd', 'adsasdasd', 0, '99123912312', '2019-10-30'),
(3, 'jtyjtkjtjyty', 'adadsasd', 'jtyjtyjtyj', 0, 'tyjtjtyj', '2019-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `nameid` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` longtext NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `nameid`, `surname`, `username`, `password`, `email`) VALUES
(2, 'vas', 'vas', 'vas', '$2y$10$3TzlzYh/dfXnMlbRbofURejYH6P9Rap7.QRBnl421R3eMo5wBL9lG', 'vas@gmail.com'),
(3, 'vasd', 'vasd', 'vasdadasd', '$2y$10$R0LGcPvXWA6V2YLcett/GuXlLQxFKz3NriZv9ZG9J/OInYPLzFsvW', 'vas@gmail.com'),
(4, 'asd', 'asd', 'asd', '$2y$10$zTelxcexDD0KkXotgcaore7Msh6XtOvqbXqQpjF5UNaw5qMZlMRpi', 'asd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
