-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 06:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpbo_tp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang_divisi`
--

CREATE TABLE `tb_bidang_divisi` (
  `id_bidang` int(10) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `id_divisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bidang_divisi`
--

INSERT INTO `tb_bidang_divisi` (`id_bidang`, `jabatan`, `id_divisi`) VALUES
(1, 'Kapten', 2),
(2, 'Wakil Kapten', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id_divisi` int(10) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id_divisi`, `nama_divisi`) VALUES
(2, 'Elite Operator'),
(5, 'Logistik'),
(6, 'Reserve Operator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengurus`
--

CREATE TABLE `tb_pengurus` (
  `nim` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `id_bidang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengurus`
--

INSERT INTO `tb_pengurus` (`nim`, `nama`, `semester`, `id_bidang`) VALUES
(2007874, 'VieR', '4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bidang_divisi`
--
ALTER TABLE `tb_bidang_divisi`
  ADD PRIMARY KEY (`id_bidang`),
  ADD KEY `bidang_divisi_ibfk_1` (`id_divisi`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `tb_pengurus`
--
ALTER TABLE `tb_pengurus`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bidang_divisi`
--
ALTER TABLE `tb_bidang_divisi`
  MODIFY `id_bidang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  MODIFY `id_divisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bidang_divisi`
--
ALTER TABLE `tb_bidang_divisi`
  ADD CONSTRAINT `bidang_divisi_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `tb_divisi` (`id_divisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
