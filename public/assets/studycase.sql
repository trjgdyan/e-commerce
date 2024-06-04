-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 02:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studycase`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `namaBarang` varchar(40) DEFAULT NULL,
  `harga` int(40) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaBarang`, `harga`, `deskripsi`, `foto`) VALUES
(6, 'rawon', 20000, 'makanan khas jawa', '769-rawon.png'),
(7, 'ayam bakar', 25000, 'nasi ayam bakar', '636-ayambakar.png'),
(8, 'soto', 15000, 'nasi soto hangat', '573-soto.png'),
(9, 'Seafod ', 50000, 'Aneka seafod segar', '712-seafood.png'),
(10, 'Iciban Sushi', 60000, 'Aneka makana khas jepang', '913-sushi.png'),
(11, 'Es campur', 10000, 'Es campur segar', '228-dessert.png'),
(12, 'Sago Manggo', 25000, 'Es sago manggo segar', '826-minuman.png'),
(18, 'ayam geprek original', 20000, 'ayam geprek original\r\n', '346-ayamGeprek.jpg'),
(19, 'Nasi uduk Sederhana', 15000, 'Nasi uduk sederhana', '872-nasi uduk sederhana.jpg'),
(20, 'es kul kul', 1000, 'es mantap', '80-dessert.png'),
(25, 'kurama goreng', 10000000, 'kurama', '128-092d0d84ed4f3d3417e2cf57e375e551.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tcart`
--

CREATE TABLE `tcart` (
  `id` int(10) NOT NULL,
  `namaBarang` varchar(40) NOT NULL,
  `harga` int(20) NOT NULL,
  `deskripsi` varchar(40) NOT NULL,
  `quantity` int(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcart`
--

INSERT INTO `tcart` (`id`, `namaBarang`, `harga`, `deskripsi`, `quantity`, `foto`) VALUES
(9, 'soto', 15000, 'nasi soto hangat', 4, '573-soto.png'),
(14, 'rawon', 20000, 'makanan khas jawa', 3, '769-rawon.png');

-- --------------------------------------------------------

--
-- Table structure for table `tpesanan`
--

CREATE TABLE `tpesanan` (
  `id` int(11) NOT NULL,
  `namaBarang` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `harga` int(40) NOT NULL,
  `note` varchar(80) NOT NULL,
  `quantity` int(50) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpesanan`
--

INSERT INTO `tpesanan` (`id`, `namaBarang`, `username`, `harga`, `note`, `quantity`, `tanggal`) VALUES
(16, 'ikan', 'bobby', 50000, 'nnnn', 2, '2024-04-08 21:05:01'),
(17, 'ikan', 'j', 50000, 'hhhhh', 2, '2024-04-08 21:08:28'),
(18, 'ayam bakar', 'muezza', 25000, 'banyakin nasinya', 2, '2024-04-09 00:21:23'),
(19, 'soto', 'uu', 15000, 'soto air', 3, '2024-04-09 01:00:17'),
(20, 'rawon', 'marlin', 20000, 'banyakkin nasinya', 3, '2024-04-09 02:07:58'),
(21, 'ayam bakar', 'marlin', 25000, 'laper\r\n', 10, '2024-04-09 02:10:51'),
(22, 'Es campur', '', 10000, '', 2, '2024-04-09 04:21:35'),
(23, 'ayam bakar', 'bobby', 25000, 'pake sambel', 5, '2024-04-09 06:02:18'),
(24, 'ayam bakar', 'bobby', 25000, 'uuuu', 2, '2024-04-09 06:17:21'),
(25, 'soto', 'bobby', 15000, 'jjjj', 6, '2024-04-09 06:18:14'),
(26, 'rawon', 'ina', 20000, 'jjj', 6, '2024-04-09 06:18:56'),
(27, 'ayam bakar', 'po', 25000, 'jjjj', 2, '2024-04-09 06:19:45'),
(28, 'ayam bakar', 'yuni', 25000, 'uiui', 3, '2024-04-09 06:48:38'),
(29, 'rawon', 'admin', 20000, 'uuuu', 6, '2024-04-09 06:50:40'),
(30, 'soto', 'yuni', 15000, 'hfhff', 6, '2024-04-09 06:57:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `namaBarang` (`namaBarang`);

--
-- Indexes for table `tcart`
--
ALTER TABLE `tcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpesanan`
--
ALTER TABLE `tpesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tcart`
--
ALTER TABLE `tcart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tpesanan`
--
ALTER TABLE `tpesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
