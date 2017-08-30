-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 11:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_customer`
--

CREATE TABLE `data_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `start_kerja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_customer`
--

INSERT INTO `data_customer` (`id`, `nama`, `tanggal_lahir`, `tempat_lahir`, `no_ktp`, `pekerjaan`, `perusahaan`, `jabatan`, `start_kerja`) VALUES
(2, 'SDS', '2017-05-07', 'ASA', '2322', 'ASA', 'ASA', 'ASA', '2017-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `data_master`
--

CREATE TABLE `data_master` (
  `id` int(11) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `tipe` varchar(30) NOT NULL,
  `luas_tanah` varchar(20) NOT NULL,
  `penghuni` varchar(30) NOT NULL,
  `sales` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `status_perumahan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_master`
--

INSERT INTO `data_master` (`id`, `kode`, `tipe`, `luas_tanah`, `penghuni`, `sales`, `status`, `status_perumahan`) VALUES
(1, '12', '36', '45', 'kukuh', 'boy', 'milik', 'milik'),
(2, '121', '36', '45', 'kukuh', 'boy', 'milik', 'milik');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id` int(20) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id`, `customer_id`, `status`, `nominal`, `bukti`) VALUES
(16, 3, 'milik', '300000000', ''),
(18, 0, 'milik', '200000', 'kirim'),
(19, 1, 'booking', '300000000', 'kirim'),
(20, 2, 'booking', '3', ''),
(21, 1, 'booking', '300000000', '13731572_1649538018706748_1335696379951738214_n7.jpg'),
(22, 1223, 'dp', '300000000', '13731572_1649538018706748_1335696379951738214_n8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_master`
--
ALTER TABLE `data_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_customer`
--
ALTER TABLE `data_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_master`
--
ALTER TABLE `data_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
