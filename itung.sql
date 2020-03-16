-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mar 2020 pada 08.03
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE IF NOT EXISTS `hitung` (
`id` int(10) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hitung`
--

INSERT INTO `hitung` (`id`, `a`, `b`, `c`, `ket`) VALUES
(1, 2, 2, 4, ''),
(2, 2, 4, 6, ''),
(3, 4, 6, 10, ''),
(4, 4, 1, 5, ''),
(5, 4, 12, 16, ''),
(6, 4, 7, 11, 'B'),
(7, 4, 5, 9, 'A'),
(8, 5, 9, 14, 'B'),
(9, 9, 14, 23, 'C'),
(10, 14, 23, 37, 'D'),
(11, 23, 37, 60, 'D'),
(12, 37, 60, 97, 'D'),
(13, 60, 97, 157, 'D'),
(14, 97, 157, 254, 'D'),
(15, 157, 254, 411, 'D'),
(16, 254, 411, 665, 'D'),
(17, 7, 1, 8, 'A'),
(18, 4, 1, 5, 'A'),
(19, 1, 3, 4, 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitungruntun`
--

CREATE TABLE IF NOT EXISTS `hitungruntun` (
`id` int(5) NOT NULL,
  `a` double NOT NULL,
  `b` double NOT NULL,
  `c` double NOT NULL,
  `ket` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hitungruntun`
--

INSERT INTO `hitungruntun` (`id`, `a`, `b`, `c`, `ket`) VALUES
(91, 5, 6, 11, 'B'),
(92, 6, 11, 17, 'B'),
(93, 11, 17, 28, 'C'),
(94, 17, 28, 45, 'D'),
(95, 28, 45, 73, 'D'),
(96, 45, 73, 118, 'D'),
(97, 73, 118, 191, 'D'),
(98, 118, 191, 309, 'D'),
(99, 191, 309, 500, 'D'),
(100, 309, 500, 809, 'D'),
(101, 2, 4, 6, 'A'),
(102, 4, 6, 10, 'A'),
(103, 6, 10, 16, 'B'),
(104, 10, 16, 26, 'C'),
(105, 16, 26, 42, 'D'),
(106, 26, 42, 68, 'D'),
(107, 42, 68, 110, 'D'),
(108, 68, 110, 178, 'D'),
(109, 110, 178, 288, 'D'),
(110, 178, 288, 466, 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hitungruntun`
--
ALTER TABLE `hitungruntun`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hitungruntun`
--
ALTER TABLE `hitungruntun`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
