-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simak1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` char(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `Kelas` char(2) NOT NULL,
  `gender` char(15) NOT NULL,
  `fklts` char(15) NOT NULL,
  `nama_jurusan` char(15) CHARACTER SET utf8mb4 NOT NULL,
  `mhs_tglhr` char(2) NOT NULL,
  `mhs_blnlahir` char(2) NOT NULL,
  `mhs_thnlahir` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `username`, `password`, `fname`, `lname`, `address`, `status`, `nohp`, `semester`, `Kelas`, `gender`, `fklts`, `nama_jurusan`, `mhs_tglhr`, `mhs_blnlahir`, `mhs_thnlahir`) VALUES
('2070231058', 'iqb430', 'Expin123', 'iqb', 'anw', '1b@gmail.com', 'Aktif', '081382567859', '3', 'A2', 'Laki - Laki', 'Teknik', 'Informatika', '30', '04', '2002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD UNIQUE KEY `kd_jurusan` (`nama_jurusan`),
  ADD KEY `kd_jurusan_2` (`nama_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
