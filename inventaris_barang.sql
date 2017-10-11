-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 04:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `dana_barang`
--

CREATE TABLE `dana_barang` (
  `dana_barang_id` int(11) NOT NULL,
  `dana_barang_tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana_barang`
--

INSERT INTO `dana_barang` (`dana_barang_id`, `dana_barang_tipe`) VALUES
(1, 'APBN'),
(2, 'APBD'),
(3, 'Biaya Sendiri'),
(4, 'Dll');

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `kode` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `tahun_pengadaan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `posisi_barang` varchar(100) NOT NULL,
  `keadaan` enum('baik','sedang','rusak') NOT NULL,
  `jenis_barang_id` int(11) NOT NULL,
  `dana_barang_id` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`kode`, `nama_barang`, `merek`, `tahun_pengadaan`, `jumlah`, `posisi_barang`, `keadaan`, `jenis_barang_id`, `dana_barang_id`, `foto`) VALUES
(1, 'Smartphone', 'Apple', '2006-09-08', 9, 'Dikantor', 'rusak', 2, 1, ''),
(7, 'Laptop', 'Acer', '2008-08-09', 7, 'Dikantor', 'baik', 2, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `jenis_barang_id` int(11) NOT NULL,
  `jenis_barang_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`jenis_barang_id`, `jenis_barang_nama`) VALUES
(2, 'Mebeulair'),
(3, 'Alat Non Elektronik'),
(4, 'Kendaraan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_level` enum('super admin','admin','tamu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user', '7815696ecbf1c96e6894b779456d330e', 'tamu'),
(3, 'ranto', 'b5af88fb7a6a7c8d39733ef5125ea221', 'super admin'),
(4, 'satu', '27946274a201346f0322e3861909b5ff', 'super admin'),
(5, 'satu', '322e3861909b5ff27946274a201346f0', 'super admin'),
(8, 'admin', 'f55178cd216a36be99426e6d49e26cdd', 'super admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dana_barang`
--
ALTER TABLE `dana_barang`
  ADD PRIMARY KEY (`dana_barang_id`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`jenis_barang_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dana_barang`
--
ALTER TABLE `dana_barang`
  MODIFY `dana_barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `jenis_barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
