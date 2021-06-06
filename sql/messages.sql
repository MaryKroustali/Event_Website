-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 05 Ιουν 2021 στις 02:22:14
-- Έκδοση διακομιστή: 10.4.11-MariaDB
-- Έκδοση PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eventdb`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `messages`
--

CREATE TABLE `messages` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `messages`
--

INSERT INTO `messages` (`name`, `email`, `subject`, `message`) VALUES
('Mary Kroustali', 'mary@mail.com', 'Organizing a health congress', 'Hi, I would like to organize a congress about clinical health. The participants are about a hundread. Please contact me.'),
('elisa hammer', 'elisa.hammer@mail.com', 'Reminder', 'Reminder'),
('George Karagiorgos', 'kara@gmail.com', 'Photoshooting 26/5', 'Photos of 26th of may Congress.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
