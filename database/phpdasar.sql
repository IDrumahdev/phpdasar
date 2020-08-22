-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 22, 2020 at 07:05 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'heri', '$2y$10$h5uR2HvOf.9IFGfq9U6ufeh0Aaff/whzP4zQn5DYArT1ABFnke25C'),
(2, 'admin', '$2y$10$KparOc0xEFV6Mu76q8NEDeP.jLpm41KDdCkEH2oAa6wOSjd7u4lqC');

-- --------------------------------------------------------

--
-- Table structure for table `wakif`
--

DROP TABLE IF EXISTS `wakif`;
CREATE TABLE IF NOT EXISTS `wakif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idwakif` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wakif`
--

INSERT INTO `wakif` (`id`, `idwakif`, `nama`, `email`, `nohp`, `gambar`) VALUES
(1, '11010091', 'Abu Ahsan', 'ibnudirsan@gmail.com', '085310131xxx', '5f414ccf9e855.jpg'),
(2, '11010090', 'Ummu Ahsan', 'ummuahsan@gmail.com', '08176078xxx', '5f414c7e42858.jpg'),
(3, '11010092', 'Ahsan', 'ahsan@gmail.com', '085310131xxx', '5f414ce55397d.png'),
(4, '11010093', 'Aisyah', 'ahsan@gmail.com', '08176078xxx', '5f414cf90dc33.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
