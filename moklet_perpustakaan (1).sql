-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 11:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moklet_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id_anggota` int(3) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `kelas` varchar(5) CHARACTER SET latin1 NOT NULL,
  `telp` varchar(13) CHARACTER SET latin1 NOT NULL,
  `username` varchar(10) CHARACTER SET latin1 NOT NULL,
  `password` varchar(10) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_anggota`
--

INSERT INTO `t_anggota` (`id_anggota`, `nama`, `kelas`, `telp`, `username`, `password`) VALUES
(4, 'Akmal Gibran Baihaqi', 'XR1', '082264134484', 'akmal', 'akmal');

-- --------------------------------------------------------

--
-- Table structure for table `t_buku`
--

CREATE TABLE `t_buku` (
  `id_buku` int(3) NOT NULL,
  `id_kategori` varchar(3) DEFAULT NULL,
  `judul` varchar(255) CHARACTER SET latin1 NOT NULL,
  `penerbit` varchar(50) CHARACTER SET latin1 NOT NULL,
  `pengarang` varchar(50) CHARACTER SET latin1 NOT NULL,
  `ringkasan` text CHARACTER SET latin1 NOT NULL,
  `cover` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_buku`
--

INSERT INTO `t_buku` (`id_buku`, `id_kategori`, `judul`, `penerbit`, `pengarang`, `ringkasan`, `cover`, `stok`) VALUES
(4, 'D01', 'The Batman', 'DC Comics', 'Bob Kane', 'batman and robin', 'batman vs joker', 10),
(6, 'M01', 'Avengers', 'Marvel Comics', 'Stan Lee', 'Iron man and friends', 'The Avengers', 20);

-- --------------------------------------------------------

--
-- Table structure for table `t_petugas`
--

CREATE TABLE `t_petugas` (
  `id_petugas` int(3) NOT NULL,
  `nama_petugas` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(8) CHARACTER SET latin1 NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 NOT NULL,
  `telp` varchar(13) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_petugas`
--

INSERT INTO `t_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`) VALUES
(17, 'Akmal Gibran Baihaqi', 'akmal', 'akmal', '082264134484'),
(19, 'anak kucing', 'kucing', 'kucing', '082264134484');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `t_buku`
--
ALTER TABLE `t_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `t_petugas`
--
ALTER TABLE `t_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_buku`
--
ALTER TABLE `t_buku`
  MODIFY `id_buku` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_petugas`
--
ALTER TABLE `t_petugas`
  MODIFY `id_petugas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
