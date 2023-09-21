-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 10:53 AM
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
-- Database: `dvdshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `actorid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `pic_actor` varchar(50) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`actorid`, `name`, `lastname`, `pic_actor`, `birthdate`) VALUES
(101, 'มัตซึคาเซะ', ' มาซายะ', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `name`, `lastname`, `address`, `telephone`) VALUES
(101, 'Saran', 'Saeeung', 'Bangkok', '096087912'),
(102, 'Tanawat', 'JANTAWONG', 'Samut Prakan', '091234567'),
(103, 'KAURAKOCH', 'SRIUNPRASERT', 'Bangkok', '091234567'),
(104, 'AJCHAREE', 'PAKAPIKUL', 'Bangkok', '0845678901'),
(105, 'PORNKAMON', 'SUKSAMRAN', 'Pathum Thani', '064567890');

-- --------------------------------------------------------

--
-- Table structure for table `member_rent`
--

CREATE TABLE `member_rent` (
  `rent_id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movie_actors`
--

CREATE TABLE `movie_actors` (
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_actors`
--

INSERT INTO `movie_actors` (`movie_id`, `actor_id`) VALUES
(101, 101);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(4) NOT NULL,
  `descrition` varchar(128) NOT NULL,
  `duration` int(3) NOT NULL,
  `release_date` date NOT NULL,
  `pic_movie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `descrition`, `duration`, `release_date`, `pic_movie`) VALUES
(101, 'กริดแมน ยูนิเวิร์ส', 179, 'กลับมาเพื่อปิดจบและไขปมทุกอย่างให้กระจ่างใส การมาบรรจบกันของสองโลกที่มีไคจูเหมือนกันสุดท้ายแล้วจะเป็นยังไง ไคจูหรือมนุษย์จะเป็นฝ', 118, '2023-09-18', 'thumb_3912.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`actorid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `member_rent`
--
ALTER TABLE `member_rent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `movie_actors`
--
ALTER TABLE `movie_actors`
  ADD KEY `movie_id` (`movie_id`,`actor_id`),
  ADD KEY `ma_actorid_fk` (`actor_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_actors`
--
ALTER TABLE `movie_actors`
  ADD CONSTRAINT `ma_actorid_fk` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`actorid`),
  ADD CONSTRAINT `ma_productid_fk` FOREIGN KEY (`movie_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
