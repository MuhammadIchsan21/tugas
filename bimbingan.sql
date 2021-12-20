-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2021 at 01:18 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimbingan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `iddosen` int(11) NOT NULL,
  `namadosen` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `tempatlahir` varchar(45) NOT NULL,
  `programstudi` varchar(45) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `alamatrumah` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`iddosen`, `namadosen`, `tanggallahir`, `tempatlahir`, `programstudi`, `fakultas`, `alamatrumah`) VALUES
(1, 'kevin', '1990-12-01', 'Balikpapan', 'informatika', 'Ilmu Komputer', 'Kampung baru ujung no 21'),
(2, 'denny', '1990-12-07', 'Samboja', 'informatika', 'Ilmu Komputer', 'Kampung baru no 3'),
(3, 'lewan', '2011-12-06', 'Balikpapan', 'akuntansi', 'ekonomi', 'kampung baru no 21'),
(4, 'rivaldo', '1998-12-01', 'barcelona', 'informatika', 'komputer', 'samboja no 20'),
(5, 'zidane', '1998-01-01', 'Paris', 'sastra inggris', 'sastra', 'samboja'),
(6, 'higuita', '1991-02-01', 'balikpapan', 'informatika', 'komputer', 'kutai kartanegara no 90');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `programstudi` varchar(45) NOT NULL,
  `tempatlahir` varchar(45) NOT NULL,
  `tanggalahir` varchar(50) NOT NULL,
  `jeniskelamin` varchar(2) NOT NULL,
  `agama` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `provinsi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `programstudi`, `tempatlahir`, `tanggalahir`, `jeniskelamin`, `agama`, `alamat`, `kota`, `provinsi`) VALUES
('1811178', 'Akmal sabar', 'Informatika', 'balikpapan', '1999-02-14', 'L', 'islam', 'sepinggan', 'Balikpapan', 'Kalimantan Timur');

-- --------------------------------------------------------

--
-- Table structure for table `membimbing`
--

CREATE TABLE `membimbing` (
  `nim` varchar(10) NOT NULL,
  `iddosen` int(11) NOT NULL,
  `uraianbimbingan` varchar(500) NOT NULL,
  `jenisbimbingan` varchar(100) NOT NULL,
  `tanggalbimbingan` date NOT NULL,
  `statusbimbingan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membimbing`
--

INSERT INTO `membimbing` (`nim`, `iddosen`, `uraianbimbingan`, `jenisbimbingan`, `tanggalbimbingan`, `statusbimbingan`) VALUES
('1811178', 1, 'Bimbingan', 'Bimbingan kp', '2021-12-20', 'belum ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`iddosen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `membimbing`
--
ALTER TABLE `membimbing`
  ADD UNIQUE KEY `nim` (`nim`,`iddosen`),
  ADD KEY `iddosen` (`iddosen`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membimbing`
--
ALTER TABLE `membimbing`
  ADD CONSTRAINT `membimbing_ibfk_1` FOREIGN KEY (`iddosen`) REFERENCES `dosen` (`iddosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membimbing_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
