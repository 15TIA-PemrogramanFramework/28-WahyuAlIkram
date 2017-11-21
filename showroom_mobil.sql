-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 05:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `nama_dealer` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp_dealer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`nama_dealer`, `username`, `password`, `jenis_kelamin`, `alamat`, `nohp_dealer`) VALUES
('Paja Gipari', 'Gipari', '12345', 'Pria', 'Jl. Sukajadi ', 21474836),
('Reza Tri Novrianzah', 'Reza', '12345', 'Pria', 'Jl. Merdeka', 8124312),
('Wahyu Al Ikram', 'wahyu', '12345', 'Pria', 'Jl. Rowo Sari ', 63624620);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `kode_mobil` int(10) NOT NULL,
  `tipe_mobil` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`kode_mobil`, `tipe_mobil`, `warna`, `harga`) VALUES
(1, 'Avanza', 'Kuning', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `mobil_history`
--

CREATE TABLE `mobil_history` (
  `kode_mobil` int(11) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil_history`
--

INSERT INTO `mobil_history` (`kode_mobil`, `tipe_mobil`, `warna`, `harga`) VALUES
(1, 'Avanza', 'Kuning', 50000),
(2, 'Avanza', 'Hitam', 10000),
(3, 'Avanza', 'Merah', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pemasukkan`
--

CREATE TABLE `pemasukkan` (
  `kode_pemasukkan` int(11) NOT NULL,
  `tanggal_pemasukkan` varchar(255) NOT NULL,
  `kode_supplier` int(11) NOT NULL,
  `kode_mobil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukkan`
--

INSERT INTO `pemasukkan` (`kode_pemasukkan`, `tanggal_pemasukkan`, `kode_supplier`, `kode_mobil`) VALUES
(1, '21 November 2017', 1, 1),
(2, '21 November 2017', 1, 2),
(3, '21 November 2017', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `kode_pembeli` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp_pembeli` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`kode_pembeli`, `username`, `password`, `nama_pembeli`, `jenis_kelamin`, `alamat`, `nohp_pembeli`) VALUES
(1, 'Ade ', '12345', 'Ade Sukma', 'Pria', 'Panam ', 143243),
(2, 'oliver', '12345', 'Oliver Sykes', 'Pria', 'Jl. Horizon', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `kode_pembelian` int(11) NOT NULL,
  `tanggal_pembelian` varchar(255) NOT NULL,
  `kode_pembeli` int(11) NOT NULL,
  `kode_mobil` int(11) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`kode_pembelian`, `tanggal_pembelian`, `kode_pembeli`, `kode_mobil`, `tipe_mobil`) VALUES
(1, '21 November 2017', 1, 2, ''),
(2, '21 November 2017', 1, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp_supplier` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `username`, `password`, `nama_supplier`, `jenis_kelamin`, `alamat`, `nohp_supplier`) VALUES
(1, 'Ryan', '12345', 'Ryan Anjasmara', 'Pria', 'Jl. Pokaf ', 9999111),
(2, 'Ani', '12345', 'Widya Octaviana', 'Wanita', 'Jl. Patimura ', 38928246),
(3, 'Alif', '12345', 'Alif Satria', 'Pria', 'Jl. Sudirman ', 2147483647),
(4, 'Azizah ', '12345', 'Azizah Putri', 'Pria', 'Jl, Cendana ', 2147483647),
(5, 'Matt', '12345', 'Matt Shadow', 'Pria', 'Jl. Pokaff', 24525242);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `mobil_history`
--
ALTER TABLE `mobil_history`
  ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `pemasukkan`
--
ALTER TABLE `pemasukkan`
  ADD PRIMARY KEY (`kode_pemasukkan`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`kode_pembeli`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kode_pembelian`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `kode_mobil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobil_history`
--
ALTER TABLE `mobil_history`
  MODIFY `kode_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemasukkan`
--
ALTER TABLE `pemasukkan`
  MODIFY `kode_pemasukkan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `kode_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `kode_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kode_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
