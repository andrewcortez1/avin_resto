-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 01:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('andrew', '123'),
('abc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `no_meja` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`no_meja`, `status`) VALUES
(1, 'Ready'),
(2, 'Used'),
(3, 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `no_menu` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`no_menu`, `nama`, `harga`, `link`) VALUES
(1, 'Ayam Goreng', 10000, 'https://tinyurl.com/54axpp7k'),
(2, 'Nasi Goreng', 12000, 'https://tinyurl.com/yf23nd78'),
(3, 'Nasi Uduk', 12000, 'https://tinyurl.com/thbv4jzy'),
(4, 'Nasi Empal', 15000, 'https://tinyurl.com/76eft9zk'),
(5, 'Nasi Ayam Geprek', 18000, 'https://tinyurl.com/uh7c87w'),
(6, 'Steak Mantab', 50000, 'https://tinyurl.com/fm26k489'),
(7, 'Burger', 25000, 'https://tinyurl.com/45ewndy5'),
(8, 'Indomie Kuah', 10000, 'https://tinyurl.com/423rya66'),
(9, 'Indomie Goreng', 10000, 'https://tinyurl.com/2semtwa2'),
(10, 'Kusuka', 12000, 'https://tinyurl.com/2vyt7hzc');

-- --------------------------------------------------------

--
-- Table structure for table `menu_minuman`
--

CREATE TABLE `menu_minuman` (
  `no_minuman` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_minuman`
--

INSERT INTO `menu_minuman` (`no_minuman`, `nama`, `harga`, `link`) VALUES
(1, 'Smirnoff', 25000, 'https://tinyurl.com/xhuvyajm'),
(2, 'Iceland Vodka', 26000, 'https://tinyurl.com/asu2chek'),
(3, 'Mohito', 21000, 'https://tinyurl.com/3pdc7w48'),
(4, 'Es Teh', 10000, 'https://tinyurl.com/8k9eehx5'),
(5, 'Es Jeruk', 15000, 'https://tinyurl.com/rpk353hm'),
(6, 'Jus Alpukat', 20000, 'https://tinyurl.com/28czk25u'),
(7, 'Jus Stoberi', 20000, 'https://tinyurl.com/znbbt95c'),
(8, 'Air Mineral', 5000, 'https://tinyurl.com/spe4zxzp');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_makanan`
--

CREATE TABLE `pesanan_makanan` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_menu` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_makanan`
--

INSERT INTO `pesanan_makanan` (`no`, `nama`, `no_menu`, `qty`, `tipe`, `status`) VALUES
(1, 'asdasd', 1, 1, 'Dine In', 'Belum Bayar'),
(2, 'asdasd', 1, 1, 'Dine In', 'Belum Bayar'),
(3, 'asdasd', 1, 1, 'Dine In', 'Belum Bayar'),
(4, 'asdasd', 1, 1, 'Dine In', 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_minuman`
--

CREATE TABLE `pesanan_minuman` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_minum` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_minuman`
--

INSERT INTO `pesanan_minuman` (`no`, `nama`, `no_minum`, `qty`, `tipe`, `status`) VALUES
(0, 'Andrew', 4, 2, 'Dine In', 'Belum Bayar'),
(1, 'Andrew', 4, 2, 'Dine In', 'Belum Bayar'),
(2, 'Andrew', 4, 2, 'Dine In', 'Belum Bayar'),
(3, 'Andrew', 4, 2, 'Dine In', 'Belum Bayar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`no_meja`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`no_menu`),
  ADD UNIQUE KEY `no_menu` (`no_menu`);

--
-- Indexes for table `menu_minuman`
--
ALTER TABLE `menu_minuman`
  ADD PRIMARY KEY (`no_minuman`),
  ADD UNIQUE KEY `no_minuman` (`no_minuman`),
  ADD UNIQUE KEY `no_minuman_2` (`no_minuman`);

--
-- Indexes for table `pesanan_makanan`
--
ALTER TABLE `pesanan_makanan`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_menu` (`no_menu`);

--
-- Indexes for table `pesanan_minuman`
--
ALTER TABLE `pesanan_minuman`
  ADD PRIMARY KEY (`no`),
  ADD KEY `no_minum` (`no_minum`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan_makanan`
--
ALTER TABLE `pesanan_makanan`
  ADD CONSTRAINT `pesanan_makanan_ibfk_1` FOREIGN KEY (`no_menu`) REFERENCES `menu` (`no_menu`);

--
-- Constraints for table `pesanan_minuman`
--
ALTER TABLE `pesanan_minuman`
  ADD CONSTRAINT `pesanan_minuman_ibfk_1` FOREIGN KEY (`no_minum`) REFERENCES `menu_minuman` (`no_minuman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
