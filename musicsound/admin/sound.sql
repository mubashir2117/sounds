-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 07:07 AM
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
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `artisttbl`
--

CREATE TABLE `artisttbl` (
  `ArtistId` int(11) NOT NULL,
  `ArtistName` varchar(50) NOT NULL,
  `ArtistImg` varchar(255) NOT NULL,
  `ArtistGener` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artisttbl`
--

INSERT INTO `artisttbl` (`ArtistId`, `ArtistName`, `ArtistImg`, `ArtistGener`) VALUES
(1, 'Atif Aslam', 'images/13a5f8787e819d247abb25cf36651d8f.jpg', 6),
(2, 'Aima Baig', 'images/2155225-aima-1581489971.jpeg', 1),
(3, 'Arijit Singh', 'images/Arijit Singh.jpg', 4),
(4, 'Ali Zafar', 'images/alizafar.jpg', 3),
(5, 'Asim Azhar', 'images/asim.jpg', 3),
(6, 'Talha Anjum', 'images/talha.jpg', 5),
(7, 'Bilal saeed', 'images/bilal3.jfif', 1),
(8, 'Qurat-ul-Ain Baloch', 'images/carousal3.webp', 4),
(9, 'Rahat fateh ali khan', 'images/rahat.jpg', 7),
(10, 'Shae gill', 'images/shaegill.jpg', 1),
(11, 'Momina Mustehsan', 'images/momina1.jpg', 4),
(12, 'Neha Kakar', 'images/neha.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `genretbl`
--

CREATE TABLE `genretbl` (
  `GenreId` int(11) NOT NULL,
  `GenreName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genretbl`
--

INSERT INTO `genretbl` (`GenreId`, `GenreName`) VALUES
(1, 'Pop Music'),
(3, 'Hip Hop'),
(4, 'Punjabi'),
(5, 'Rap Music'),
(6, 'Love'),
(7, 'House music');

-- --------------------------------------------------------

--
-- Table structure for table `songtbl`
--

CREATE TABLE `songtbl` (
  `audio_id` int(11) NOT NULL,
  `audio_name` varchar(55) NOT NULL,
  `a_artist` int(11) DEFAULT NULL,
  `a_genre` int(11) DEFAULT NULL,
  `audio_poster` varchar(255) NOT NULL,
  `audio_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `songtbl`
--

INSERT INTO `songtbl` (`audio_id`, `audio_name`, `a_artist`, `a_genre`, `audio_poster`, `audio_file`) VALUES
(15, 'Pehli Dafa', 1, 6, 'images/thumb-pehli-dafa-atif-aslam-mp3-song111-300.jpg', 'audio/Pehli-Dafa---Atif-Aslam(pagalworld.co.uk).mp3'),
(16, 'Dil Lagi', 9, 7, 'images/Yaariyan.jpg', 'audio/Ashleel Tuesdays And Fridays 320 Kbps.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `rrole` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `rrole`, `user_name`, `user_password`, `user_image`) VALUES
(1, 'admin', 'admin', 'admin123', ''),
(2, 'admin', 'ali', '123', ''),
(4, 'admin', 'moheeb', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `v_artist` int(11) DEFAULT NULL,
  `v_genre` int(11) DEFAULT NULL,
  `video_poster` varchar(255) NOT NULL,
  `video_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `video_name`, `v_artist`, `v_genre`, `video_poster`, `video_file`) VALUES
(2, 'Do Gallan', 12, 6, 'images/', 'video/DO GALLAN - Neha Kakkar & Rohanpreet Singh _ Garry Sandhu _ Anshul Garg _ Punjabi Song 2021.mp4'),
(4, 'Rafta Rafta', 1, 6, 'images/', 'video/Rafta Rafta - Official Music Video _ Raj Ranjodh _ Atif Aslam Ft. Sajal Ali _ Tarish Music.mp4'),
(6, 'Washmally', 2, 4, 'images/Washmallay.jpg', 'video/Washmallay _ Sahir Ali Bagga _ Aima Baig _ Official Music Video _ 4K Video.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artisttbl`
--
ALTER TABLE `artisttbl`
  ADD PRIMARY KEY (`ArtistId`),
  ADD KEY `ArtistGener` (`ArtistGener`);

--
-- Indexes for table `genretbl`
--
ALTER TABLE `genretbl`
  ADD PRIMARY KEY (`GenreId`);

--
-- Indexes for table `songtbl`
--
ALTER TABLE `songtbl`
  ADD PRIMARY KEY (`audio_id`),
  ADD KEY `a_genre` (`a_genre`),
  ADD KEY `a_artist` (`a_artist`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `v_artist` (`v_artist`),
  ADD KEY `v_genre` (`v_genre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artisttbl`
--
ALTER TABLE `artisttbl`
  MODIFY `ArtistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `genretbl`
--
ALTER TABLE `genretbl`
  MODIFY `GenreId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `songtbl`
--
ALTER TABLE `songtbl`
  MODIFY `audio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artisttbl`
--
ALTER TABLE `artisttbl`
  ADD CONSTRAINT `artisttbl_ibfk_1` FOREIGN KEY (`ArtistGener`) REFERENCES `genretbl` (`GenreId`);

--
-- Constraints for table `songtbl`
--
ALTER TABLE `songtbl`
  ADD CONSTRAINT `songtbl_ibfk_1` FOREIGN KEY (`a_genre`) REFERENCES `genretbl` (`GenreId`),
  ADD CONSTRAINT `songtbl_ibfk_2` FOREIGN KEY (`a_artist`) REFERENCES `artisttbl` (`ArtistId`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`v_artist`) REFERENCES `artisttbl` (`ArtistId`),
  ADD CONSTRAINT `video_ibfk_2` FOREIGN KEY (`v_genre`) REFERENCES `artisttbl` (`ArtistId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
