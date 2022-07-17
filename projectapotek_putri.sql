-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 08:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectapotek_putri`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `harga_beli` int(50) NOT NULL,
  `harga_jual` int(50) NOT NULL,
  `jumlah_stok` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `satuan`, `harga_beli`, `harga_jual`, `jumlah_stok`) VALUES
(30, 'Paramex', 'tablet', 2100, 3500, 19),
(31, 'Antimo', 'tablet', 4500, 6000, 15),
(32, 'Perban', 'buah', 9000, 10000, 12),
(33, 'Paracetamol', 'botol', 9800, 12000, 14),
(34, 'OBH Combi 75ml', 'botol', 9800, 13000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(100) CHARACTER SET latin1 NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `id_obat`, `nama`, `tanggal`, `jumlah`, `total`) VALUES
(11, 9, 30, 'Paramex', '17/07/2022', 2, 7000),
(12, 9, 30, 'Paramex', '17/07/2022', 2, 7000),
(13, 9, 30, 'Paramex', '17/07/2022', 1, 3500),
(14, 9, 31, 'Antimo', '17/07/2022', 2, 12000),
(15, 9, 34, 'OBH Combi 75ml', '17/07/2022', 3, 39000),
(16, 9, 30, 'Paramex', '17/07/2022', 2, 7000),
(17, 9, 34, 'OBH Combi 75ml', '17/07/2022', 3, 39000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `date_created`) VALUES
(9, 'putri', 'putri@gmail.com', '$2y$10$zgCEpWaPkDWCbnlcYod/NO2.tbymi5Mg0Z2/YrEQym8Co2dP7eii2', 'User', 1658056467),
(11, 'admin', 'admin@gmail.com', '$2y$10$3L2GMeuJ0tuZSIEgyJYvtuyojjrZLxGq29N4eAvAqYA2yJ9HIdg8K', 'Bos', 1658066586);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `detail_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `penjualan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
